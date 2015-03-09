<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap container" role="document">
    <div class="content">
      <?php if (is_woocommerce()) : ?>
        <div class="dz_breadcrumb">
          <?php do_action('dz_breadcrumb') ?>
        </div>
      <?php endif; ?>
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php dynamic_sidebar('sidebar-archive'); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
    </div><!-- /.content -->
  </div><!-- /.wrap -->

<!-- Button trigger modal -->
<button type="button" id="togglesub" class="btn btn-primary subscribe" data-toggle="modal" data-target="#subModal">
<?php _e('Subscribe', 'roots') ?>
</button>

<!-- Modal -->
<div class="modal fade right" id="subModal" tabindex="-1" role="dialog" aria-labelledby="subModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="subModalLabel"><?php _e('Subscribe to our newsletter', 'roots') ?></h4>
      </div>
      <div class="modal-body">
      <?php
        if(ICL_LANGUAGE_CODE == 'pt-pt') {
          echo do_shortcode('[contact-form-7 id="4228" title="Subscribe Newsletter PT"]');
        }
        elseif (ICL_LANGUAGE_CODE == 'de') {
          echo do_shortcode('[contact-form-7 id="4226" title="Subscribe Newsletter DE"]'); 
        }
        elseif (ICL_LANGUAGE_CODE == 'fr') {
          echo do_shortcode('[contact-form-7 id="4227" title="Subscribe Newsletter FR"]');  
        }
        elseif (ICL_LANGUAGE_CODE == 'es') {
          echo do_shortcode('[contact-form-7 id="4225" title="Subscribe Newsletter ES"]');  
        }
        else {
          echo do_shortcode('[contact-form-7 id="2478" title="Subscribe Newsletter EN"]');
        }
      ?>
      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" id="toggleinfo" class="btn btn-primary requestinfo" data-toggle="modal" data-target="#infoModal" data-backdrop="false">
<?php _e('Request info', 'roots') ?>
</button>

<!-- Modal -->
<div class="modal fade right" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="infoModalLabel"><?php _e('Request info about our products', 'roots') ?></h4>
      </div>
      <div class="modal-body">
      <?php
        if(ICL_LANGUAGE_CODE == 'pt-pt') {
          echo do_shortcode('[contact-form-7 id="366" title="Product Info Request PT"]');
        }
        elseif (ICL_LANGUAGE_CODE == 'de') {
          echo do_shortcode('[contact-form-7 id="392" title="Product Info Request DE"]'); 
        }
        else {
          echo do_shortcode('[contact-form-7 id="291" title="Product Info Request EN"]');
        }
      ?>
      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
