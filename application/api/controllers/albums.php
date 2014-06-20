<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set("display_errors", "on");
/**
 * Albums
 *
 * This controller to respond all Albums related data
 *
 * @package	CodeIgniter
 * @subpackage	Rest Server - Albums
 * @category	Controller
 * @author	Albert Virgin V A
 * @link	http://domainname/user/
*/

require APPPATH.'/libraries/REST_Controller.php';

class Albums extends REST_Controller
{
    public function __construct(){
        parent::__construct();
        
        // Load the models
        $this->load->model("albums_model");
    }
    
    public function index_get()
    {
        if( $this->albums_model->get_albums('Active') == false ) {
            $response   =   array('status' => array('response_code' => 500, 'response_text' => $this->albums_model->errorMsg));
            $this->response($response, 500);
        } else {
             $response   =   array(
                                    'status' => array('response_code' => 200, 'response_text' => $this->albums_model->successMsg),
                                    'albums' => $this->albums_model->albums
                                );
             $this->response($response, 200);
        }
    }   
    
    public function pictures_get()
    {
        if( $this->albums_model->get_album_pictures('Active', $this->get("album_id")) == false ) {
            $response   =   array('status' => array('response_code' => 500, 'response_text' => $this->albums_model->errorMsg));
            $this->response($response, 500);
        } else {
             $response   =   array(
                                    'status' => array('response_code' => 200, 'response_text' => $this->albums_model->successMsg),
                                    'pictures' => $this->albums_model->pictures
                                );
             $this->response($response, 200);
        }
    }   
}
