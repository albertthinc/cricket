<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Categories Model
 *
 * This is model for all Categories related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Categories
 * @category	Model
 * @author	Albert Virgin V A
*/
class Teamtypes_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_team_types($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $result =   $this->db->get("team_types")->result_array();
        
        return $result;
    }
    
    public function get_team_type($team_type_id)
    {
        $result =   $this->db
                ->where(array("team_type_id" => $team_type_id))->get("team_types")->row();
        
        return $result;
    }
    
    public function add_team_type()
    {
        $this->form_validation
                ->set_rules('team_type', 'Team type', 'required|is_unique[team_types.team_type]')
                ->set_rules('short_code', 'Short Code', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $data    =   array(
            "team_type" =>  $this->input->post("team_type"),
            "short_code" =>  $this->input->post("short_code"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  $this->session->userdata("user_info")->admin_id,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  $this->session->userdata("user_info")->admin_id,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("team_types", $data) )
        {
            $this->status_msg  =   "Adding team type failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Team type added successfully";
        return true;
    }
    
    public function update_team_type()
    {
        $this->form_validation
                ->set_rules('team_type_id', 'Team type', 'required')
                ->set_rules('team_type', 'Team type', 'required')
                ->set_rules('short_code', 'Short Code', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("team_type_id !=" => $this->input->post("team_type_id"), "team_type" => $this->input->post("team_type")))
                ->get("team_types")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Team type already available";
            return false;
        }
        
        $data    =   array(
            "team_type" =>  $this->input->post("team_type"),
            "short_code" =>  $this->input->post("short_code"),
            "status"         =>  $this->input->post("status"),            
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
        
        $this->db->where("team_type_id", $this->input->post("team_type_id"));
        if( !$this->db->update("team_types", $data) )
        {
            $this->status_msg  =   "Updating team type failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Team type upated successfully";
        return true;
    }
    
    public function delete_team_type( $team_type_id )
    {
        $check  =   $this->db
                ->where("team_type_id", $team_type_id)
                ->get("teams")
                ->num_rows();
        
        if( $check > 0 )
        {
            $this->status_msg   =   "Teams exists under this type. Cannot delete this team type";
            return false;
        }
                
        $this->db
                ->where("team_type_id", $team_type_id);
        
        if( !$this->db->delete("team_types") ) 
        {
            $this->status_msg   =   "Deleting team types failed.";
            return false;
        }
        
        $this->status_msg   =   "Team type deleted successfully.";
        return true;
    }
    
}