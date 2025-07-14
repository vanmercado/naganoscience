<?php 
	/* Template Name: Page02 */
get_header(); ?>

	<!-- IP Banner -->
	<div class="ipBannerPage relative">
		<?php
			$ip_img = get_field("ip_img");
			$ip_desc = get_field("ip_desc");
			$ipSp_img = get_field("ipsp_img");
			$ip_jap = get_field("ip_jap");
		?>
		<canvas width="1440" height="500" style="background-image: url(<?php echo $ip_img;?>);"></canvas>
		<div class="ipBannerPage__text">
			<div class="containerSm">
				<div class="ipBannerPage__desc textCenter"><?php echo $ip_desc; ?></div>
			</div>
		</div>
	</div>
	<!-- End IP Banner -->

	<!-- Breadcrumbs -->
	<div class="container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>
	</div>
	<!-- Breadcrumbs -->

	<!-- Content Full -->
	<div id="content-full" class="content-full pageTemp-02">
		<div class="entry">
			<?php
			while ( have_posts() ) :
				the_post(); ?>
				<div class="entry-content has-pattern">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End of the loop ?>
		</div>
	</div>
	<!-- Content Full -->

<?php
get_footer();
