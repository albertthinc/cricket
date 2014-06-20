<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("users_model");
    }
	
    public function index()
    {
        $this->session->set_userdata(array("is_logged_in" => false,"is_logged_in_front" => false, "user_info" => array()));        
        //redirect("/users/login", 'location');
        header("Location: /admin/");
        exit;
    }    
        
}