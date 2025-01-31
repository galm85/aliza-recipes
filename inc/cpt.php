<?php

// Recipes
$labels = [
    'name'          => 'recipes',
    'singular_name' => 'recipe',
    'menu_name'     => 'מתכונים',
    'all_items'     => 'כל המתכונים',
    'add_new_item'  => 'הוספת מתכון חדש',
    'add_new'       => 'הוספת חדש',
    'edit_item'     => 'עריכת מתכון',
];

$args = [
    'label' => 'Project',
    'description' => 'A Single project i created',
    'labels' => $labels,
    'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'],
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'menu_icon'             => 'dashicons-portfolio',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => true,
    'publicly_queryable' => true,
    'capability_type'       => 'post',
    'rewrite' => array('slug' => 'recipes'),


];

register_post_type('recipe',$args);


function add_taxonomies() {

    // categories
    $labels = array(
        'name'                       => 'categories',
        'singular_name'              => 'category',
        'menu_name'                  => 'קטגוריות',
        'all_items'                  => 'כל הקטגוריות',
        'edit_item'                  => 'עריכת קטגוריה',
        'view_item'                  => 'צפייה בקטגוריה',
        'update_item'                => 'עריכת קטגוריה',
        'add_new_item'               => 'הוספת קטגוריה חדשה',
        'new_item_name'              => 'שם קטגוריה חדשה',
        'search_items'               => 'חפש קטגוריה',
        'popular_items'              => 'קטגוריות פופלריות',
        'add_or_remove_items'        => 'Add or remove categories',
        'not_found'                  => 'No categories found',
        'no_terms'                   => 'No categories',
        'items_list'                 => 'Categories list',
    );

    $args = array(
        'labels'                     => $labels,
        'public'                     => true,
        'hierarchical'               => true,
        'rewrite'                    => array('slug'=>'categories')

    );

    register_taxonomy('recipe_category', 'recipe', $args);



    // tags
    // $labels = array(
    //     'name'                       => 'Tags',
    //     'singular_name'              => 'Tag',
    //     'menu_name'                  => 'Tags',
    //     'all_items'                  => 'All Tags',
    //     'edit_item'                  => 'Edit Tag',
    //     'view_item'                  => 'View Tag',
    //     'update_item'                => 'Update Tag',
    //     'add_new_item'               => 'Add New Tag',
    //     'new_item_name'              => 'New Tag Name',
    //     'search_items'               => 'Search Tag',
    //     'add_or_remove_items'        => 'Add or remove Tags',
    //     'not_found'                  => 'No Tags found',
    //     'no_terms'                   => 'No Tags',
    //     'items_list'                 => 'Tag list',
    // );

    // $args = array(
    //     'labels'                     => $labels,
    //     'hierarchical'               => true,
    //     'public'                     => true,
    //     'show_ui'                    => true,
    //     'show_admin_column'          => true,
    //     'show_in_nav_menus'          => true,
    //     'show_tagcloud'              => true,
    // );

    // register_taxonomy('tag', 'project', $args);

}
add_action('init', 'add_taxonomies');