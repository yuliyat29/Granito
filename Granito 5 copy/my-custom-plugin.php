<?php
/*
Plugin Name: Cristallina
Description: A custom plugin to include HTML, CSS, and JS files.
Version: 1.0
Author: Cristallina Marble
*/

function my_custom_plugin() {
    include(plugin_dir_path(__FILE__) . 'index.html');
}
add_shortcode('my_custom_plugin', 'my_custom_plugin');

function my_custom_plugin_assets() {
    wp_enqueue_style('my-custom-plugin-style', plugins_url('style.css', __FILE__));
    wp_enqueue_script('my-custom-plugin-script', plugins_url('script.js', __FILE__), array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_plugin_assets');
?>
