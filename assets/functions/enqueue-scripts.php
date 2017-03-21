<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.0', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Register External

    wp_enqueue_script( 'transit', get_template_directory_uri() . '/assets/js/jquery.transit.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'reveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'stickyHeader', get_template_directory_uri() . '/assets/js/sticky-header.js', array( 'jquery' ), '', true );
    wp_enqueue_style( 'slickTheme', get_template_directory_uri() . '/assets/slick/slick.css', array(), '', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), '', 'all' );
    wp_enqueue_script( 'slickJS', get_template_directory_uri() . '/assets/slick/slick.js', array( 'jquery' ), '', true );
    wp_enqueue_style( 'fontAwesomeInclude', get_template_directory_uri() . '/assets/js/css/font-awesome.css', array(), '', 'all' );

    // Smooth Scrolling Include
    wp_enqueue_script( 'smoothMouse', get_template_directory_uri() . '/assets/js/jQuery.scrollSpeed.js', array( 'jquery' ), '', true );
    
    // Parallax Effects

    wp_enqueue_style( 'parallaxCSS', get_template_directory_uri() . '/assets/js/dzsparallaxer/dzsparallaxer.css', array(), '', 'all' );
    wp_enqueue_script( 'parallaxJS', get_template_directory_uri() . '/assets/js/dzsparallaxer/dzsparallaxer.js', array( 'jquery' ), '', true );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);