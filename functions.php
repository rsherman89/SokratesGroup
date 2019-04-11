<?php

// Add scripts and stylesheets
function sokrates_scripts() {
  wp_enqueue_style( 'bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
  wp_enqueue_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ));
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'themejs', get_template_directory_uri() . '/theme.js', array( 'jquery' ));
}

add_action( 'wp_enqueue_scripts', 'sokrates_scripts' );

// Add Google Fonts
function sokrates_google_fonts() {
  wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
  wp_enqueue_style( 'OpenSans');
}

add_action('wp_print_styles', 'sokrates_google_fonts');
