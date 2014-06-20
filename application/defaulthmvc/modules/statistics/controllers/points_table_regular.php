<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Points table regular controller
 * 
 * @package: Core
 * @module: Points table regular
 * @created: 01/2014
 * @description: This file handles the Points table regular main controller methods.
 * 
 */

class Points_table_regular extends MX_Controller
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
        
        $data["stats"]          =   $this->statistics_model->get_points_table_regular($season, $match_type_id);
        $data['seasons']        =   $this->statistics_model->get_distinct_season();
        $data['match_types']    =   $this->statistics_model->get_match_types();
        $data['divisions']      =   $this->statistics_model->get_divisions();
        $data['view_file']      =   "statistics/points_table_regular";
        
        echo Modules::run("templates/single_column", $data);
    }
}