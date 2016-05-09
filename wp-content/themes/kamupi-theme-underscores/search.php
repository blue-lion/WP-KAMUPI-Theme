<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h3 style="color: #E03840;" class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'kamupi-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
