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
	
	public function test()
	{
		return 'test';
	}
}