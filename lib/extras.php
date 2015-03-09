<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title, $sep) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter('wp_title', 'roots_wp_title', 10, 2);

add_action('admin_head', 'show_favicon');
function show_favicon() {
echo '<link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-16x16.png" sizes="16x16">';
}

function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter('woocommerce_show_page_title', '__return_false');
// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

add_image_size( 'related', 250, 250, false );
add_image_size( 'presscover', 183, 258, false );

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_excerpt', 15);

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text' );
function jk_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to ''
	$defaults['home'] = 'CreativeMary';
	return $defaults;
}

// remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// add_action('dz_breadcrumb','woocommerce_breadcrumb', 20);

// Replace WooThemes Breadcrumbs with Yoast breadcrumbs
add_action( 'init', 'dz_breadcrumbs' );

function dz_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
    add_action( 'dz_breadcrumb','dz_yoast_breadcrumb', 20, 0);
    function dz_yoast_breadcrumb() {
        if ( function_exists('yoast_breadcrumb')  && !is_front_page() ) {
            yoast_breadcrumb('<p class="breadcrumbs">','</p>');
        }
    }

}

function dz_product_description() {
	global $post; 
	$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) ) );

/*	if ( $heading ): ?>
	  <h3><?php echo $heading; ?></h3>
	<?php endif;
*/
?>
	<div class="prodescription">
	<?php
		the_content();
	?>
	</div>
<?php
}

add_action('woocommerce_single_product_summary', 'dz_product_description', 35);


remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

function dz_product_attributes() { 
	global $product;


	if ( $product && ( $product->has_attributes() || ( $product->enable_dimensions_display() && ( $product->has_dimensions() || $product->has_weight() ) ) ) ) {

		$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Details', 'woocommerce' ) );

		if ( $heading ): ?>
			<h3><?php echo $heading; ?></h3>
		<?php endif;

		$product->list_attributes();
	}
}

add_action('woocommerce_after_single_product_summary', 'dz_product_attributes', 10);


function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 4;
	return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {

	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 4; // arranged in 4 columns
	return $args;
}

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product', 'woocommerce_output_related_products', 10);

function dz_product_info_request() {
	?>
	<div class="productinfo ">
		
		<button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#infocollapse" aria-expanded="false" aria-controls="infocollapse"><?php _e('Request Information', 'roots') ?></button>

		<div class="collapse" id="infocollapse">	
			<div class="well">
			<?php
			if(ICL_LANGUAGE_CODE == 'pt-pt') {
				echo do_shortcode('[contact-form-7 id="366" title="Product Info Request PT"]');
			}
			elseif (ICL_LANGUAGE_CODE == 'de') {
				echo do_shortcode('[contact-form-7 id="4223" title="Product Info Request DE"]');	
			}
			elseif (ICL_LANGUAGE_CODE == 'fr') {
				echo do_shortcode('[contact-form-7 id="4046" title="Product Info Request FR"]');	
			}
			elseif (ICL_LANGUAGE_CODE == 'es') {
				echo do_shortcode('[contact-form-7 id="4224" title="Product Info Request ES"]');	
			}
			else {
				echo do_shortcode('[contact-form-7 id="291" title="Product Info Request EN"]');
			}
			?>
			</div>
		</div>
	</div>
	<?php
}

add_action('woocommerce_single_product_summary', 'dz_product_info_request', 39);


add_filter('woocommerce_attribute_show_in_nav_menus', 'wc_reg_for_menus', 1, 2);

function wc_reg_for_menus( $register, $name = '' ) {
     if ( $name == 'pa_ltype' ) $register = true;
     return $register;
}

function add_image_class($class){
	$class .= ' img-responsive';
	return $class;
}
add_filter('get_image_tag_class','add_image_class');

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

add_filter('body_class', 'append_language_class');
function append_language_class($classes){
  $classes[] = ICL_LANGUAGE_CODE;  //or however you want to name your class based on the language code
  return $classes;
}

add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}

add_filter('woocommerce_get_catalog_ordering_args', 'am_woocommerce_catalog_orderby');

function am_woocommerce_catalog_orderby($args) {
	$args['orderby'] = 'date'; // '_price' could go here; uncomment the line below only for price
	$args['order'] = 'desc'; //asc could go here for ascending/descending order
	$args['meta_key'] = '';
	return $args;
}

