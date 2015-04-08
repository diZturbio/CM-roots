<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>

  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>

  <div class="hcoll">

  	<div class="col-sm-4 nature">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
	  		<a href="collection/naturemary-pt">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
	  		<a href="collection/naturemary-de">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
	  		<a href="collection/naturemary-fr">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
	  		<a href="collection/naturemary-es">
		<?php }
		else { ?>
	  		<a href="collection/naturemary">
		<?php } ?>
<!--			<div class="collogo">
  				<img class="img-responsive" src ="<?php echo get_template_directory_uri(); ?>/assets/img/naturemary.png" alt="NatureMary">
  			</div> -->
	  		<div class="collimg">
	  			<div class="colltag">
	  				<p><?php _e('A collection that celebrates flora and fauna with passionate lamps that are nature inspired.', 'roots'); ?></p>
	  			</div>
	  		</div>
  		</a>
  	</div>

  	<div class="col-sm-4 cosmo">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
	  		<a href="collection/cosmomary-pt">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
	  		<a href="collection/cosmomary-de">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
	  		<a href="collection/cosmomary-fr">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
	  		<a href="collection/cosmomary-es">
		<?php }
		else { ?>
	  		<a href="collection/cosmomary">
		<?php } ?>
<!-- 	  		<div class="collogo">
	  			<img class="img-responsive" src ="<?php echo get_template_directory_uri(); ?>/assets/img/cosmomary.png" alt="CosmoMary">
	  		</div> -->
	  		<div class="collimg">
	  			<div class="colltag">
	  				<p><?php _e('A collection of lamps filled with memories and unique sensations brought from cities around the world.', 'roots'); ?></p>
	  			</div>
	  		</div>
  		</a>
  	</div>

  	<div class="col-sm-4 radiant">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
	  		<a href="collection/radiantmary-pt">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
	  		<a href="collection/radiantmary-de">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
	  		<a href="collection/radiantmary-fr">
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
	  		<a href="collection/radiantmary-es">
		<?php }
		else { ?>
	  		<a href="collection/radiantmary">
		<?php } ?>
<!-- 			<div class="collogo">
	  			<img class="img-responsive" src ="<?php echo get_template_directory_uri(); ?>/assets/img/radiantmary.png" alt="RadiantMary">
	  		</div> -->
	  		<div class="collimg">
	  			<div class="colltag">
	  				<p><?php _e('A collection of classic yet exotic lighting pieces inspired in the dreamy history of Burlesque.', 'roots'); ?></p>
	  			</div>
	  		</div>
  		</a>
  	</div>

  </div>

  <div class="htype">
  	<div class="col-xs-6 col-sm-5th-1">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
			<a href="product/ltype/suspensao/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
			<a href="product/ltype/pendelleuchte/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
			<a href="product/ltype/suspension-fr/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
			<a href="product/ltype/suspension-es/">			
		<?php }
		else { ?>
			<a href="product/ltype/suspension/">			
		<?php } ?>
	  		<div class="suspension">
	  			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/suspension.jpg" />
	  			<div class="typename">
	  				<p><?php _e('Suspension', 'roots'); ?></p>
	  			</div>
			</div>
		</a>
	</div>

  	<div class="col-xs-6 col-sm-5th-1">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
			<a href="product/ltype/candeeiro-de-pe/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
			<a href="product/ltype/stehleuchte/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
			<a href="product/ltype/lampadaire/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
			<a href="product/ltype/lampara-de-pie/">			
		<?php }
		else { ?>
	  		<a href="product/ltype/floor/">
		<?php } ?>
	  		<div class="floor">
	  			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/floor.jpg" />
	  			<div class="typename">
	  				<p><?php _e('Floor', 'roots'); ?></p>
	  			</div>
			</div>
		</a>
	</div>
  	<div class="col-xs-6 col-sm-5th-1">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
			<a href="product/ltype/candeeiro-de-mesa/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
			<a href="product/ltype/tischleuchte/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
			<a href="product/ltype/lampe-de-table/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
			<a href="product/ltype/lampara-de-mesa/">			
		<?php }
		else { ?>
	  		<a href="product/ltype/table/">
		<?php } ?>
	  		<div class="tablel">
	  			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/table.jpg" />
	  			<div class="typename">
	  				<p><?php _e('Table', 'roots'); ?></p>
	  			</div>
			</div>
		</a>
	</div>
  	<div class="col-xs-6 col-sm-5th-1">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
			<a href="product/ltype/candeeiro-de-parede/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
			<a href="product/ltype/wandleuchte/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
			<a href="product/ltype/applique/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
			<a href="product/ltype/lampara-de-pared/">			
		<?php }
		else { ?>
	  		<a href="product/ltype/wall/">
		<?php } ?>
	  		<div class="wall">
	  			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/wall.jpg" />
	  			<div class="typename">
	  				<p><?php _e('Wall', 'roots'); ?></p>
	  			</div>
			</div>
		</a>
	</div>
  	<div class="col-xs-6 col-sm-5th-1">
		<?php
		if(ICL_LANGUAGE_CODE == 'pt-pt') { ?>
			<a href="product/ltype/candelabro/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'de') { ?>
			<a href="product/ltype/luster/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'fr') { ?>
			<a href="product/ltype/lustre/">			
		<?php }
		elseif (ICL_LANGUAGE_CODE == 'es') { ?>
			<a href="product/ltype/arana-de-luces/">			
		<?php }
		else { ?>
	  		<a href="product/ltype/chandelier/">
		<?php } ?>
	  		<div class="chandelier">
	  			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/chandelier.jpg" />
	  			<div class="typename">
	  				<p><?php _e('Chandeliers', 'roots'); ?></p>
	  			</div>
			</div>
		</a>
	</div>
  </div>
  <div class="latest">
  	<div class="col-sm-12">
  		<div class="news block">
	  		<h3> <?php _e('Latest From CreativeMary', 'roots') ?></h3>

			<?php

				$args = array(
				'posts_per_page' => 5,
				'post_type' => 'post',
				'category_name' => 'news',
				//  'post__in'  => get_option( 'sticky_posts' ),
				'ignore_sticky_posts' => 1
				);

				// The Query
				$query1 = new WP_Query( $args );
				?>
				<div class="fotorama_custom" data-auto="false" >
				<?php
				// The Loop
				while ( $query1->have_posts() ) {
				$query1->the_post(); ?>
				<?php get_template_part('templates/content', 'fotorama'); ?>
				<?php
				}
				?>
				</div>

				<div class="destaque-nav">
					<input type="button" class="destaque-prev" ><input type="button" class="destaque-next" >
				</div>
				<?php 
				/* Restore original Post Data 
				* NB: Because we are using new WP_Query we aren't stomping on the 
				* original $wp_query and it does not need to be reset with 
				* wp_reset_query(). We just need to set the post data back up with
				* wp_reset_postdata().
				*/
				wp_reset_postdata();

			?>
		</div>
  	</div>
<!--   	<div class="col-sm-6">
  		<div class="rts block">
	  		<h3> <?php // _e('Ready to Ship', 'roots') ?></h3>

			<?php
			// 	$args = array(
			// 		'post_type' => 'product',
			// 		'posts_per_page' => 1
			// 		);
			// 	$loop = new WP_Query( $args );
			// 	if ( $loop->have_posts() ) {
			// 		while ( $loop->have_posts() ) : $loop->the_post();
			// 			woocommerce_get_template_part( 'content', 'widget-product' );
			// 			//get_template_part('templates/content', 'preview');
			// 		endwhile;
			// 	} else {
			// 		echo __( 'No products found' );
			// 	}
			// 	wp_reset_postdata();
			// ?>  	
  		</div>
  	</div> -->
  </div>
