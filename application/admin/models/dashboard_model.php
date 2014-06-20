<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Dashboard Model
 *
 * This is model for all Dahboard related operations.
 *
 * @package     CodeIgniter
 * @subpackage	Dashboard
 * @category	Model
 * @author	Albert Virgin V A
*/
class Dashboard_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->current_user_group_id  =   $this->session->userdata["user_info"]['groups_assigned'];
    }
    
    public function monthly_downloads()
    {
        $results    =   $this->db
                ->select("COUNT(sa.analytic_id) AS number_of_downloads, DATE(sa.created_on) AS created_date, s.slide_title")
                ->join("slides AS s", "s.slide_id = sa.slide_id")
                ->group_by("sa.slide_id, DATE(sa.created_on)")
                ->order_by("sa.created_on", "desc")
                ->limit(20, 0)
                ->get("slide_analytics AS sa")->result_array();
        
        return $results;                
    }
    public function slide_categories()
    {
        $results    =   $this->db
                ->select("COUNT(sc.slides_categories_id) AS number_of_slides, c.category_title as category")
                ->join("categories AS c", "c.category_id = sc.category_id")
                ->group_by("sc.category_id")
                ->get("slides_categories AS sc")
                ->result_array();
        
        return $results;
    }
    
    public function slide_servicelines()
    {
        $results    =   $this->db
                ->select("COUNT(sls.slides_serviceline_id) AS value, sl.serviceline AS label")
                ->join("servicelines AS sl", "sl.serviceline_id = sls.serviceline_id")
                ->group_by("sls.serviceline_id")
                ->get("slides_servicelines AS sls")
                ->result_array();
        
        return $results;
    }
    
    public function showcase_categories()
    {
        $results    =   $this->db
                ->select("COUNT(sc.id) AS number_of_slides, c.category_title as category")
                ->join("categories AS c", "c.category_id = sc.category_id")
                ->group_by("sc.category_id")
                ->get("showcase_categories AS sc")
                ->result_array();
        
        return $results;
    }
    
    public function showcase_servicelines()
    {
        $results    =   $this->db
                ->select("COUNT(sls.id) AS value, sl.serviceline AS label")
                ->join("servicelines AS sl", "sl.serviceline_id = sls.serviceline_id")
                ->group_by("sls.serviceline_id")
                ->get("showcase_servicelines AS sls")
                ->result_array();
        
        return $results;
    }
    
    public function get_current_user_servicelines()
    {
        $this->admin_id  =   $this->session->userdata["user_info"]->admin_id;
        
        $get_user_servicelines = $this->db->select("serviceline_id")->distinct("serviceline_id")->where("admin_id", $this->admin_id)
                ->get("admin_users_servicelines")->result_array();     
        
        foreach( $get_user_servicelines As $key=>$value)
        {
            $data[$key] =   $value["serviceline_id"];
        }
        
        return $data;
    }
    
    public function notification_manager()
    {
        $get_user_servicelines = self::get_current_user_servicelines();        
        
        $string =   implode("','", $get_user_servicelines);
        
        $result =   $this->db
                ->join("slides_servicelines AS ss", "ss.slide_id = s.slide_id AND ss.serviceline_id IN ( '".$string."' )")
                ->where("s.status", "Unapproved")
                ->group_by("s.slide_id")
                ->get("slides AS s")->result_array();
        
        return $result;
    }
    
    public function notification_ba()
    {
        
    }
}