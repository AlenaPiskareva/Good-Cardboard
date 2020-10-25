<?php
    add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
    function theme_add_scripts() {
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
        wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');
        wp_enqueue_style('slick', get_template_directory_uri() . '/slick/slick.css');
        wp_enqueue_style('index', get_template_directory_uri() . '/css/index.css');
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );
    function theme_scripts() {
        wp_deregister_script('jquery');