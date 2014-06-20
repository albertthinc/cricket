<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Navigation controller
 * 
 * @package: Core
 * @module: Header
 * @created: 01/2014
 * @description: This file handles the Navigation controller methods.
 * 
 */
class Navigation extends MX_Controller
{    
    function __construct()
    {
        // inerits it's parent init flow
        parent::__construct(); 
        $this->load->model("navigation_model");        
        $this->navigation_model->db =   $this->db;
    }
    
    public function index()
    {
        $data["navigations"]    =   $this->navigation_model->get_navigation();
        
        $this->load->view("index", $data);
    }
}