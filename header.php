<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Lato:400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php include_once("analytics.php") ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="contact-header-wrapper">

			<div class="header-contact">
				<div class="site-branding">
					<?php shoreditch_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div>
				<!-- .site-branding -->
				<a href="mailto:k5family@live.net" class="contact-email">k5family@live.net</a>
				<a href="tel:+1925.5242602" class="contact-phone">925.524.2602</a>
				<div class="button-wrapper">
					<span class="su-lightbox contact-popup" data-mfp-src="#contact-form" data-mfp-type="inline"><button class="button button-primary button-condensed">Get a free quote</button></span>
				</div>
			</div>
		</div>
		<div class="menu-header-wrapper">

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<button id="menu-toggle" class="menu-toggle"><?php esc_html_e( 'Menu', 'shoreditch' ); ?></button>
				<div id="site-menu" class="site-menu">
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Menu', 'shoreditch' ); ?>">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
						?>
					</nav><!-- .main-navigation -->
				</div><!-- .site-menu -->
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			
		<?php endif; // End header image check. ?>
