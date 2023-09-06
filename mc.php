<?php
/**
 * @package Mc Create Chapter
 */
/*
Plugin Name: Mc Create Chapter
Plugin URI: 
Description: This is tool created by Nam Nguyen
Version: 1.0
Author: Nam Nguyen
Author URI: 
License: 
Text Domain: mccreatechapter
*/

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Invalid request, please check your plugin dir path. ' );
}
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define( 'CREATECHAP__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( CREATECHAP__PLUGIN_DIR . 'inc/crawler-page.php' );
require_once( CREATECHAP__PLUGIN_DIR . 'inc/handle-create-chapter.php' );
require_once( CREATECHAP__PLUGIN_DIR . 'inc/assets-setting.php' );