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
      <div class="header-area">
            <div class="container">
                  <div class="row">
                        <div class="col-md-3"><h1>Logo.</h1></div>
                        <div class="col-md-9">
                              <ul id="nav">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Service</a></li>
                                    <li><a href="">Portfolio</a></li>
                                    <li><a href="">Contact</a></li>
                              </ul>
                        </div>
                  </div>
            </div>
      </div>
</header>






<?php wp_footer(); ?>
</body>
</html>