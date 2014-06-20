<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User Model
 *
 * This is model for all User related operations.
 *
 * @package     CodeIgniter
 * @subpackage	User
 * @category	Model
 * @author	Albert Virgin V A
*/
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        if( isset($this->session->userdata["personal_details"]) ) {
            $this->user_id  =   $this->session->userdata["personal_details"]->user_id;
        }
    }
    
    
    public function authenticate()
    {
        $this->form_validation
                ->set_rules("uname", "Email ID", "required|valid_email|xss_clean")
                ->set_rules("passwd", "Password", "required|xss_clean");
        
        if( !$this->form_validation->run() ) {
            $this->message  = validation_errors();
            return false;
        }
        
        $this->username =   $this->input->post("uname");
        $this->password =   $this->input->post("passwd");
        
        $userinfo['personal_details']  =   $this->db
                ->select("user_id, first_name, last_name, email_id, profile_update")
                ->where(array("email_id" => $this->username, "passwd" => sha1($this->password)))
                ->get("users")
                ->row();
        
        if( count($userinfo['personal_details']) == 0 ) {
            $this->message  =   "Invalid user credentials";
            return false;        
        }
        
        $group_data        = $this->db
                ->select("group_id")
                ->where(array("user_id" => $userinfo['personal_details']->user_id))
                ->get("user_groups_assigned")->result_array();
        
        if( count($group_data) > 0 )
        {
            foreach($group_data As $key=>$value)
            {
                $data[$key] =   $value["group_id"];
            }
        }
        
        $userinfo["groups_assigned"] =   $data;
        
        $this->message  =   "";
        $this->user_info    =   $userinfo;
        return true;
    }
    
    public function get_profile_information()
    {
        $userdata   =   $this->session->userdata;
        $this->current_user_id  =   $userdata["personal_details"]->user_id;
        
        $result =   $this->db
                ->select("u.*, c.country_name, ct.city_name, s.state_name")
                ->join("countries AS c", "u.country_id = c.country_id", 'left')
                ->join("cities AS ct", "u.city_id = ct.city_id", 'left')
                ->join("states AS s", "u.state_id = s.state_id", 'left')
                ->where(array("u.user_id" => $this->current_user_id))
                ->get("users AS u")
                ->row();
        
        return $result;
    }
    
    public function update_password()
    {
        $this->form_validation
                ->set_rules('old_password', 'Old Password', "required|min_length[5]")
                ->set_rules('new_password', 'New Password', 'required|min_length[5]|matches[confirm_password]')
                ->set_rules('confirm_password', 'Confirm Password', 'required|min_length[5]');
        
        if( !$this->form_validation->run() ) 
        {
            $this->message  = validation_errors();
            return false;
        }
        
        $check  =   $this->db
                ->where(array("user_id" => $this->user_id, "passwd" => sha1($this->input->post("old_password"))))
                ->get("users")
                ->num_rows();
        
        if( $check == 0 ) {
            $this->message  =   "Invalid old password. Try again.";
            return false;
        }
        
        $update =   $this->db
                ->where(array("user_id" => $this->user_id, "passwd" => sha1($this->input->post("old_password"))))
                ->update("users", array("passwd" => sha1($this->input->post("confirm_password"))));
        
        if( !$update ) {
            $this->message  =   "Invalid old password. Try again.";
            return false;
        }
        
        $this->message  =   "Password updated successfully";
        return true;
    }
    
    public function get_countries() {
        $countries  =   $this->db
                ->select("country_id, country_name")
                ->get("countries")
                ->result_array();
        $countriesData['']  =   "Country";
        foreach( $countries AS $key => $value ) {
            $countriesData[$value["country_id"]]    =   $value["country_name"];
        }
       return $countriesData;
    }
    
    public function get_cities() {
        $cities  =   $this->db
                ->select("city_id, city_name")
                ->get("cities")
                ->result_array();
        $citiesData[''] =   'City';
        foreach( $cities AS $key => $value ) {
            $citiesData[$value["city_id"]]    =   $value["city_name"];
        }
       return $citiesData;
    }
    
    public function get_states() {
        $states  =   $this->db
                ->select("state_id, state_name")
                ->get("states")
                ->result_array();
        $statesData[''] =   'State';
        foreach( $states AS $key => $value ) {
            $statesData[$value["state_id"]]    =   $value["state_name"];
        }
       return $statesData;
    }
    
    public function update_profile_information()
    {
        $this->form_validation
                ->set_rules("first_name", "First Name", "required")
                ->set_rules("gender", "Gender", "required")
                ->set_rules("dob", "Date of Birth", "required")
                ->set_rules("address1", "Address 1", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->message  = validation_errors();
            return false;
        }
        
        $data   =   array(
            "first_name"    =>  $this->input->post("first_name"),
            "last_name"    =>  $this->input->post("last_name"),
            "gender"    =>  $this->input->post("gender"),
            "dob"    =>  date("Y-m-d", strtotime($this->input->post("dob"))),
            "address1"    =>  $this->input->post("address1"),
            "address2"    =>  $this->input->post("address2"),
            "city_id"    =>  $this->input->post("city_id"),
            "state_id"    =>  $this->input->post("state_id"),
            "country_id"    =>  $this->input->post("country_id"),
            "pin_code"    =>  $this->input->post("pin_code"),
            "home_phone"    =>  $this->input->post("home_phone"),
            "work_phone"    =>  $this->input->post("work_phone"),
            "cell_phone"    =>  $this->input->post("cell_phone"),
            "native"    =>  $this->input->post("native"),
            "style"    =>  $this->input->post("style"),
            "biography"    =>  $this->input->post("biography"),
            "profile_update"    =>  '1'
        );
        
        if( !$this->db->where("user_id", $this-user_id)->update("users", $data) )
        {
            $this->message  =   "Updating profile information failed. Try again.";
            return false;
        }
        
        $this->message  =   "Profile updated successfully.";
        return true;
    }
}