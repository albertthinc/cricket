<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Banners Model
 *
 * This is model for all Banners related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Banners
 * @category	Model
 * @author	Albert Virgin V A
*/
class Banners_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_banner_categories($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $result =   $this->db->get("banner_categories")->result_array();
        
        return $result;
    }
    
    public function get_banner_category($category_id)
    {
        $result =   $this->db
                ->where(array("category_id" => $category_id))->get("banner_categories")->row();
        
        return $result;
    }    
    
    public function add_banner_category()
    {
        $this->form_validation
                ->set_rules('title', 'Title', 'required')
                ->set_rules('description', 'Description', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "description" =>  $this->input->post("description"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("banner_categories", $data) )
        {
            $this->status_msg  =   "Adding banner category failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
                        
        $this->db->trans_commit();        
        
        $this->status_msg   =   "Banner category added successfully";
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
    
    public function update_banner_category()
    {
        $this->form_validation
                ->set_rules('category_id', 'Category ID', 'required')
                ->set_rules('title', 'Title', 'required')
                ->set_rules('description', 'Details', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("category_id !=" => $this->input->post("category_id"), "title" => $this->input->post("title")))
                ->get("banner_categories")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Category already available";
            return false;
        }
        
        $this->category_id  =   $this->input->post("category_id");
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "description" =>  $this->input->post("description"),
            "status"         =>  $this->input->post("status"),           
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
       
        if( !$this->db->where("category_id", $this->category_id)->update("banner_categories", $data) )
        {
            $this->status_msg  =   "Updating category failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        
        $this->db->trans_commit();    
        
        $this->status_msg   =   "Banner category upated successfully";
        return true;
    }
    
    public function delete_banner_category( $category_id )
    {          
        $check  =   $this->db
                ->where("category_id", $category_id)
                ->get("banners")
                ->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg   =   "Pictures exists in this album.";
            return false;
        }
        
        $this->db
                ->where("category_id", $category_id);
        
        if( !$this->db->delete("banner_categories") ) 
        {
            $this->status_msg   =   "Deleting category failed.";
            return false;
        }          
              
        $this->status_msg   =   "Category deleted successfully.";
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
    
    public function get_bannerpictures($category_id)
    {
        $this->form_validation
                ->set_rules("category_id", "Category ID", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $result =   $this->db
                ->where("category_id", $category_id)
                ->get("banners")
                ->result_array();        
        
        return $result;
    }    
    
    public function add_bannerpicture()
    {
        $this->form_validation
                ->set_rules("category_id", "Category ID", "required")
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
        
        $this->category_id =   $this->input->post("category_id");
        
        $data   =   array(
            "category_id"  =>  $this->input->post("category_id"),
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
        
        if( !$this->db->insert("banners", $data) )
        {
            $this->status_msg   =   "Uploading picture failed. Try again.";
            $this->db->trans_rollback();
            return false;
        }
        
        $this->banner_id =   $this->db->insert_id();
        
        if( !self::_upload_banner_picture() )
        {
            return false;
        }
        
        $this->db->trans_commit();
        
        $this->status_msg   =   "Picture added successfully";
        return true;
    }
    
    private function _upload_banner_picture()
    {
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT']."/uploads/banners/".$this->category_id."/";
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
                ->where("banner_id", $this->banner_id)
                ->update("banners", array("file_name" => $data["file_name"], "file_details" => json_encode($data)));        
        
        return true;
    }
    
    public function get_bannerpicture($banner_id)
    {
        $result =   $this->db
                ->where(array("banner_id" => $banner_id))->get("banners")->row();
        
        return $result;
    }
    
    public function update_bannerpicture()
    {
        $this->form_validation
                ->set_rules("banner_id", "Banner ID", "required")
                ->set_rules("category_id", "Category ID", "required")
                ->set_rules('title', 'Title', 'required')
                ->set_rules('short_description', 'Short Description', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }        
        
        $this->banner_id =   $this->input->post("banner_id");
        $this->category_id =   $this->input->post("category_id");
        
        $data   =   array(
            "category_id"  =>  $this->input->post("category_id"),
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
        
        if( !$this->db->where("banner_id", $this->banner_id)->update("banners", $data) )
        {
            $this->status_msg   =   "Updating picture failed. Try again.";
            $this->db->trans_rollback();
            return false;
        }
        
        if( !empty($_FILES["image"]["name"]) )
        {
            if( !self::_upload_banner_picture() )
            {
                return false;
            }
        }
        
        $this->db->trans_commit();
        
        $this->status_msg   =   "Picture update successfully";
        return true;
    }
    
    public function delete_bannerpicture( $banner_id )
    {   
        $this->db
                ->where("banner_id", $banner_id);
        
        if( !$this->db->delete("banners") ) 
        {
            $this->status_msg   =   "Deleting picture failed.";
            return false;
        }          
                
        $this->status_msg   =   "Picture deleted successfully.";
        return true;
    }
}