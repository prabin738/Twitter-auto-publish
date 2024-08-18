<?php
/*
Plugin Name: Simple Twitter Auto Publish
Description: Automatically publishes WordPress posts to Twitter.
Version: 1.0
Author: Prabin Singh Thakuri
Author URI: https://starbiographer.com
*/

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'admin/settings.php';

// Activation hook
function simple_twitter_auto_publish_activate() {
    // Register settings
    register_setting('simple_twitter_auto_publish_settings', 'simple_twitter_auto_publish_options');
}
register_activation_hook(__FILE__, 'simple_twitter_auto_publish_activate');

// Deactivation hook
function simple_twitter_auto_publish_deactivate() {
    // Delete options or perform other cleanup tasks
}
register_deactivation_hook(__FILE__, 'simple_twitter_auto_publish_deactivate');
