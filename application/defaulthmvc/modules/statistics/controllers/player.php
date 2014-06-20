<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Player controller
 * 
 * @package: Core
 * @module: Player
 * @created: 01/2014
 * @description: This file handles the Player main controller methods.
 * 
 */

class Player extends MX_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->model("statistics_model");       
        $this->statistics_model->db    =   $this->db;
    }
    
    public function index()
    {
        $user_id                =   end($this->uri->segment_array());
        $season                 =   $this->input->get("season");
        
        $data["stats"]          =   $this->statistics_model->get_player_stats($season, $user_id);
        $data['seasons']        =   $this->statistics_model->get_distinct_season();
        $data['match_types']    =   $this->statistics_model->get_match_types();
        $data['divisions']      =   $this->statistics_model->get_divisions();
        $data['view_file']      =   "statistics/player";
        
        echo Modules::run("templates/single_column", $data);
    }
}