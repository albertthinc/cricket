<?php
ini_set("display_errors", "on");
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in()
{
    $CI =& get_instance();
    $is_logged_in = $CI->session->userdata('is_logged_in');
    if(!isset($is_logged_in) || $is_logged_in != true)
    {
        redirect("/users/login", 'location');        
        //$this->load->view('login_form');
    }       
    
    $userdata   =   $CI->session->userdata("user_info");
    define("CURRENT_USER_ID", $userdata["personal_details"]->user_id );
}
