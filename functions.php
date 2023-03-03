<?php

// add the menu option in dashboard 
function menu(){

register_nav_menus(
    array(
        "primary_menu" => __("Header Menu", "moderntheme"),
        "Secondary_menu" => __("Button Menu", "moderntheme"),
        "Footer_menu" => __("Footer Menu", "moderntheme"),
    ));
}

add_action('after_setup_theme', 'menu');

function modern_theme_setup(){
    
// add the logo option in dashboard 

    add_theme_support('custom-logo');

// add the thumbnail option in dashboard 

    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'modern_theme_setup');

// remove the widget block
function remove_theme_setup(){
    remove_theme_support( 'widgets-block-editor' );
}

add_action('after_setup_theme', 'remove_theme_setup');

//sidebar

function modern_sidebars(){
    //Footer One Widget1
   register_sidebar(
    array(
           'name' => __('Footer One Widget1', 'moderntheme'),
           'id' => 'footer-one-widget1',
           'description' => __('widgets 1 added here would appear inside the first section of the footer', 'moderntheme')
    ));

   //Footer One Widget2
    register_sidebar(
        array(
            'name' => __('Footer One Widget2', 'moderntheme'),
            'id' => 'footer-one-widget2',
            'description' => __('widget 2 added here would appaear the first section of the footer', 'moderntheme')
    ));

    //Footer Two
    register_sidebar(
        array(
            'name' => __('Footer Two', 'moderntheme'),
            'id'  => 'footer-two',
            'description' => __('widget added here would appear the second section of the footer', 'moderntheme')
    ));

    // Footer Three
    register_sidebar(
        array(
            'name' => __('Footer Three', 'moderntheme'),
            'id'  => 'footer-three',
            'description' => __('widget added here would appear the third section of the footer', 'moderntheme')

    ));

    //Bottom footer Widget1
    register_sidebar(
        array(
            'name' => __('Bottom footer Widget1', 'moderntheme'),
            'id'  => 'bottom-footer-widget1',
            'description' => __('widget 1 added here would appear the bottom footer', 'moderntheme')
    ));

    //Bottom footer Widget2
    register_sidebar(
        array(
            'name' => __('Bottom footer Widget2', 'moderntheme'),
            'id'  => 'bottom-footer-widget2',
            'description' => __('widget 2 added here would appear the bottom footer', 'moderntheme')
    ));
}

add_action('after_setup_theme', 'modern_sidebars');

?>