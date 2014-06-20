<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_types extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("teamtypes_model");
    }

    public function index()
    {
        $team_types  =   $this->teamtypes_model->get_team_types();
        
        $this->smarty->assign("team_types", $team_types);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'team_types/list.htm');
        $this->smarty->assign('pageTitle', 'Team Types - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $this->smarty->assign('INNER_TPL', 'team_types/add.htm');
        $this->smarty->assign('pageTitle', 'Team Types - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $team_type   =   $this->teamtypes_model->get_team_type(end($this->uri->segment_array()));
        $this->smarty->assign("team_type", $team_type);
            
        $this->smarty->assign('INNER_TPL', 'team_types/edit.htm');
        $this->smarty->assign('pageTitle', 'Team Types - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->teamtypes_model->add_team_type();
        $this->session->set_flashdata('errors', $this->teamtypes_model->status_msg);
        redirect("/team_types", 'location');
    }
    
    public function delete()
    {
        $this->teamtypes_model->delete_team_type(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->teamtypes_model->status_msg);

        redirect("/team_types", "location");
    }
    
    public function update()
    {
        $this->teamtypes_model->update_team_type();            
        $this->session->set_flashdata('errors', $this->teamtypes_model->status_msg);

        redirect("/team_types", "location");
    }
    
}
