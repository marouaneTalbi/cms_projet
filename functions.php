<?php 
// Logique du thème

// Support de logo custom
add_theme_support('custom-logo');

// Support d'image mise en avant

add_theme_support( 'post-thumbnails' );

add_theme_support( 'widgets' );

// enregistrer un emplacement de menu

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// Mettre les assets css en file d'attente
function add_theme_css_and_js(){
	wp_enqueue_style('main-css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_css_and_js');

function mytheme_post_thumbnails() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

