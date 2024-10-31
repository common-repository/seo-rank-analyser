<?php
/*
Plugin Name: SEO Rank Analyser 
Plugin URI: http://seorankanalyser.com/
Description: SEO Rank Analyser (Analyzer) is free and light weight one stop solutions for all SEO (Search Engine Optimization) related analysis and advice. With this  plugin, you can analyze on-page SEO, website score and All page (post and pages) rank checker. This is best SEO Audit tool.
Version: 1.0
Author: SEORankAnalyser.com
Author URI: http://seorankanalyser.com
License:  GPL2 or later
. 
.
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



add_action( 'admin_menu', 'seorankanalyser_plugin_menu' );

function seorankanalyser_plugin_menu() {
	
    add_menu_page(__('SEO Rank Analyser','menu-seorankanalyser'), __('SEO Rank Analyser','menu-seorankanalyser'), 'manage_options', 'seorankanalyser_plugin_options', 'seorankanalyser_plugin_options' , plugin_dir_url( __FILE__ ) .'assets/images/logo.png');

    add_submenu_page('seorankanalyser_plugin_options', __('Full Depth Analysis','menu-seorankanalyser'), __('Full Depth Analysis','menu-seorankanalyser'), 'manage_options', 'seorankanalyser_plugin_pagelist', 'seorankanalyser_plugin_pagelist');

}

function seorankanalyser_plugin_options() {
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	require_once('seorankanalyser-main-page.php');
}

function seorankanalyser_plugin_pagelist() {
	
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}

	require_once('seorankanalyser-all-pagelink.php');
}


function seorankanalyser_get_domain($url)
{
  $chunk = parse_url($url);
  $domain = isset($pieces['host']) ? $chunk['host'] : '';
  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
    return $regs['domain'];
  }
  return false;
}


?>
