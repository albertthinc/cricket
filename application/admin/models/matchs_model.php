<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Matchs Model
 *
 * This is model for all Match related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Match
 * @category	Model
 * @author	Albert Virgin V A
*/
class Matchs_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_matchs($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("m.status" => $status));
        }
        $result =   $this->db
                ->select("m.*, m.status AS match_status, mt.match_type, v.venue_name, t.team_name AS home_team_name, t1.team_name AS visiting_team_name, CONCAT(u.first_name, ' ' , u.last_name) AS umpire1_name, CONCAT(u1.first_name, ' ' , u1.last_name) AS umpire2_name", false)
                ->join("match_types as mt", "mt.match_type_id = m.match_type_id", 'left')
                ->join("venues as v", "v.venue_id = m.venue_id", 'left')
                ->join("teams AS t", "t.team_id = m.home_team_id")
                ->join("teams AS t1", "t1.team_id = m.visiting_team_id")
                ->join("users AS u", "u.user_id = m.umpire1_id", 'left')
                ->join("users AS u1", "u1.user_id = m.umpire2_id", 'left')
                ->get("match_schedule as m")->result_array();
        
        return $result;
    }
    
    public function get_match($match_id)
    {
        $result =   $this->db
                ->where(array("match_id" => $match_id))->get("match_schedule")->row();
        
        return $result;
    }
    
    public function add_match()
    {
        $this->form_validation
                ->set_rules('match_type_id', 'Match type', 'required')                
                ->set_rules('season', 'Season', 'required')
                ->set_rules('match_date', 'Match Date', 'required')
                ->set_rules('venue_id', 'Ground', 'required')
                ->set_rules('start_time', 'Start Time', 'required')
                ->set_rules('home_team_id', 'Home team', 'required')
                ->set_rules('umpire1_id', 'Umpire 1', 'required')
                ->set_rules('visiting_team_id', 'Visiting team', 'required')
                ->set_rules('umpire2_id', 'Umpire 2', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $data    =   array(
            "match_type_id" =>  $this->input->post("match_type_id"),
            "season" =>  $this->input->post("season"),
            "match_date" =>  $this->input->post("match_date"),
            "venue_id" =>  $this->input->post("venue_id"),
            "start_time" =>  $this->input->post("start_time"),
            "home_team_id" =>  $this->input->post("home_team_id"),
            "umpire1_id" =>  $this->input->post("umpire1_id"),
            "visiting_team_id" =>  $this->input->post("visiting_team_id"),
            "umpire2_id" =>  $this->input->post("umpire2_id"),
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  $this->session->userdata("user_info")->admin_id,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  $this->session->userdata("user_info")->admin_id,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("match_schedule", $data) )
        {
            $this->status_msg  =   "Adding match failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Match added successfully";
        return true;
    }
    
    public function update_match()
    {
        $this->form_validation
                ->set_rules('match_id', "Match ID", "required")
                ->set_rules('match_type_id', 'Match type', 'required')                
                ->set_rules('season', 'Season', 'required')
                ->set_rules('match_date', 'Match Date', 'required')
                ->set_rules('venue_id', 'Ground', 'required')
                ->set_rules('start_time', 'Start Time', 'required')
                ->set_rules('home_team_id', 'Home team', 'required')
                ->set_rules('umpire1_id', 'Umpire 1', 'required')
                ->set_rules('visiting_team_id', 'Visiting team', 'required')
                ->set_rules('umpire2_id', 'Umpire 2', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        } 
        
        $check  =   $this->db
                ->where(array(
                    "match_id !=" => $this->input->post("match_id"),
                    "match_type_id" => $this->input->post("match_type_id"),
                    "match_date" => $this->input->post("match_date"),
                    "venue_id" => $this->input->post("venue_id"),
                    "start_time" => $this->input->post("start_time")
                ))
                ->get("match_schedule")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Match already available";
            return false;
        }
        
        $data    =   array(
            "match_type_id" =>  $this->input->post("match_type_id"),
            "season" =>  $this->input->post("season"),
            "match_date" =>  $this->input->post("match_date"),
            "venue_id" =>  $this->input->post("venue_id"),
            "start_time" =>  $this->input->post("start_time"),
            "home_team_id" =>  $this->input->post("home_team_id"),
            "umpire1_id" =>  $this->input->post("umpire1_id"),
            "visiting_team_id" =>  $this->input->post("visiting_team_id"),
            "umpire2_id" =>  $this->input->post("umpire2_id"),
            "status"         =>  $this->input->post("status"),            
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  $this->session->userdata("user_info")->admin_id,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
        
        $this->db->where("match_id", $this->input->post("match_id"));
        if( !$this->db->update("match_schedule", $data) )
        {
            $this->status_msg  =   "Updating match failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Match upated successfully";
        return true;
    }
    
    public function delete_match( $match_id )
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
                ->where("match_id", $match_id);
        
        if( !$this->db->delete("match_schedule") ) 
        {
            $this->status_msg   =   "Deleting match failed.";
            return false;
        }
        
        $this->status_msg   =   "Match deleted successfully.";
        return true;
    }
}