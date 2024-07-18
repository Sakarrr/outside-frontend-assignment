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
