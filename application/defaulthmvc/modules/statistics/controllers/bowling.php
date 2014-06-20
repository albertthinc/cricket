<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Bowling controller
 * 
 * @package: Core
 * @module: Bowling
 * @created: 01/2014
 * @description: This file handles the bowling main controller methods.
 * 
 */

class Bowling extends MX_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->model("statistics_model");       
        $this->statistics_model->db    =   $this->db;
    }
    
    public function index()
    {
        $season                 =   $this->input->get("season");
        $match_type_id          =   $this->input->get("match_type_id");
        
        $data["stats"]          =   $this->statistics_model->get_bowling_stats($season, $match_type_id);
        $data['seasons']        =   $this->statistics_model->get_distinct_season();
        $data['match_types']    =   $this->statistics_model->get_match_types();
        $data['divisions']      =   $this->statistics_model->get_divisions();
        $data['view_file']      =   "statistics/bowling";
        
        echo Modules::run("templates/single_column", $data);
    }
}