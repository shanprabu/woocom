jQuery(document).ready(function () {


    var view_width;
    var visible;
    var margin;
    var amount = 0;
    var current_index = 0;
    var width = 110;

    function resize() {
        view_width = jQuery('#thumbwrp').innerWidth();
        if (amount == 1) {
            visible = 1;
            margin = 20;
        } else {
            visible = parseInt(view_width / (width + 40));
            margin = (view_width - visible * 110) / (visible * 2);
        }
        jQuery('#thumbwrp a').css('margin', '0 ' + margin + 'px');
    }


    jQuery('.thumbnails').prepend('<div id="go_leftG" class="goDis"></div><div id="thumbwrp"><div id="gallery"></div></div>');
    jQuery('.thumbnails').append('<div id="go_rightG" class="goDis"></div>');

    amount = jQuery('.thumbnails a.zoom').appendTo("#gallery").length;


    if (!amount) {
        return;
    }

    resize();

    var gallery = jQuery('#gallery');

    if (amount > visible) {
        document.getElementById('go_rightG').className = "goEna";
    }

    jQuery('#go_rightG').click(function () {
        if (amount - 1 != current_index && amount > visible) {
            if (amount - current_index - visible - 1 >= visible) {
                current_index += visible;
            } else {
                current_index = amount - visible;
                this.className = "goDis";

            }

            document.getElementById('go_leftG').className = "goEna";
            gallery.animate({
                left: (-current_index * (width + margin * 2)) + 'px'
            }, 500);

        }

    });

    jQuery('#go_leftG').click(function () {
        if (0 != current_index && amount > visible) {
            if (current_index - visible >= 0) {
                current_index -= visible;
            } else {
                current_index = 0;
                this.className = "goDis";
            }

            document.getElementById('go_rightG').className = "goEna";
            gallery.animate({
                left: (-current_index * (width + margin * 2)) + 'px'
            }, 500);
        }

        if (current_index == 0) {
            document.getElementById('go_leftG').className = "goDis";
        }
    });

    jQuery(window).resize(function () {
        if (window.innerWidth < 1200) {
            resize();
            if (amount <= visible) {
                current_index = 0;
                document.getElementById('go_rightG').className = "goDis";
                document.getElementById('go_leftG').className = "goDis";
            } else
            if (current_index >= amount - visible) {
                document.getElementById('go_rightG').className = "goDis";
                current_index = amount - visible;
            } else {
                document.getElementById('go_rightG').className = "goEna";
            }

            gallery.css({
                left: (-current_index * (width + margin * 2)) + 'px'
            }, 500);
        }
    });

});
