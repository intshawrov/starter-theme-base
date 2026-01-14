<?php


function mir_enqueue_scripts(){
      wp_enqueue_style("style", get_stylesheet_uri());
      wp_enqueue_style("bootstrap-css", get_template_directory_uri() ."/assets/css/bootstrap.min.css", [] ," 5.0.2 ", "all");
      wp_enqueue_style("bootstrap-css", get_template_directory_uri() ."/assets/css/custom.css", [] ,"1.0.0", "all");


      wp_enqueue_script("bootstrap-js", get_template_directory_uri() ."/assets/bootstrap.min.js" ,[], " 5.0.2 ", "true");

}

add_action("wp_enqueue_scripts", "mir_enqueue_scripts");


function mir_theme_support(){
      add_theme_support('title-tag');
      add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'mir_theme_support'); 