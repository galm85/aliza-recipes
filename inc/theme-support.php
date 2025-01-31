<?php

add_theme_support( 'post-thumbnails' );
/// Menus ////////////////
function aliza_custom_menus(){
    add_theme_support('menus');

    register_nav_menus([
        'primary' => 'Primary',
        'footer' => 'footer'
    ]);
}
add_action('after_setup_theme','aliza_custom_menus');



// comments
add_filter('preprocess_comment', 'override_comment_author', 10, 1);
function override_comment_author($commentdata) {
    if (isset($_POST['author'])) {
        $commentdata['comment_author'] = wp_filter_nohtml_kses($_POST['author']);
    }
    return $commentdata;
}