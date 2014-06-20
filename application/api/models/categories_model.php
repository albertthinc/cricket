<?php defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Users Model
 *
 * This is model for all Users related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Rest Server - Categories
 * @category	Model
 * @author	Albert Virgin V A
*/

class Categories_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->user_id    =   $this->session->userdata['user_id'];
    }
    
    private function _array_value_recursive($key, array $arr){
        $val = array();
        array_walk_recursive($arr, function($v, $k) use($key, &$val){
            if($k == $key) array_push($val, $v);
        });
        return count($val) > 1 ? $val : array_pop($val);
    }
    
    public function get_categories()
    {
        /* Get preferences */
        self::_get_preferences();
        /* Get preferences */
        
        $str_where = "";
        if( count($this->preferences) > 0  && empty($_GET["skip_pref"]) )
        {
            $result     =   $this->preferences;
            
            $this->db->select("lm_product_tags.category_id, COUNT(lm_product_tags.product_id) AS no_of_products, lm_categories.category_name")
                    ->join("lm_categories", "lm_categories.category_id = lm_product_tags.category_id")
                    ->join("lm_products", "lm_products.product_id = lm_product_tags.product_id");
            
            $this->db->where(array("lm_products.status" => "Published"));
            
            foreach($this->preferences AS $key => $value)
            {
                $split_tags     =   implode("','", array_map('trim', array_filter(explode(";", $value->category_filter))));
                $str_where      .=   ( $key == 0 ) ? "(" : "";
                $str_where      .=   ( $key > 0 ) ? " OR " : ""; 
                $str_where      .=   "(lm_product_tags.category_id = ".($value->category_id)." AND LOWER(lm_product_tags.tag) IN ('".strtolower($split_tags)."'))";
                
            }
            $this->db->where($str_where." )");
            
            $filter_results         =   $this->db->distinct()->group_by("lm_product_tags.category_id")->get("lm_product_tags")->result_array();
            //Get filtered products by user preference
            
            $this->successMsg           =   "Categories retrieved successfully";
            return $this->categories    =   $filter_results;
            //Get filtered products by user preference
        } else {
            $this->db->select("category_id, category_name");
            $this->db->where(array("status" => "Active" ));
            
            $result =   $this->db->get("lm_categories")->result();
            
            if( count($result) == 0 ) {
                $this->errorMsg = "No categories found";
                return false;
            }
            $condFilter = "";
            foreach( $result As $key=>$value ) 
            {
                if( !empty($_GET["history_type"]) ) 
                {
                    if( $this->input->get("history_type") == "seller" ) {
                        $condFilter .=  " AND p.user_id = ".$this->user_id;
                    }
                }
                $result[$key]->no_of_products  =   $this->db->query("SELECT p.sproduct_id FROM lm_products AS p LEFT JOIN lm_products_features AS pf ON pf.product_id = p.product_id WHERE p.status = 'Published' AND pf.category_id = ".$value->category_id." ".$condFilter)->num_rows();
            }
            
            $this->successMsg           =   "Categories retrieved successfully";
            return $this->categories    =   $result;
        }
    }    
    
    private function _get_preferences()
    {
        $preferences = $this->db->select("lm_user_preferences.category_id, lm_categories.category_name, lm_user_preferences.sub_filter AS category_filter")
                ->join("lm_categories", "lm_categories.category_id = lm_user_preferences.category_id")
                ->where(array("lm_user_preferences.user_id" => $this->user_id, "lm_user_preferences.type" => "MarketPlace"))
                ->get("lm_user_preferences")->result();
        
       $this->preferences   =   $preferences;
    }
}