<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Pages controller
 * 
 * @package: Core
 * @module: Pages
 * @created: 01/2014
 * @description: This file handles the pages main controller methods.
 */
class Pages extends MX_Controller
{
    
    function __construct()
    {
        // inerits it's parent init flow
        parent::__construct();
        $this->load->model("pages_model");
        $this->pages_model->db  =   $this->db;
    }
    
    public function view()
    {
        $data["result"]         =	$this->pages_model->get_page_content(end($this->uri->segment_array()));
        if( count($data["result"]) == 0 ) {
            $this->load->view("errors/404");
        } else {
            $data["view_file"]	=	"pages/index";

            echo Modules::run("templates/single_column", $data);
        }
    }
}