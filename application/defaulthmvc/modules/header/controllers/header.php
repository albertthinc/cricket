<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Header controller
 * 
 * @package: Core
 * @module: Header
 * @created: 01/2014
 * @description: This file handles the homepage's header controller methods.
 * 
 */
class Header extends CI_Controller
{    
    function __construct()
    {
        // inerits it's parent init flow
        parent::__construct(); 
        
    }
    
    public function index()
    {
        $this->load->view("index");
    }
}