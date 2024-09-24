<?php
function ali_css_js_file_calling(){
    wp_enqueue_style( 'ali-style', get_stylesheet_uri());
    wp_register_style('boostrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.3', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'boostrap', get_stylesheet_uri());
    wp_enqueue_style( 'custom', get_stylesheet_uri());
    
    
    //JQuery
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'boostrap',get_template_directory(  ).'/js/boostrap.js',array(),'5.3.3', 'true');
    wp_enqueue_script( 'main',get_template_directory(  ).'/js/main.js',array(),'1.0.0', 'true');
    
    }
    add_action('wp_enqueue_scripts','ali_css_js_file_calling');
    
    
    // Google Fonts Enqueue
    function ali_add_google_fonts(){
    wp_enqueue_style('ali_google_fonts','https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',false);
    }
    add_action('wp_enqueue_scripts','ali_add_google_fonts');