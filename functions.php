<?php

function dc_sources()
{
    wp_register_script('main-js', get_template_directory_uri() . '/core.js', array('jquery'), wp_get_theme()->version);
    wp_register_style('main-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->version);

    wp_enqueue_script('main-js');
    wp_enqueue_style('main-css');
}

add_action('wp_enqueue_scripts', 'dc_sources');

register_sidebar([
    'name'          => 'Postranní panel',
    'id'            => 'sidebar',
    'description'   => 'Hlavní postranní panel',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => "</li>\n",
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => "</h2>\n",
]);
