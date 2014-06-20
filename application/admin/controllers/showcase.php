<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors", "on");
class Showcase extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            
            is_logged_in();
            
            $this->load->model("showcase_model");
        }
	
	public function index()
	{
            $showcaseList =   $this->showcase_model->get_features();
            
            $this->smarty->assign("showcase", $showcaseList);
            $this->smarty->assign('MESSAGE', $this->session->flashdata('errors'));
            $this->smarty->assign('INNER_TPL', 'showcase/list.htm');
            $this->smarty->assign('pageTitle', 'Showcase - '.APP_NAME);
            $this->smarty->view('layout_master');
	}

	public function create()
	{
            $this->load->model("users_model");
            $this->load->model("categories_model");
            
            $current_user_id  =   $this->session->userdata["user_info"]->admin_id;
            $current_user_servicelines  =   $this->users_model->get_user_servicelines($current_user_id);
            
           // $servicelines   =   $this->servicelines_model->get_servicelines("Active");
            $servicelines   =   $current_user_servicelines;
            
            foreach( $servicelines AS $key=>$value )
            {
                $sercicelines_selbox[$value['serviceline_id']]    =   $value["serviceline"];
            }
            $this->smarty->assign("servicelines", $sercicelines_selbox);
            
            
            $categories   =   $this->categories_model->get_categories("Active");
            foreach( $categories AS $key=>$value )
            {
                $categories_selbox[$value['category_id']]    =   $value["category_title"];
            }
            $this->smarty->assign("categories", $categories_selbox);
            
            $this->load->model("languages_model");
            $languages   =   $this->languages_model->get_languages("Active");
            $this->smarty->assign('languages', $languages);
            
            $this->smarty->assign('MESSAGE', "logger::get()");
            $this->smarty->assign('INNER_TPL', 'showcase/add.htm');
            $this->smarty->assign('pageTitle', 'Add Showcase project - '.APP_NAME);

            $this->smarty->view('layout_master');
	}
        
        public function features()
        {
            $features   =   $this->showcase_model->get_features_list();
            if( count($features) )
            {                
                foreach($features AS $key=>$value)
                {
                    $data[$key] =   $value["name"];
                    //$data[$key]["text"] =   $value["name"];
                }
            }
            echo json_encode($data);
            exit;
        }

	public function edit()
	{
            $this->load->model("users_model");
            $this->load->model("categories_model");
            
            $current_user_id  =   $this->session->userdata["user_info"]->admin_id;
            $current_user_servicelines  =   $this->users_model->get_user_servicelines($current_user_id);
            
           // $servicelines   =   $this->servicelines_model->get_servicelines("Active");
            $servicelines   =   $current_user_servicelines;
            
            foreach( $servicelines AS $key=>$value )
            {
                $sercicelines_selbox[$value['serviceline_id']]    =   $value["serviceline"];
            }
            $this->smarty->assign("servicelines", $sercicelines_selbox);
            
            
            $categories   =   $this->categories_model->get_categories("Active");
            foreach( $categories AS $key=>$value )
            {
                $categories_selbox[$value['category_id']]    =   $value["category_title"];
            }
            $this->smarty->assign("categories", $categories_selbox);
            
            $showcase   =   $this->showcase_model->get_feature(end($this->uri->segment_array()));
            
            $this->smarty->assign("showcase", $showcase);
            $this->smarty->assign('INNER_TPL', 'showcase/edit.htm');
            $this->smarty->assign('pageTitle', 'Edit Category - '.APP_NAME);

            $this->smarty->view('layout_master');
	}
        
        public function delete()
        {
            $this->showcase_model->delete_showcase(end($this->uri->segment_array()));            
            $this->session->set_flashdata('errors', $this->showcase_model->status_msg);
            
            redirect("/showcase", "location");
        }
        
        public function add()
        {
            $this->showcase_model->add_showcase_project();            
            $this->session->set_flashdata('errors', $this->showcase_model->status_msg);
            
            redirect("/showcase", "location");
        }
        
        public function update()
        {
            $this->showcase_model->update_showcase_project();            
            $this->session->set_flashdata('errors', $this->showcase_model->status_msg);
            
            redirect("/showcase", "location");
        }
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */