<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * News controller
 * 
 * @package: Core
 * @module: News
 * @created: 01/2014
 * @description: This file handles the News main controller methods.
 * 
 */

class News extends MX_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->model("news_model");       
        $this->news_model->db    =   $this->db;
    }
    
    public function index()
    {
        $data["news"]    =   $this->news_model->get_news("Yes");
        if( count($data["news"]) > 0 ) {
            $this->load->view("index", $data);
        }
    }
    
    public function all()
    {
        $data["news"]    =   $this->news_model->get_news("");        
        $data["view_file"]	=	"news/all";

        echo Modules::run("templates/single_column", $data);
    }
    
    public function detail()
    {
        $data["news"]           =   $this->news_model->get_news_detail(end($this->uri->segment_array()));        
        $data["view_file"]	=   "news/detail";

        echo Modules::run("templates/single_column", $data);
    }
}