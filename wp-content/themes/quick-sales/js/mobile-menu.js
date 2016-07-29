  jQuery(function() {

    jQuery.each(jQuery('#primary-navigation li').has('ul').children('a'),
      function() {
        jQuery(this).after('<span class="expand"></span>');
      }
    )

    jQuery.each(jQuery('#primary-navigation li .expand'),
      function() {
        jQuery(this).on('click',
          function() {
            jQuery(this).toggleClass('expanded');
            jQuery(this).siblings('ul').slideToggle();
          }
        )
      }
    )
  });
