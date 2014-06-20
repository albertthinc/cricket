<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Homepage hooks
 * 
 * @package: Core
 * @module: Homepage
 * @created: 01/2014
 * @description: This file handles the homepage's main hooks functions. See 
 * hooks.php (the router) for more details.
 * 
 * @author: José Postiga <jose.postiga@josepostiga.com>
 *          Contact me if you have any questions :)
 * 
 */
class HomepageHooks {
    public $CI;
    
    private $sources_folder;
    
    /*
     * Construct method
     * 
     * @author: José Postiga <jose.postiga@josepostiga.com>
     * @date: 01/2014
     * 
     * @description: Deals with class' specific var inits
     * 
     */
    function __construct()
    {
        // get's the app's instance
        $this->CI =& get_instance();
        
        // we define some needed variables
        $this->sources_folder = MODPATH.'homepage/sources/';
    }
    
    /*
     * Index method
     * 
     * @author: José Postiga <jose.postiga@josepostiga.com>
     * @date: 01/2014
     * 
     * @description: this method is automaticaly runned when other is not 
     * defined. Must always exist, even if empty. Usually is used for general 
     * structure and database integrity checks.
     * 
     */
    public function index()
    {
        // let's check if the database tables exists
        $this->checkDbTables();
    }
    
    /*
     * checkDbTables method
     * 
     * @author: José Postiga <jose.postiga@josepostiga.com>
     * @date: 01/2014
     * 
     * @description: this method checks if the require database tables for this 
     * module are available. If not, runs the sql files as necessary.
     * 
     */
    public function checkDbTables()
    {
        // load file helper. We'll need it!
        $this->CI->load->helper('file');
        
        // connect to the database (see general config.php)
        $this->CI->load->database();
        
        // the tables structure is defined in the module manifest file
        $manifest = json_decode(read_file(MODPATH . 'homepage/manifest.json'));
        
        // we only continue if there's any database requirements
        if(! empty($manifest->database)) {
            foreach($manifest->database as $table) {
                // let's check if table exists
                if(! $this->CI->db->table_exists($table)) {
                    $this->install($table . '.sql');
                }
            }
        }
    }
    
     /*
     * install method
     * 
     * @author: José Postiga <jose.postiga@josepostiga.com>
     * @date: 01/2014
     * 
     * @description: this method runs the sql files as necessary.
     * 
     */
    public function install($source_file)
    {
        // load file helper. We'll need it!
        $this->CI->load->helper('file');
        
        // connect to the database (see general config.php)
        $this->CI->load->database();
        
        // first we check if there's a file
        if(is_file($this->sources_folder . $source_file)) {
            // let's create the query map array and execute them
            $queries = explode(';', 
                    read_file($this->sources_folder . $source_file));
            
            foreach($queries as $query) {
                if(! empty($query)) {
                    $this->CI->db->query($query); 
                }
            }
        } else {
            // show error if required file is not available
            show_error('Required file ' . $source_file . ' not found!', 404);
        }
    }
}