<?php

	include 'autoload/acf-repeater/acf-repeater.php';
	include 'autoload/acf-options-page/acf-options-page.php';

	function apptodateScripts() {
		//wp_enqueue_style('stylesheet', get_stylesheet_uri());

		wp_enqueue_style('bootstrap.min', get_theme_file_uri('/css/bootstrap.min.css'), array(), '1.0');
		wp_enqueue_style('style-fornt', get_theme_file_uri('/css/style.css'), array(), '1.0');
		wp_enqueue_style('animate-min', get_theme_file_uri('/css/animate.min.css'), array(), '1.0');
		wp_enqueue_style('normalize-min', get_theme_file_uri('/css/normalize.min.css'), array(), '1.0');
		wp_enqueue_style('aos', get_theme_file_uri('/css/aos.css'), array(), '1.0');

		wp_enqueue_script('jquery-min', get_theme_file_uri('/js/jquery.min.js'), array(), '3.3.7', true);
		wp_enqueue_script('bootstrap-min', get_theme_file_uri('/js/bootstrap.min.js'), array(), '3.3.7', true);
		wp_enqueue_script('aos', get_theme_file_uri('/js/aos.js'), array(), '2.0.4', true);
		wp_enqueue_script('all', get_theme_file_uri('/js/all.js'), array(), '5.0.6', true);
		
	}

	add_action('wp_enqueue_scripts', 'apptodateScripts');

	function apptodateMenuRegister() {
		register_nav_menus(
		    array(
		      'header-menu' => __( 'Header Menu' ),
		      'footer-menu' => __( 'Footer Menu' )
		    )
	  	);
	}

	add_action( 'init', 'apptodateMenuRegister' );

	add_theme_support( 'post-thumbnails' );

	function wpb_adding_scripts() {
		wp_register_script('my_amazing_script', get_template_directory_uri() . '/js/index.js', array(),'1.1', true);
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_enqueue_script('my_amazing_script');
	}
  
	add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 

	function mytheme_enqueue_login_style() {
	    //wp_enqueue_style( 'mytheme-options-style', get_template_directory_uri() . '/css/style.css' ); 
	}

	add_action( 'login_enqueue_scripts', 'mytheme_enqueue_login_style' );