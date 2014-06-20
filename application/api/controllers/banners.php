<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Banners
 *
 * This controller to respond all Baners related data
 *
 * @package	CodeIgniter
 * @subpackage	Rest Server - Banners
 * @category	Controller
 * @author	Albert Virgin V A
 * @link	http://domainname/user/
*/

require APPPATH.'/libraries/REST_Controller.php';

class Banners extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        
        // Load the models
        $this->load->model("banners_model");
    }
    
    public function index_get()
    {
        if( $this->banners_model->get_banner_categories('Active') == false ) {
            $response   =   array('status' => array('response_code' => 500, 'response_text' => $this->banners_model->errorMsg));
            $this->response($response, 500);
        } else {
             $response   =   array(
                                    'status' => array('response_code' => 200, 'response_text' => $this->banners_model->successMsg),
                                    'albums' => $this->banners_model->categories
                                );
             $this->response($response, 200);
        }
    }   
    
    public function pictures_get()
    {
        if( $this->banners_model->get_banner_pictures('Active', $this->get("category_title")) == false ) {
            $response   =   array('status' => array('response_code' => 500, 'response_text' => $this->banners_model->errorMsg));
            $this->response($response, 500);
        } else {
             $response   =   array(
                                    'status' => array('response_code' => 200, 'response_text' => $this->banners_model->successMsg),
                                    'pictures' => $this->banners_model->pictures
                                );
             $this->response($response, 200);
        }
    }   
}
