<?php get_header(); ?>

	<!-- IP Banner -->
	<div class="ip-banner relative">
			<canvas width="1920" height="300" style="background-image: url() ?>);"></canvas>
		<div class="ip-banner__text">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
	<div id="content-full">
		<div class="entry container">
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
