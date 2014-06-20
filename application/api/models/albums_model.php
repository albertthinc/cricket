<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Albums Model
 *
 * This is model for all Albums related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Albums
 * @category	Model
 * @author	Albert Virgin V A
*/
class Albums_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_albums($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        
        $result['albums'] =   $this->db
                ->select("album_id, title, short_description, description, preview_image, status, created_on")
                ->order_by("created_on", "DESC")
                ->get("albums")->result_array();
        
        if( count($result['albums']) > 0 ) {
            foreach($result['albums'] AS $key => $value) {      
                $result['albums'][$key]['image_path']   =   "http://".$_SERVER["HTTP_HOST"]."/uploads/albums/".$value["album_id"]."/";
            }
        }
        
        $this->albums   =   $result['albums'];
        $this->successMsg   =   "Albums retrieved successfully.";
        return true;
    }
    
    public function get_album_pictures($status = "", $album_id)
    {
        if( empty($album_id) )
        {
            $this->errorMsg = "Invalid album id.";
            return false;
        }
        if( !empty($status) )
        {
            $this->db->where(array("p.status" => $status));
        }
        
        $result['pictures'] =   $this->db
                ->select("p.album_id,p.title AS picture_title, p.description AS picture_description, a.title AS album_title, a.short_description AS album_short_description, a.preview_image, p.created_on AS picture_created_on, p.file_name")
                ->join("albums As a", "a.album_id = p.album_id")
                ->where("p.album_id", $album_id)
                ->order_by("p.created_on", "DESC")
                ->get("photos AS p")->result_array();        
        
        if( count($result['pictures']) > 0 ) {
            foreach($result['pictures'] AS $key => $value) {      
                $result['pictures'][$key]['album_image_path']   =   "http://".$_SERVER["HTTP_HOST"]."/uploads/albums/".$value["album_id"]."/".$value["preview_image"];
                $result['pictures'][$key]['image_path']   =   "http://".$_SERVER["HTTP_HOST"]."/uploads/albums/".$value["album_id"]."/photos/".$value["file_name"];
            }
        }
        
        $this->pictures     =   $result['pictures'];
        $this->successMsg   =   "Success";
        return true;
    }
}