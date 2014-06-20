<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Pages Model
 *
 * This is model for all Pages related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Pages
 * @category	Model
 * @author	Albert Virgin V A
*/
class Pages_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
    public function get_page_content($alias)
    {
        $result =   $this->db
                ->where(array("status" => "Publish", "alias" => $alias))
                ->get("pages")
                ->row();
        
        return $result;
    }
}