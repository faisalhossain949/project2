<?php
// vc add
if(file_exists(get_template_directory() . '/inc/vc-element.php')){
	require_once get_template_directory() . '/inc/vc-element.php';
}
if(file_exists(get_template_directory() . '/inc/vc-element-outpu.php')){
	require_once get_template_directory() . '/inc/vc-element-outpu.php';
}
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
// basic setup function
if ( ! function_exists( 'theme_setup' ) ) :
	
	function theme_setup() {
		load_theme_textdomain( 'theme', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'mainmenu' => esc_html__( 'Primary', 'theme' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );


function theme_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );

// sidebar
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );


// add css and js
function theme_scripts() {
	wp_enqueue_style( 'theme-main', get_template_directory_uri() . '/assets/css/main.css', '215', true );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/js/skel.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/js/util.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

//redux add
if (!class_exists('redux-framework') && file_exists(dirname(__FILE__) . '/redux-framework-master/ReduxCore/framework.php')){
	require_once (dirname(__FILE__) . '/redux-framework-master/ReduxCore/framework.php');
}
if (!isset($redux_demo) && file_exists(dirname(__FILE__) . '/redux-framework-master/sample/functions-confiq.php')){
	require_once (dirname(__FILE__) . '/redux-framework-master/sample/functions-confiq.php');
}