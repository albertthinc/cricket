<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Banners Model
 *
 * This is model for all Banners related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Banners
 * @category	Model
 * @author	Albert Virgin V A
*/
class Banners_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_banner_categories($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        
        $result['categories'] =   $this->db
                ->select("*")
                ->order_by("created_on", "DESC")
                ->get("banner_categories")->result_array();
                        
        $this->categories   =   $result['categories'];
        $this->successMsg   =   "Banner categories retrieved successfully.";
        return true;
    }
    
    public function get_banner_pictures($status = "", $banner_category)
    {
        if( empty($banner_category) )
        {
            $this->errorMsg = "Invalid category.";
            return false;
        }
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        
        $category_details   =   $this->db
                ->where("title", $banner_category)
                ->get("banner_categories")
                ->row();
        
        $result['pictures'] =   $this->db
                ->where("category_id", $category_details->category_id)
                ->order_by("created_on", "DESC")
                ->get("banners")->result_array();        
        
        if( count($result['pictures']) > 0 ) {
            foreach($result['pictures'] AS $key => $value) {
                $result['pictures'][$key]['image_path']   =   "http://".$_SERVER["HTTP_HOST"]."/uploads/banners/".$value["category_id"]."/".$value["file_name"];
            }
        }
        
        $this->pictures     =   $result['pictures'];
        $this->successMsg   =   "Success";
        return true;
    }
}