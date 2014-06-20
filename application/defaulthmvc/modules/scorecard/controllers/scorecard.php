<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Scorecard controller
 * 
 * @package: Core
 * @module: Scorecard
 * @created: 01/2014
 * @description: This file handles the scorecard main controller methods.
 */
class Scorecard extends MX_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model("scorecard_model");
        $this->scorecard_model->db    =   $this->db;
        
        $this->load->model("statistics/statistics_model");
        $this->statistics_model->db =   $this->db;
    }
    
    public function index()
    {
        $data["seasons"]        =   $this->statistics_model->get_distinct_season();
        $data["teams"]          =   $this->statistics_model->get_teams_by_division('', true);
        $data["match_details"]	=   $this->scorecard_model->get_match_schedule();
        $data["view_file"]	=   "scorecard/schedule";

        echo Modules::run("templates/single_column", $data);
    }
}