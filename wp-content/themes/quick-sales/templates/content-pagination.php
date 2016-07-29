<?php if( paginate_links() ) : ?>

  <nav class="pagination">
    <?php echo paginate_links( array( 'prev_text' => '&larr;', 'next_text' => '&rarr;')); ?>
  </nav>

<?php endif;?>
