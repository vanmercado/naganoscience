<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-N99B27L9C4"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'G-N99B27L9C4');
			</script>
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	    <link rel="profile" href="https://gmpg.org/xfn/11">
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
	    <link rel="stylesheet" href="https://use.typekit.net/yxv8xfn.css">
	    <script src="https://kit.fontawesome.com/8f970b4e15.js"></script>
	    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	    <script>
		  (function(d) {
		    var config = {
		      kitId: 'zvl3mic',
		      scriptTimeout: 3000,
		      async: true
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>
	    <?php wp_head(); ?>
	</head>
	<body id="top" <?php body_class();?> data-page="<?php echo get_post_field( 'post_name', get_post() ); ?>Page">
		<div class="main-wrapper">

			<header class="header flexbox">
				<a href="<?php echo do_shortcode('[url]') ?>" class="header__logo">
					<img src ="<?php echo get_stylesheet_directory_uri() . "/assets/images/common/logo.jpg" ?>" srcset="<?php echo get_stylesheet_directory_uri() . "/assets/images/common/logo@2x.jpg" ?> 2x" alt="Nagano Science" class="block">
				</a>
				<div class="header__right flexbox relative">
					<ul class="translate flexbox">
						<li class="translate__item"><a href="<?php echo do_shortcode('[url]') ?>" class="translate__link translate__jp is-active">Jp</a></li>
						<li class="translate__item"><a href="https://www.naganoscience.com/en-lp/" class="translate__link">En</a></li>
					</ul>
					<div class="header__btn text-center">Menu</div>
					<div class="header__close">
						<div class="header__closeBar"></div>
						<div class="header__closeBar"></div>
					</div>
				</div>
			</header> <!-- .header -->
			<div class="burgerMenu">
				<div class="burgerMenu__line"></div>
				<div class="burgerMenu__line"></div>
				<div class="burgerMenu__line"></div>
			</div>
			<nav class="slidingMenu">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'navs','menu_id' => 'nav', 'theme_location' => 'primary', 'container' => false ) ); ?>
			</nav>
			

			<main>
				<?php if(!is_home()): ?>
					<div class="inner-page-wrapper">
				<?php endif; ?>
					
	