<?php 
//dang ki cac phan ho tro cho theme
add_action('after_setup_theme', 'lasunskin_setup');
function lasunskin_setup() {
    //dang ki menu
    register_nav_menus([
        'primary' => 'Primary Menu',
        'vertical' => 'Vertical Menu',
        'mobile' => 'Mobile Menu',
    ]);
    //dang ki hinh anh cho san pham
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats');
    add_theme_support('custom-logo');
}