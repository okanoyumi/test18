<?php
/**
 *
 * Functions
 *
 * @package WordPress
 **/

/** Add Theme Support */
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnail' );

/** Custom Posts */
function news_init() {
	register_post_type(
		'news', array(
			'label'         => 'news',
			'public'        => true,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-field' ),
			'menu_position' => 3,
			'has_archive'   => true,
			'taxonomies'    => array( 'news' ),
			'show_in_rest'  => true,
			'singular_name' => 'news',
	)	);
	$args = array(
		'label'        => 'NEWS',
		'public'       => true,
		'show_ul'      => true,
		'hierarchical' => true,
	);
	register_taxonomy( 'news', $args );
}
add_action( 'init', 'news_init' );

/** Load stylesheet, script */
function add_files() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js' );
	wp_enqueue_script( 'fullpage-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.min.js' );
	wp_enqueue_script( 'mainjs', get_theme_file_uri( '/assets/main.js' ) );
	wp_enqueue_style( 'maincss', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_files' );
