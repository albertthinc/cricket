<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * News Model
 *
 * This is model for all News related operations.
 *
 * @package     CodeIgniter
 * @subpackage	News
 * @category	Model
 * @author	Albert Virgin V A
*/
class News_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_newsitems($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $result =   $this->db->get("news")->result_array();
        
        return $result;
    }
    
    public function get_newsitem($news_id)
    {
        $result =   $this->db
                ->where(array("news_id" => $news_id))->get("news")->row();
        
        return $result;
    }
    
    public function get_newsitem_files($news_id)
    {
        $result =   $this->db
                ->where("news_id", $news_id)
                ->get("news_files")
                ->result_array();
        
        return $result;
    }
    
    public function add_newsitem()
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
            "is_featured" => $this->input->post("is_featured"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("news", $data) )
        {
            $this->status_msg  =   "Adding news item failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        
        $this->news_id  =   $this->db->insert_id();
        
        if( !self::_upload_documents() ) 
        {
            $this->status_msg  =   "Uploading files failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        
        $this->db->trans_commit();        
        
        $this->status_msg   =   "News item added successfully";
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
    
    public function update_newsitem()
    {
        $this->form_validation
                ->set_rules('news_id', 'News ID', 'required')
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
                ->where(array("news_id !=" => $this->input->post("news_id"), "title" => $this->input->post("title")))
                ->get("news")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "News already available";
            return false;
        }
        
        $this->news_id  =   $this->input->post("news_id");
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "short_description" =>  $this->input->post("short_description"),
            "description" =>  $this->input->post("description"),
            "is_featured" => $this->input->post("is_featured"),
            "status"         =>  $this->input->post("status"),           
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
       
        if( !$this->db->where("news_id", $this->news_id)->update("news", $data) )
        {
            $this->status_msg  =   "Updating news item failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        if( count($_FILES["documents"]) > 0 )
        {
            if( !self::_upload_documents() ) 
            {
                $this->status_msg  =   "Uploading files failed. Try again";
                $this->db->trans_rollback();
                return false;                   
            }
        }
        
        $this->db->trans_commit();    
        
        $this->status_msg   =   "News item upated successfully";
        return true;
    }
    
    public function delete_newsite( $news_id )
    {          
        
        $this->db
                ->where("news_id", $news_id);
        
        if( !$this->db->delete("news") ) 
        {
            $this->status_msg   =   "Deleting news failed.";
            return false;
        }
        
        $this->db->where("news_id", $news_id)->delete("news_files");        
        
        $news_folder    =   $_SERVER["DOCUMENT_ROOT"]."/uploads/news/".$news_id."/";
        rmdir($news_folder);
        
        $this->status_msg   =   "News deleted successfully.";
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
    
}