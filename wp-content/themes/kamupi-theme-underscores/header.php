<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KAMUPI_THEME
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'kamupi-theme' ); ?></a>

	<nav id="globalnav" class="globalnav">
		<div class="globalcontent">
			<ul class="gn-header">
				<li class="menu-item"><a href="#" class="gn-link"></a></li>
				<li class="menu-item"><a href="#" class="gn-link">KAMUPI PNUP</a></li>
				<li class="menu-item"><a onclick="toggle('globalnav', 'gn-class-002')" href="#" class="gn-link">☰</a></li>
			</ul>
			<ul id="gn-class-002" class="gn-list">
				<?php 
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu' => 'main-menu',
						'container' => '',
						'items_wrap' => '%3$s'
					));
				?>
				<li class="menu-item search-item">
					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
						<div class="icon-search" onclick="showVisibility('s')">Search</div>
						<span class="input-search">
							<input name="s" id="s" type="text" placeholder="Search">
						</span>
					</form>
				</li>
			</ul>
		</div>
	</nav><!-- globalnav -->

	
	
