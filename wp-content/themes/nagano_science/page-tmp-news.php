<?php /* Template name: News */ ?>
<?php 
	$page_ID = get_the_ID();
	$cat = $page_ID == 233 ? 3 : 4;
	get_header(); 
?>

	<!-- IP Banner -->
	<div class="ipBanner relative">
		<canvas width="1920" height="300" style="background-image: url(<?php echo get_field("ip_img") ?>);" class="ipBanner__img"></canvas>
		<div class="ipBanner__text">
				<h1 class="ipBanner__ttl">News</h1>
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
			<div class="pageNews">
				<div class="containerSm">
					<?php if($page_ID == '236'): ?>
					<h3 class="ttl2">医薬業界ニュース</h3>
					<div class="pageNews-text">
						<p>ナガノサイエンスでは、月に2回お客様に安定性試験に関する最新の情報を無料でメールにてお送りしています。<br>より詳しい内容の情報に関しましては、「ナガノサイエンス情報メールサービス」にご登録下さい。</p>
						<p>「お問い合わせ」から登録をご依頼いただけます。</p>
						<p>※同業他社のナガノサイエンス情報メールへの登録はお断りさせていただく場合があります。</p>
						<a href="<?php echo do_shortcode('[url]') ?>/contact" class="btn">お問い合わせはこちら</a>
					</div>
					<?php endif; ?>

					<div class="tab">
						<ul class="tab__btns flexbox">
							<li class="tab__link <?php echo $page_ID == '233' ? 'is-active' : '' ?>"><a href="<?php echo do_shortcode('[url]') ?>/news/info">ナガノサイエンスからのお知らせ</a></li>
							<li class="tab__link <?php echo $page_ID == '236' ? 'is-active' : ''  ?>"><a href="<?php echo do_shortcode('[url]') ?>/news/iryo">医薬品業界のニュース</a></li>
						</ul>
						<div id="tab__content1" class="tab__content is-open">
								<?php 
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array(
									'paged' => $paged,
								    'post_type' => 'post',
								    'post_status'=>'publish',
								    'posts_per_page' => 10,
								    'cat' => $cat, 
								);
								$the_query = new WP_Query( $args ); ?>
								<?php if ( $the_query->have_posts() ) : ?>
									<ul class="news">
								    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								        <li class="news__item">
											<a href="<?php echo get_the_permalink(); ?>" class="news__link flexbox">
												<p class="news__date"><?php echo get_the_date('Y.m.d') ?></p>
												<p class="news__ttl"><?php echo mb_strimwidth(get_the_title(), 0, 80, '...'); ?></p>
											</a>
										</li>
								    <?php endwhile; ?>
									</ul>
									<div class="pagination flexbox">
										<?php echo pagination_bar($the_query);?>
									</div>
								    <?php wp_reset_postdata(); ?>
								<?php else : ?>
								    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
						</div><!-- #tab__content1 -->
					</div><!-- .tab -->
				</div>
			</div>
		</div>
	</div>
	<!-- Content Full -->
<?php
get_footer();
