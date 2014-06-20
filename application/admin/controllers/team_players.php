<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_players extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("teams_model");
        $this->load->model("users_model");
    }

    public function index()
    {
        $team_players  =   $this->users_model->get_team_players($this->input->get("team_id", ""));
        $this->smarty->assign("team_players", $team_players);
        
        $data = "";
        $teams  =   $this->teams_model->get_teams();
        if( count($teams) > 0 ) {
            foreach($teams AS $key => $value)
            {
                $data[$value["team_id"]]    =   $value["team_name"];
            }
        }
        $this->smarty->assign("teams", $data);
        
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'team_players/list.htm');
        $this->smarty->assign('pageTitle', 'Team Players - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function team_players_list()
    {
        $team_players  =   $this->users_model->get_team_players($this->input->get("team_id", ""));
        echo json_encode($team_players);
        exit;
    }
    
    public function delete_teamplayer()
    {
        $ids    =   end($this->uri->segment_array());
        if( $this->users_model->delete_teamplayer($ids) )
        {
            echo "Team player removed successfully";
        } else {
            echo $this->users_model->status_msg;
        }
    }
    
    public function create()
    {
        $data = "";
        $users =   $this->users_model->get_users(2);
        if( count($users) > 0 ) {
            foreach($users AS $key => $value)
            {
                $data[$value["user_id"]]    =   $value["first_name"]." ".$value["last_name"];
            }
        }
        $this->smarty->assign("players", $data);
        
        $data = "";
        $teams  =   $this->teams_model->get_teams();
        if( count($teams) > 0 ) {
            foreach($teams AS $key => $value)
            {
                $data[$value["team_id"]]    =   $value["team_name"];
            }
        }
        $this->smarty->assign("teams", $data);
                
        $this->smarty->assign('INNER_TPL', 'team_players/add.htm');
        $this->smarty->assign('pageTitle', 'Team Players - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->users_model->add_teamplayer();
        $this->session->set_flashdata('errors', $this->users_model->status_msg);
        
        $team_player_id =   $this->input->post("team_id");
        redirect("/team_players/?team_id=".$team_player_id, 'location');
    }
    
    public function edit()
    {
        $team_types_arr =   $this->teamtypes_model->get_team_types("Active");
        foreach( $team_types_arr AS $key => $value )
        {
            $data_team_types[$value['team_type_id']]    =   $value["team_type"];
        }        
        $this->smarty->assign("team_types", $data_team_types);
        
        $users_captains =   $this->users_model->get_users(4);
        if( count($users_captains) > 0 ) {
            foreach($users_captains AS $key => $value)
            {
                $data[$value["user_id"]]    =   $value["first_name"]." ".$value["last_name"];
            }
        }
        $this->smarty->assign("captains", $data);
        $data = "";
        $users =   $this->users_model->get_users();
        if( count($users) > 0 ) {
            foreach($users AS $key => $value)
            {
                $data[$value["user_id"]]    =   $value["first_name"]." ".$value["last_name"];
            }
        }
        $this->smarty->assign("contactusers", $data);
        $data = "";
        $venues =   $this->venues_model->get_venues('Active');
        if( count($venues) > 0 ) {
            foreach($venues AS $key => $value)
            {
                $data[$value["venue_id"]]    =   $value["venue_name"];
            }
        }
        $this->smarty->assign("venues", $data);
        
        $team_details   =   $this->teams_model->get_team(end($this->uri->segment_array()));        
        $this->smarty->assign("team_details", $team_details);
       
                
        $this->smarty->assign('INNER_TPL', 'teams/edit.htm');
        $this->smarty->assign('pageTitle', 'Teams - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function update()
    {
        $this->teams_model->update_team();
        $this->session->set_flashdata('errors', $this->teams_model->status_msg);
        redirect("/teams", 'location');
    }
    
}
