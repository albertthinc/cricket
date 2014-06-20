<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();            
        $this->load->model("dashboard_model");
    }

    public function index()
    {
        //$notification_manager   =   $this->dashboard_model->notification_manager();
        //$this->smarty->assign("notification_manager", $notification_manager);
        
        $this->smarty->assign('MESSAGE', "");
        $this->smarty->assign('INNER_TPL', 'dashboard.htm');
        $this->smarty->assign('pageTitle', 'Dashboard - '.APP_NAME);

        $this->smarty->view('layout_master');
    }
    
    public function monthly_growth()
    {
        $response   =   $this->dashboard_model->monthly_downloads();
        echo json_encode($response);
    }
    
    public function slide_categories()
    {
        $response   =   $this->dashboard_model->slide_categories();
        echo json_encode($response);
    }
    
    public function slide_servicelines()
    {
        $response   =   $this->dashboard_model->slide_servicelines();
        echo json_encode($response);
    }
    
    public function showcase_categories()
    {
        $response   =   $this->dashboard_model->showcase_categories();
        echo json_encode($response);
    }
    
    public function showcase_servicelines()
    {
        $response   =   $this->dashboard_model->showcase_servicelines();
        echo json_encode($response);
    }
}