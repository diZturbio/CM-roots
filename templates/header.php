<header class="banner"  role="banner">

  <div class="container">

    <div class="esocial">
      <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
    </div>


    <div class="langsel">
      <?php do_action('icl_language_selector'); ?>
    </div>
  </div>

  <div class="logo">
    <a class="" href="<?php echo esc_url(home_url('/')); ?>">
      <img class="cmlogo img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/cmlogoph.png" alt="<?php bloginfo('name'); ?>">
    </a>
  </div>
  <div class="container menu">
    <div class="navbar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav nav-justified'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
