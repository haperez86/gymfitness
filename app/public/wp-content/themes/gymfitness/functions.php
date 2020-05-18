<?php

// Menus de navegación, agregar más utilizando el arreglo
function gymfitness_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'gymfitness')
    ));
}

add_action('init', 'gymfitness_menus');

// Scripts y Styles
function gymfitness_scripts_styles(){

    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,400;0,700;1,900&family=Staatliches&display=swap', array(), '1.0.0'); 

    //la hoja de estilos principla
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFonts'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');