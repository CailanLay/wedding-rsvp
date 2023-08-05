<?php

// REGISTER CUSTOM POST TYPES

register_post_type( 'guest', [
    'labels' => [
        'name' => 'Guests',
        'singular_name' => 'Guest',
        'menu_name' => 'Guests',
        'all_items' => 'All Guests',
        'edit_item' => 'Edit Guest',
        'view_item' => 'View Guest',
        'view_items' => 'View Guests',
        'add_new_item' => 'Add New Guest',
        'new_item' => 'New Guest',
        'parent_item_colon' => 'Parent Guest:',
        'search_items' => 'Search Guests',
        'not_found' => 'No guests found',
        'not_found_in_trash' => 'No guests found in Trash',
        'archives' => 'Guest Archives',
        'attributes' => 'Guest Attributes',
        'insert_into_item' => 'Insert into guest',
        'uploaded_to_this_item' => 'Uploaded to this guest',
        'filter_items_list' => 'Filter guests list',
        'filter_by_date' => 'Filter guests by date',
        'items_list_navigation' => 'Guests list navigation',
        'items_list' => 'Guests list',
        'item_published' => 'Guest published.',
        'item_published_privately' => 'Guest published privately.',
        'item_reverted_to_draft' => 'Guest reverted to draft.',
        'item_scheduled' => 'Guest scheduled.',
        'item_updated' => 'Guest updated.',
        'item_link' => 'Guest Link',
        'item_link_description' => 'A link to a guest.',
    ],
    'public' => true,
    // 'hierarchical' => true,
    'show_in_admin_bar' => false,
    'show_in_rest' => false,
    'supports' => [
        'title',
        'editor',
        'thumbnail',
        'page-attributes'
    ],
    'delete_with_user' => false,
]);


register_taxonomy('attendance', ['guest'], [
    'hierarchical' => true,
    'labels' => [
        'name' => 'attendance',
        'singular_name' => 'attendance',
        'menu_name' => 'attendance',
    ],
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => ['slug' => 'attendance'],
]);