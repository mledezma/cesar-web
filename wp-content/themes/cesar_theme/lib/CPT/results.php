<?php
register_post_type('results', // Register Custom Post Type
    array(
    'labels' => array(
        'name' => __('Resultados', 'cesar_theme'), // Rename these to suit
        'singular_name' => __('Resultado', 'cesar_theme'),
        'add_new' => __('Agregar nuevo', 'cesar_theme'),
        'add_new_item' => __('Agregar nuevo resultado', 'cesar_theme'),
        'edit' => __('Editar', 'cesar_theme'),
        'edit_item' => __('Editar resultado', 'cesar_theme'),
        'new_item' => __('Nuevo resultado', 'cesar_theme'),
        'view' => __('Ver', 'cesar_theme'),
        'view_item' => __('Ver resultado', 'cesar_theme'),
        'search_items' => __('Buscar', 'cesar_theme'),
        'not_found' => __('No se encuentran resultados', 'cesar_theme'),
        'not_found_in_trash' => __('No se encuentra resultados en la papelera', 'cesar_theme')
    ),
    'description'  => __( '', 'cesar_theme' ),
    'hierarchical' => false, // Allows yours to behave like Hierarchy Pages
    'has_archive' => false,
    'supports' => array(
        'title',
        'editor'
    ), // Go to Dashboard Custom HTML5 Blank for supports
    'can_export' => true, // Allows export in Tools > Export,
    'show_in_nav_menus'   => false,
    'exclude_from_search' => true,
    'menu_icon'           => 'dashicons-controls-play',

    'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
    'publicly_queryable' => true,  // you should be able to query it
    'show_ui' => true,  // you should be able to edit it in wp-admin
    'rewrite' => false  // it shouldn't have rewrite rules
));
?>