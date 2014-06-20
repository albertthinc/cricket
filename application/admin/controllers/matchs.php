<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matchs extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("matchs_model");
        $this->load->model("matchtypes_model");
        $this->load->model("venues_model");
        $this->load->model("teams_model");
        $this->load->model("users_model");
    }

    public function index()
    {
        $matchs  =   $this->matchs_model->get_matchs();
        
        $this->smarty->assign("matchs", $matchs);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'matchs/list.htm');
        $this->smarty->assign('pageTitle', 'Match Schedules - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $match_types_arr =   $this->matchtypes_model->get_match_types("Active");
        foreach( $match_types_arr AS $key => $value )
        {
            $data_match_types[$value['match_type_id']]    =   $value["match_type"];
        }        
        $this->smarty->assign("match_types", $data_match_types);
        
        $venues =   $this->venues_model->get_venues('Active');
        if( count($venues) > 0 ) {
            foreach($venues AS $key => $value)
            {
                $data[$value["venue_id"]]    =   $value["venue_name"];
            }
        }
        $this->smarty->assign("venues", $data);
        
        $data = "";
        $teams  =   $this->teams_model->get_teams();
        if( count($teams) > 0 ) {
            foreach($teams AS $key => $value)
            {
                $data[$value["team_id"]]    =   $value["team_name"];
            }
        }
        $this->smarty->assign("teams", $data);
        
        $data = "";        
        $users_umpires =   $this->users_model->get_users(3);
        if( count($users_umpires) > 0 ) {
            foreach($users_umpires AS $key => $value)
            {
                $data[$value["user_id"]]    =   $value["first_name"]." ".$value["last_name"];
            }
        }
        $this->smarty->assign("umpires", $data);
        
        $this->smarty->assign('INNER_TPL', 'matchs/add.htm');
        $this->smarty->assign('pageTitle', 'Match - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $match_types_arr =   $this->matchtypes_model->get_match_types("Active");
        foreach( $match_types_arr AS $key => $value )
        {
            $data_match_types[$value['match_type_id']]    =   $value["match_type"];
        }        
        $this->smarty->assign("match_types", $data_match_types);
        
        $venues =   $this->venues_model->get_venues('Active');
        if( count($venues) > 0 ) {
            foreach($venues AS $key => $value)
            {
                $data[$value["venue_id"]]    =   $value["venue_name"];
            }
        }
        $this->smarty->assign("venues", $data);
        
        $data = "";
        $teams  =   $this->teams_model->get_teams();
        if( count($teams) > 0 ) {
            foreach($teams AS $key => $value)
            {
                $data[$value["team_id"]]    =   $value["team_name"];
            }
        }
        $this->smarty->assign("teams", $data);
        
        $data = "";        
        $users_umpires =   $this->users_model->get_users(3);
        if( count($users_umpires) > 0 ) {
            foreach($users_umpires AS $key => $value)
            {
                $data[$value["user_id"]]    =   $value["first_name"]." ".$value["last_name"];
            }
        }
        $this->smarty->assign("umpires", $data);
            
        $match  =   $this->matchs_model->get_match(end($this->uri->segment_array()));
        $this->smarty->assign("match", $match);
        
        $this->smarty->assign('INNER_TPL', 'matchs/edit.htm');
        $this->smarty->assign('pageTitle', 'Match - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->matchs_model->add_match();
        $this->session->set_flashdata('errors', $this->matchs_model->status_msg);
        redirect("/matchs", 'location');
    }
    
    public function delete()
    {
        $this->matchs_model->delete_match(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->matchs_model->status_msg);

        redirect("/matchs", "location");
    }
    
    public function update()
    {
        $this->matchs_model->update_match();            
        $this->session->set_flashdata('errors', $this->matchs_model->status_msg);

        redirect("/matchs", "location");
    }
    
}
