<div class="widgets-row">

  <?php if( is_active_sidebar( 'sidebar-before-archive-1' ) ) : ?>
    <div class="entry-content">
      <?php dynamic_sidebar( 'sidebar-before-archive-1' ); ?>
    </div>
  <?php endif; ?>

  <?php if( is_active_sidebar( 'sidebar-before-archive-2' ) ) : ?>
    <div class="entry-content">
      <?php dynamic_sidebar( 'sidebar-before-archive-2' ); ?>
    </div>
  <?php endif; ?>

  <?php if( is_active_sidebar( 'sidebar-before-archive-3' ) ) : ?>
    <div class="entry-content">
      <?php dynamic_sidebar( 'sidebar-before-archive-3' ); ?>
    </div>
  <?php endif; ?>
  
</div>
