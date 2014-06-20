<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Banners Model
 *
 * This is model for all Banner related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Banner
 * @category	Model
 * @author	Albert Virgin V A
*/
class Banners_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
    public function get_banners($banner_category)
    {
        $banner_caegory_info    =   $this->db
                ->where("title", $banner_category)
                ->get("banner_categories")
                ->row();
        
        if( count( $banner_caegory_info ) > 0 )  {
            $result =   $this->db
                    ->where("category_id", $banner_caegory_info->category_id)
                    ->get("banners")
                    ->result_array();

            return $result;
        } else {
            return array();
        }
    }
}