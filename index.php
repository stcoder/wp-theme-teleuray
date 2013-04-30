<?php get_header() ?>
  <!-- main -->
  <div class="main-box">
    <div class="page nuclear">
      <div class="left">
        <a href="<?php echo esc_url(home_url('/')) ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="" /></a>
          <?php dynamic_sidebar('layer0-column1') ?>
      </div>
      <div class="right">
          <?php echo getNavigation() ?>
        <div class="menu nuclear">
            <?php echo wp_nav_menu(array('theme_location' => 'menu', 'container' => '')) ?>
          <div class="social">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/s-1.png" alt="" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/s-2.png" alt="" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/s-3.png" alt="" /></a>
          </div>
        </div>
        <div class="ad-wrap">
            <?php dynamic_sidebar('layer0-column2') ?>
        </div>
      </div>
    </div>
  </div>
  <!--/ main -->
  <!-- blue -->
  <div class="blue-box">
    <div class="inner">
      <div class="page nuclear">
        <div class="left">
            <?php dynamic_sidebar('layer1-column1') ?>
        </div>
        <div class="right">
            <?php dynamic_sidebar('layer1-column2') ?>
        </div>
      </div>
    </div>  
  </div>
  <!--/ blue -->
  <!-- red -->
  <div class="red-box">
    <div class="inner">
      <div class="page nuclear">
        <div class="left">
            <?php dynamic_sidebar('layer2-column1') ?>
        </div>
        <div class="right">
            <?php dynamic_sidebar('layer2-column2') ?>
        </div>   
      </div>
    </div>  
  </div>  
  <!--/ red -->
  <!-- grey -->
  <div class="grey">
    <div class="page nuclear">
      <div class="left">
        <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/instagram.png" alt="" /></a>
          <?php dynamic_sidebar('layer3-column1') ?>
      </div>
      <div class="right">
          <?php dynamic_sidebar('layer3-column2') ?>
      </div>
    </div>
  </div>
  <!--/ grey -->
  <!-- video -->
  <div class="video">
    <div class="page">
      <div class="left">
        <?php dynamic_sidebar('layer4-column1') ?>
      </div>
      <div class="right">
        <?php dynamic_sidebar('layer4-column2') ?>
      </div>
    </div>
  </div>
  <!--/ video -->
  <?php get_footer() ?>
