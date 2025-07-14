<?php get_header(); ?>

	<!-- IP Banner -->
	<div class="ipBanner relative">
		<canvas width="1920" height="300" style="background-image: url(<?php echo get_field("ip_img") ?>);" class="ipBanner__img"></canvas>
		<div class="ipBanner__text">
				<?php the_title( '<h1 class="ipBanner__ttl">', '</h1>' ); ?>
				<?php if (get_field("ip_jap")): ?>
					<p class="ipBanner__jap"><?php echo get_field("ip_jap") ?></p>
				<?php endif; ?>
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
	<div id="content-full" class="content-full">
		<div class="entry">
			<?php
			while ( have_posts() ) :
				the_post(); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End of the loop ?>
		</div>
	</div>
	<!-- Content Full -->
<?php
get_footer();
