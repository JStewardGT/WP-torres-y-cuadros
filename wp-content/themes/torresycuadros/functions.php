<?php

function agregar_css_js() {
  wp_enqueue_style('fontAwesome', get_template_directory_uri() . 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('Gugi', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Gugi');
  wp_enqueue_style('Lato', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Lato:700');

  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('mdb', get_template_directory_uri() . '/css/mdb.min.css');
  wp_enqueue_style('style', get_stylesheet_uri());

  wp_enqueue_script('fontAwesome-js', 'https://use.fontawesome.com/releases/v5.1.0/js/all.js', array ( 'jquery' ), '5.1.0'. true);
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array ( 'fontAwesome-js' ), '1.14'. true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'popper' ), '4.1.1'. true);
  wp_enqueue_script('mdb-js', get_template_directory_uri() . '/js/mdb.min.js', array ( 'bootstrap-js' ), '4.5.6'. true);
}
add_action('wp_enqueue_scripts', 'agregar_css_js');