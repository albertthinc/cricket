<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Banners controller
 * 
 * @package: Core
 * @module: Banners
 * @created: 01/2014
 * @description: This file handles the Banners main controller methods.
 * 
 */

class Banners extends MX_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->model("banners_model");       
        $this->banners_model->db    =   $this->db;
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