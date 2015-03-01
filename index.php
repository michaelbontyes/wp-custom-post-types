<?php
/*
Plugin Name: Wordpress Custom Post Types
Plugin URI: https://github.com/michaelbontyes/wp-plugin-custom-post-types
Description: Plugin for Custom Posts type Creation
Version: 1.0
Author: Michael Bontyes
Author URI: http://woodd.org
License: GPL2
*/

/* Include the custom post types files */
$shortcodes_dir = dirname( __FILE__ ) . '/post-types';
$files = preg_grep('/^([^.])/', scandir($shortcodes_dir));
foreach($files as $file) {

	require (dirname( __FILE__ ) . '/post-types/'.$file);
}