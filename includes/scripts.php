<?php
//wp_emqueue_scripts

add_action('wp_enqueue_scripts', 'lasunskin_register_style');
function lasunskin_register_style() {
    global $theme_prefix, $theme_uri, $theme_version; 
    wp_enqueue_style($theme_prefix . '-style', $theme_uri, [], $theme_version, 'all'); 

    wp_enqueue_style($theme_prefix . '-style-css', $theme_uri . '/Public/css/style.css');
    wp_enqueue_style($theme_prefix . '-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    // <link rel="stylesheet" href="./Public/css/style.css">
    // <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    //     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
}
    

add_action('wp_enqueue_scripts', 'lasunskin_register_scripts');
function lasunskin_register_scripts() {
    global $theme_prefix, $theme_uri, $theme_version;
    wp_enqueue_script($theme_prefix . '-jquery', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js');

    // <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    //     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    //     crossorigin="anonymous"></script>
}