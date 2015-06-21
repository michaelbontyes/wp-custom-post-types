<?php

function create_custom_post_ideas() {
    register_post_type( 'ideas',
        array(
        'labels' => array(
            'name' => 'Ideas',
            'singular_name' => 'Idea',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Idea',
            'edit' => 'Edit',
            'edit_item' => 'Edit Idea',
            'new_item' => 'New Idea',
            'view' => 'View',
            'view_item' => 'View Idea',
            'search_items' => 'Search Ideas',
            'not_found_in_trash' => 'No Idea found in Trash'),

        'public' => true,
        'rewrite' => array('with_front' => false),
        'supports' => array( 'title', 'editor', 'thumbnail','post-formats','categories','revisions'),
        'menu_icon' => 'dashicons-admin-post',
        'has_archive' => true,  
        'taxonomies' => array('category', 'post_tag'),
        )
    );    
}
add_action( 'init', 'create_custom_post_ideas' );