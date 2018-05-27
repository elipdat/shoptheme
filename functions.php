<?php

// Add style for shoptheme
if (!function_exists('shoptheme-script')) {
    add_action( 'wp_enqueue_scripts', 'shoptheme_scripts', 99 );
    function shoptheme_scripts() {
        wp_enqueue_style( 'shoptheme-bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '1.0' );
        wp_enqueue_style( 'shoptheme-style-css', get_stylesheet_directory_uri() . '/css/shoptheme-style.css', array(), '1.0' );

        wp_enqueue_script( 'shoptheme-popper-js', get_stylesheet_directory_uri() . '/js/popper.min.js', array(), '1.0', true );
        wp_enqueue_script( 'shoptheme-bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true );
        wp_enqueue_script( 'shoptheme-script-js', get_stylesheet_directory_uri() . '/js/shoptheme-script.js', array(), '1.0', true );
    }
}

// Add modifies: hooks, functions in shoptheme
require 'inc/shoptheme-template-hooks.php';
require 'inc/shoptheme-template-functions.php';

