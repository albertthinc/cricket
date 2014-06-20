<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Homepage controller
 * 
 * @package: Core
 * @module: Homepage
 * @created: 01/2014
 * @description: This file handles the homepage's main controller methods.
 * 
 * @author: José Postiga <jose.postiga@josepostiga.com>
 *          Contact me if you have any questions :)
 * 
 */
class Templates extends CI_Controller
{
    
    function __construct()
    {
        // inerits it's parent init flow
        parent::__construct();        
    }
    
	public function index()
	{
        // Smarty needs the parse method to be used, instead of 
         $this->load->view('index');
	}

	public function single_column($data = "")
	{
		$this->load->view("single_column", $data);
	}

	public function two_column()
	{
		$this->load->view("two_column");
	}
}