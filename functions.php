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


// WordPress Titles
add_theme_support( 'title-tag' );


// Support Featured Images
add_theme_support( 'post-thumbnails' );


// Custom settings menu link
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Settings input field for Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );

  register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

