<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("users_model");
    }
	
    public function index()
    {
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'users/login.htm');
        $this->smarty->assign('pageTitle', 'Login - '.APP_NAME);

        $this->smarty->view('layout_login');
    }
    
    public function authenticate()
    {
        if( !$this->users_model->authenticate() ) 
        {   
            $this->session->set_flashdata('errors', $this->users_model->status_msg);
            redirect("/users/login");
        } else {
            $this->session->set_userdata(array("user_info" => $this->users_model->user_info ));
            $this->session->set_userdata(array("is_logged_in" => true));
            
            $this->session->set_flashdata('errors', $this->users_model->status_msg);
            redirect("/dashboard");
        }
    }
        
}