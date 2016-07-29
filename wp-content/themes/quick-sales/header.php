<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">

			<div class="content_wrapper">

				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

					<?php if ( !get_theme_mod( 'quick_sales_logo' ) ) : ?>

					<h1 class="site-title">
						<?php bloginfo( 'name' ); ?>
					</h1>

					<?php else : ?>

						<img class="site-title" src="<?php echo esc_url(get_theme_mod('quick_sales_logo')); ?>">

					<?php endif; ?>
				</a>

				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location'=> 'primary' ) ); ?>
				</nav>

			</div>

		</header>
		<!-- #masthead -->

		<div id="main" class="site-main content_wrapper">
