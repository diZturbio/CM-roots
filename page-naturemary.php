<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php
/*
	$ordering_args = WC()->query->get_catalog_ordering_args();

    $args = array(
            'post_type'             => 'product',
            'post_status'           => 'publish',
            'ignore_sticky_posts'   => 1,
            'orderby'               => $ordering_args['orderby'],
            'order'                 => $ordering_args['order'],
            'posts_per_page'        => '12',
            'meta_query'            => array(
                array(
                    'key'           => '_visibility',
                    'value'         => array('catalog', 'visible'),
                    'compare'       => 'IN'
                )
            ),
            'tax_query'             => array(
                array(
                    'taxonomy'      => 'product_cat',
                    'terms'         => array('naturemary'),
                    'field'         => 'slug',
                    'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                )
            )
        );

    if ( isset( $ordering_args['meta_key'] ) ) {
            $args['meta_key'] = $ordering_args['meta_key'];
    }

    $loop = new WP_Query( $args );


	if ( $loop->have_posts() ) {
		while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
		endwhile;
	} else {
		echo __( 'No products found' );
	}
    woocommerce_reset_loop();
    wp_reset_postdata();	
*/
?>  	

<?php // echo do_shortcode('[product_category category="naturemary"]') ?>

<?php endwhile; ?>
