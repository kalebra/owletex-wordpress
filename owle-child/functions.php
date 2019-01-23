<?php
    function my_theme_enqueue_styles() {
        wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/style/reset.css', false, time() );
        wp_enqueue_style('fonts-ttcommons', get_stylesheet_directory_uri() . '/fonts/TTCommons/stylesheet.css', false, time() );
        wp_enqueue_style('fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto', false, time() );
        wp_enqueue_style('fonts-lato', 'https://fonts.googleapis.com/css?family=Lato', false, time() );
        wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/slick/slick.css', false, time() );
        wp_enqueue_style('slick-theme-css', get_stylesheet_directory_uri() . '/slick/slick-theme.css', false, time() );
        wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/style/aos.css', false, time() );
        if ( is_page_template( 'posts-template.php')) {
            wp_enqueue_style('page-template', get_stylesheet_directory_uri() . '/style/page.css', false, time() );
        } else {
            wp_enqueue_style('style-main', get_stylesheet_directory_uri() . '/style/style.css', false, time() );
        }

        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null);
        wp_enqueue_script('jquery');

        wp_enqueue_script('lottie', get_stylesheet_directory_uri() . '/js/lottie.min.js', false, null, true );
        wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/js/aos.js', false, null, true );
        wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/slick/slick.js', 'jquery', null, true );
        wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery', 'lottie', 'slick'), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

    function wpse_enqueue_page_template_styles() {
        if ( is_page_template( 'mytemplate.php' ) ) {
            wp_enqueue_style( 'page-template', get_template_directory_uri() . '/css/page-template.css' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );

    /**
     * Register our sidebars and widgetized areas.
     */
    function owle_widgets_init() {

        register_sidebar( array(
            'name'          => 'Home right sidebar',
            'id'            => 'home_right_1',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ) );

    }
    add_action( 'widgets_init', 'owle_widgets_init' );
