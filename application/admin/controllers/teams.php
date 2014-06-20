<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teams extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("teams_model");
        $this->load->model("teamtypes_model");
        $this->load->model("users_model");
        $this->load->model("venues_model");
    }

    public function index()
    {
        $teams  =   $this->teams_model->get_teams();
        
        $this->smarty->assign("teams", $teams);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'teams/list.htm');
        $this->smarty->assign('pageTitle', 'Teams - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $team_types_arr =   $this->teamtypes_model->get_team_types("Active");
        foreach( $team_types_arr AS $key => $value )
        {
            $data_team_types[$value['team_type_id']]    =   $value["team_type"];
        }        
        $this->smarty->assign("team_types", $data_team_types);
        
        $users_captains =   $this->users_model->get_users(4);
        $data = "";
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
       
                
        $this->smarty->assign('INNER_TPL', 'teams/add.htm');
        $this->smarty->assign('pageTitle', 'Teams - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->teams_model->add_team();
        $this->session->set_flashdata('errors', $this->teams_model->status_msg);
        redirect("/teams", 'location');
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
