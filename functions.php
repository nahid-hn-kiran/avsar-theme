<?php
/**
 * Theme Functions
 */
add_theme_support('post-thumbnails');

if (has_post_thumbnail()) {
    the_post_thumbnail('full');
}


//  Theme Title 
add_theme_support('title-tag');

// Theme Css and jQuery calling 
function avsar_css_js_file_calling() {
    wp_register_style( 'custom', get_template_directory_uri(  ).'/css/custom.css', array(),'1.0.0','all' );    wp_enqueue_style( 'custom' );

    // jQuery 
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',array(),'1.0.0', 'true');
}

add_action('wp_enqueue_scripts','avsar_css_js_file_calling');

/**
 * Add menu location
 */
register_nav_menus( 
    [
        'primary' => esc_html( 'Header Menu','avsar' ),
    ]
    );