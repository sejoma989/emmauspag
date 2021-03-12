<?php


//echo get_stylesheet_uri();

 add_action('wp_enqueue_scripts', 'enqueue_styles');
 function enqueue_styles() {
 	wp_register_style('theme_style', get_stylesheet_uri(), array(), time());
 	wp_enqueue_style('theme_style');
  wp_register_style('theme_style_2', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), time());
  wp_enqueue_style('theme_style_2');

 }
 // wp_enqueue_scripts('script-1','https://code.jquery.com/jquery-3.2.1.slim.min.js');
 // wp_enqueue_scripts('script-2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
 // wp_enqueue_scripts('script-3','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
 // wp_enqueue_scripts('script-4','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
