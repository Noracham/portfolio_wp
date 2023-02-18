<?php
function load_my_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/re_css/style.css');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/re_css/normalize.css', array('style'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'));
    wp_enqueue_script('sub', get_template_directory_uri() . '/js/sub.js', array('jquery'));
    wp_enqueue_script('vegas', get_template_directory_uri() . '/js/vegas.min.js', array('jquery'));
    wp_enqueue_script('inview', 'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js');
};

add_action('wp_enqueue_scripts', 'load_my_styles');

add_theme_support('post-thumbnails');
