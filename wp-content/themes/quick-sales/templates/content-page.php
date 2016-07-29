<div <?php post_class(); ?> >

    <h1 class="page-title">
      <?php the_title();?>
    </h1>

    <?php if( !is_page() ) : ?>
		<div class="page-info">
			<?php get_template_part( 'templates/content', 'info'); ?>
		</div>
    <?php endif; ?>

    <?php if( has_post_thumbnail() ) : ?>
      <div id="post_thumb">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php endif; ?>

    <div class="content_container <?php get_post_class(); ?>">
      <?php the_content() ?>
      <div class="page-pagination">
        <?php wp_link_pages(); ?>
      </div>
    </div>

    <?php comments_template(); ?>

</div>
