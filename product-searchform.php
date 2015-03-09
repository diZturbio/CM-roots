<?php

$form = '<form role="search" method="get" id="searchform" class="search-form form-inline" action="' . esc_url( home_url( '/'  ) ) . '">
		<label class="sr-only" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
		<div class="input-group">
		<input type="search" value="' . get_search_query() . '" name="s" id="s" class="search-field form-control" placeholder="' . __( 'Search products', 'woocommerce' ) . '" required/>
		<input type="hidden" name="post_type" value="product" />
	    <span class="input-group-btn">
    	  <button type="submit" id="searchsubmit" class="search-submit btn btn-default">'. __('Search', 'woocommerce') .'</button>
    	</span>
	</div>
</form>';

echo $form;
