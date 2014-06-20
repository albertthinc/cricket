<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("content_model");
    }

    public function index()
    {
        $categories  =   $this->content_model->get_categories();
        
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'content/categories/list.htm');
        $this->smarty->assign('pageTitle', 'Content Categories - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $this->smarty->assign('INNER_TPL', 'content/categories/add.htm');
        $this->smarty->assign('pageTitle', 'Content Categories - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $category   =   $this->content_model->get_category(end($this->uri->segment_array()));
        $this->smarty->assign("category", $category);
            
        $this->smarty->assign('INNER_TPL', 'content/categories/edit.htm');
        $this->smarty->assign('pageTitle', 'Content Categories - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->content_model->add_category();
        $this->session->set_flashdata('errors', $this->content_model->status_msg);
        redirect("/content/categories/", 'location');
    }
    
    public function delete()
    {
        $this->content_model->delete_category(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->content_model->status_msg);

        redirect("/content/categories/", "location");
    }
    
    public function update()
    {
        $this->content_model->update_category();            
        $this->session->set_flashdata('errors', $this->content_model->status_msg);

        redirect("/content/categories/", "location");
    }
    
}
