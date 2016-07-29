<?php if( get_the_date() ) : ?>
  <span class="post_info date">

    <?php _e('Added:', 'quick-sales' ); ?>
    <a href="<?php echo esc_url( get_month_link( get_the_time('Y'), get_the_time('m') ) ); ?>">
      <?php echo get_the_date(); ?>
    </a>

  </span>
<?php endif; ?>

<span class="post_info author">

  <?php _e('Author:', 'quick-sales' ); ?>
  <a class="author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php esc_html( the_author_meta( 'display_name' ) ); ?></a>

</span>

<?php if( get_comments_number() ) : ?>
    <span class="post_info comments_number">

    <?php _e('Comments:', 'quick-sales' ); ?>
    <a href="<?php echo esc_url( get_permalink() ) . '/#comments'; ?>" class="comments_count"><?php comments_number( '0', '1', '%' ); ?></a>

    </span>
<?php endif ?>

<?php if( has_category() ) :

  $string = '';
  foreach( get_the_category() as $category)
  {
      $string .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" >' . esc_html( $category->cat_name ) . '</a>';
  }
  ?>
  <span class="post_info categories">

    <?php _e('Categories:', 'quick-sales' ); ?>
    <?php echo $string; ?>

  </span>
<?php endif ?>

<?php if( has_tag() ) :

  $string = '';
  foreach(get_the_tags() as $tag)
  {
      $string .= '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" >' . esc_html( $tag->name ) . '</a>';
  }
  ?>
  <span class="post_info tags">

    <?php _e('Tags:', 'quick-sales' ); ?>
    <?php echo $string; ?>

  </span>
<?php endif; ?>
