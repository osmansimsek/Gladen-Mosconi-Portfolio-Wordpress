<?php

// Function to enqueue stylesheets
function add_css()
{
    // Enqueue Google fonts
    wp_enqueue_style('google-font-opensans', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i');
    wp_enqueue_style('google-font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');
    
    // Enqueue theme-specific styles
    wp_enqueue_style('nicepage', get_template_directory_uri() . '/assets/css/nicepage.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');

    // Conditional styles for specific pages
    if (is_page('home')) {
        // Add styles for the home page
    }

    if (is_page('gallery')) {
        wp_enqueue_style('gallery', get_template_directory_uri() . '/assets/css/gallery.css');
    }

    if (is_page('distributor')) {
        wp_enqueue_style('distributor', get_template_directory_uri() . '/assets/css/distributor.css');
    }

    if (is_page('contract')) {
        wp_enqueue_style('contract', get_template_directory_uri() . '/assets/css/contract.css');
    }

    if (is_page('category')) {
        wp_enqueue_style('category', get_template_directory_uri() . '/assets/css/category.css');
    }

    if (is_page('sub-category')) {
        wp_enqueue_style('sub-category', get_template_directory_uri() . '/assets/css/sub-category.css');
    }
}
// Hook the function to 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'add_css');

// Function to enqueue scripts
function add_script()
{
    // Enqueue jQuery and custom scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.9.1.min.js');
    wp_enqueue_script('nicepage', get_template_directory_uri() . '/assets/js/nicepage.js');
}
// Hook the function to 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'add_script');
?>
