<?php

function aliza_scripts(){

    wp_enqueue_style('aliza-style',get_template_directory_uri().'/dist/css/style.min.css',[],'1.0.0');
    wp_enqueue_style('swiper-style',get_template_directory_uri().'/dist/lib/swiper.css',[],'1.0.0');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/dist/lib/swiper.js',[], '1.0.0');
    wp_enqueue_script('aliza-js', get_template_directory_uri() . '/dist/js/general.js',['swiper-js'], '1.0.0',true);

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');

    // wp_localize_script('gwd-js', 'ajax_object', [
    //     'ajax_url' => admin_url('admin-ajax.php')
    // ]);

}
add_action('wp_enqueue_scripts', 'aliza_scripts');
