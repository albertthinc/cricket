<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venues extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("venues_model");
    }

    public function index()
    {
        $venues  =   $this->venues_model->get_venues();
        
        $this->smarty->assign("venues", $venues);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'venues/list.htm');
        $this->smarty->assign('pageTitle', 'Venues - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $this->smarty->assign('INNER_TPL', 'venues/add.htm');
        $this->smarty->assign('pageTitle', 'Venues - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $venue   =   $this->venues_model->get_venue(end($this->uri->segment_array()));
        $this->smarty->assign("venue", $venue);
            
        $this->smarty->assign('INNER_TPL', 'venues/edit.htm');
        $this->smarty->assign('pageTitle', 'Venues - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->venues_model->add_venue();
        $this->session->set_flashdata('errors', $this->venues_model->status_msg);
        redirect("/venues", 'location');
    }
    
    public function delete()
    {
        $this->venues_model->delete_venue(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->venues_model->status_msg);

        redirect("/venues", "location");
    }
    
    public function update()
    {
        $this->venues_model->update_venue();            
        $this->session->set_flashdata('errors', $this->venues_model->status_msg);

        redirect("/venues", "location");
    }
    
}
