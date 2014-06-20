<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Assign extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        is_logged_in();
        
        $this->load->model("users_model");
    }
    
    public function index()
    {
        $users      =   $this->users_model->get_assigned_users_list();        
        $siteusers  =   $this->users_model->get_site_users();
        
        $this->smarty->assign("siteusers", $siteusers);
        
        $this->smarty->assign("users", $users);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        
        $this->smarty->assign('INNER_TPL', 'users/assign/list.htm');
        $this->smarty->assign('pageTitle', 'User Assign - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {        
        $users    =   $this->users_model->get_list_of_users();
        foreach( $users AS $key=>$value )
        {
            $users_selbox[$value['admin_id']]    =   $value["first_name"]." ".$value["last_name"];
        }
        $this->smarty->assign("users", $users_selbox);
        
        $this->smarty->assign("assign_users", $users_selbox);
        
        $this->smarty->assign('INNER_TPL', 'users/assign/add.htm');
        $this->smarty->assign('pageTitle', 'Assign User - '.APP_NAME);

        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->users_model->add_assignedusers();            
        $this->session->set_flashdata('errors', $this->users_model->status_msg);

        redirect("/users/assign", "location");
    }
    
    public function edit()
    {
        $user       =   $this->users_model->get_list_of_users_assigned(end($this->uri->segment_array()));
        
        foreach( $user AS $key=>$value )
        {
            $user_selected[$value['admin_id']]  =   $value['admin_id'];
        }
        
        $this->smarty->assign("user_selected", $user_selected);
        $this->smarty->assign("assigned_to_user_id", end($this->uri->segment_array()));
        
        $users      =   $this->users_model->get_list_of_users();
        foreach( $users AS $key=>$value )
        {
            $users_selbox[$value['admin_id']]    =   $value["first_name"]." ".$value["last_name"];
        }
        $this->smarty->assign("users", $users_selbox);
        
        $this->smarty->assign("assign_users", $users_selbox);

        $this->smarty->assign("user", $user);
        $this->smarty->assign('INNER_TPL', 'users/assign/edit.htm');
        $this->smarty->assign('pageTitle', 'Edit assigns - '.APP_NAME);

        $this->smarty->view('layout_master');
    }
    
    public function update()
    {
        $this->users_model->update_user();
        $this->session->set_flashdata('errors', $this->users_model->status_msg);

        redirect("/users/master/", "location");
    }
    
    public function delete()
    {
        $this->users_model->delete_assigns(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->users_model->status_msg);

        redirect("/users/assign", "location");
    }    
    
    public function siteuseredit()
    {
        $this->load->helper("string");
        
        $user   =   $this->users_model->get_site_user(end($this->uri->segment_array()));
        
        $this->load->model("usergroups_model");
        
        $user_groups    =   $this->usergroups_model->get_user_groups();
        foreach( $user_groups AS $key=>$value )
        {
            $user_groups_selbox[$value['group_id']]    =   $value["group_name"];
        }
        
        $this->load->model("servicelines_model");
        $servicelines   =   $this->servicelines_model->get_servicelines("Active");
        
        foreach( $servicelines AS $key=>$value )
        {
            $sercicelines_selbox[$value['serviceline_id']]    =   $value["serviceline"];
        }
        $this->smarty->assign("servicelines", $sercicelines_selbox);
        
        $this->smarty->assign("user_groups", $user_groups_selbox);

        $this->smarty->assign("user", $user);
        
        $this->smarty->assign("random_password", random_string('alnum', 10));
        $this->smarty->assign('INNER_TPL', 'users/master/siteuser_edit.htm');
        $this->smarty->assign('pageTitle', 'Edit User - '.APP_NAME);

        $this->smarty->view('layout_master');
    }
    
    public function siteuseradd()
    {
        $this->users_model->add_siteuser();            
        $this->session->set_flashdata('errors', $this->users_model->status_msg);

        redirect("/users/master", "location");
    }
    
    public function siteuserdelete()
    {
        $this->users_model->delete_siteuser(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->users_model->status_msg);

        redirect("/users/master", "location");
    }
}