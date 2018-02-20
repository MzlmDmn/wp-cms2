<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_theme_support( 'custom-logo' );

function themecomplet_custom_logo_setup() {
    $defaults = array(
        'height'      => 300,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themecomplet_custom_logo_setup' );

function footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Column 1 Footer',
		'id'            => 'first-footer',
		'description' 	=> 'Zone des widgets du footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Column 2 Footer',
		'id'            => 'second-footer',
		'description' 	=> 'Zone des widgets du',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Column 3 Footer',
		'id'            => 'third-footer',
		'description' 	=> 'Zone des widgets du footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2>',
	) );
	
	register_sidebar( array(
		'name'          => 'Column 4 Footer',
		'id'            => 'fourth-footer',
		'description' 	=> 'Zone des widgets du footer',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2>',
	) );

}
add_action( 'widgets_init', 'footer_widgets_init' );