<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roles extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        is_logged_in();
        
        $this->load->model("usergroups_model");
    }
    
    public function index()
    {
        $user_groups  =   $this->usergroups_model->get_user_groups();
        
        $this->smarty->assign("user_groups", $user_groups);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        
        $this->smarty->assign('INNER_TPL', 'users/roles/list.htm');
        $this->smarty->assign('pageTitle', 'User Groups - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $this->smarty->assign('INNER_TPL', 'users/roles/add.htm');
        $this->smarty->assign('pageTitle', 'Add User Group - '.APP_NAME);

        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->usergroups_model->add_usergroup();            
        $this->session->set_flashdata('errors', $this->usergroups_model->status_msg);

        redirect("/users/roles", "location");
    }
    
    public function edit()
    {
        $user_group   =   $this->usergroups_model->get_admin_usergroup(end($this->uri->segment_array()));
        
        $this->smarty->assign("user_group", $user_group);
        $this->smarty->assign('INNER_TPL', 'users/roles/edit.htm');
        $this->smarty->assign('pageTitle', 'Edit User Group - '.APP_NAME);

        $this->smarty->view('layout_master');
    }
    
    public function update()
    {
        $this->usergroups_model->update_usergroup();            
        $this->session->set_flashdata('errors', $this->usergroups_model->status_msg);

        redirect("/users/roles/", "location");
    }
    
    public function delete()
    {
        $this->usergroups_model->delete_usergroup(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->usergroups_model->status_msg);

        redirect("/users/roles", "location");
    }    
}