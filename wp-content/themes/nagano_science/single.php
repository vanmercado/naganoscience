<?php get_header(); ?>

	<!-- IP Banner -->
	<div class="ipBanner relative">
		<canvas width="1920" height="300" style="background-image: url(<?php echo get_field("ip_img",12) ?>);" class="ipBanner__img"></canvas>
		<div class="ipBanner__text">
				<h1 class="ipBanner__ttl"><?php echo get_the_title(12) ?></h1>
				<?php if (get_field("ip_jap",12)): ?>
					<p class="ipBanner__jap"><?php echo get_field("ip_jap",12) ?></p>
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
	<div id="content-full">
		<div class="post entry containerSm">
			<?php the_title('<h2>','</h2>') ?>
			<?php echo get_the_date('Y.m.d'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // End of the loop ?>
		</div>
	</div>
	<!-- Content Full -->
<?php
get_footer();
