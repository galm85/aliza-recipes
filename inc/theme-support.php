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