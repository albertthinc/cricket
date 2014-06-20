<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Navigation Model
 *
 * This is model for all Navigation related operations.
 *
 * @package     CodeIgniter
 * @subpackage	News
 * @category	Model
 * @author	Albert Virgin V A
*/
class Navigation_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
    public function get_navigation()
    {
        $published_pages    =   $this->db
                ->where("status", "Publish")
                ->get("pages")
                ->result();
        
        return self::_parse_navigation($published_pages);
    }
    
    private function _parse_navigation($source) {
        $nodes = array();
        $tree = array();
        foreach ($source as &$node) {
            $node->children = array();
            $id = $node->page_id;
            $parent_id = $node->parent_id;
            $nodes[$id] =& $node;
            if (array_key_exists($parent_id, $nodes)) {
                $nodes[$parent_id]->children[] =& $node;
            } else {
                $tree[] =& $node;
            }
        }

        return $tree;
    }
}