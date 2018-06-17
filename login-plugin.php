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

if ( !defined('ABSPATH') ) {
  die;
}

if ( !class_exists('LoginPlugin') ) {
  class LoginPlugin {

    function __construct() {
      add_action('init');
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
