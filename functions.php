<?php

wp_enqueue_style('testing-world', get_stylesheet_uri());



function testingworld_start_theme(){
    // permet à WP de gerer la balise title des pages
    add_theme_support('title-tag');
}

// la fonction start_theme sera chargée apres le chargement du theme
add_action('after_setup_theme', 'testingworld_start_theme');


// desactivé la barre wordpress
// add_filter('show_admin_bar', '__return_false');


// ajout menu principal
function testingworld_add_main_menu() {
    register_nav_menu('main_menu', 'Menu Principal');
}

add_action('init', 'testingworld_add_main_menu');

// ajout zone widget
function testingworld_add_widget_area(){
    register_sidebar(array(
        'id' => 'main_sidebar',
        'name' => 'Sidebar Principale',
        'description' => 'Apparait à droite du contenu',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}

add_action('widgets_init', 'testingworld_add_widget_area');

