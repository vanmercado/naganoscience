<?php get_header(); ?>
<!-- Homepage code  -->
	<section class="topBanner sec relative hiddenPc">
		<div class="topBanner__caption textCenter wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
			<div class="container">
				<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/topBanner__spTxt@2x.png" alt="くすりの品質。世界を優しく。" class="topBanner__spTxt">
			</div>
		</div>
		<div class="topBanner__bg relative">
			<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/topBannerSp_img@2x.jpg" alt="Top banner sp image" class="topBanner__img">
			<canvas width="375" height="420"></canvas>
		</div>
	</section>
	<section class="topVideo sec relative hiddenSp">
		<video class="topVideoBg-video" autoplay muted loop>
			<source src="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/video/nagano_top20210121.mp4" type="video/mp4">
			<source src="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/video/nagano_top20210121.webm" type="video/webm">
			<source src="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/video/nagano_top20210121.ogv" type="video/ogg">
			<p>動画を再生することができませんでした。</p>
		</video>
		<canvas width="1480" height="700" style=""></canvas>
	</section>
	<!-- .topBanner -->

	<section class="topPromise sec relative textCenter">
		<div class="container">
			<h2 class="topPromise__ttl wow fadeIn hidden" data-wow-duration="2s" data-wow-offset="300">Promise</h2>
			<img class="topPromise__img" src="<?php echo get_template_directory_uri() . "/assets/images/top/promiseTxt@2x.png" ?>" alt="Promise" />
			<p class="topPromise__txt wow fadeInUp" data-wow-duration="2s" data-wow-offset="300">私たちナガノサイエンスは、<br>
			医薬品安定性試験の保存プロセスを通じて、<br>
			持続可能な社会に貢献します。</p>
			<a href="<?php echo do_shortcode('[url]') ?>/promise/" class="btn wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">詳しく見る</a>
		</div>
	</section><!-- .topPromise -->

	<section class="topSec3 sec">
		<h2 class="ttl relative"><span class="ttl__en">Solution</span>私たちができること</h2>
		<div class="topSec3__content">
			<p>医薬品安定性試験専門企業ならではの提案力と対応力で、<br class="hiddenSp">
			お客様の幅広いニーズに応える様々なソリューションを提供します。</p>
		</div>
		<div class="topSec3__box">
			<ul class="topSolution">
				<li class="topSolution__item relative wow fadeIn" data-wow-duration="2s" data-wow-offset="300">
					<div class="container">
						<div class="topSolution__caption">
							<div class="topSolution__captionBox">
								<h3 class="topSolution__ttl">コア業務に集中したい</h3>
								<p class="topSolution__txt">研究や開発、分析評価などのコア業務に<br>集中できるよう、プロセス全体の見直しを<br>ご提案します。</p>
								<a href="<?php echo do_shortcode('[url]') ?>/core/" class="btn topSolution__btn">詳しく見る</a>
							</div>
						</div>
					</div>
					<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/topSolution_bg_01@2x.jpg" alt="コア業務に集中したい" class="topSolution__img block">
				</li>
				<li class="topSolution__item relative wow fadeIn" data-wow-duration="2s" data-wow-offset="300">
					<div class="container">
						<div class="topSolution__caption">
							<div class="topSolution__captionBox">
								<h3 class="topSolution__ttl">保存業務を改善したい</h3>
								<p class="topSolution__txt ">長年の経験と豊富な知識に基づくリスクベースアプローチにより、さらなる改善を<br class="hiddenTablet hiddenSp">ご提案します。</p>
								<a href="<?php echo do_shortcode('[url]') ?>/improvement/" class="btn topSolution__btn">詳しく見る</a>
							</div>
						</div>
					</div>
					<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/topSolution_bg_02@2x.jpg" alt="保存業務を改善したい" class="topSolution__img block">
				</li>
				<li class="topSolution__item relative wow wow fadeIn" data-wow-duration="2s" data-wow-offset="300">
					<div class="container">
						<div class="topSolution__caption">
							<div class="topSolution__captionBox">
								<h3 class="topSolution__ttl">保存業務を始めたい<br class="hiddenSp">・<br class="hiddenPc">保存スペースを増強したい</h3>
								<p class="topSolution__txt">圧倒的な実績と深い専門知識に基づく、多様な機器・システム・サービスをご提案します。</p>
								<a href="<?php echo do_shortcode('[url]') ?>/lineup/" class="btn topSolution__btn">試験機器・システムについて<br>詳しく見る</a>
								<a href="<?php echo do_shortcode('[url]') ?>/service/" class="btn topSolution__btn">サービスについて詳しく見る</a>
							</div>
						</div>
					</div>
					<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/topSolution_bg_03@2x.jpg" alt="保存業務を始めたい・保存スペースを増強したい" class="topSolution__img block">
				</li>
				<li class="topSolution__item relative wow fadeIn" data-wow-duration="2s" data-wow-offset="300">
					<div class="container">
						<div class="topSolution__caption">
							<div class="topSolution__captionBox">
								<h3 class="topSolution__ttl">医薬品安定性試験<br>プロセスを学びたい</h3>
								<p class="topSolution__txt">医薬品安定性試験に関する幅広い内容を<br>テーマにセミナーを開催しています。</p>
								<a href="<?php echo do_shortcode('[url]') ?>/stabilitytest/" class="btn topSolution__btn">詳しく見る</a>
							</div>
						</div>
					</div>
					<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/topSolution_bg_04@2x.jpg" alt="医薬品安定性試験プロセスを学びたい" class="topSolution__img block hiddenSp">
					<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/topSolutionSp_bg_04@2x.jpg" alt="医薬品安定性試験プロセスを学びたい" class="topSolution__img block hiddenPc">
				</li>
			</ul><!-- .topSolutions -->
			<div class="topSolution__wrap-btn">
				<a href="<?php echo do_shortcode('[url]') ?>/hazard-manual/ " class="btn btn--white btn--long topSec3__btn wow fadeInUp" data-wow-duration="2s" data-wow-offset="300">災害・停電時の対応について</a>
			</div>
		</div><!-- .topSec3__box -->
		<div class="topSec3__box wow fadeInUp" data-wow-duration="2s" data-wow-offset="500">
			<div class="container">
				<h2 class="ttl relative"><span class="ttl__en">News</span>お知らせ</h2>
				<div class="tab">
					<ul class="tab__btns flexbox">
						<li class="tab__link is-active" data-panel="tab__content1"><span class="tab__ttl">ナガノサイエンスからのお知らせ</span></li>
						<li class="tab__link" data-panel="tab__content2"><span class="tab__ttl">医薬品業界のニュース</span></li>
					</ul>
					<div id="tab__content1" class="tab__content is-open">
						<?php
							$impPosts = array();
							$args = array(
								'post_type' => 'post',
								'post_status'=>'publish',
								'posts_per_page' => 5,
								'category__and' => array( 3, 5 )
							);
							$the_query = new WP_Query( $args );
							$postCounter = $the_query->post_count;
							echo '<ul class="news">';
							if ( $the_query->have_posts() ){
								while ( $the_query->have_posts() ) : $the_query->the_post();
								$impPosts[] = $post->ID;
								echo '<li class="news__item">
										<a href="'. get_the_permalink(). '" class="news__link news__important flexbox">
											<p class="news__tag">重要なお知らせ</p>
											<p class="news__ttl">'. mb_strimwidth(get_the_title(), 0, 80, '...'). '</p>
										</a>
									</li>';
								endwhile;
								wp_reset_postdata();
							}

							$args02 = array(
								'post_type' => 'post',
								'post_status'=>'publish',
								'posts_per_page' => 5 - $postCounter,
								'category__and' => 3,
								'post__not_in' => $impPosts,
							);
							$more_query = new WP_Query( $args02 );
							if ( $more_query->have_posts() ){
								while ( $more_query->have_posts() ) : $more_query->the_post();
								echo '<li class="news__item">
										<a href="'. get_the_permalink(). '" class="news__link flexbox">
											<p class="news__date">'. get_the_date('Y.m.d'). '</p>
											<p class="news__ttl">'. mb_strimwidth(get_the_title(), 0, 80, '...'). '</p>
										</a>
									</li>';
								endwhile;
								wp_reset_postdata();
							} else {
								echo '<p>現在ナガノサイエンスからのお知らせはございません。</p>';
							}
							echo '</ul>';
						?>
						<a href="<?php echo do_shortcode('[url]') ?>/news/info/" class="btn">詳しく見る</a>
					</div><!-- #tab__content1 -->
					<div id="tab__content2" class="tab__content">
						<?php
							$impPosts = array();
							$args = array(
								'post_type' => 'post',
								'post_status'=>'publish',
								'posts_per_page' => 5,
								'category__and' => array( 4, 5 )
							);
							$the_query = new WP_Query( $args );
							$postCounter = $the_query->post_count;
							echo '<ul class="news">';
							if ( $the_query->have_posts() ){
								while ( $the_query->have_posts() ) : $the_query->the_post();
								$impPosts[] = $post->ID;
								echo '<li class="news__item">
										<a href="'. get_the_permalink(). '" class="news__link news__important flexbox">
											<p class="news__tag">重要なお知らせ</p>
											<p class="news__ttl">'. mb_strimwidth(get_the_title(), 0, 80, '...'). '</p>
										</a>
									</li>';
								endwhile;
								wp_reset_postdata();
							}

							$args02 = array(
								'post_type' => 'post',
								'post_status'=>'publish',
								'posts_per_page' => 5 - $postCounter,
								'category__and' => 4,
								'post__not_in' => $impPosts,
							);
							$more_query = new WP_Query( $args02 );
							if ( $more_query->have_posts() ){
								while ( $more_query->have_posts() ) : $more_query->the_post();
								echo '<li class="news__item">
										<a href="'. get_the_permalink(). '" class="news__link flexbox">
											<p class="news__date">'. get_the_date('Y.m.d'). '</p>
											<p class="news__ttl">'. mb_strimwidth(get_the_title(), 0, 80, '...'). '</p>
										</a>
									</li>';
								endwhile;
								wp_reset_postdata();
							} else {
								echo '<p>現在医薬品業界のニュースはございません。</p>';
							}
							echo '</ul>';
						?>
						<a href="<?php echo do_shortcode('[url]') ?>/news/iryo/" class="btn">詳しく見る</a>
					</div><!-- #tab__content2 -->
				</div><!-- .tab -->
			</div><!-- .topSec3__box -->
		</div>
	</section><!-- .topSec3 -->


	<ul class="cta01 flexbox">
		<li class="cta01__item wow fadeIn" data-wow-duration="2s" data-wow-offset="300" data-wow-delay=".5s">
			<a href="<?php echo do_shortcode('[url]') ?>/about/" class="cta01__link block relative">
				<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/cta_bg_01@2x.jpg" alt="Company" class="cta01__img block">
				<p class="cta01__txt">Company<small class="cta01__subTtl">会社情報</small></p>
			</a>
		</li>
		<li class="cta01__item wow fadeIn" data-wow-duration="2s" data-wow-offset="300" data-wow-delay="1s">
			<a href="<?php echo do_shortcode('[url]') ?>/message/" class="cta01__link block relative">
				<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/cta_bg_02@2x.jpg" alt="Message" class="cta01__img block">
				<p class="cta01__txt">Message<small class="cta01__subTtl">メッセージ</small></p>
			</a>
		</li>
		<li class="cta01__item wow fadeIn" data-wow-duration="2s" data-wow-offset="300" data-wow-delay="1.5s">
			<a href="<?php echo do_shortcode('[url]') ?>/history/" class="cta01__link block relative">
				<img src ="<?php echo do_shortcode('[stylesheet_directory]') ?>/assets/images/top/cta_bg_03@2x.jpg" alt="History" class="cta01__img block">
				<p class="cta01__txt">Michinori<small class="cta01__subTtl">道　程</small></p>
			</a>
		</li>
	</ul><!-- .cta01 -->

	<ul class="cta02 flexbox">

	<li class="cta02__item wow slideInLeft" data-wow-duration="2s" data-wow-offset="200"
                    data-wow-delay=".5s">
			<a href="<?php echo do_shortcode('[url]') ?>/sustainabilty/" class="cta02__link relative block">SUSTAINABLE POLICY<em class="cta02__subTtl">サスティナブル方針</em></a>
		</li>
		<li class="cta02__item wow slideInLeft" data-wow-duration="2s" data-wow-offset="200" data-wow-delay=".1s">
			<a href="<?php echo do_shortcode('[url]') ?>/recruit/" class="cta02__link relative block">Recruit<em class="cta02__subTtl">採用情報</em></a>
		</li>
		<li class="cta02__item wow slideInRight" data-wow-duration="2s" data-wow-offset="200" data-wow-delay=".5s">
			<a href="<?php echo do_shortcode('[url]') ?>/contact/" class="cta02__link relative block">Contact<em class="cta02__subTtl">お問い合わせ</em></a>
		</li>
	</ul><!-- .cta02 -->


<!-- End Homepage code  -->
<?php get_footer();