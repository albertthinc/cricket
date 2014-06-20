<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("content_model");
    }

    public function index()
    {
        $pages  =   $this->content_model->get_pages();
        
        $this->smarty->assign("pages", $pages);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'content/pages/list.htm');
        $this->smarty->assign('pageTitle', 'Content Pages - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $parent_pages   =   $this->content_model->get_parent_pages();
        
        foreach( $parent_pages AS $key => $value )
        {
            $data_parent_pages[$value['page_id']]    =   $value["title"];
        }        
        $this->smarty->assign("parent_pages", $data_parent_pages);
        
        $this->smarty->assign('INNER_TPL', 'content/pages/add.htm');
        $this->smarty->assign('pageTitle', 'Content Pages - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $parent_pages   =   $this->content_model->get_parent_pages(end($this->uri->segment_array()));
        
        foreach( $parent_pages AS $key => $value )
        {
            $data_parent_pages[$value['page_id']]    =   $value["title"];
        }        
        $this->smarty->assign("parent_pages", $data_parent_pages);
        
        $page   =   $this->content_model->get_page(end($this->uri->segment_array()));
        $this->smarty->assign("page", $page);
            
        $this->smarty->assign('INNER_TPL', 'content/pages/edit.htm');
        $this->smarty->assign('pageTitle', 'Content pages - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->content_model->add_page();
        $this->session->set_flashdata('errors', $this->content_model->status_msg);
        redirect("/content/pages/", 'location');
    }
    
    public function delete()
    {
        $this->content_model->delete_page(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->content_model->status_msg);

        redirect("/content/pages/", "location");
    }
    
    public function update()
    {
        $this->content_model->update_page();            
        $this->session->set_flashdata('errors', $this->content_model->status_msg);

        redirect("/content/pages/", "location");
    }
    
}
