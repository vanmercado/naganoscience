<?php
/* Template Name: Product Line */
 get_header(); ?>

	<!-- IP Banner -->
	<div class="ipBannerPage relative">
		<?php
			$ip_img = get_field("ip_img");
			$ip_desc = get_field("ip_desc");
			$ipSp_img = get_field("ipsp_img");
			$ip_jap = get_field("ip_jap");
		?>
		<canvas class="hiddenSp" width="1440" height="500" style="background-image: url(<?php echo $ip_img;?>);"></canvas>
		<div class="ipBannerPage__sp hiddenPc relative">
			<canvas width="750" height="400" style="background-image: url(<?php echo $ip_img;?>);"></canvas>
			<div class="ipBannerPage__textWrap hiddenSp">
				<?php the_title( '<h1 class="ttl2 textCenter">', '</h1>' ); ?>
				<p class="japtxt"><?php echo $ip_jap?></p>
			</div>
		</div>
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
			<div class="product">
				<ul class="product__list">
					<?php 
						$custom_terms = get_terms('product_category', array(
								    'orderby' => 'id',
								    'order' => 'ASC',
						));
						foreach($custom_terms as $custom_term) {
						    wp_reset_query();
						    $args = array(
						    	'post_type' => 'product-line',
						        'tax_query' => array(
						            array(
						                'taxonomy' => 'product_category',
						                'field' => 'slug',
						                'terms' => $custom_term->slug,
						            ),
						        ),
						     );

						     $loop = new WP_Query($args);
						     if($loop->have_posts()) {
						     	echo '<li class="product__wrap">';
						     		echo '<div class="containerSm">';
							        echo '<h3 class="product__category"><span class="category__ttl">'.$custom_term->name.'</span></h3>';
							        echo '<ul class="product__list">';
							        while($loop->have_posts()) : $loop->the_post();
							        	$post_thumbnail = get_the_post_thumbnail_url();
							        	$title = get_the_title();
							        	$tag = get_field('tag');
							        	$imgsp = get_field('sp_img');
							        	$pdf_file = get_field('pdf_file');
							        	$content = get_the_content();
							            echo '<li class="product__item flexbox">
												<canvas class="img" width="400" height="400" style="background-image: url('.$post_thumbnail.');"></canvas>
												<div class="product__info">
													<p class="tag">'.$tag.'</p>
													<h3 class="ttl2">'.$title.'</h3>
													<p>'.$content.'</p>
													<a href="'.$pdf_file.'" target="_blank" class="btn btn--left">カタログ</a>
												</div>
											</li>';
							        endwhile;
							        echo '</ul></div></li>';
						     }
						}
					?>
				</ul>
				<div class="product__test">
					<div class="containerSm">
						<a href="https://chamberdesign.com/" target="_blank" rel="noopener noreferrer" class="product__test-bnr">
							<div class="product__test-wrap">
								<h3 class="ttl2 ttl2--white textCenter"><span class="hiddenPc">環境試験を<br>検討されているお客様へ</span><span class="hiddenSp">環境試験を検討されているお客様へ</span><span class="txt">専用ページへ</span></h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Content Full -->

<?php
get_footer();
