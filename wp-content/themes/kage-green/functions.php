<?php
/**
 * Kage functions and definitions
 *
 * @package Kage
 */
 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', esc_url(get_template_directory_uri() . '/inc/') );
	require( get_template_directory() . '/inc/options-framework.php' );
}
if ( ! function_exists( 'kage_setup' ) ) :
function kage_setup() {
    global $content_width;
	if ( ! isset( $content_width ) ) { $content_width = 1014; }
	register_nav_menu( 'primary', __( 'Top Menu', "kage" ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );	
	add_theme_support( 'custom-background' );	
	$custom_header_support = array(
		'default-text-color' => '000',
		'flex-height' => true,
	);
	set_post_thumbnail_size( 150, 150, true );
	add_image_size( 'large-feature', 600, 480, true );
	add_image_size( 'small-feature', 500, 300 );

}
endif; 
add_action( 'after_setup_theme', 'kage_setup' );


function kage_of_register_css() {
	wp_enqueue_style( 'kage-green-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'kage_of_register_css' );


if ( ! function_exists( 'kage_of_register_js' ) ) :
function kage_of_register_js() {
	wp_enqueue_script('main', esc_url(get_template_directory_uri() . '/js/main.js'), array('jquery'),'1.0', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
endif; 
add_action('wp_enqueue_scripts', 'kage_of_register_js');

function kage_ie_support_header() {
    echo '<!--[if lt IE 9]>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5.js' ) . '"></script>'. "\n";
    echo '<![endif]-->'. "\n";
}
add_action( 'wp_head', 'kage_ie_support_header', 1 );

if ( ! function_exists( 'kage_widgets_init' ) ) :
function kage_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Sidebar Widget Area', "kage"),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area', "kage"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ', 
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><hr>',
	));		
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 1', "kage"),
		'id' => 'footer-widget-area-1',
		'description' => __( 'The footer widget area 1', "kage"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 2', "kage"),
		'id' => 'footer-widget-area-2',
		'description' => __( 'The footer widget area 2', "kage"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 3', "kage"),
		'id' => 'footer-widget-area-3',
		'description' => __( 'The footer widget area 3', "kage"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
}
endif;
add_action( 'widgets_init', 'kage_widgets_init' );

function kage_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}
	
	$title .= get_bloginfo( 'name', 'display' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'kage' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'kage_wp_title', 10, 2 );

if ( ! function_exists( 'kage_get_list_posts' ) ) :
function kage_get_list_posts() {
    global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $paged
    );
	$wp_query->query( $args );
    return new WP_Query( $args );
}
endif; 

if ( ! function_exists( 'kage_paginate_page' ) ) :
function kage_paginate_page() {
	wp_link_pages( array( 'before' => '<div class="pagination">', 'after' => '</div><div class="clear"></div>', 'link_before' => '<span class="current_pag">','link_after' => '</span>' ) );
}
endif; 

if ( ! function_exists( 'kage_credits' ) ) :
function kage_credits() {
	$text = 'Theme created by <a href="'.esc_url('http://www.pwtthemes.com/').'">PWT</a>. Powered by <a href="'.esc_url('http://wordpress.org/').'">WordPress.org</a>';
	echo apply_filters( 'kage_credits_text', $text) ;
}
endif; 
add_action( 'kage_display_credits', 'kage_credits' );
?>