<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * News
 *
 * This controller to respond all user related data
 *
 * @package	CodeIgniter
 * @subpackage	Rest Server - News
 * @category	Controller
 * @author	Albert Virgin V A
 * @link	http://domainname/user/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class News extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        
        // Load the models
        $this->load->model("news_model");
    }
    
    public function index_get()
    {
        if( $this->news_model->get_newsitems('Active') == false ) {
            $response   =   array('status' => array('response_code' => 500, 'response_text' => $this->news_model->errorMsg));
            $this->response($response, 500);
        } else {
             $response   =   array(
                                    'status' => array('response_code' => 200, 'response_text' => $this->news_model->successMsg),
                                    'newsitems' => $this->news_model->newsitems
                                );
             $this->response($response, 200);
        }
    }    
}
