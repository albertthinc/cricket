<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Scorecard Model
 *
 * This is model for all Scorecard related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Scorecard
 * @category	Model
 * @author	Albert Virgin V A
*/
class Scorecard_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
   public function get_match_information($match_schedule_id)
   {
       if( empty($match_schedule_id) )
       {
           return false;
       }
       
       $match_results   =   $this->db
               ->select("ms.*, mt.match_type AS match_type_name, v.venue_name, t1.team_name AS home_team_name, t2.team_name AS visiting_team_name, CONCAT(u1.first_name, ' ', u1.last_name) AS umpire1_name,CONCAT(u2.first_name, ' ', u2.last_name) AS umpire2_name
                   ", false)
               ->join("match_types AS mt", "mt.match_type_id = ms.match_type_id")
               ->join("venues AS v", "v.venue_id = ms.venue_id")
               ->join("teams AS t1", "t1.team_id = ms.home_team_id")
               ->join("teams AS t2", "t2.team_id = ms.visiting_team_id")
               ->join("users AS u1", "u1.user_id = ms.umpire1_id")
               ->join("users AS u2", "u2.user_id = ms.umpire2_id")
               ->where("ms.match_id", $match_schedule_id)
               ->get("match_schedule AS ms")
               ->row();
       
       return $match_results;
       
   }
   
   public function get_match_schedule($season = "", $match_type_id = "", $team = "")
   {
       if( !empty($season) ) {
           $this->db->where("ms.season", $season);
       }
       
       if( !empty($match_type_id) ) 
       {
           $this->db->where("ms.match_type_id" , $match_type_id);
       }
       
       if( !empty($team) ) 
       {
           $this->db->where("ms.team_id" , $team);
       }
       
       $match_results   =   $this->db
               ->select("ms.*, mt.match_type AS match_type_name, v.venue_name, t1.team_name AS home_team_name, t2.team_name AS visiting_team_name, CONCAT(u1.first_name, ' ', u1.last_name) AS umpire1_name,CONCAT(u2.first_name, ' ', u2.last_name) AS umpire2_name
                   ", false)
               ->join("match_types AS mt", "mt.match_type_id = ms.match_type_id")
               ->join("venues AS v", "v.venue_id = ms.venue_id")
               ->join("teams AS t1", "t1.team_id = ms.home_team_id")
               ->join("teams AS t2", "t2.team_id = ms.visiting_team_id")
               ->join("users AS u1", "u1.user_id = ms.umpire1_id")
               ->join("users AS u2", "u2.user_id = ms.umpire2_id")
               ->order_by("ms.match_date", "desc")
               ->get("match_schedule AS ms")
               ->result();
       
       
       return $match_results;
   }
}