<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Albums Model
 *
 * This is model for all Albums related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Albums
 * @category	Model
 * @author	Albert Virgin V A
*/
class Albums_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_albums($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $result =   $this->db->get("albums")->result_array();
        
        return $result;
    }
    
    public function get_album($album_id)
    {
        $result =   $this->db
                ->where(array("album_id" => $album_id))->get("albums")->row();
        
        return $result;
    }    
    
    public function add_album()
    {
        $this->form_validation
                ->set_rules('title', 'Title', 'required')
                ->set_rules('short_description', 'Short Description', 'required|xss_clean')
                ->set_rules('description', 'Details', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "short_description" =>  $this->input->post("short_description"),
            "description" =>  $this->input->post("description"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("albums", $data) )
        {
            $this->status_msg  =   "Adding album failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        
        $this->album_id  =   $this->db->insert_id();
        
        if( !empty($_FILES["preview_image"]["name"]) )
        {
            if( !self::_upload_preview_image() ) 
            {
                $this->status_msg  .=   "Uploading files failed. Try again";
                $this->db->trans_rollback();
                return false;                   
            }
        }
                
        $this->db->trans_commit();        
        
        $this->status_msg   =   "Album added successfully";
        return true;
    }
    
    private function _upload_preview_image()
    {
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT']."/uploads/albums/".$this->album_id."/";
        if( !is_dir($config['upload_path']) ) 
        {
            mkdir($config['upload_path']);
            chmod($config['upload_path'], 0777);
        } 

        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '10000';
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload("preview_image"))
        {
            $this->status_msg   .=   $this->upload->display_errors();
            return false;
        }
        
        $data   =   $this->upload->data();
        
        $this->db
                ->where("album_id", $this->album_id)
                ->update("albums", array("preview_image" => $data["file_name"], "image_details" => json_encode($data)));        
        
        return true;
    }
    
    private function _upload_documents()
    {
        $document_types =   $this->input->post("file_type");
        
        foreach( $_FILES["documents"]["name"] AS $key => $value )
        {
            if( !empty($_FILES["documents"]["name"][$key]) )
            {
                $upload_folder  =   $_SERVER['DOCUMENT_ROOT']."/uploads/news/".$this->news_id."/";
        
                if( !is_dir($upload_folder) ) 
                {
                    mkdir($upload_folder);
                    chmod($upload_folder, 0777);
                } 
                
                $config['upload_path']      = $upload_folder;
                $config['allowed_types']    = '*';
                $config['max_size']         = '300000';
                $config['encrypt_name']     = TRUE;
                $config['remove_spaces']    = TRUE;
                $config['overwrite']        = TRUE;
                
                $this->load->library('upload', $config);
                

                $_FILES['images[]']['name']     = $_FILES["documents"]["name"][$key];
                $_FILES['images[]']['type']     = $_FILES["documents"]["type"][$key];
                $_FILES['images[]']['tmp_name'] = $_FILES["documents"]["tmp_name"][$key];
                $_FILES['images[]']['error']    = $_FILES["documents"]["error"][$key];
                $_FILES['images[]']['size']     = $_FILES["documents"]["size"][$key];
               
                if( !$this->upload->do_upload("images[]") )
                {
                    $this->status_msg = $this->upload->display_errors();
                    return false;
                }
                
                $data   =   $this->upload->data();              

                $pptxfiles = array(
                    'news_id'    =>  $this->news_id,
                    'file_type' =>  $document_types[$key],
                    'file_name'   =>  $data["file_name"],
                    'file_details' =>  json_encode($data), 
                    'created_ts'    => date('Y-m-d H:i:s',now())
                );

                if( !$this->db->insert("news_files", $pptxfiles) )
                {
                    $this->status_msg = $this->upload->display_errors();
                    return false;
                }
            }
        }
        
        return true;       
        
    }
    
    public function update_album()
    {
        $this->form_validation
                ->set_rules('album_id', 'Album ID', 'required')
                ->set_rules('title', 'Title', 'required')
                ->set_rules('short_description', 'Short Description', 'required|xss_clean')
                ->set_rules('description', 'Details', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("album_id !=" => $this->input->post("album_id"), "title" => $this->input->post("title")))
                ->get("albums")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Album already available";
            return false;
        }
        
        $this->album_id  =   $this->input->post("album_id");
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "short_description" =>  $this->input->post("short_description"),
            "description" =>  $this->input->post("description"),
            "status"         =>  $this->input->post("status"),           
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
       
        if( !$this->db->where("album_id", $this->album_id)->update("albums", $data) )
        {
            $this->status_msg  =   "Updating album failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        
        if( !empty($_FILES["preview_image"]["name"]) )
        {
            if( !self::_upload_preview_image() ) 
            {
                $this->status_msg  .=   "Uploading files failed. Try again";
                $this->db->trans_rollback();
                return false;                   
            }
        }
        
        $this->db->trans_commit();    
        
        $this->status_msg   =   "Album upated successfully";
        return true;
    }
    
    public function delete_album( $album_id )
    {          
        $check  =   $this->db
                ->where("album_id", $album_id)
                ->get("photos")
                ->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg   =   "Pictures exists in this album.";
            return false;
        }
        
        $this->db
                ->where("album_id", $album_id);
        
        if( !$this->db->delete("albums") ) 
        {
            $this->status_msg   =   "Deleting album failed.";
            return false;
        }          
        
        $news_folder    =   $_SERVER["DOCUMENT_ROOT"]."/uploads/albums/".$album_id."/";
        rmdir($news_folder);
        
        $this->status_msg   =   "Album deleted successfully.";
        return true;
    }
    
    public function delete_news_file($news_file_id)
    {
        $filedetail =   $this->db
                ->where("news_file_id", $news_file_id)
                ->get("news_files")
                ->row();
        
        $file_data  =   json_decode($filedetail->file_details);
        
        /*Delete entry from database*/
        if( !$this->db->where("news_file_id", $news_file_id)->delete("news_files") )
        {
            $this->status_msg   =   "Deleting file failed. Try again later";
            return false;
        }
        /*Delete entry from database*/            
        unlink($file_data->full_path);
        
        $this->status_msg   =   "File deleted successfully.";
        return true;
    }
    
    public function get_albumpictures($album_id)
    {
        $this->form_validation
                ->set_rules("album_id", "Album ID", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $result =   $this->db
                ->where("album_id", $album_id)
                ->get("photos")
                ->result_array();        
        
        return $result;
    }    
    
    public function add_albumpicture()
    {
        $this->form_validation
                ->set_rules("album_id", "Album ID", "required")
                ->set_rules('title', 'Title', 'required')
                ->set_rules('short_description', 'Short Description', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        if( empty($_FILES["image"]["name"]) )
        {
            $this->status_msg   =   "Please select an image";
            return false;
        }
        
        $this->album_id =   $this->input->post("album_id");
        
        $data   =   array(
            "album_id"  =>  $this->input->post("album_id"),
            "title"     =>  $this->input->post("title"),
            "description" =>  $this->input->post("short_description"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())  
        );
        $this->db->trans_begin();
        
        if( !$this->db->insert("photos", $data) )
        {
            $this->status_msg   =   "Uploading picture failed. Try again.";
            $this->db->trans_rollback();
            return false;
        }
        
        $this->photo_id =   $this->db->insert_id();
        
        if( !self::_upload_album_picture() )
        {
            return false;
        }
        
        $this->db->trans_commit();
        
        $this->status_msg   =   "Picture added successfully";
        return true;
    }
    
    private function _upload_album_picture()
    {
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT']."/uploads/albums/".$this->album_id."/photos/";
        if( !is_dir($config['upload_path']) ) 
        {
            mkdir($config['upload_path']);
            chmod($config['upload_path'], 0777);
        } 

        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '10000';
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload("image"))
        {
            $this->status_msg   .=   $this->upload->display_errors();
            return false;
        }
        
        $data   =   $this->upload->data();
        
        $this->db
                ->where("photo_id", $this->photo_id)
                ->update("photos", array("file_name" => $data["file_name"], "file_details" => json_encode($data)));        
        
        return true;
    }
    
    public function get_albumpicture($photo_id)
    {
        $result =   $this->db
                ->where(array("photo_id" => $photo_id))->get("photos")->row();
        
        return $result;
    }
    
    public function update_albumpicture()
    {
        $this->form_validation
                ->set_rules("photo_id", "Photo ID", "required")
                ->set_rules("album_id", "Album ID", "required")
                ->set_rules('title', 'Title', 'required')
                ->set_rules('short_description', 'Short Description', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }        
        
        $this->photo_id =   $this->input->post("photo_id");
        $this->album_id =   $this->input->post("album_id");
        
        $data   =   array(
            "album_id"  =>  $this->input->post("album_id"),
            "title"     =>  $this->input->post("title"),
            "description" =>  $this->input->post("short_description"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())  
        );
        $this->db->trans_begin();
        
        if( !$this->db->where("photo_id", $this->photo_id)->update("photos", $data) )
        {
            $this->status_msg   =   "Updating picture failed. Try again.";
            $this->db->trans_rollback();
            return false;
        }
        
        if( !empty($_FILES["image"]["name"]) )
        {
            if( !self::_upload_album_picture() )
            {
                return false;
            }
        }
        
        $this->db->trans_commit();
        
        $this->status_msg   =   "Picture update successfully";
        return true;
    }
    
    public function delete_albumpicture( $photo_id )
    {   
        $this->db
                ->where("photo_id", $photo_id);
        
        if( !$this->db->delete("photos") ) 
        {
            $this->status_msg   =   "Deleting picture failed.";
            return false;
        }          
                
        $this->status_msg   =   "Picture deleted successfully.";
        return true;
    }
}