<footer class="content-info" role="contentinfo">
	<div class="container">
		<div class="footwrap">

			<div class="copyr">
				&copy; <?php echo date("Y") ?> Emotional Brands, <?php _e('All Rights Reserved', 'roots'); ?>
			</div>

		    <div class="pplogos">
		        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="paypal">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="CHJ5FCB5YJMT2">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/pt_PT/i/scr/pixel.gif" width="1" height="1">
				</form>         
		    </div>

			<div class="footlogo">
			    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footlogo.png" alt="<?php bloginfo('name'); ?>">
			</div>

		</div>

		<div class="footextra">
			<div class="col-sm-6">
			    <?php dynamic_sidebar('sidebar-footer'); ?>
			</div>


			<div class="col-sm-3  col-sm-offset-2">
				    <div class="subscribe">
				      <div class="">
				        <h4 class="" id="subModalLabel"><?php _e('Subscribe to our newsletter', 'roots') ?></h4>
				      </div>
				      <div class="">
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
		
	</div>
</footer>
