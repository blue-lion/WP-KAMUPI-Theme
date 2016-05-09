<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
					// if ( have_posts() ) :

						$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

						$custom_args = array(
					      'post_type' => 'post',
					      'posts_per_page' => 5,
					      'paged' => $paged
					    );
							 $custom_query = new WP_Query( $custom_args );

							 if ( $custom_query->have_posts() ) :

								/* Start the Loop */
								while ( $custom_query->have_posts() ) : $custom_query->the_post();

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
							endif; 
						 ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div><!-- artikel -->



<?php get_footer(); ?>