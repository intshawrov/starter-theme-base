<?php


function mir_enqueue_scripts(){
      wp_enqueue_style("style", get_stylesheet_uri());
      wp_enqueue_style("bootstrap-css", get_template_directory_uri() ."/assets/css/bootstrap.min.css", [] ," 5.0.2 ", "all");
      wp_enqueue_style("custom-css", get_template_directory_uri() ."/assets/css/custom.css", [] ,"1.0.0", "all");


      wp_enqueue_script("bootstrap-js", get_template_directory_uri() ."/assets/bootstrap.min.js" ,[], " 5.0.2 ", "true");

}

add_action("wp_enqueue_scripts", "mir_enqueue_scripts");


function mir_theme_support(){
      add_theme_support('title-tag');
      add_theme_support('post-thumbnails');

      add_theme_support("menus"); 

      register_nav_menus([
            'main-menu' => __( 'Primary Menu', 'learning26' ),
      ] );
}

add_action('after_setup_theme', 'mir_theme_support'); 



function mir_customize_register($wp_customize){

//Header Area Customize
$wp_customize->add_section( 'mir_header_area', [
      'title'    => __( 'Header Area', 'learning26' ),
      'priority' => 30,
] );

// Setting
$wp_customize->add_setting( 'mir_logo', [
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
] );

  // Control (Image Upload)
$wp_customize->add_control(
      new WP_Customize_Image_Control(
      $wp_customize,
      'mir_logo',
      [
            'label'    => __( 'Upload Logo', 'learning26' ),
            'section'  => 'mir_header_area',
            'settings' => 'mir_logo',
      ]
      )
);
}


add_action("customize_register", "mir_customize_register");