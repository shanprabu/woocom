function qs_decor()
{

	if( !jQuery('#order_review').length ) {
		return;
	}

	var eleL=jQuery('.woocommerce-billing-fields h3').first();
	var cntL=eleL.html();
	eleL.html('');
	eleL.attr('id','billing-details');
	eleL.append('<label for="billing-details-checkbox" class="checkbox">'+cntL+'</label>');
	eleL.append('<input id="billing-details-checkbox" class="input-checkbox" name="billing-details" value="1" type="checkbox">');

    var billingFields = jQuery('.woocommerce-billing-fields').css('height','auto');
    var autoHeight = billingFields.height();

	function qs_checkAct(e){

	if(jQuery(e).hasClass('hide')){
			jQuery(e).removeClass('hide');
			billingFields.animate({height: autoHeight},600);
		}else{
            autoHeight = billingFields.height();
			jQuery(e).addClass('hide');
			billingFields.animate({height: "35px"},600);
		}
	}

	jQuery('#billing-details label').click(function(){
		qs_checkAct(this);
	});

	jQuery('#ship-to-different-address label').click(function(){
        jQuery(this).toggleClass('hide');
	});

}

jQuery(document).ready(function(){
    qs_decor();

		//Adds compatibility with one page plugin
		jQuery('button.single_add_to_cart_button').on('click', function(){ qs_decor(); });

});
