<?php


function ctp(){
    register_post_type('', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('', 'emprendimiento'), // Rename these to suit
            'singular_name' => __('', 'emprendimiento'),
            'add_new' => __('Add New', 'emprendimiento'),
            'add_new_item' => __('Add New', 'emprendimiento'),
            'edit' => __('Edit', 'emprendimiento'),
            'edit_item' => __('Edit', 'emprendimiento'),
            'new_item' => __('New', 'emprendimiento'),
            'view' => __('View', 'emprendimiento'),
            'view_item' => __('View', 'emprendimiento'),
            'search_items' => __('Search', 'emprendimiento'),
            'not_found' => __('Not found', 'emprendimiento'),
            'not_found_in_trash' => __('Not found in Trash', 'emprendimiento')
        ),
        'description'  => __( '', 'emprendimiento' ),
        'hierarchical' => false, // Allows yours to behave like Hierarchy Pages
        'has_archive' => false,
        'supports' => array(
            'title',
            'editor'
        ), // Go to Dashboard Custom HTML5 Blank for supports
        'can_export' => true, // Allows export in Tools > Export,
        'show_in_nav_menus'   => false,
        'exclude_from_search' => true,
        'menu_icon'           => '',

        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'rewrite' => false  // it shouldn't have rewrite rules
    ));

}


?>
