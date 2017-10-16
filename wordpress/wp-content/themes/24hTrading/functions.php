<?php

  //Menus navbar
  require_once('wp-bootstrap-navwalker.php');

  //theme support
  function wp_theme_setup(){
    //Image support for the theme
    add_theme_support( 'post-thumbnails' );

    //nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu', 'thename'),
    ));
  }

  add_action('after_setup_theme', 'wp_theme_setup');

//excerpt lenght control
function set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');
