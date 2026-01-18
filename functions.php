<?php


function mir_enqueue_scripts(){
      wp_enqueue_style("style", get_stylesheet_uri());
      wp_enqueue_style("bootstrap-css", get_template_directory_uri() ."/assets/css/bootstrap.min.css", [] ," 5.0.2 ", "all");
      wp_enqueue_style("custom-css", get_template_directory_uri() ."/assets/css/custom.css", [] ,"1.0.0", "all");


      wp_enqueue_script("bootstrap-js", get_template_directory_uri() ."/assets/bootstrap.min.js" ,[], " 5.0.2 ", "true");
      wp_enqueue_script("custom-js", get_template_directory_uri() . "/assets/custom.js" , [], "1.0.0", "true");

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
// Header Title
$wp_customize->add_setting( 'mir_header_title', [
      'default'           => 'Hello WrodPress',
] );

$wp_customize->add_control(
    'mir_header_title',
    [
        'label'   => __( 'Header Title', 'learning26' ),
        'section' => 'mir_header_area',
        'type'    => 'text',
    ]
);

$wp_customize->add_setting( 'mir_header_description', [
      'default'           => 'This is a learning platform',
] );

$wp_customize->add_control(
    'mir_header_description',
    [
        'label'   => __( 'Header Description', 'learning26' ),
        'section' => 'mir_header_area',
        'type'    => 'text',
    ]
);

// Footer Area Customize
$wp_customize->add_section( 'mir_footer_area', [
      'title'    => __( 'Footer Area', 'learning26' ),
      'priority' => 30,
] );

// Footer 

$wp_customize->add_setting( 'mir_Footer_title', [
      'default'           => 'Learning WordPress',
] );

$wp_customize->add_control(
    'mir_header_description',
    [
        'label'   => __( 'Footer Description', 'learning26' ),
        'section' => 'mir_footer_area',
        'type'    => 'text',
    ]
);


// Footer Image
$wp_customize->add_setting( 'footer_logo', [
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
] );

$wp_customize->add_control(
      new WP_Customize_Image_Control(
      $wp_customize,
      'footer_logo',
      [
            'label'    => __( 'Upload Logo', 'learning26' ),
            'section'  => 'mir_footer_area',
            'settings' => 'footer_logo',
      ]
      )
);

// Body Image

$wp_customize->add_section( 'mir_body_area', [
      'title'    => __( 'Body Area', 'learning26' ),
      'priority' => 30,
] );

$wp_customize-> add_setting( 'body_image', [
      'default'=> '',
      'sanitize_callback'     => 'ese_url_raw',
]);

$wp_customize->add_control(
      new WP_Customize_Image_Control(
      $wp_customize,
      'body_image',
      [
            'label'    => __( 'Upload Logo', 'learning26' ),
            'section'  => 'mir_body_area',
            'settings' => 'body_image',
      ]
      )
);
$wp_customize-> add_setting( 'body_title', [
      'default'=> '',
      'sanitize_callback'     => 'ese_url_raw',
]);

$wp_customize->add_control(
    'mir_body_area',
    [
        'label'   => __( 'Body Title', 'learning26' ),
        'section' => 'mir_footer_area',
        'type'    => 'text',
    ]
);



}


add_action("customize_register", "mir_customize_register");