<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Statistics controller
 * 
 * @package: Core
 * @module: Statistics
 * @created: 01/2014
 * @description: This file handles the Statistics main controller methods.
 * 
 */

class Statistics extends MX_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->model("statistics_model");       
        $this->statistics_model->db    =   $this->db;
    }
    
    public function index()
    {
        $banner_category    =   $this->router->class;
        $data["banners"]    =   $this->banners_model->get_banners($banner_category);
        if( count($data["banners"]) > 0 ) {
            $this->load->view("index", $data);
        }
    }
}