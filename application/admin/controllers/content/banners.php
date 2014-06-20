<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banners extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("banners_model");
    }

    public function index()
    {
        $banner_categories  =   $this->banners_model->get_banner_categories();
        
        $this->smarty->assign("banner_categories", $banner_categories);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'banners/list.htm');
        $this->smarty->assign('pageTitle', 'Banner Categories - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $this->smarty->assign('INNER_TPL', 'banners/add.htm');
        $this->smarty->assign('pageTitle', 'Banner Categories - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $banner_category   =   $this->banners_model->get_banner_category(end($this->uri->segment_array()));
        $this->smarty->assign("banner_category", $banner_category);
            
        $this->smarty->assign('INNER_TPL', 'banners/edit.htm');
        $this->smarty->assign('pageTitle', 'Banner Categories - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->banners_model->add_banner_category();
        $this->session->set_flashdata('errors', $this->banners_model->status_msg);
        redirect("/content/banners", 'location');
    }
    
    public function delete()
    {
        $this->banners_model->delete_banner_category(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->banners_model->status_msg);

        redirect("/content/banners/", "location");
    }
    
    public function update()
    {
        $this->banners_model->update_banner_category();            
        $this->session->set_flashdata('errors', $this->banners_model->status_msg);

        redirect("/content/banners/", "location");
    }
    
    public function pictures()
    {
        $_POST["category_id"]  =   $this->input->get("category_id");
        $bannerpictures   =   $this->banners_model->get_bannerpictures($this->input->get("category_id"));        
        $this->smarty->assign("bannerpictures", $bannerpictures);
            
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'banners/pictures/list.htm');
        $this->smarty->assign('pageTitle', 'Pictures - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function upload_picture()
    {
        $this->smarty->assign('INNER_TPL', 'banners/pictures/add.htm');
        $this->smarty->assign('pageTitle', 'Pictures - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function picture_add()
    {
        $this->banners_model->add_bannerpicture();
        $this->session->set_flashdata('errors', $this->banners_model->status_msg);
        redirect("/content/banners/pictures/?category_id=".$this->input->post("category_id"), 'location');
    }
    
    public function picture_edit()
    {
        $bannerpicture   =   $this->banners_model->get_bannerpicture(end($this->uri->segment_array()));
        $this->smarty->assign("albumpicture", $bannerpicture);            
        
        $this->smarty->assign('INNER_TPL', 'banners/pictures/edit.htm');
        $this->smarty->assign('pageTitle', 'Pictures - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function picture_update()
    {
        $category_id   =   $this->input->post("category_id");
        
        $this->banners_model->update_bannerpicture();            
        $this->session->set_flashdata('errors', $this->banners_model->status_msg);

        redirect("/content/banners/pictures/?category_id=".$category_id, "location");
    }
    
    public function picture_delete()
    {
        $category_id   =   $this->input->get("category_id");
        $this->banners_model->delete_bannerpicture(end($this->uri->segment_array()));
        $this->session->set_flashdata('errors', $this->banners_model->status_msg);

        redirect("/content/banners/pictures/?category_id=".$category_id, "location");
    }
    
}
