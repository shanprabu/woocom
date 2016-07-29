<div class="widgets-row">

  <?php if( is_active_sidebar( 'footer-1' ) ) : ?>
    <div>
      <?php dynamic_sidebar( 'footer-1' ); ?>
    </div>
  <?php endif; ?>

  <?php if( is_active_sidebar( 'footer-2' ) ) : ?>
    <div>
      <?php dynamic_sidebar( 'footer-2' ); ?>
    </div>
  <?php endif; ?>

  <?php if( is_active_sidebar( 'footer-3' ) ) : ?>
    <div>
      <?php dynamic_sidebar( 'footer-3' ); ?>
    </div>
  <?php endif; ?>

</div>
