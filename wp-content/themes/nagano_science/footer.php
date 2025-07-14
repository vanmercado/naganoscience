				<?php if(!is_home()): ?>
					</div><!-- #inner-page-wrapper closing tag  -->
				<?php endif; ?>
			</main>

			<footer class="footer flexbox relative">
				<div class="footer__left">
					<a href="<?php echo do_shortcode('[url]') ?>" class="footer__logo">
						<img src ="<?php echo get_stylesheet_directory_uri() . "/assets/images/common/logo.jpg" ?>" srcset="<?php echo get_stylesheet_directory_uri() . "/assets/images/common/logo@2x.jpg" ?> 2x" alt="Nagano Science footer logo">
					</a>
					<p class="footer__copyright">&copy; <?php echo date('Y'); ?> NAGANO SCIENCE Co., Ltd.</p>
				</div>
				<div class="footer__right flexbox">
					<a class="footer__link" href="<?php echo do_shortcode('[url]') ?>/privacypolicy">＞個人情報保護方針</a>
					<a href="#top" class="footer__scroll scroll fas fa-angle-up"><span class="hidden">Back to top</span></a>
				</div>
			</footer><!-- .footer -->

		</div><!-- #main-wrapper closing tag  -->
		<?php wp_footer(); ?>
	</body>
</html>