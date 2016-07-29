<?php get_header(); ?>

        <h1>

            <?php

                if ( is_day() ) :

				            echo  __( 'Posted on', 'quick-sales' ) .  ' ' . get_the_date() . ':';

        				elseif ( is_month() ) :

        							echo  __( 'Posted in', 'quick-sales' ) .  ' ' . get_the_date('F Y') . ':';

        				elseif ( is_year() ) :

        							echo  __( 'Posted in', 'quick-sales' ) .  ' ' . get_the_date('Y') . ':';

        				elseif (is_category()):

        							echo __( 'Posts from category', 'quick-sales' ) . ' ' .single_cat_title( '', false ) . ':';

        				elseif (is_author()) :

        							echo  __( 'Posts by', 'quick-sales' ) . ' ' . get_the_author_meta( 'display_name' ) . ':';

        				elseif (is_tag()):

        							echo __( 'Posts tagged with', 'quick-sales' ) . ' ' . single_tag_title("",false) . ':';

        				else :

        							echo __( 'Archive', 'quick-sales' );

        				endif;
            ?>

        </h1>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    			<?php get_template_part( 'templates/content', 'blog'); ?>

        <?php endwhile; ?>

    			<?php get_template_part( 'templates/content', 'pagination'); ?>

    		<?php endif; ?>

<?php get_footer(); ?>
