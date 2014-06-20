<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Cities Model
 *
 * This is model for all Cities related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Cities
 * @category	Model
 * @author	Albert Virgin V A
*/
class Cities_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_cities($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $this->db->start_cache();
        $result =   $this->db->get("cities")->result_array();
        return $result;
    }
    
    public function get_city($city_id)
    {
        $result =   $this->db
                ->where(array("city_id" => $city_id))->get("cities")->row();
        
        return $result;
    }
    
    public function add_category()
    {
        $this->form_validation->set_rules('category_title', 'Category Title', 'required|is_unique[categories.category_title]');
        $this->form_validation->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $data    =   array(
            "category_title" =>  $this->input->post("category_title"),
            "status"         =>  $this->input->post("status"),
            "created_on"     =>  date('Y-m-d H:i:s',now())
        );
        
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("categories", $data) )
        {
            $this->status_msg  =   "Adding categories failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Categories added successfully";
        return true;
    }
    
    public function update_category()
    {
        $this->form_validation
                ->set_rules('category_id', 'Category ID', 'required')
                ->set_rules('category_title', 'Category Title', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("category_id !=" => $this->input->post("category_id"), "category_title" => $this->input->post("category_title")))
                ->get("categories")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Category already available";
            return false;
        }
        
        $data    =   array(
            "category_title" =>  $this->input->post("category_title"),
            "status"         =>  $this->input->post("status"),
            "created_on"     =>  date('Y-m-d H:i:s',now())
        );
        
        
        $this->db->trans_begin();
        
        $this->db->where("category_id", $this->input->post("category_id"));
        if( !$this->db->update("categories", $data) )
        {
            $this->status_msg  =   "Updating categories failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Categories upated successfully";
        return true;
    }
    
    public function delete_category( $category_id )
    {
        $this->db
                ->where("category_id", $category_id);
        
        if( !$this->db->delete("categories") ) 
        {
            $this->status_msg   =   "Deleting categories failed.";
            return false;
        }
        
        $this->status_msg   =   "Category deleted successfully.";
        return true;
    }
    
}