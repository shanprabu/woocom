<?php if( get_comments_number() || comments_open() ) : ?>

    <div class="content_container" id="comments_wrapper">

        <div id="comments" class="top-border">

        <h4><?php echo __('Comments', 'quick-sales'); ?></h4>

        <div id="comments_pagination">
            <?php paginate_comments_links(array(
            'prev_next' => false,
            'show_all' => true,
            'before_page_number' => '<span class="pagination_link">',
            'after_page_number'  => '</span>'
            )) ?>
        </div>

        <ol class="commentlist">
            <?php wp_list_comments( array
            (
                'style'       => 'ol',
                'short_ping'  => true
            ) );
            ?>
        </ol>

        <div id="comments_pagination">
            <?php paginate_comments_links(array(
            'prev_next' => false,
            'show_all' => true,
            'before_page_number' => '<span class="pagination_link">',
            'after_page_number'  => '</span>'
            )) ?>
        </div>

        <hr>
            <?php if( comments_open() ) {
              comment_form();
            } ?>

        </div>

    </div>


<?php endif; ?>
