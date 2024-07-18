<?php
function custom_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'splide-theme-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css' );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

function custom_enqueue_scripts() {
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );

function enqueue_splide_js() {
	wp_enqueue_script( 'splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_splide_js' );

function outside_block_enqueues() {
	wp_enqueue_script( 'outside-block', get_template_directory_uri() . '/assets/js/block.bundle.js', array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components' ) );

	//    wp_enqueue_style('outside-block-editor', get_template_directory_uri().'/assets/css/editor.css', array('wp-edit-blocks'));
	//
	//    wp_enqueue_style('outside-block-frontend', get_template_directory_uri().'/assets/css/outside-frontend.css');
}
add_action( 'enqueue_block_editor_assets', 'outside_block_enqueues' );
add_action( 'wp_enqueue_scripts', 'outside_block_enqueues' );

function register_outside_block() {
	register_block_type(
		'outside-block',
		array(
			'editor_script' => 'outside-block',
			'editor_style'  => 'outside-block-editor',
			'style'         => 'outside-block-frontend',
		)
	);
}
add_action( 'init', 'register_outside_block' );
