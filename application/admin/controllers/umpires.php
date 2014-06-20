<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set('memory_limit', '-1');

class Umpires extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("users_model");
        $this->load->model("countries_model");
        $this->load->model("states_model");
        $this->load->model("cities_model");
    }

    public function index()
    {
        $players  =   $this->users_model->get_users(3);
        
        $this->smarty->assign("players", $players);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'umpires/list.htm');
        $this->smarty->assign('pageTitle', 'Umpires - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $countries  =   $this->countries_model->get_countries("Active");
        foreach($countries As $key => $value)
        {
            $countries_array[$value['country_id']]  =   $value["country_name"];
        }
        $this->smarty->assign("countries", $countries_array);
        
        $states  =   $this->states_model->get_states("Active");
        foreach($states As $key => $value)
        {
            $states_array[$value['state_id']]  =   $value["state_name"];
        }
        $this->smarty->assign("states", $states_array);
        
        $cities  =   $this->cities_model->get_cities("Active");
        foreach($cities As $key => $value)
        {
            $cities_array[$value['city_id']]  =   $value["city_name"];
        }
        $this->smarty->assign("cities", $cities_array);
        
        $user_groups_for_assign =   array("2" => "Player", "3" => "Umpire", "4" => "Captain");
        $this->smarty->assign("user_groups_for_assign", $user_groups_for_assign);
        
        $this->smarty->assign('INNER_TPL', 'umpires/add.htm');
        $this->smarty->assign('pageTitle', 'Umpires - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->users_model->add_user();
        $this->session->set_flashdata('errors', $this->users_model->status_msg);
        redirect("/umpires", 'location');
    }
    
    public function edit()
    {
        $countries  =   $this->countries_model->get_countries("Active");
        foreach($countries As $key => $value)
        {
            $countries_array[$value['country_id']]  =   $value["country_name"];
        }
        $this->smarty->assign("countries", $countries_array);
        
        $states  =   $this->states_model->get_states("Active");
        foreach($states As $key => $value)
        {
            $states_array[$value['state_id']]  =   $value["state_name"];
        }
        $this->smarty->assign("states", $states_array);
        
        $cities  =   $this->cities_model->get_cities("Active");
        foreach($cities As $key => $value)
        {
            $cities_array[$value['city_id']]  =   $value["city_name"];
        }
        $this->smarty->assign("cities", $cities_array);
        
        $player_detail  =   $this->users_model->get_user(end($this->uri->segment_array()));        
        $this->smarty->assign("player_detail", $player_detail);
        
        
        
        $user_groups_for_assign =   array("2" => "Player", "3" => "Umpire", "4" => "Captain");
        $this->smarty->assign("user_groups_for_assign", $user_groups_for_assign);
        
        $this->smarty->assign("user_group_assigned", $this->users_model->user_groups_assigned);
        
        $this->smarty->assign('INNER_TPL', 'umpires/edit.htm');
        $this->smarty->assign('pageTitle', 'Umpires - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function update()
    {
        //$_POST['group_id']  =   2;
        
        $this->users_model->update_user();
        $this->session->set_flashdata('errors', $this->users_model->status_msg);
        redirect("/umpires", 'location');
    }
}
