<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Profile controller
 * 
 * @package: Core
 * @module: Profile
 * @created: 01/2014
 * @description: This file handles the profile main controller methods.
 * 
 */

class Profile extends MX_Controller
{
    function __construct()
    {
        parent::__construct();        
        Modules::run("user/is_logged_in");
        
        $this->load->model("user_model");       
        $this->user_model->db    =   $this->db;
    }
    
    public function index()
    {
        $data["user_info"]      =   $this->user_model->get_profile_information();
        $data["view_file"]	=   "user/profile";

        echo Modules::run("templates/single_column", $data);
    }
    
    public function update()
    {
        $data["user_info"]      =   $this->user_model->get_profile_information();
        $data["countriesList"]  =   $this->user_model->get_countries();
        $data["citiesList"]     =   $this->user_model->get_cities();
        $data["statesList"]     =   $this->user_model->get_states();
        
        $data["view_file"]	=   "user/update_profile";

        echo Modules::run("templates/single_column", $data);
    }
    
    public function change_password()
    {
        $data["view_file"]	=	"user/change_password";

        echo Modules::run("templates/single_column", $data);
    }
    
    public function update_password()
    {
        if( !$this->user_model->update_password() )
        {
            $this->session->set_flashdata('errors', $this->user_model->message);
            redirect("/user/profile/change_password");
        } else {
            $this->session->set_flashdata('errors', $this->user_model->message);
            redirect("/user/my_account");
        }
    }
    
    public function update_information()
    {
        if( !$this->user_model->update_profile_information() )
        {
            $this->session->set_flashdata('errors', $this->user_model->message);
            redirect("/user/profile/update");
        } else {
            $this->session->set_flashdata('errors', $this->user_model->message);
            redirect("/user/my_account");
        }
    }
}