<?php
defined('BASEPATH') OR exit('No direct script access allowed');

ini_set("display_errors", "on");
/**
 * Users Model
 *
 * This is model for all Users related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Users
 * @category	Model
 * @author	Albert Virgin V A
*/

class Users_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function authenticate()
    {
        $this->form_validation
                ->set_rules("email_id", "Email ID", "required|valid_email|xss_clean")
                ->set_rules("password", "Password", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $email_id  =   $this->input->post("email_id");
        $password   =   $this->input->post("password");
        
        $userinfo['personal_details']      =   $this->db
                ->where(array("email_id" => $email_id, "passwd" => sha1($password)))
                ->get("users")->row();
        
        if( count($userinfo['personal_details']) == 0 ) {
            $this->status_msg   =   "Invalid user";
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
        
        
        $this->status_msg   =   "";
        $this->user_info    =   $userinfo;
        return true;        
    }
    
    public function get_users($group_id = "")
    {
        $users_condfilter   =   "";
                
        if( !empty($group_id) )
        {
            $userslist  =   $this->db
                    ->where("group_id", $group_id)
                    ->get("user_groups_assigned")
                    ->result_array();
            
            if( count($userslist) > 0 ) {
                foreach($userslist AS $key => $value) {
                    $users[$key]    =   $value["user_id"];
                }
                
                $users_condfilter   =   " AND uga.group_id = ".$group_id." AND uga.user_id IN ('".implode("','", $users)."')";
            } else {
                $users_condfilter   =   " AND uga.group_id = ".$group_id;
            }
        }
        
        /*$result =   $this->db
                ->select("au.*, ag.group_name, c.country_name, s.state_name, cy.city_name")
                ->join("user_groups_assigned AS uga", "uga.user_id = au.user_id ".$users_condfilter)
                ->join("user_groups AS ag", "uga.group_id = ag.group_id ")
                ->join("countries AS c", "c.country_id = au.country_id")
                ->join("states AS s", "s.state_id = au.state_id")
                ->join("cities AS cy", "cy.city_id = au.city_id")
                ->order_by("au.created_on", "desc")
                ->get("users as au")->result_array();*/
        
        if( !empty($users) )
        {
            $result =   $this->db
                ->select("au.*, c.country_name, s.state_name, cy.city_name")
                ->join("countries AS c", "c.country_id = au.country_id", 'left')
                ->join("states AS s", "s.state_id = au.state_id", 'left')
                ->join("cities AS cy", "cy.city_id = au.city_id", 'left')
                ->where_in("au.user_id", $users)
                ->order_by("au.created_on", "desc")
                ->get("users as au")->result_array();
        } else {
            $result =    array();
        }
        
        return $result;
    }
    
    public function get_user($user_id)
    {
        $result =   $this->db->where(array("user_id" => $user_id))->get("users")->row();
        $this->db->flush_cache();
        $tmp =   $this->db->where("user_id", $user_id)->get("user_groups_assigned")->result_array();
        foreach($tmp AS $key => $value)
        {
            $data[$value["group_id"]] = $value["group_id"];
        }
        $this->user_groups_assigned = $data;
        return $result;
    }
    
    public function add_user()
    {  
        $this->form_validation
                ->set_rules('groups', "Group", "required")
                ->set_rules('first_name', 'First Name', 'required')
                ->set_rules('email_id', 'Email ID', 'required|is_unique[users.email_id]')
                //->set_rules('user_name', 'User Name', 'required')
                ->set_rules('password', 'Password', 'required|matches[confirm_password]')
                ->set_rules('confirm_password', 'Confirm Password', 'required')
                ->set_rules('address1', 'Address 1', 'required')
                ->set_rules('cell_phone', 'Cell Phone', 'required')
                ->set_rules('dob', 'Date of Birth', 'required')
                ->set_rules('biography', 'Biography', 'required')
                ->set_rules('country_id', 'Country', 'required')
                ->set_rules('state_id', 'State', 'required')
                ->set_rules('city_id', 'City', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $userdata   =   
        $data   =   array(
            "first_name"    =>  $this->input->post("first_name"),
            "last_name"     =>  $this->input->post("last_name"),
            "email_id"      =>  $this->input->post("email_id"),
            "address1"      =>  $this->input->post("address1"),
            "address2"      =>  $this->input->post("address2"),
            "home_phone"    =>  $this->input->post("home_phone"),
            "cell_phone"    =>  $this->input->post("cell_phone"),
            "work_phone"    =>  $this->input->post("work_phone"),
            "dob"           =>  date("Y-m-d", strtotime($this->input->post("dob"))),
            "native"        =>  $this->input->post("native"),
            "style"         =>  $this->input->post("style"),
            "biography"     =>  $this->input->post("biography"),
            "country_id"    =>  $this->input->post("country_id"),
            "state_id"      =>  $this->input->post("state_id"),
            "city_id"       =>  $this->input->post("city_id"),
            "passwd"        =>  sha1($this->input->post("password")),
            "status"        =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        
        //$this->db->trans_begin();
        
        if( !$this->db->insert("users", $data) )
        {
            $this->status_msg   =   "Adding user failed";
            //$this->db->trans_rollback();
            return false;
        }
        
        $this->user_id   =   $this->db->insert_id();
        
        $groups =   $this->input->post("groups");
        
        foreach($groups AS $key => $value)
        {
            $this->db
                ->insert("user_groups_assigned", array(
                    "user_id"       =>  $this->user_id, 
                    "group_id"      =>  $value, 
                    "created_on"    =>  date('Y-m-d H:i:s',now()),
                    "created_by"    =>  CURRENT_USER_ID,
                    "modified_on"   =>  date('Y-m-d H:i:s',now()),
                    "modified_by"   =>  CURRENT_USER_ID,
                    "modified_ts"   =>  date('Y-m-d H:i:s',now())
                    ));
        }
        $this->status_msg   =   "User added successfully";
        
        self::_upload_small_image();
        
        return true;
    }
    
    private function _upload_small_image()
    {
        $upload_folder  =   $_SERVER['DOCUMENT_ROOT']."/uploads/profile/"; 
        
        $config['upload_path']      = $upload_folder;
        $config['allowed_types']    = 'gif|jpg|png';
        $config['file_name']        =   $this->user_id;
        $config['max_size']         = '30000';
        $config['encrypt_name']     = TRUE;
        $config['remove_spaces']    = TRUE;
        $config['overwrite']        = TRUE;
        
        $this->load->library('upload', $config);
        
        if( !empty($_FILES["profile_picture"]["name"]) )
        {
            if( !$this->upload->do_upload("profile_picture") )
            {
                $this->status_msg .= $this->upload->display_errors();
                return false;
            }
            
            $data   =   $this->upload->data();
            
            $config['image_library'] = 'gd2';
            $config['source_image']	= $data['full_path'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']	 = 75;
            $config['height']	= 50;

            $this->load->library('image_lib', $config); 

            $this->image_lib->resize();
        }
    }
    
    public function update_user()
    {
        $this->form_validation
                ->set_rules('user_id', "User ID", "required|numeric")
                ->set_rules('groups', "Group", "required")
                ->set_rules('first_name', 'First Name', 'required')
                ->set_rules('email_id', 'Email ID', 'required')
                //->set_rules('user_name', 'User Name', 'required')
                ->set_rules('password', 'Password', 'matches[confirm_password]')
                ->set_rules('address1', 'Address 1', 'required')
                ->set_rules('cell_phone', 'Cell Phone', 'required')
                ->set_rules('dob', 'Date of Birth', 'required')
                ->set_rules('biography', 'Biography', 'required')
                ->set_rules('country_id', 'Country', 'required')
                ->set_rules('state_id', 'State', 'required')
                ->set_rules('city_id', 'City', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }        
        
        $this->user_id  =   $this->input->post("user_id");
        
        $data   =   array(
            "first_name"    =>  $this->input->post("first_name"),
            "last_name"     =>  $this->input->post("last_name"),
            "email_id"      =>  $this->input->post("email_id"),
            "address1"      =>  $this->input->post("address1"),
            "address2"      =>  $this->input->post("address2"),
            "home_phone"    =>  $this->input->post("home_phone"),
            "cell_phone"    =>  $this->input->post("cell_phone"),
            "work_phone"    =>  $this->input->post("work_phone"),
            "dob"           =>  date("Y-m-d", strtotime($this->input->post("dob"))),
            "native"        =>  $this->input->post("native"),
            "style"         =>  $this->input->post("style"),
            "biography"     =>  $this->input->post("biography"),
            "country_id"    =>  $this->input->post("country_id"),
            "state_id"      =>  $this->input->post("state_id"),
            "city_id"       =>  $this->input->post("city_id"),            
            "status"        =>  $this->input->post("status"),
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        $password   =   $this->input->post("password");
        if( !empty($password) )
        {
            $data["passwd"] =   sha1($this->input->post("password"));
        }       
        
        //$this->db->trans_begin();
        
        if( !$this->db->where("user_id", $this->user_id)->update("users", $data) )
        {
            $this->status_msg   =   "Updating user failed";
            //$this->db->trans_rollback();
            return false;
        }       
        
        $groups =   $this->input->post("groups");
        $this->db->flush_cache();
        $this->db->where("user_id", $this->user_id)->delete("user_groups_assigned");
        $this->db->flush_cache();
        foreach($groups AS $key => $value)
        {
            $this->db
                ->insert("user_groups_assigned", array(
                    "user_id"       =>  $this->user_id, 
                    "group_id"      =>  $value, 
                    "created_on"    =>  date('Y-m-d H:i:s',now()),
                    "created_by"    =>  CURRENT_USER_ID,
                    "modified_on"   =>  date('Y-m-d H:i:s',now()),
                    "modified_by"   =>  CURRENT_USER_ID,
                    "modified_ts"   =>  date('Y-m-d H:i:s',now())
                    ));
        }
        
        $this->status_msg   =   "User updated successfully";
        
        if( !empty($_FILES["profile_picture"]["name"]) )
        {
         self::_upload_small_image();
        }
        
        return true; 
                
    }
    
    public function delete_user( $user_id )
    {
        $check  =   $this->db->where("user_id", $user_id)
                ->get("team_players")
                ->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg   =   "User cannot be deleted. Already assigned to a team.";
            return false;
        }
        
        $this->db
                ->where("user_id", $user_id);
        
        if( !$this->db->delete("users") ) 
        {
            $this->status_msg   =   "Deleting user failed.";
            return false;
        }
        
        $this->status_msg   =   "User deleted successfully.";
        return true;
    }
    
    public function get_site_users()
    {
        $result =   $this->db
                ->join("admin_groups AS ag", "ag.group_id = u.admin_group_id")
                ->where("u.status != ", "UserAdded")->get("users AS u")->result_array();
        
        return $result;
    }
    
    public function get_site_user($user_id)
    {
        $result =   $this->db
                ->join("admin_groups AS ag", "ag.group_id = u.admin_group_id")
                ->where(array("u.status !=" => "UserAdded", "user_id" => $user_id))->get("users AS u")->row();
        
        return $result;
    }
    
    public function add_siteuser()
    {
        $this->form_validation
                ->set_rules('user_id', "User ID", "required|numeric")
                ->set_rules('group_id', "Group", "required|numeric")
                ->set_rules('serviceline_id', "Service lines", "required")
                ->set_rules('first_name', 'First Name', 'required')
                ->set_rules('email_id', 'Email ID', 'required|is_unique[admin_users.email_id]')
                //->set_rules('user_name', 'User Name', 'required')
                ->set_rules('password', 'Password', 'required|matches[confirm_password]')
                ->set_rules('confirm_password', 'Confirm Password', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $data   =   array(
            "first_name"    =>  $this->input->post("first_name"),
            "last_name"     =>  $this->input->post("last_name"),
            "email_id"      =>  $this->input->post("email_id"),
            //"user_name"      =>  $this->input->post("user_name"),
            "group_id"      =>  $this->input->post("group_id"),
            "passwd"        =>  sha1($this->input->post("password")),
            "status"        =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  $this->session->userdata("user_info")->admin_id,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  $this->session->userdata("user_info")->admin_id,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        
        //$this->db->trans_begin();
        
        if( !$this->db->insert("admin_users", $data) )
        {
            $this->status_msg   =   "Adding user failed";
            //$this->db->trans_rollback();
            return false;
        }
        
        $admin_id   =   $this->db->insert_id();
        
        $servicelines   =   $this->input->post("serviceline_id");
        
        $this->db->where(array("admin_id" => $admin_id))->delete("admin_users_servicelines");
        
        $data1 = "";
        foreach( $servicelines AS $key=>$value )
        {
            $data1[$key] =   array(
              "admin_id" =>  $admin_id,
              "serviceline_id"  =>  $value,
              "modified_ts"   =>  date('Y-m-d H:i:s',now())
            );
        }
        if( !$this->db->insert_batch("admin_users_servicelines", $data1) )
        {
            $this->errorMsg =   "Error inserting service lines. Try again later.";
            return false;
        }
        
        //$this->db->trans_commit();
        
        //Update users table
        $this->db
                ->where(array("user_id" => $this->input->post("user_id")))
                ->update("users", array("status" => "UserAdded", "admin_id" => $admin_id));
                
        $this->status_msg   =   "User added successfully";
        
        //self::_send_email();
        return true;
    }
    
    public function delete_siteuser($user_id)
    {
        $this->db
                ->where("user_id", $user_id)
                ->update("users", array("status" => "Rejected"));
        
        $this->status_msg   =   "User updated successfully";
        return true;                
    }
    
    private function _send_email()
    {
        $email_id   =   $this->input->post("email_id");
        $name       =   $this->input->post("first_name")." ".$this->input->post("last_name");
        $password   =   $this->input->post("password");
        
        $config = array(            
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        
        $this->load->library('email', $config);

        $this->email->from('no-reply@whatarage.com', 'Rage Communications');
        $this->email->to($email_id); 
        $this->email->bcc('albert.thinc@gmail.com'); 
        //$this->email->mailtype('html');
        $this->email->subject('Administrator - Approval');
        
        $message    =   "Hi ".$name.'<br/><br/>'
                . 'Admin has approved your login request. <br/> Please login with the below credentials.<br/><br/>'
                . '<b>Email ID :</b> '.$email_id.'<br/>'
                . '<b>Password :</b> '.$password. '<br/><br/>'
                . 'Regards <br/>'
                . 'Rage Admin';
        
        $this->email->message($message);

        if( !$this->email->send() )
        {
            $this->status_msg   =   "Sending mail failed.";
            return false;
        }
        
        return true;
    }
    
    public function get_list_of_users($filter = "")
    {
        $this->db
                ->where_not_in('group_id', array('1', '14'));
        
        if( !empty($filter) )
        {
            $this->db->where("group_id", $filter);
        }
        $results    =   $this->db->get("admin_users")->result_array();
        
        return $results;
    }
    
    public function add_assignedusers()
    {
        $this->form_validation
                ->set_rules("assigned_to_user_id", "Admin to be assigned", "required")
                ->set_rules("admin_id", "Users", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        //Remove previous assigned users.
        $this->db->where(array("assigned_to_user_id" => $this->input->post("assigned_to_user_id")))->delete( "admin_users_assigned");
        //Remove previous assigned users.
        
        $admin_ids  =   $this->input->post("admin_id");
        
        foreach( $admin_ids AS $key=>$value )
        {
            $data[$key]["assigned_to_user_id"] =   $this->input->post("assigned_to_user_id");
            $data[$key]["admin_id"] =   $value;
            $data[$key]["modified_ts"] =   date('Y-m-d H:i:s',now());
        }
        
        if( !$this->db->insert_batch("admin_users_assigned", $data) )
        {
            $this->status_msg   =   "Failed assigning users. Please try again later.";
            return false;
        }
        
        $this->status_msg   =   "Assigned users successfully.";
        
        return true;
    }
    
    public function get_assigned_users_list()
    {
         $result =   $this->db
                ->select("s.*, CONCAT(au.first_name, ' ', au.last_name ) as full_name, GROUP_CONCAT(distinct au1.first_name) AS users ", FALSE)
                ->join("admin_users AS au", "s.assigned_to_user_id = au.admin_id")
                ->join("admin_users AS au1", "s.admin_id = au1.admin_id")
                ->group_by("s.assigned_to_user_id")
                ->get("admin_users_assigned AS s")->result_array();
         
        return $result;
    }
    
    public function get_list_of_users_assigned($admin_id)
    {
        $results    =   $this->db
                ->where("assigned_to_user_id", $admin_id)
                ->get("admin_users_assigned")->result_array();
        
        return $results;
    }
    
    public function delete_assigns($admin_id)
    {
        $this->db->where(array("assigned_to_user_id" => $admin_id))
                ->delete("admin_users_assigned");
        
        $this->status_msg   =   "Assigns deleted successfully.";
        return true;
                
    }
    
    public function get_user_servicelines($admin_id)
    {
        $results    =   $this->db
                ->join("servicelines AS sl", "sl.serviceline_id = aus.serviceline_id")
                ->where(array("aus.admin_id" => $admin_id))
                ->get("admin_users_servicelines AS aus")
                ->result_array();
        
        return $results;
    }
    
    public function get_team_players($team_id)
    {
        if(empty($team_id))
        {
            $this->staus_msg    =   "Please select a team";
            return false;
        }
        
        $result =   $this->db
                ->select("tp.season, t.team_id, tp.team_player_id, t.team_name, CONCAT(u.first_name, ' ', u.last_name) AS player_name, u.email_id", false)
                ->join("teams as t", "t.team_id = tp.team_id")
                ->join("users AS u", "u.user_id = tp.user_id")
                ->where("tp.team_id", $team_id)
                ->order_by("tp.season", "DESC")
                ->get("team_players as tp")
                ->result_array();
        
        return $result;
    }
    
    public function delete_teamplayer($team_player_id)
    {
        if(empty($team_player_id))
        {
            $this->staus_msg    =   "Invalid player id";
            return false;
        }
        
        if( !$this->db->where("team_player_id", $team_player_id)->delete("team_players") )
        {
            $this->status_msg   =   "Deleting player failed. Try again";
            return false;
        }
        
        $this->status_msg   =   "";
        return true;
    }
    
    public function add_teamplayer()
    {
        $this->form_validation
                ->set_rules("season", "Season", "required")
                ->set_rules("team_id", "Team", "required")
                ->set_rules("user_id", "Player", "required");
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg   = validation_errors();
            return false;
        }
        
        $data   =   array(
            "season"   =>  $this->input->post("season"),
            "team_id"   =>  $this->input->post("team_id"),
            "user_id"   =>  $this->input->post("user_id"),
            "modified_ts"   =>  date('Y-m-d H:i:s',now())
        );
        
        if( !$this->db->insert("team_players", $data) )
        {
            $this->status_msg   =   "Failed adding player.";
            return false;
        }
        
        $this->status_msg   =   "Player added successfully.";
        return true;
    }
}