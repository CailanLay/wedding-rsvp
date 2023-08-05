<?php

// CLEAN UP
include get_template_directory().'/includes/wp-cleanup.php';

add_action('after_setup_theme', function() {

    // Navigation

    register_nav_menus([
        "primary" => "Primary",
    ]);

});

add_action('init', function() {

    // Custom post types
    include get_template_directory().'/includes/custom-post-types.php';
    
});



// Add scripts and styles
add_action( 'wp_enqueue_scripts', function() {

    // Global Scripts and Styles
    wp_enqueue_style('styles', get_template_directory_uri().'/style.css');
    wp_enqueue_style('form-styles', get_template_directory_uri().'/css/forms.css');
    wp_enqueue_style('footer-styles', get_template_directory_uri().'/css/header.css');
    wp_enqueue_style('header-styles', get_template_directory_uri().'/css/footer.css');
    wp_enqueue_script('scripts', get_template_directory_uri().'/scripts.js', ['jquery'], null, true );
    
    
    // add template scripts and styles
    // others...
    wp_enqueue_style('home-page-styles', get_template_directory_uri().'/css/home.css');
    wp_enqueue_style('rsvp-page-styles', get_template_directory_uri().'/css/rsvp.css');



});




// CUSTOM FUNCTIONS

include get_template_directory().'/includes/form-handler.php';



// builds the nav tree;

function build_nav_tree($elements, $parent_id = 0) {
    $branch = [];
    foreach($elements as $element) {
        if($element->menu_item_parent == $parent_id) {
            $children = build_nav_tree($elements, $element->ID);
            if($children) $element->children = $children;
            $branch[$element->ID] = $element;
            unset($element);
        }
    }
    return $branch;
}