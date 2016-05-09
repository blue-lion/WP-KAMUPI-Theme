<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KAMUPI_THEME
 */

get_header(); ?>

	<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
		$url = $thumb['0'];
	?>

	<nav class="familybrowserNoTop fb-artikel" style="
		background: url('<?php echo $url; ?>') no-repeat;
		background-size: cover;
	">
		<div class="familybrowser-wrapper">
			<div class="globalcontent">
				
			</div>
		</div>
	</nav>

	<div class="main artikel">
		<div class="globalcontent">
			<div class="column large-9 medium-9 small-12">
				<div class="artikel-list">


		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h3 class="page-title">', '</h3>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div><!-- artikel -->

<?php

get_footer();
