<?php
	/*
	Plugin Name: Ajax
	Plugin URI: 
	Description: Ajax
	Version: 1.1
	Author: Amirul Momenin E-mail: patainc@gmail.com
	Author URI: 
	License: GPL
	*/
	function test_ajax_load_scripts() {
			// load our jquery file that sends the $.post request
			wp_enqueue_script( "ajax-test", plugin_dir_url( __FILE__ ) . '/js/ajax-test.js', array( 'jquery' ) );
			
			// make the ajaxurl var available to the above script
			wp_localize_script( 'ajax-test', 'the_ajax_script', array('ajaxurl'=>plugin_dir_url( __FILE__ ) . 'load-ajax.php')   );
			
			wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.9.1.js');
		
		}
		add_action('wp_print_scripts', 'test_ajax_load_scripts');
		
	//page	
	add_shortcode( 'ajax_page', 'ajax_page_content' );	
	
	function ajax_page_content(){
		include_once dirname(__FILE__) . '/template/view.php';
	}