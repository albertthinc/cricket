<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Venues Model
 *
 * This is model for all venues related operations.
 *
 * @package     CodeIgniter
 * @subpackage	venues
 * @category	Model
 * @author	Albert Virgin V A
*/
class Venues_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_venues($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $result =   $this->db->get("venues")->result_array();
        
        return $result;
    }
    
    public function get_venue($venue_id)
    {
        $result =   $this->db
                ->where(array("venue_id" => $venue_id))->get("venues")->row();
        
        return $result;
    }
    
    public function add_venue()
    {
        $this->form_validation
                ->set_rules('venue_name', 'Venue Name', 'required|is_unique[venues.venue_name]')
                ->set_rules('venue_description', 'Description', 'required|xss_clean')
                ->set_rules('venue_address', 'Address', 'required|xss_clean')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $new_geocode    =   self::_get_geocode($this->input->post("venue_address"));
        
        $data    =   array(
            "venue_name" =>  $this->input->post("venue_name"),
            "venue_description" =>  $this->input->post("venue_description"),
            "venue_address" =>  $this->input->post("venue_address"),
            "latitude"      => $new_geocode['latitude'],
            "longitude"     => $new_geocode['longitude'],
            "status"         =>  $this->input->post("status"),
            "created_on"    =>  date('Y-m-d H:i:s',now()),
            "created_by"    =>  CURRENT_USER_ID,
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        $this->db->trans_begin();
       
        if( !$this->db->insert("venues", $data) )
        {
            $this->status_msg  =   "Adding venue failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Venue added successfully";
        return true;
    }
    
    public function update_venue()
    {
        $this->form_validation
                ->set_rules('venue_id', 'Venue ID', 'required')
                ->set_rules('venue_name', 'Venue Name', 'required')
                ->set_rules('venue_description', 'Venue Description', 'required')
                ->set_rules('venue_address', 'Venue Address', 'required')
                ->set_rules('status', 'Status', 'required');
        
        if( !$this->form_validation->run() )
        {
            $this->status_msg = validation_errors();            
            return false;
        }      
        
        $check  =   $this->db
                ->where(array("venue_id !=" => $this->input->post("venue_id"), "venue_name" => $this->input->post("venue_name")))
                ->get("venues")->num_rows();
        
        if( $check > 0 ) {
            $this->status_msg = "Venue already available";
            return false;
        }
        
        $new_geocode    =   self::_get_geocode($this->input->post("venue_address"));
        
        $data    =   array(
            "venue_name" =>  $this->input->post("venue_name"),
            "venue_description" =>  $this->input->post("venue_description"),
            "venue_address" =>  $this->input->post("venue_address"),
            "latitude"      => $new_geocode['latitude'],
            "longitude"     => $new_geocode['longitude'],
            "status"         =>  $this->input->post("status"),            
            "modified_on"   =>  date('Y-m-d H:i:s',now()),
            "modified_by"   =>  CURRENT_USER_ID,
            "modified_ts"   =>  date('Y-m-d H:i:s',now())    
        );
        
        
        $this->db->trans_begin();
        
        $this->db->where("venue_id", $this->input->post("venue_id"));
        if( !$this->db->update("venues", $data) )
        {
            $this->status_msg  =   "Updating venue failed. Try again";
            $this->db->trans_rollback();
            return false;                   
        }

        $this->db->trans_commit();
        
        $this->status_msg   =   "Venue upated successfully";
        return true;
    }
    
    public function delete_venue( $venue_id )
    {
        $check  =   $this->db
                ->where("venue_id", $venue_id)
                ->get("teams")
                ->num_rows();
        
        if( $check > 0 )
        {
            $this->status_msg   =   "Teams exists under this venue. Cannot delete this venue";
            return false;
        }
                
        $this->db
                ->where("venue_id", $venue_id);
        
        if( !$this->db->delete("venues") ) 
        {
            $this->status_msg   =   "Deleting venue failed.";
            return false;
        }
        
        $this->status_msg   =   "Venue deleted successfully.";
        return true;
    }
    
    private function _get_geocode($address)
    {
        $geocode            =   file_get_contents("http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($address)."&sensor=false");
        $output             =   json_decode($geocode);
        
        $lat    = $output->results[0]->geometry->location->lat;
        $long   = $output->results[0]->geometry->location->lng;
        
        return $result = array('latitude' => $lat, 'longitude' => $long);
    }
    
}