<?php global $product; ?>
<article>

<header>
  	<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $url;?>"  /></a>
	<?php	} 
	?>
	<?php // get_template_part('templates/entry-date'); ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</header>
<!--   <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
 -->
  <?php // get_template_part('templates/entry-cats'); ?>

</article>