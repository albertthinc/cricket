<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Teams Model
 *
 * This is model for all Teams related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Teams
 * @category	Model
 * @author	Albert Virgin V A
*/
class Teams_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_teams($status = "")
    {
        if( !empty($status) ) {
            $this->db
                    ->where("status", $status);
        }
        
        $result =   $this->db
                ->select("t.*, CONCAT(u.first_name, ' ', u.last_name) AS captain_name, CONCAT(uc.first_name, ' ', uc.last_name) AS contact_name, tt.team_type AS team_type_name", false)
                ->join("team_types AS tt", "tt.team_type_id = t.team_type_id")
                ->join("users as u", "u.user_id = t.captain_id", 'left')
                ->join("users as uc", "uc.user_id = t.contact_id", 'left')
                ->get("teams as t")
                ->result_array();
                
        return $result;
    }
    
    public function get_team($team_id)
    {
        $result =   $this->db
                ->where("team_id", $team_id)
                ->get("teams")
                ->row();
        
        return $result;
    }
    
    public function add_team()
    {
        $this->form_validation
                ->set_rules("team_type_id", "Team Type", "required")
                ->set_rules("team_name", "Team Name", "required")
                ->set_rules("abbreviation", "Abbreviation", "required")
                ->set_rules("team_short_name", "Team short name", "required")
                ->set_rules("captain", "Captain", "required")
                ->set_rules("contact", "Contact", "required")
                ->set_rules("venue_id", "Venue", "required")
                ->set_rules("status", "Status", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $data   =   array(
            "team_type_id"  =>  $this->input->post("team_type_id"),
            "team_name"     =>  $this->input->post("team_name"),
            "team_short_name"   =>  $this->input->post("team_short_name"),
            "abbreviation"  =>  $this->input->post("abbreviation"),
            "captain_id"       =>  $this->input->post("captain"),
            "contact_id"      =>  $this->input->post("contact"),
            "venue_id"      =>  $this->input->post("venue_id"),
            "status"    =>  $this->input->post("status"),
            "description"   =>  $this->input->post("description"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        
        if( !$this->db->insert("teams", $data) )
        {
            $this->status_msg   =   "Adding team failed. Try again.";
            return false;
        }
        
        $this->status_msg   =   "Team added successfully.";
        return true;
    }
    
    public function update_team()
    {
        $this->form_validation
                ->set_rules("team_id", "Team ID", "required")
                ->set_rules("team_type_id", "Team Type", "required")
                ->set_rules("team_name", "Team Name", "required")
                ->set_rules("abbreviation", "Abbreviation", "required")
                ->set_rules("team_short_name", "Team short name", "required")
                ->set_rules("captain", "Captain", "required")
                ->set_rules("contact", "Contact", "required")
                ->set_rules("venue_id", "Venue", "required")
                ->set_rules("status", "Status", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $this->team_id  =   $this->input->post("team_id");
        
        $check  =   $this->db
                ->where(array("team_id !=" => $this->team_id, "team_name" => $this->input->post("team_name")))
                ->get("teams")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Team name already available";
            return false;
        }
        
        $data   =   array(
            "team_type_id"  =>  $this->input->post("team_type_id"),
            "team_name"     =>  $this->input->post("team_name"),
            "team_short_name"   =>  $this->input->post("team_short_name"),
            "abbreviation"  =>  $this->input->post("abbreviation"),
            "captain_id"       =>  $this->input->post("captain"),
            "contact_id"      =>  $this->input->post("contact"),
            "venue_id"      =>  $this->input->post("venue_id"),
            "status"    =>  $this->input->post("status"),
            "description"   =>  $this->input->post("description"),
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        
        if( !$this->db->where("team_id", $this->team_id)->update("teams", $data) )
        {
            $this->status_msg   =   "Updating team failed. Try again.";
            return false;
        }
        
        $this->status_msg   =   "Team updated successfully.";
        return true;
    }
}