<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php bloginfo('name'); ?>

      <?php wp_head(); ?>
</head>
<body<?php body_class(); ?>>
      
<header id="header">
      <div class="top-header">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12"><p><?php echo get_theme_mod('mir_header_title'); ?></p></div>
                  </div>
            </div>
      </div>
      <div class="header-area">
            <div class="container">
                  <div class="row">
                       <?php if ( get_theme_mod('mir_logo') ) : ?>

                        <div class="col-md-3"><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_theme_mod('mir_logo') ); ?>" alt="logo"></a></div>
                              <?php endif; ?>
                       
                        <div class="col-md-9">

                              <?php wp_nav_menu([
                                    'theme_location'  => 'main-menu',
                                    'menu_id'         => 'nav'
                              ]); ?>
                        </div>
                  </div>
            </div>
      </div>
</header>