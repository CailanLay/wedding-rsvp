<?php 
// CLEAN UP


// remove quick draft dashboard widget
add_action( 'wp_dashboard_setup', function() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
});

add_action('admin_menu', function () {
    remove_menu_page('edit.php'); // remove default posts
    remove_menu_page('edit-comments.php'); // Remove comments page in menu
});

add_action('init', function() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'wp_shortlink_wp_head',);
    
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script');
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    add_filter('tiny_mce_plugins', function($plugins) {
        return is_array($plugins) ? array_diff($plugins, ['wpemoji']) : [];
    });
});


// Close comments on the front-end
add_filter('pings_open', '__return_false');
add_filter('comments_open', '__return_false');

// Hide existing comments
add_filter('comments_array', '__return_empty_array');

// remove admin bar
add_filter('show_admin_bar', '__return_false');





// SECURITY CLEANUP

// remove wordpress version form scripts and styles
function remove_css_js_version( $src ) {
    if(strpos($src, '?ver=')) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}

remove_action('wp_head', 'wp_generator');
add_filter( 'style_loader_src', 'remove_css_js_version');
add_filter( 'script_loader_src', 'remove_css_js_version');





// SCRIPTS AND STYLES CLEANUP

add_action( 'wp_enqueue_scripts', function() {

    // remove block styles
    wp_dequeue_style('global-styles');
    wp_dequeue_style('wc-blocks-style');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('wp-block-library-theme');

});