<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Autoload module's hooks
 * 
 * Modified
 * @author: José Postiga <jose.postiga@josepostiga.com>
 * @reason: too many directory deep level access (3). Only need 1 for this file
 * purpose.
 * 
 */
class MX_Hooks extends CI_Hooks 
{
    /**
     * Initialize the Hooks Preferences
     *
     * @access  private
     * @return  void
     * 
     */
    function _initialize()
    {
        $CFG =& load_class('Config', 'core');
        
        // If hooks are not enabled in the config file. Nothing else to do here.
        if ($CFG->item('enable_hooks') == FALSE) {
            return;
        }
        
        // Grab the "hooks" definition file. If there are no hooks, we're done.
        if (defined('ENVIRONMENT') AND is_file(APPPATH . 'config/' . ENVIRONMENT 
                . '/hooks.php'))
        {
            include(APPPATH . 'config/' . ENVIRONMENT . '/hooks.php');
        } elseif (is_file(APPPATH . 'config/hooks.php')) {
            include(APPPATH . 'config/hooks.php');
        }
        
        // grab global hooks files
        if (is_file(APPPATH . "hooks/hooks.php")) {
            include APPPATH . "hooks/hooks.php";
        }
        
        // grab module's hooks files
        $modules = $this->directory_map(MODPATH, 1);
        
        // avoiding e_notice errors
        if(!empty($modules)) {
            foreach ($modules as $key => $value) {
                if (is_file(MODPATH . "{$value}/hooks/hooks.php")) {
                    include MODPATH . "{$value}/hooks/hooks.php";
                }
            }
        }
        
        //checks if there's any hooks to return
        if (! isset($hook) OR ! is_array($hook)) {
            return;
        }
   
        $this->hooks =& $hook;
        $this->enabled = TRUE;
    }
    
    public function directory_map($source_dir, $directory_depth = 0, 
            $hidden = FALSE)
    {
        if ($fp = @opendir($source_dir)) {
            $filedata = array();
            
            $new_depth = $directory_depth - 1;
            
            $source_dir = rtrim($source_dir, DIRECTORY_SEPARATOR) 
                    . DIRECTORY_SEPARATOR;

            while (FALSE !== ($file = readdir($fp))) {
                // Remove '.', '..', and hidden files [optional]
                if (! trim($file, '.') OR ($hidden == FALSE && $file[0] == '.')) {
                    continue;
                }

                if (($directory_depth < 1 OR $new_depth > 0) && 
                        @is_dir($source_dir.$file))
                {
                    $filedata[$file] = $this->directory_map($source_dir . $file 
                            . DIRECTORY_SEPARATOR, $new_depth, $hidden);
                } else {
                    $filedata[] = $file;
                }
            }

            closedir($fp);
            
            return $filedata;
        }

        return FALSE;
    }
} 