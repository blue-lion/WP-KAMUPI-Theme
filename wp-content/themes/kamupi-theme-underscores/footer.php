<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KAMUPI_THEME
 */

?>
	<?php wp_footer(); ?>
	<footer id="globalfooter" class="globalfooter">
		<div class="gf-content">
			<div class="gf-item">
				<div class="row">
					<div class="column large-4 medium-4 small-12">
						<div class="gf-item-list">

							<h4>KAMUPI PNUP</h4>
							<div class="desc">
								<p>KAMUPI PNUP merupakan singkatan dari Keluarga Muslim Politeknik Indonesia Politeknik Negeri Ujung Pandang yaitu suatu lembaga yang bergerak dalam bidang agama (Da’wah Islam) demi mewujudkan suasana Kampus yang harmonis dan bernuansa Islam dengan berlandaskan pada Al-Qur’an dan Sunnah.</p>
							</div>
						</div>
					</div>
					<div class="column large-4 medium-4 small-12">
						<div class="gf-item-list">
							<?php

								the_widget('WP_Widget_Recent_Posts', 'title=Recent Posts')
							?>
							
						</div>
					</div>
					<div class="column large-4 medium-4 small-12">
						<div class="gf-item-list">
							<h4>Network</h4>
							<div class="desc">
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
						</div>
					</div>
				</div>
			</div>
			<nav class="gf-nav">
				<ul class="gf-nav-list">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu' => 'main-menu',
							'container' => '',
							'items_wrap' => '%3$s'
						));
					?>
				</ul>
			</nav>
			<div class="gf-footer">
				<div class="gf-footer-inner selfclear">
					<div class="gf-footer-legal">
						<p>Copyright © <?php echo date('Y');?> KAMUPI PNUP. All rights reserved.</p>
					</div>
					<div class="gf-footer-developed">
						<p>by DIKLAT. <a href="#" style="color: #0288C6">KAMUPI Theme 0.8 Beta</a> </p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- globalfooter -->



</body>
</html>
