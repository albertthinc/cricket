<?php
defined('BASEPATH') OR exit('No direct script access allowed');

ini_set("display_errors", "on");
/**
 * User Groups Model
 *
 * This is model for all User Groups related operations.
 *
 * @package     CodeIgniter
 * @subpackage	User Groups
 * @category	Model
 * @author	Albert Virgin V A
*/

class Usergroups_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_user_groups()
    {
        $groups =   $this->db
                ->get("user_groups")->result_array();
        
        return $groups;
    }
    
    public function get_admin_usergroup($group_id)
    {
        $result =   $this->db
                ->where(array("group_id" => $group_id))->get("user_groups")->row();
        
        return $result;
    }
    
    public function add_usergroup()
    {
        $this->form_validation
                ->set_rules('group_name', "Group name", "required")
                ->set_rules('group_status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $data   =   array(
            "group_name"    =>  $this->input->post("group_name"),
            "group_status"        =>  $this->input->post("group_status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  $this->session->userdata("user_info")->admin_id,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  $this->session->userdata("user_info")->admin_id,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        
        $this->db->trans_begin();
        
        if( !$this->db->insert("user_groups", $data) )
        {
            $this->status_msg   =   "Adding user group failed";
            $this->db->trans_rollback();
            return false;
        }
        
        $this->db->trans_commit();
        
        $this->status_msg   =   "User group added successfully";
        return true;
    }
    
    public function update_usergroup()
    {
        $this->form_validation
                ->set_rules('group_id', 'Group ID', 'required')
                ->set_rules('group_name', 'Group Name', 'required|xss_clean')
                ->set_rules('group_status', 'Group Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("group_id !=" => $this->input->post("group_id"), "group_name" => $this->input->post("group_name")))
                ->get("user_groups")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "User group already exists";
            return false;
        }
        
        $data    =   array(
            "group_name"    =>  $this->input->post("group_name"),
            "group_status"  =>  $this->input->post("group_status"),
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  $this->session->userdata("user_info")->admin_id,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        
        
        $this->db->trans_begin();
        
        $this->db->where("group_id", $this->input->post("group_id"));
        if( !$this->db->update("user_groups", $data) )
        {
            $this->status_msg  =   "Updating user group failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "User group upated successfully";
        return true;
    }
    
    public function delete_usergroup( $group_id )
    {
        $check_users    =   $this->db
                ->where(array("group_id" => $group_id))
                ->get("user_groups_assigned")
                ->num_rows();
        
        if( $check_users > 0 )
        {
            $this->status_msg   =   "Users exists in this group.";
            return false;
        }
        
        $this->db
                ->where("group_id", $group_id);
        
        if( !$this->db->delete("user_groups") ) 
        {
            $this->status_msg   =   "Deleting user group failed.";
            return false;
        }
        
        $this->status_msg   =   "User group deleted successfully.";
        return true;
    }
}