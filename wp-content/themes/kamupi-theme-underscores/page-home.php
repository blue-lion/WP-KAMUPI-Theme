<?php
/*
	Template Name: Homepage
 */
?>

<?php
// Advanced Custom Field

$logo_kamupi 	= get_field('logo_kamupi');
$nama_kamupi 	= get_field('nama_kamupi');
$small_desc 	= get_field('small_desc');
$text_kamupi	= get_field('text_kamupi');
 
$motto_title 	= get_field('motto_title');
$motto_list 	= get_field('motto_list');

?>

<?php get_header(); ?>
	
	<div class="hero-slider">
		<?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'slider' );?>
	</div>

	<section class="blog">
		<div class="row">
		<?php $temp_query = $wp_query; ?>
		<?php query_posts( 'posts_per_page=6' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
			$url = $thumb['0'];
		?>
			<div class="blog-item">
				<div class="column large-4 medium-6 small-12">
					<a href="<?php echo get_permalink(); ?>" class="blog-item-link" style="
						background: url('<?php echo $url; ?>') no-repeat;
						background-size: cover;
					">
					<div class="blog-item-link-text">
						
						<div class="blog-item-link-text-inner">
							<div class="author">
								<p><?php the_time('l j F Y'); ?></p>
								<p class="authorItem">by <?php the_author(); ?></p>
							</div>
							
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
					</a>
				</div>
			</div><!-- blog-item -->

		<?php endwhile; ?>
		<?php $wp_query = $temp_query; ?>
		</div>
	</section><!-- blog -->
	
	<section class="section about-kamupi">
		<div class="section-content">
			<div class="about-kamupi-desc align-center padding-top padding-bottom-small">
				<?php if(!empty($logo_kamupi)) : ?>
					<img src="<?php echo $logo_kamupi['url']; ?>" alt="<?php echo $logo_kamupi['alt'];?>">
				<?php endif; ?>
				
				<h2><?php echo $nama_kamupi; ?></h2>
				<h4><?php echo $small_desc;?></h4>
				<div class="center-paragraph margin-top-small">
					<p><?php echo $text_kamupi;?></p>
				</div>
			</div><!-- about-kamupi-desc -->
			<div class="about-kamupi-motto margin-top align-center">
				<div class="row center-paragraph">
					<h3><?php echo $motto_title ;?></h3>
					<?php echo $motto_list ;?>
				</div>
			</div>
		</div>
	</section><!-- section about-kamupi -->
	<section class="section social-network" style="
		background: url('wp-content/themes/kamupi-theme-underscores/assets/images/1280x800.png') no-repeat;
		background-size: cover
	">
		<div class="section-content">
			<ul>

				<?php $loop = new WP_Query(array( 'post_type' => 'social_network', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
				<?php 
					while($loop->have_posts()) : $loop->the_post(); 
					$image_social = get_field('image_sn');
				?>

					<li><a href="<?php the_field('url_sn');?>">
						<?php if(!empty($logo_kamupi)) : ?>
							<img src="<?php echo $image_social['url']; ?>" alt="<?php echo $image_social['alt'];?>">
						<?php endif; ?>
					</a></li>

				<?php endwhile;?>
			</ul>
		</div>
	</section>

	<section class="section category">
		<div class="section-content">
			<ul>
				<?php
					wp_list_categories( array(
						'orderby' => 'count',
						'order' => 'DESC',
						'title_li' => '',
						'number' => 10
					));
				?>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>


