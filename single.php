<?php get_header() ?>
<div class="main-box">
    <div class="page nuclear">
        <div class="left">
            <a href="<?php echo esc_url(home_url('/')) ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="" /></a>
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
            <?php the_post(); echo the_content() ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
