<?php

//adds titlt dinamically to website
function sisco_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sisco_theme_support');


function sisco_menus(){
    $locations = array(
        'primary' => 'Desktop Primary',
        'footer menu' => 'Footer mmenu items',
    );

    register_nav_menus($locations);

}

add_action('init', 'sisco_menus');

// inserts style.css file dinamically to the index.php
function sisco_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sisco-style', get_template_directory_uri().'/style.css', array(), $version, 'all');
    wp_enqueue_style('sisco-google_font', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'sisco_register_styles');

?>

<?php


// inserts dinamically javascript to index.php
function sisco_register_scripts(){
    wp_enqueue_script('sisco-main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'sisco_register_scripts');

?>