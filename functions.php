<?php

function alpha_setup(){

    load_theme_textdomain( 'alpha', get_template_directory() . '/languages' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    register_nav_menu("topmenu", __("Top menu","alpha"));
    register_nav_menu("footermenu", __("Footer menu","alpha"));

    
}
add_action("after_setup_theme","alpha_setup");

function alpha_assets(){
    wp_enqueue_style("alpha", get_stylesheet_uri());
    wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");

}
add_action("wp_enqueue_scripts", "alpha_assets");

function alpha_sidebar(){
    register_sidebar( array(
    'name'          => __( 'Right sidebar', 'alpha' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Right sidebar', 'alpha' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );

   register_sidebar( array(
   'name'          => __( 'Footer-Left', 'alpha' ),
   'id'            => 'footer-left',
   'description'   => __( 'Footer left sidebar area', 'alpha' ),
   'before_widget' => '',
   'after_widget'  => '',
   'before_title'  => '',
   'after_title'   => '',
   ) );
   register_sidebar( array(
    'name'          => __( 'Footer-right', 'alpha' ),
    'id'            => 'footer-right',
    'description'   => __( 'Footer right sidebar area', 'alpha' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );



}
add_action("widgets_init","alpha_sidebar");

function alpha_nav_menu_css_class($classes, $item){
    $classes[] = "list-inline-item";
    $classes[] = "ml-2";
    return $classes;
}
add_filter("nav_menu_css_class","alpha_nav_menu_css_class", 10, 2);