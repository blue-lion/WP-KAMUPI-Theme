<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KAMUPI_THEME
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

			<div class="column large-3 medium-3 small-12">
				<div class="sidebar">
				
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				
				</div><!-- sidebar -->
			</div>
