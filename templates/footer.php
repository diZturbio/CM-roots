<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="footwrap">

			<div class="col-sm-8 col-sm-push-2 ftlogowrap">
			    <img class="img-responsive footlogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/footlogo.png" alt="<?php bloginfo('name'); ?>">
			</div>

			<div class="col-sm-2 col-sm-pull-8 certlogos">
			  <img class="celogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/celogo.png" alt="CE certified">
			  <img class="ullogo" src="<?php echo get_template_directory_uri(); ?>/assets/img/ullogo.png" alt="UL certified">
			</div>

			<div class="col-sm-2 pplogos">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="paypal">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="CHJ5FCB5YJMT2">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/pt_PT/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>

		</div>

		<div class="footextra">


				<div class="col-sm-6 col-sm-offset-1">
				    <?php dynamic_sidebar('sidebar-footer'); ?>
				</div>


				<div class="col-sm-3 col-sm-offset-1">

					<div class="subscribe">
				    	<h4><?php _e('Subscribe to our newsletter', 'roots'); ?></h4>
						<?php if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
							<?php echo do_shortcode('[contact-form-7 id="4228" title="Subscribe Newsletter PT"]'); ?>
					    <?php }
					    elseif (ICL_LANGUAGE_CODE == 'de') { ?>
							<?php echo do_shortcode('[contact-form-7 id="4226" title="Subscribe Newsletter DE"]'); ?>
					    <?php }
					    elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
							<?php echo do_shortcode('[contact-form-7 id="4227" title="Subscribe Newsletter FR"]'); ?>
					    <?php }
					    elseif (ICL_LANGUAGE_CODE == 'es') { ?>
							<?php echo do_shortcode('[contact-form-7 id="4225" title="Subscribe Newsletter ES"]'); ?>
					    <?php }
					    else { ?>
							<?php echo do_shortcode('[contact-form-7 id="2478" title="Subscribe Newsletter EN"]'); ?>
					    <?php } ?>
					</div>

				</div>

				<div class="clearfix">
				</div>
					<div class="copyr col-sm-12">
						&copy; <?php echo date("Y") ?> Emotional Brands, <?php _e('All Rights Reserved', 'roots'); ?>
					</div>			
					
		</div>
		
	</div>

<?php if (!is_product()) : ?>
	<!-- Button trigger modal -->
	<button type="button" id="toggleinfo" class="btn btn-primary requestinfo hidden-xs" data-toggle="modal" data-target="#infoModal" data-backdrop="false"><?php _e('Request info', 'roots') ?></button>

	<!-- Modal -->
	<div class="modal fade right hidden-xs" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
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
<?php endif; ?>

</footer>
