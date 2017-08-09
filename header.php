<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<div class="header-slider">
			<?php echo do_shortcode("[metaslider id=18 restrict_to=home]"); ?>
			<?php echo do_shortcode("[metaslider id=130 restrict_to=intro shic-groups]"); ?>
		</div>
		<?php bulmapress_skip_link_screen_reader_text(); ?>
		<header id="header" class="hero">
			<div class="hero-head">
				<div class="container">
					<nav id="site-navigation" class="nav main-navigation" role="navigation">
						<div class="nav-left">
							<a class="is-brand logo-big" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
						</div>
						<?php bulmapress_menu_toggle(); ?>
						<?php bulmapress_navigation(); ?>
					</nav><!-- #site-navigation -->
				</div><!-- .container -->
			</div><!-- .hero-head -->
		</header><!-- .hero -->
		<div id="content" class="site-content">
