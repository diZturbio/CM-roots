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
		    <?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
		
	</div>
</footer>
