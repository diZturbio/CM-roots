<article <?php post_class(); ?>>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="clearfix">
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-thumb alignleft">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail('medium'); ?>
      </a>
    </div>
    <?php endif; ?>
    <?php get_template_part('templates/entry-meta'); ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
  </div>
</article>


