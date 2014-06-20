<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("news_model");
    }

    public function index()
    {
        $newsitems  =   $this->news_model->get_newsitems();
        
        $this->smarty->assign("newsitems", $newsitems);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'news/list.htm');
        $this->smarty->assign('pageTitle', 'News - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $this->smarty->assign('INNER_TPL', 'news/add.htm');
        $this->smarty->assign('pageTitle', 'News - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $newsitem   =   $this->news_model->get_newsitem(end($this->uri->segment_array()));
        $this->smarty->assign("newsitem", $newsitem);
        
        $files      =   $this->news_model->get_newsitem_files(end($this->uri->segment_array()));
        $this->smarty->assign('documents', $files);
            
        $this->smarty->assign('INNER_TPL', 'news/edit.htm');
        $this->smarty->assign('pageTitle', 'News - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->news_model->add_newsitem();
        $this->session->set_flashdata('errors', $this->news_model->status_msg);
        redirect("/news", 'location');
    }
    
    public function delete()
    {
        $this->news_model->delete_newsite(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->news_model->status_msg);

        redirect("/news", "location");
    }
    
    public function update()
    {
        $this->news_model->update_newsitem();            
        $this->session->set_flashdata('errors', $this->news_model->status_msg);

        redirect("/news", "location");
    }
    
    public function deletefile()
    {
        $id =   explode(":", end($this->uri->segment_array()));
        $this->news_model->delete_news_file($id[0]);

        $this->session->set_flashdata('errors', $this->news_model->status_msg);            
        redirect("/news/edit/".$id[1], "location");
    }
    
}
