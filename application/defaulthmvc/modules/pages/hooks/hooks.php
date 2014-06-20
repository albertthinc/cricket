<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Module's Hooks router
 * 
 * @package: Core
 * @module: Homepage
 * @created: 01/2014
 * @description: This file must be used to route the hooks files to their
 * respective classes' files.
 * 
 * @author: José Postiga <jose.postiga@josepostiga.com>
 *          Contact me if you have any questions :)
 * 
 */

$hook['post_controller_constructor'][] = array(
    'class'    => 'HomepageHooks',
    'function' => 'index',
    'filename' => 'homepage_hooks.php',
    'filepath' => 'modules/homepage/hooks',
    'params'   => array()
);