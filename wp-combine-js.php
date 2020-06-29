<?php
/*
Plugin Name: AtozSites Combine JS Plugin
Plugin URI: https://github.com/atozsites/combine-js
Description: WordPress plugin that attempts to combine, minify, and compress JS.
Author: atozsites
Version: 1.0
Author URI: http://www.atozsites.com
Requires at least: 3.0.0
Tested up to: 5.4
*/
?>
<?php

// don't allow direct access of this file

if ( preg_match( '#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'] ) ) die();

// require base objects and do instantiation

if ( !class_exists( 'atozsitesCombineJS' ) ) {
        require_once( dirname( __FILE__ ) . '/classes/combine-js.php' );
}
$atozsites_combine_js = new atozsitesCombineJS();

// define plugin file path

$atozsites_combine_js->set_plugin_file( __FILE__ );

// define directory name of plugin

$atozsites_combine_js->set_plugin_dir( basename( dirname( __FILE__ ) ) );

// path to this plugin

$atozsites_combine_js->set_plugin_path( dirname( __FILE__ ) );

// URL to plugin

$atozsites_combine_js->set_plugin_url( plugin_dir_url(__FILE__) );

// call init

$atozsites_combine_js->init();

?>
