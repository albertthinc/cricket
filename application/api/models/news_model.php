<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
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
    
    public function get_newsitems($status = "")
    {
        if( !empty($status) )
        {
            $this->db->where(array("status" => $status));
        }
        $result['newsitems'] =   $this->db
                ->order_by("created_on", "DESC")
                ->get("news")->result_array();
        
        
        if( count($result['newsitems']) > 0 ) {
            foreach($result['newsitems'] AS $key => $value) {                
                $result['newsitems'][$key]['image_path']   =   "http://".$_SERVER["HTTP_HOST"]."/uploads/news/".$value["news_id"]."/";
                $result['newsitems'][$key]['images']  =   $this->db->select("file_name, created_ts")->where("news_id", $value["news_id"])
                        ->order_by("created_ts", "ASC")
                        ->get("news_files")->result_array();
                
            }
        }
        
        $this->newsitems    =   $result;
        $this->successMsg   =   "News items retrieved successfully.";
        return true;
    }
    
    public function get_newsitem($news_id)
    {
        $result =   $this->db
                ->where(array("news_id" => $news_id))->get("news")->row();
        
        return $result;
    }
}