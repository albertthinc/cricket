<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Player Suspension Model
 *
 * This is model for all Player Suspension related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Player Suspension
 * @category	Model
 * @author	Albert Virgin V A
*/
class Playersuspension_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_suspesions($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("ps.status" => $status));
        }
        $result =   $this->db
                ->select("ps.*, CONCAT(u.first_name, ' ', u.last_name) AS player_name", false)
                ->join("users as u", "u.user_id = ps.player_id", 'left')
                ->join("match_schedule as ms", "ms.match_id = ps.match_id", 'left')
                ->get("player_suspension as ps")->result_array();
        
        return $result;
    }
    
    public function get_suspesion($suspension_id)
    {
        $result =   $this->db
                ->where(array("suspension_id" => $suspension_id))->get("player_suspension")->row();
        
        return $result;
    }
    
    public function add_match_type()
    {
        $this->form_validation
                ->set_rules('team_type_id', 'Team type', 'required')
                ->set_rules('match_type', 'Match type', 'required|is_unique[match_types.match_type]')
                ->set_rules('match_type_code', 'Match type code', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $data    =   array(
            "team_type_id" =>  $this->input->post("team_type_id"),
            "match_type" =>  $this->input->post("match_type"),
            "match_type_code" =>  $this->input->post("match_type_code"),
            "description" =>  $this->input->post("description"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  $this->session->userdata("user_info")->admin_id,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  $this->session->userdata("user_info")->admin_id,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("match_types", $data) )
        {
            $this->status_msg  =   "Adding match type failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Match type added successfully";
        return true;
    }
    
    public function update_match_type()
    {
        $this->form_validation
                ->set_rules('team_type_id', 'Team type', 'require')
                ->set_rules('match_type_id', 'Match type', 'require')
                ->set_rules('match_type', 'Match type', 'required')
                ->set_rules('match_type_code', 'Match type code', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("match_type_id !=" => $this->input->post("match_type_id"),"team_type_id" => $this->input->post("team_type_id"), "match_type" => $this->input->post("match_type")))
                ->get("match_types")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Match type already available";
            return false;
        }
        
        $data    =   array(
            "team_type_id" =>  $this->input->post("team_type_id"),
            "match_type" =>  $this->input->post("match_type"),
            "match_type_code" =>  $this->input->post("match_type_code"),
            "description" =>  $this->input->post("description"),
            "status"         =>  $this->input->post("status"),            
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
        
        $this->db->where("match_type_id", $this->input->post("match_type_id"));
        if( !$this->db->update("match_types", $data) )
        {
            $this->status_msg  =   "Updating match type failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Match type upated successfully";
        return true;
    }
    
    public function delete_match_type( $match_type_id )
    {
        /*$check  =   $this->db
                ->where("match_type_id", $team_type_id)
                ->get("teams")
                ->num_rows();
        
        if( $check > 0 )
        {
            $this->status_msg   =   "Teams exists under this type. Cannot delete this team type";
            return false;
        }*/
                
        $this->db
                ->where("match_type_id", $match_type_id);
        
        if( !$this->db->delete("match_types") ) 
        {
            $this->status_msg   =   "Deleting match types failed.";
            return false;
        }
        
        $this->status_msg   =   "Match type deleted successfully.";
        return true;
    }
    
}