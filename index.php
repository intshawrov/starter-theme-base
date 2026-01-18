<?php get_header(); ?>


<div class="container">
      <div class="row">
            <div class="col-md-12"><h1>Title</h1></div>
            <?php if( get_theme_mod('body_image')): ?>
            <div class="col-md-12"><img src="<?php echo esc_url( get_theme_mod('body_image') ); ?>" alt=""></div>
      </div>
</div>



<?php get_footer(); ?> 