<?php get_header(); ?>


<?php if(is_search()) : ?>

        <h1><?php echo __('Search results for:', 'quick-sales') . ' ' . get_search_query() . ':'; ?></h1>

<?php endif; ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/content', 'blog'); ?>

    <?php endwhile; ?>

			<?php get_template_part( 'templates/content', 'pagination'); ?>

		<?php endif; ?>


<?php get_footer(); ?>
