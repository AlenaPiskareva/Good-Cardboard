<?php
    add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
    function theme_add_scripts() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }