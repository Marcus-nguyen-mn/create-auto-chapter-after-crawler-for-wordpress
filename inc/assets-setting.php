<?php
function mc_create_chap_enqueue_script() 
{
    wp_enqueue_script('mccreatechapter', plugins_url('mc-create-chapter/src/assets/js/bundle.js'),array('jquery'),false, true);
}
add_action('admin_enqueue_scripts', 'mc_create_chap_enqueue_script');
/*
 *  ENQUEUE STYLES
 */
function mc_create_chap_enqueue_styles()
{
    wp_enqueue_style('mccreatechapter', plugins_url('mc-create-chapter/src/assets/css/bundle.css'));
}
add_action('admin_enqueue_scripts', 'mc_create_chap_enqueue_styles');