<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * System hooks
 * 
 * @package: Core
 * @module: n/a
 * @created: 01/2014
 * @description: This file handles the core's main hooks methods. See 
 * hooks.php (the router) for more details.
 * 
 * @author: José Postiga <jose.postiga@josepostiga.com>
 *          Contact me if you have any questions :)
 * 
 */
class SystemHooks {
    public $CI;
    
    /*
     * Construct function
     * 
     * @author: José Postiga <jose.postiga@josepostiga.com>
     * @date: 01/2014
     * 
     * @description: Deals with class' specific var inits
     * 
     */
    function __construct()
    {
        // gets the app's instance
        $this->CI =& get_instance();
    }
    
    /*
     * Index method
     * 
     * @author: José Postiga <jose.postiga@josepostiga.com>
     * @date: 01/2014
     * 
     * @description: this method is automaticaly runned when other is not 
     * defined. Must always exist, even if empty.
     * 
     */
    public function index()
    {
        //only shows error. We do no want anyone to access this method
        show_404();
    }
}