<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14.01.2019
 * Time: 13:27
 */


    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        wp_enqueue_style('parent-reset', get_template_directory_uri() . '/style/reset.css', false, time() );
        wp_enqueue_style('parent-fonts-ttcommons', get_template_directory_uri() . '/fonts/TTCommons/stylesheet.css', false, time() );
        wp_enqueue_style('fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto', false, time() );
        wp_enqueue_style('parent-slick-css', get_template_directory_uri() . '/slick/slick.css', false, time() );
        wp_enqueue_style('parent-slick-theme-css', get_template_directory_uri() . '/slick/slick-theme.css', false, time() );
        wp_enqueue_style('parent-aos-css', get_template_directory_uri() . '/style/aos.css', false, time() );
        wp_enqueue_style('parent-style-main', get_template_directory_uri() . '/style/style.css', false, time() );

        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null);
        wp_enqueue_script('jquery');

        wp_enqueue_script('parent-lottie', get_template_directory_uri() . '/js/lottie.min.js', false, null, true );
        wp_enqueue_script('parent-aos', get_template_directory_uri() . '/js/aos.js', false, null, true );
        wp_enqueue_script('parent-slick', get_template_directory_uri() . '/slick/slick.js', 'jquery', null, true );
        wp_enqueue_script('parent-main', get_template_directory_uri() . '/js/main.js', array('jquery', 'lottie', 'slick'), null, true );
    }
?>