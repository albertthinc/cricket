<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Albums extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

        is_logged_in();

        $this->load->model("albums_model");
    }

    public function index()
    {
        $albums  =   $this->albums_model->get_albums();
        
        $this->smarty->assign("albums", $albums);
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'albums/list.htm');
        $this->smarty->assign('pageTitle', 'Albums - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function create()
    {
        $this->smarty->assign('INNER_TPL', 'albums/add.htm');
        $this->smarty->assign('pageTitle', 'Albums - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function edit()
    {
        $album   =   $this->albums_model->get_album(end($this->uri->segment_array()));
        $this->smarty->assign("album", $album);
            
        $this->smarty->assign('INNER_TPL', 'albums/edit.htm');
        $this->smarty->assign('pageTitle', 'Albums - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function add()
    {
        $this->albums_model->add_album();
        $this->session->set_flashdata('errors', $this->albums_model->status_msg);
        redirect("/albums", 'location');
    }
    
    public function delete()
    {
        $this->albums_model->delete_album(end($this->uri->segment_array()));            
        $this->session->set_flashdata('errors', $this->albums_model->status_msg);

        redirect("/albums", "location");
    }
    
    public function update()
    {
        $this->albums_model->update_album();            
        $this->session->set_flashdata('errors', $this->albums_model->status_msg);

        redirect("/albums", "location");
    }
    
    public function pictures()
    {
        $_POST["album_id"]  =   $this->input->get("album_id");
        $albumpictures   =   $this->albums_model->get_albumpictures($this->input->get("album_id"));        
        $this->smarty->assign("albumpictures", $albumpictures);
            
        $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
        $this->smarty->assign('INNER_TPL', 'albums/photos/list.htm');
        $this->smarty->assign('pageTitle', 'Pictures - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function upload_picture()
    {
        $this->smarty->assign('INNER_TPL', 'albums/photos/add.htm');
        $this->smarty->assign('pageTitle', 'Pictures - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function picture_add()
    {
        $this->albums_model->add_albumpicture();
        $this->session->set_flashdata('errors', $this->albums_model->status_msg);
        redirect("/albums/pictures/?album_id=".$this->input->post("album_id"), 'location');
    }
    
    public function picture_edit()
    {
        $albumpicture   =   $this->albums_model->get_albumpicture(end($this->uri->segment_array()));
        $this->smarty->assign("albumpicture", $albumpicture);            
        
        $this->smarty->assign('INNER_TPL', 'albums/photos/edit.htm');
        $this->smarty->assign('pageTitle', 'Pictures - '.APP_NAME);
        $this->smarty->view('layout_master');
    }
    
    public function picture_update()
    {
        $album_id   =   $this->input->post("album_id");
        
        $this->albums_model->update_albumpicture();            
        $this->session->set_flashdata('errors', $this->albums_model->status_msg);

        redirect("/albums/pictures/?album_id=".$album_id, "location");
    }
    
    public function picture_delete()
    {
        $album_id   =   $this->input->get("album_id");
        $this->albums_model->delete_albumpicture(end($this->uri->segment_array()));
        $this->session->set_flashdata('errors', $this->albums_model->status_msg);

        redirect("/albums/pictures/?album_id=".$album_id, "location");
    }
    
}
