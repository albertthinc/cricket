<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Match_types extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("matchtypes_model");
        $this->load->model("teamtypes_model");
    }

    public function index()
    {
        $match_types  =   $this->matchtypes_model->get_match_types();
        
        $this->smarty->assign("match_types", $match_types);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'match_types/list.htm');
        $this->smarty->assign('pageTitle', 'Match Types - '.APP_NAME);
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
        
        $this->smarty->assign('INNER_TPL', 'match_types/add.htm');
        $this->smarty->assign('pageTitle', 'Match Types - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $team_types_arr =   $this->teamtypes_model->get_team_types("Active");
        foreach( $team_types_arr AS $key => $value )
        {
            $data_team_types[$value['team_type_id']]    =   $value["team_type"];
        }        
        $this->smarty->assign("team_types", $data_team_types);
        
        $match_type   =   $this->matchtypes_model->get_match_type(end($this->uri->segment_array()));
        $this->smarty->assign("match_type", $match_type);
            
        $this->smarty->assign('INNER_TPL', 'match_types/edit.htm');
        $this->smarty->assign('pageTitle', 'Match Types - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->matchtypes_model->add_match_type();
        $this->session->set_flashdata('errors', $this->matchtypes_model->status_msg);
        redirect("/match_types", 'location');
    }
    
    public function delete()
    {
        $this->matchtypes_model->delete_match_type(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->matchtypes_model->status_msg);

        redirect("/match_types", "location");
    }
    
    public function update()
    {
        $this->matchtypes_model->update_match_type();            
        $this->session->set_flashdata('errors', $this->matchtypes_model->status_msg);

        redirect("/match_types", "location");
    }
    
}
