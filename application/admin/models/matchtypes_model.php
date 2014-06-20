<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Match Types Model
 *
 * This is model for all Match Types related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Match Types
 * @category	Model
 * @author	Albert Virgin V A
*/
class Matchtypes_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_match_types($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("mt.status" => $status));
        }
        $result =   $this->db
                ->select("mt.*, mt.status AS match_status, tt.team_type")
                ->join("team_types as tt", "tt.team_type_id = mt.team_type_id", 'left')
                ->get("match_types as mt")->result_array();
        
        return $result;
    }
    
    public function get_match_type($match_type_id)
    {
        $result =   $this->db
                ->where(array("match_type_id" => $match_type_id))->get("match_types")->row();
        
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