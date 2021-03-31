<?php

//cargar el nombre de la pagina en la pestaña del navegador

function init_template(){

  add_theme_support('Post_thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme','init_template');

//echo get_stylesheet_uri();
// registro de los style para los css de la pagina


 function enqueue_styles() {
 	wp_register_style('theme_style', get_stylesheet_uri(), array(), time(), 'all');
 	wp_enqueue_style('theme_style');
  wp_register_style('theme_style_2', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), time());
  wp_enqueue_style('theme_style_2');
  wp_register_style('theme_style_3', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), time());
  wp_enqueue_style('theme_style_3');
  wp_register_style('theme_style_4', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), time());
  wp_enqueue_style('theme_style_4');
  wp_register_style('theme_style_5', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), time());
  wp_enqueue_style('theme_style_5');
  wp_register_style('theme_style_6', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), time());
  wp_enqueue_style('theme_style_6');

 }
add_action('wp_enqueue_scripts', 'enqueue_styles');
