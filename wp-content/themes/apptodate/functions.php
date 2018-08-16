<?php

	include 'autoload/acf-repeater/acf-repeater.php';
	include 'autoload/acf-options-page/acf-options-page.php';

	function apptodateScripts() {
		wp_enqueue_style('stylesheet', get_stylesheet_uri());

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

	//admin login 
	// function mytheme_enqueue_login_style() {
	//     wp_enqueue_style( 'mytheme-options-style', get_template_directory_uri() . '/css/style.css' ); 
	// }

	// add_action( 'login_enqueue_scripts', 'mytheme_enqueue_login_style' );
	//admin login


	function apptodate_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'apptodate_custom_logo_setup' );

function apptodate_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-service',
			'name' => __( 'Footer Service', 'apptodate' ),
			'description' => __( 'A short description of the footer service sidebar.', 'apptodate' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="bold font18 margin_b_18">',
			'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-blog',
			'name' => __( 'Footer Blog', 'apptodate' ),
			'description' => __( 'A short description of the footer blog sidebar.', 'apptodate' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="bold font18 margin_b_18">',
			'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-project',
			'name' => __( 'Footer Project', 'apptodate' ),
			'description' => __( 'A short description of the footer project sidebar.', 'apptodate' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="bold font18 margin_b_18">',
			'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-we',
			'name' => __( 'Footer We', 'apptodate' ),
			'description' => __( 'A short description of the footer we sidebar.', 'apptodate' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="bold font18 margin_b_18">',
			'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-address',
			'name' => __( 'Footer Address', 'apptodate' ),
			'description' => __( 'A short description of the  footer address sidebar.', 'apptodate' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="bold font18 margin_b_18">',
			'after_title' => '</h4>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'apptodate_register_sidebars' );


remove_filter ('acf_the_content', 'wpautop');
?>