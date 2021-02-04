<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<title> <?php wp_title(); ?> </title>
</head>
<nav id="desktop" class="d-none d-lg-block">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" /></a>
			</div>
			<div class="col-8 d-flex align-items-end flex-column">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
			<div class="col-2 d-flex inquire">
			<a class="bigpadding">
 				<button class="wt-btn_sign"><span class="wt-btn_sign-bound"><span data-width="#FF9900" data-text="Inquire">Inquire</span></span></button>
 			 </a>
			</div>
		</div>
	</div>
</nav>
<nav id="mobile" class="d-flex d-lg-none justify-content-between align-items-start">
	<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" /></a>
		<button class="hamburger hamburger--spring" type="button" aria-label="Menu" aria-controls="navigation">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
	<div id="mobile_menu">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		<div class="bigpadding">
			<button class="wt-btn_sign"><span class="wt-btn_sign-bound"><span data-width="#FF9900" data-text="Inquire">Inquire</span></span></button>
		</div>
	</div>	
</nav>
<body <?php body_class(); ?>>
