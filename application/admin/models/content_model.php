<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Content Model
 *
 * This is model for all Content related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Content
 * @category	Model
 * @author	Albert Virgin V A
*/
class Content_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_categories($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $result =   $this->db->get("content_categories")->result_array();
        
        return $result;
    }
    
    public function get_category($category_id)
    {
        $result =   $this->db
                ->where(array("id" => $category_id))->get("content_categories")->row();
        
        return $result;
    }    
    
    public function add_category()
    {
        $this->form_validation
                ->set_rules('title', 'Title', 'required')                
                ->set_rules('description', 'Details', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }
        
        $check  =   $this->db
                ->where("title", $this->input->post("title"))
                ->get("content_categories")
                ->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg   =   "Category already exists.";
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
       
        if( !$this->db->insert("content_categories", $data) )
        {
            $this->status_msg  =   "Adding category failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }        
                
        $this->db->trans_commit();        
        
        $this->status_msg   =   "Category added successfully";
        return true;
    }
    
    public function update_category()
    {
        $this->form_validation
                ->set_rules('id', 'Category ID', 'required')
                ->set_rules('title', 'Title', 'required')
                ->set_rules('description', 'Details', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("id !=" => $this->input->post("id"), "title" => $this->input->post("title")))
                ->get("content_categories")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Category already available";
            return false;
        }
        
        $this->category_id  =   $this->input->post("id");
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "description" =>  $this->input->post("description"),
            "status"         =>  $this->input->post("status"),           
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
       
        if( !$this->db->where("id", $this->category_id)->update("content_categories", $data) )
        {
            $this->status_msg  =   "Updating category failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        
        $this->db->trans_commit();    
        
        $this->status_msg   =   "Category upated successfully";
        return true;
    }
    
    public function delete_category( $category_id )
    {          
        $check  =   $this->db
                ->where("category_id", $category_id)
                ->get("pages")
                ->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg   =   "Pages exists in this album.";
            return false;
        }
        
        $this->db
                ->where("id", $category_id);
        
        if( !$this->db->delete("content_categories") ) 
        {
            $this->status_msg   =   "Deleting category failed.";
            return false;
        }          
        
        $this->status_msg   =   "Category deleted successfully.";
        return true;
    }
    
    public function get_pages($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("p.status" => $status));
        }
        $result =   $this->db
                ->select("p.*, p1.title AS parent_page")
                ->join("pages AS p1", "p1.page_id = p.parent_id", 'left')
                ->get("pages AS p")->result_array();
        
        return $result;
    }
    
    public function get_page($page_id)
    {
        $result =   $this->db
                ->where(array("page_id" => $page_id))->get("pages")->row();
        
        return $result;
    }    
    
    public function add_page()
    {
        $this->form_validation
                ->set_rules('title', 'Title', 'required')
                ->set_rules('alias', 'Alias', 'required')
                ->set_rules('status', 'Status', 'required');
        
        $check  =   $this->db
                ->where("alias", $this->input->post("alias"))
                ->get("pages")
                ->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg   =   "A page with the same alias exists.";
            return false;
        }
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }        
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "alias" =>  $this->input->post("alias"),
            "meta_keywords" =>  $this->input->post("meta_keywords"),
            "meta_description" =>  $this->input->post("meta_description"),
            "header1" =>  $this->input->post("header1"),
            "header2" =>  $this->input->post("header2"),
            "content" =>  $this->input->post("content"),
            "is_external_link" =>  $this->input->post("is_external_link"),
            "link" =>  $this->input->post("link"),            
            "target" =>  $this->input->post("target"),            
            "parent_id" =>  $this->input->post("parent_id"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("pages", $data) )
        {
            $this->status_msg  =   "Adding page failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }        
                
        $this->db->trans_commit();        
        
        $this->status_msg   =   "Page added successfully";
        return true;
    }
    
    public function update_page()
    {
        $this->form_validation
                ->set_rules('page_id', 'Page ID', 'required')
                ->set_rules('title', 'Title', 'required')
                ->set_rules('alias', 'Alias', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("page_id !=" => $this->input->post("page_id"), "title" => $this->input->post("title")))
                ->get("pages")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Page already available";
            return false;
        }
        
        $this->page_id  =   $this->input->post("page_id");
        
        $data    =   array(
            "title" =>  $this->input->post("title"),
            "alias" =>  $this->input->post("alias"),
            "meta_keywords" =>  $this->input->post("meta_keywords"),
            "meta_description" =>  $this->input->post("meta_description"),
            "header1" =>  $this->input->post("header1"),
            "header2" =>  $this->input->post("header2"),
            "content" =>  $this->input->post("content"),
            "is_external_link" =>  $this->input->post("is_external_link"),
            "link" =>  $this->input->post("link"),            
            "target" =>  $this->input->post("target"),            
            "parent_id" =>  $this->input->post("parent_id"),
            "status"         =>  $this->input->post("status"),
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
       
        if( !$this->db->where("page_id", $this->page_id)->update("pages", $data) )
        {
            $this->status_msg  =   "Updating page failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }
        
        $this->db->trans_commit();    
        
        $this->status_msg   =   "Page upated successfully";
        return true;
    }
    
    public function delete_page( $page_id )
    {
        $this->db
                ->where("page_id", $page_id);
        
        if( !$this->db->delete("pages") ) 
        {
            $this->status_msg   =   "Deleting page failed.";
            return false;
        }          
        
        $this->status_msg   =   "Page deleted successfully.";
        return true;
    }
    
    public function get_parent_pages($id = "")
    {
        if( !empty($id) ) {
            $this->db->where("page_id !=", $id);
        }
        $result =   $this->db
                ->select("page_id, title")
                ->where(array("parent_id" => "0"))
                ->get("pages")
                ->result_array();
        
        return $result;
    }
}