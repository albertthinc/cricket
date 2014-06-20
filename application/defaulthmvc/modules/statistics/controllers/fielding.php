<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Fielding controller
 * 
 * @package: Core
 * @module: Fielding
 * @created: 01/2014
 * @description: This file handles the Fielding main controller methods.
 * 
 */

class Fielding extends MX_Controller
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
        
        $data["stats"]          =   $this->statistics_model->get_fielding_stats($season, $match_type_id);
        $data['seasons']        =   $this->statistics_model->get_distinct_season();
        $data['match_types']    =   $this->statistics_model->get_match_types();
        $data['divisions']      =   $this->statistics_model->get_divisions();
        $data['view_file']      =   "statistics/fielding";
        
        echo Modules::run("templates/single_column", $data);
    }
    
    public function update(){
        /*$fieldingsstats = $this->db
                ->get("fielding_stats")
                ->result();
        
        foreach ($fieldingsstats AS $key => $value) {

            $matchtype = $this->db
                    ->where("match_type_code", $value->match_type)
                    ->get("match_types")
                    ->row()->match_type_id;
            
            $this->db
                    ->where("fielding_stats_id", $value->fielding_stats_id)
                    ->update("fielding_stats", array("match_type_id" => $matchtype) );
                    
        }*/
    }
}