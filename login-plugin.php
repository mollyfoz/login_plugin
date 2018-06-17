<?php

/**
* @package Login Plugin
*/

/*
Plugin Name:  LoginPlugin
Plugin URI:   https://github.com/mollyfoz/login_plugin
Description:  WordPress Login Plugin Challenge
Version:      1.0.0
Author:       Molly Magnifico
Author URI:   https://github.com/mollyfoz/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/


//if the path is not defined, someone is looking at the file that does not have permission to do so. If that is the case, kill the script.
if ( !defined('ABSPATH') ) {
  die;
}

//define class and instantiate
if ( !class_exists('LoginPlugin') ) {
  class LoginPlugin {

    function __construct() {
    }

    function activate() {
      flush_rewrite_rules();
    }

    function deactivate() {
      flush_rewrite_rules();
    }
  }
}

if ( class_exists('LoginPlugin') ) {
  $login_plugin = new LoginPlugin('Plugin Initialized');
}

//activation and deactivation actions
register_activation_hook(__FILE__, array($login_plugin, 'activate'));

register_activation_hook(__FILE__, array($login_plugin, 'deactivate'));
