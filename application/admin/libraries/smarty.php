<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(APPPATH.'libraries/smarty/libs/Smarty.class.php');
 
class CI_Smarty extends Smarty {
 
    function __construct()
    {
        parent::__construct();
        $CI = &get_instance();
        $CI->load->helper("url");
        
        $this->setTemplateDir(APPPATH.'views/templates');
        $this->setCompileDir(APPPATH.'views/compiled');
        $this->setConfigDir(APPPATH.'libraries/smarty/configs');
        $this->setCacheDir(APPPATH.'libraries/smarty/cache');
        
        $this->assign("USERDATA", $CI->session->userdata);
        $this->assign("controller", $CI->uri->segment(1));
        $this->assign("page", $CI->uri->segment(2));

        $this->assign( 'APPPATH', APPPATH );
        $this->assign( 'BASEPATH', BASEPATH );
        $this->assign('BASEURL', "/assets/");
        if ( method_exists( $this, 'assignByRef') )
        {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }
        $this->force_compile = 1;
        $this->caching = true;
        $this->cache_lifetime = 120;
 
    }
 
    function view($template_name) {
        if (strpos($template_name, '.') === FALSE && 
        strpos($template_name, ':') === FALSE) {
            $template_name .= '.htm';
        }
        parent::display($template_name);
    }
}