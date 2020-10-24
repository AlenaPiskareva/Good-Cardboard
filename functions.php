<?php
    add_action( 'wp_enqueue_script', 'theme_name_scripts' );
    function theme_name_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());        
    }
?>
