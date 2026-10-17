<?php

function custom_theme_assets() {

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );


    // Google Font - Work Sans
    wp_enqueue_style(
        'work-sans',
        'https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );


    // Custom CSS
    wp_enqueue_style(
        'main-css',
        get_template_directory_uri() . '/css/main.css',
        array('bootstrap-css', 'work-sans'),
        filemtime(get_template_directory() . '/css/main.css')
    );


    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );


    // Navbar JS
    wp_enqueue_script(
        'navbar-js',
        get_template_directory_uri() . '/js/navbar.js',
        array(),
        filemtime(get_template_directory() . '/js/navbar.js'),
        true
    );


    // Main JS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array('bootstrap-js', 'navbar-js'),
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );

}

add_action('wp_enqueue_scripts', 'custom_theme_assets');