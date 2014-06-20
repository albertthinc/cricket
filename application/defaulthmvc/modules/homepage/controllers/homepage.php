<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Homepage controller
 * 
 * @package: Core
 * @module: Homepage
 * @created: 01/2014
 * @description: This file handles the homepage's main controller methods.
 */
class Homepage extends MX_Controller
{
    
    function __construct()
    {
        // inerits it's parent init flow
        parent::__construct();
    }
    
    public function index()
    {
        $data["results"]	=	array("1", "2", "3");
        $data["view_file"]	=	"homepage/index";

        echo Modules::run("templates/single_column", $data);
    }
}