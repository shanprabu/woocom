<div <?php post_class('post_flex'); ?>>

  <?php if( has_post_thumbnail() ) : ?>

    <div class="wrapper image">
      <?php the_post_thumbnail(); ?>
    </div>

  <?php endif; ?>

  <div class="wrapper">
    <div class="content_container">

      <h3 class="excerpt-title">
        <a href="<?php echo esc_url( get_permalink() ); ?>">
          <?php the_title();?>
        </a>
      </h3>

      <p>
        <?php echo get_the_excerpt(); ?>
        <a class="read_more" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e('Read more...', 'quick-sales'); ?></a>
      </p>
      <div class="excerpt-footer">
        <?php get_template_part( 'templates/content', 'info'); ?>
      </div>

    </div>
  </div>

</div>
