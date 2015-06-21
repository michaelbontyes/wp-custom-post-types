<?php

function create_custom_post_journal() {
    register_post_type( 'journal',
        array(
        'labels' => array(
            'name' => 'Journal',
            'singular_name' => 'Article',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Article',
            'edit' => 'Edit',
            'edit_item' => 'Edit Article',
            'new_item' => 'New Article',
            'view' => 'View',
            'view_item' => 'View Article',
            'search_items' => 'Search Articles',
            'not_found_in_trash' => 'No Article found in Trash'),

        'public' => true,
        'rewrite' => array('with_front' => false),
        'supports' => array( 'title', 'editor', 'thumbnail','post-formats','categories','revisions'),
        'menu_icon' => 'dashicons-format-aside',
        'has_archive' => true,  
        'taxonomies' => array('category', 'post_tag'),
        )
    );    
}
add_action( 'init', 'create_custom_post_journal' );