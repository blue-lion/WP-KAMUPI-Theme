<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div><!-- artikel -->

<?php
get_footer();
