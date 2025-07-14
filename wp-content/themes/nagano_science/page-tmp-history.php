<?php /* Template Name: History*/ ?>
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
			<div class="history">
				<section class="historyIpSec01">
					<div class="containerSm">
							<?php if( have_rows('history') ): ?>
							    <ul class="list02">
							    <?php while( have_rows('history') ): the_row(); 
							         	$history_year = get_sub_field('history_year');
								        $history_details = get_sub_field('history_details');
							        ?>
							        <li class="list02__item">
										<p class="list02__label"><?php echo $history_year ?></p>
										<div class="list02__contentBox"><?php echo $history_details ?></div>
									</li>
							    <?php endwhile; ?>
							    </ul>
							<?php endif; ?>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- Content Full -->
<?php
get_footer();
