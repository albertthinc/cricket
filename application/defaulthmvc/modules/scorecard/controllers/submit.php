<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Submit controller
 * 
 * @package: Core
 * @module: Scorecard
 * @created: 01/2014
 * @description: This file handles the scorecard main controller methods.
 */
class Submit extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model("scorecard_model");
        $this->scorecard_model->db    =   $this->db;
        
        $this->load->model("statistics/statistics_model");
        $this->statistics_model->db =   $this->db;
    }
    
    public function step1()
    {
        $data["match_details"]	=   $this->scorecard_model->get_match_information(end($this->uri->segment_array()));
        $data["view_file"]	=   "scorecard/submit_step1";

        echo Modules::run("templates/single_column", $data);
    }
}