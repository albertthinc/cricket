<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        //$this->load->view('welcome_message');
        redirect("/dashboard", 'location');       
        
        $people =   $this->db
                ->get("people")
                ->result_array();
        $data   =   "";
        
        foreach( $people AS $key => $value )
        {
            $data[$key]['user_id']          =   $value["person_id"];
            $data[$key]['passwd']           =   sha1('mscl2014');
            $data[$key]['first_name']       =   $value["first_name"];
            $data[$key]['last_name']        =   $value["last_name"];
            $data[$key]['address1']     =   $value["address1"];
            $data[$key]['address2']         =   $value["address2"];
            $data[$key]['home_phone']  =   $value["home_phone"];
            $data[$key]['work_phone']  =   $value["work_phone"];
            $data[$key]['cell_phone']  =   $value["cell_phone"];
            $data[$key]['email_id']  =   $value["email"];
            $data[$key]['home_phone']  =   $value["home_phone"];
            $data[$key]['status']  =   ($value["active"] == "Y") ? "Active" : "Inactive";
            $data[$key]['dob']  =   $value["dob"];
            $data[$key]['native']  =   $value["place_of_birth"];
            $data[$key]['style']  =   $value["style"];
            $data[$key]['biography']  =   $value["biography"];
            
            /*if( $value["isumpire"] == "Y" ) {
                $this->db->insert("user_groups_assigned", array(
                    "user_id" => $value['person_id'],
                    "group_id"  =>  3,
                    "created_on"    =>  date('Y-m-d H:i:s',now()),
                    "created_by"    =>  1,
                    "modified_on"   =>  date('Y-m-d H:i:s',now()),
                    "modified_by"   =>  1,
                    "modified_ts"   =>  date('Y-m-d H:i:s',now())
                ));
            }
            
            if( $value["isplayer"] == "Y" ) {
                $this->db->insert("user_groups_assigned", array(
                    "user_id" => $value['person_id'],
                    "group_id"  =>  2,
                    "created_on"    =>  date('Y-m-d H:i:s',now()),
                    "created_by"    =>  1,
                    "modified_on"   =>  date('Y-m-d H:i:s',now()),
                    "modified_by"   =>  1,
                    "modified_ts"   =>  date('Y-m-d H:i:s',now())
                ));
            }*/
            
            $data[$key]['created_on']  =   date('Y-m-d H:i:s',now());
            $data[$key]['created_by']  =   1;
            $data[$key]['modified_on']  =   date('Y-m-d H:i:s',now());
            $data[$key]['modified_by']  =   1;
            $data[$key]['modified_ts']  =   date('Y-m-d H:i:s',now());
            
            
        }
        
        //$this->db->insert_batch("users", $data);
        exit;
    }
    
    public function teamsinsert()
    {
        $data   =   $this->db
                ->get("teams1")
                ->result_array();
        
        $insert =   "";
        
        foreach( $data AS $key => $value )
        {
            $insert[$key]["team_name"]  =   $value["name"];
            $insert[$key]["team_short_name"]  =   $value["short_name"];
            $insert[$key]["abbreviation"]  =   $value["abbreviation"];
            $insert[$key]["captain_id"]  =   $value["captain"];
            $insert[$key]["contact_id"]  =   $value["contact"];
            $insert[$key]["venue_id"]  =   $value["home_ground"];
            $insert[$key]["status"]  =   ($value["active"] == "Y") ? "Active" : "Inactive";
            $insert[$key]["description"]  =  "";
            
            
            $team_type_id   =   $this->db
                    ->where("short_code", $value["team_type"])
                    ->get("team_types")->row();
            
            $insert[$key]["team_type_id"]  = $team_type_id->team_type_id;
            $insert[$key]['created_on']  =   date('Y-m-d H:i:s',now());
            $insert[$key]['created_by']  =   1;
            $insert[$key]['modified_on']  =   date('Y-m-d H:i:s',now());
            $insert[$key]['modified_by']  =   1;
            $insert[$key]['modified_ts']  =   date('Y-m-d H:i:s',now());
        }
        
        //$this->db->insert_batch("teams", $insert);
        print_r($insert);
    }
    
    public function matchsinsert()
    {
        $matchs =   $this->db
                ->get("matches")
                ->result_array();
        
        $insert =   "";
        
        foreach( $matchs AS $key => $value )
        {
             $match_type_id   =   $this->db
                    ->where("match_type_code", $value["match_type_code"])
                    ->get("match_types")->row();
             
            $insert[$key]["match_type_id"]  =   $match_type_id->match_type_id;
            $insert[$key]["season"]  =   $value["season"];
            $insert[$key]["match_date"]  =   $value["match_date"];
            $insert[$key]["venue_id"]  =   $value["venue"];
            $insert[$key]["start_time"]  =   $value["start_time"];
            $insert[$key]["home_team_id"]  =   $value["home_team"];
            $insert[$key]["umpire1_id"]  =   $value["sched_umpire1"];
            $insert[$key]["umpire2_id"]  =   $value["sched_umpire2"];
            $insert[$key]["visiting_team_id"]  =   $value["visiting_team"];
            $insert[$key]["home_team_id"]  =   $value["home_team"];
            $insert[$key]["first_batting"]  =   $value["batted_first"];
            $insert[$key]["team_won"]  =   $value["winning_team"];
            $insert[$key]["toss_won_by"]  =   $value["toss_won_by"];
            $insert[$key]["scorer1"]  =   $value["scorer1"];
            $insert[$key]["scorer2"]  =   $value["scorer2"];
            $insert[$key]["win_margin"]  =   $value["win_margin"];
            $insert[$key]["scorer2"]  =   $value["runs_or_wickets"];
            $insert[$key]["result_string"]  =   $value["result_string"];
            $insert[$key]["submit_status"]  =   ($value["scorecards_submitted"] == "0") ? "Approved" : "Submitted";
            $insert[$key]["home_team_points"]  =   $value["home_team_points"];
            $insert[$key]["visiting_team_points"]  =   $value["visiting_team_points"];
            $insert[$key]["scard_available"]  =   $value["scard_available"];
            $insert[$key]["result"]  =   $value["result"];
            $insert[$key]["status"]  =   "Active";
            $insert[$key]["sched_umpire1"]  =   $value["sched_umpire1"];
            $insert[$key]["sched_umpire2"]  =   $value["sched_umpire2"];
            $insert[$key]["actual_umpire1"]  =   $value["actual_umpire1"];
            $insert[$key]["actual_umpire2"]  =   $value["actual_umpire2"];            
            $insert[$key]['created_on']  =   date('Y-m-d H:i:s',now());
            $insert[$key]['created_by']  =   1;
            $insert[$key]['modified_on']  =   date('Y-m-d H:i:s',now());
            $insert[$key]['modified_by']  =   1;
            $insert[$key]['modified_ts']  =   date('Y-m-d H:i:s',now());
        }
        //$this->db->insert_batch("match_schedule", $insert);
        print_R($insert);
    }
}
