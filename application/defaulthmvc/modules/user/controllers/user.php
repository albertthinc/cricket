<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * User controller
 * 
 * @package: Core
 * @module: User
 * @created: 01/2014
 * @description: This file handles the Banners main controller methods.
 * 
 */

class User extends MX_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->model("user_model");       
        $this->user_model->db    =   $this->db;
    }
    
    public function is_logged_in()
    {
        $session    =   $this->session->userdata;
        if( !$session['is_logged_in_site'] ) {
            redirect("/user/login");
        } 
    }
    
    public function index()
    {
        
    }
    
    public function login()
    {
        $data["view_file"]	=	"user/login";

        echo Modules::run("templates/single_column", $data);
    }
    
    public function authenticate()
    {
        if( !$this->user_model->authenticate() ) {
            $this->session->set_flashdata('errors', $this->user_model->message);
            redirect("/user/login");
        } else {
            $this->session->set_userdata($this->user_model->user_info);
            $this->session->set_userdata(array("is_logged_in_site" => true));
            
            $this->session->set_flashdata('errors', $this->user_model->message);
            
            if( $this->session->userdata["personal_details"]->profile_update == 0 ) {
                redirect("/user/profile/update/");
            } else {
                redirect("/");
            }
            
        }
    }
    
    public function logout()
    {
        $this->session->set_userdata(array("is_logged_in_site" => false));        
        //redirect("/users/login", 'location');
        header("Location: /user/login/");
        exit;
    }
}