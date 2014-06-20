<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * News Model
 *
 * This is model for all News related operations.
 *
 * @package     CodeIgniter
 * @subpackage	News
 * @category	Model
 * @author	Albert Virgin V A
*/
class News_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
    public function get_news($is_featured = "")
    {
        if( !empty($is_featured) ) {
            $this->db->where("is_featured", $is_featured);
        }
        $results    =   $this->db
                ->where(array("status" => "Active"))
                ->get("news")
                ->result_array();
        
        return $results;
    }
    
    public function get_news_detail($news_id)
    {
        if( empty($news_id) ) {
            return false;
        }
        
        $this->db->where("news_id", $news_id);
        
        $result =   $this->db
                ->where("status", "Active")
                ->get("news")
                ->row();
        
        return $result;
                
    }
}