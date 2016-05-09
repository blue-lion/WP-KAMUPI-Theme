<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package KAMUPI_THEME
 */

?>
				<?php if ( is_single() ) { ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('artikel-item'); ?>>
						
						<div class="artikel-content">
							<div class="artikel-title">
							<?php
								the_title( '<h3>', '</h3>' );
							?>
							</div>
							<div class="author">
								<?php if ( 'post' === get_post_type() ) : ?>
								<ul>
									<li><span class="ico-author"><?php the_author(); ?></span></li>
									<li><span class="ico-stopwatch"><?php the_time('l j F Y'); ?></span></li>
									<li><span class="ico-tag"><?php the_category(', '); ?></span></li>
									<li><span class="ico-tag"><?php the_tags(); ?></span></li>
									<li><span class="ico-tag"><?php edit_post_link(); ?></span></li>
									<li><span class="ico-comment"><?php comments_number(0, 1, '%'); ?></span></li>
								</ul>
								<?php endif; ?>
							</div>
							<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
								$url = $thumb['0'];
							?>

							<div class="artikel-image-single">
								<img src="<?php echo $url;?>" alt="">
							</div>
							<div class="text">
								<?php 
									the_content('<p>', '</p>');
								 ?>
							</div>
						</div>	
					</div><!-- artikel-item -->
					<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

				<?php } else { ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('artikel-item'); ?>>

							<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
								$url = $thumb['0'];
							?>
						<div class="artikel-image">
							
							<img src="<?php echo $url; ?>" alt="">
						</div>
						<div class="artikel-content">
							<div class="artikel-title">
							<?php
								the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							?>
							</div>
							<div class="author">
								<?php if ( 'post' === get_post_type() ) : ?>
								<ul>
									<li><span class="ico-author"><?php the_author(); ?></span></li>
									<li><span class="ico-stopwatch"><?php the_time('l j F Y'); ?></span></li>
									<li><span class="ico-tag"><?php the_category(', '); ?></span></li>
									<li><span class="ico-tag"><?php the_tags(); ?></span></li>
									<li><span class="ico-tag"><?php edit_post_link(); ?></span></li>
									<li><span class="ico-comment"><?php comments_number(0, 1, '%'); ?></span></li>
								</ul>
								<?php endif; ?>
							</div>
							<div class="text">
								<?php the_excerpt('<p>', '</p>'); ?>
							</div>
						</div>	
					</div><!-- artikel-item -->

				<?php };?>


