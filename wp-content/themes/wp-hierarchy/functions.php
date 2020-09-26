<?php 
//  Add Theme Support
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 
  'status', 'video', 'audio', 'chat'] );
  add_theme_support( 'html5' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'customize-selective-refresh-widgets' );
  add_theme_support( 'start-content' );

  // Load in CSS
  function wp_hierarchy_enqueue_styles () {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );

  }

  add_action( 'wp_enqueue_scripts', 'wp_hierarchy_enqueue_styles' );

?>
