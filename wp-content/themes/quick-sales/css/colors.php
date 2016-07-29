<style>

  <?php
    $background_color= '#' . esc_attr( get_background_color() );
    $header_color = esc_attr( get_theme_mod('quick_sales_header-color', '#FFFFFF') );
    $footer_color = esc_attr( get_theme_mod('quick_sales_footer-color', '#FFFFFF') );
    $button_color = esc_attr( get_theme_mod('quick_sales_button-color', '#f38a0a') );
    $logo_color = esc_attr( get_theme_mod('quick_sales_logo-color', '#000000') );
    $link_color = esc_attr( get_theme_mod('quick_sales_link-color', '#f38a0a') );
    $font_color = esc_attr(  get_theme_mod('quick_sales_font-color', '#30281A') );
    $menu_color = esc_attr( get_theme_mod('quick_sales_menu-color', '#30281A') );
    $pointer_color = esc_attr( get_theme_mod('quick_sales_pointer-color', '#F9951D') );
  ?>

body {
  background: <?php echo $background_color; ?>;
}

#masthead,
#primary-navigation li ul {
    background-color: <?php echo $header_color; ?>;
}

#masthead #logo h1 {
  color: <?php echo $logo_color; ?>;
}

#mastfooter {
    background-color: <?php echo $footer_color; ?>;
}

<?php
function quick_sales_new_color($hex, $const=array(8,16,25)){
	if(substr($hex,0,1) == '#'){ $hex=substr($hex,1); }
	for($i=0;$i<3;$i++){
	 $dec[$i]=hexdec(substr($hex,$i*2,2))+$const[$i];
	 if($dec[$i]>255){ $dec[$i]=255; }
	 elseif($dec[$i]<0){ $dec[$i]=0; }
	 $nec[$i]=dechex($dec[$i]);
	 $nec[$i]=str_pad($nec[$i], 2, "0", 0);
	}
	$bright=(0.2126*$dec[0] + 0.7152*$dec[1] + 0.0722*$dec[2]);
	if($bright < 200){ $color=0; }else{ $color=1; }

	return array('#'.implode($nec),$color);
}
$border_btn = quick_sales_new_color($button_color,array(-23,-29,-7));
$backgound_btn = quick_sales_new_color($button_color);
?>

a,
#primary-navigation ul li a:hover,
#primary-navigation ul li.current-menu-item > a {
	color: <?php echo $link_color; ?> ;
}

.button,
input[type="submit"],
.woocommerce .added_to_cart  {
	background-color:<?php echo $button_color; ?> ;
	border-bottom: 3px solid <?php echo $border_btn[0]; ?>;
	background-image:linear-gradient(to bottom, <?php echo $button_color; ?>, <?php echo $backgound_btn[0];  ?>);
	color: <?php $brt=$border_btn[1]; if($brt){ echo '#000'; }else{ echo '#FFF'; }?> !important;
}

.button:hover,
input[type="submit"]:hover,
.woocommerce .added_to_cart:hover {
	background-color:<?php echo $button_color; ?> ;
	border-bottom: 3px solid <?php echo $border_btn[0]; ?>;
	background-image:linear-gradient(to bottom, <?php echo $button_color; ?>, <?php echo $backgound_btn[0];  ?>);
	color: <?php $brt=$border_btn[1]; if($brt){ echo '#000'; }else{ echo '#FFF'; }?> !important;
}

#primary-navigation ul li a {
	color: <?php echo $menu_color; ?> ;
}

.product_title,
p,
.woocommerce-tabs .tabs li a {
color: <?php echo $font_color; ?> ;
}

.required {
color: <?php echo $pointer_color; ?> ;
}

#go_rightG.goEna,
#go_leftG.goEna,
#customer_details h3 label.hide:before,
input[type="radio"]:checked + label:before,
#primary-navigation li span.expand.expanded,
.ui-slider-handle,
.ui-slider-range
{
    background-color:<?php echo $pointer_color; ?>;
}

.bypostauthor > article {
  border-color:<?php echo $pointer_color; ?>;
}
</style>
