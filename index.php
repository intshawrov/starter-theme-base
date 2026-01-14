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
                        <div class="col-md-12">Hello WordPress</div>
                  </div>
            </div>
      </div>
</header>






<?php wp_footer(); ?>
</body>
</html>