<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Кафедра бизнес-информатики и информационных технологий</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/swiper.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/js/parallax.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<style type="text/css">
		#hellopreloader>p{display:none;}
		#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;background: #2C3E50 url(http://hello-site.ru//main/images/preloads/oval.svg) center center no-repeat;background-size:80px;}
		@media (max-width: 660px) {#hellopreloader_preload{background-size: 40px}};
	</style>
	<div id="hellopreloader">
		<div id="hellopreloader_preload"></div>
	</div>
	<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};
	</script>
	<header class="b-header">
		<div class="header">
			<div class="container">
				<div class="header__top">
					<a class="logo" href="/">
						<div class="logo__pic">
							<img src="" alt="">
						</div>
						<div class="logo__text">
							<span class="logo__text--title">Кафедра бизнес-информатики и информационных технологий</span>
							<span class="logo__text--subtitle">Магнитогорские государственный технический университет им. Г.И. Носова</span>
							<span class="logo__text--subtitle__mobile mobile__vizible">МГТУ им.Г.И. Носова</span>
						</div>
					</a>
					<div class="parent__box">
						<div  class="visually_impaired" id="cr_version_link" onclick="showHideV()">
							<p>Версия для слабовидящих</p>
							<div class="visually_impaired__pic">
								<img src="<?php bloginfo('template_directory') ?>/images/eye.png" alt="">
							</div>
						</div>
					</div>	
					<div class="date"><span><?php echo date("d.m.y")?></span><span><?php 
						function week_parity() {
							$start_date="01.09.2014";
							$week = intval(date_diff(new DateTime($start_date), new DateTime())->days/7);
							return ($week%2 ? 'четная' : 'нечетная');
						}
						echo week_parity()." неделя";
					?></span></div>
				</div>	
			</div>	
			<div class="header__middle">
				<nav id="site-navigation" class="navigation b_nav-w menu-m">
					<div class="container navigation__container">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => '',
							'container'      => 'ul',
							'menu_class'     => 'navigation__menu'

						) );
						?>
						<form role="search" class="navigation__container" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
							<input type="text" class="search-line" value="<?php echo get_search_query() ?>" name="s" id="s" />
							<button type="" id="searchsubmit" class="" value="" ><div class="btn-preview"></div></button>
						</form>
					</div>	
				</nav>
				<button class="menu-m__toggle" onclick="clickBtn()">
					<span class="icon"></span>
				</button>
			</div>
			<hr class="section-breaker mobile__vizible">
		</div>

<!-- #site-navigation -->
	</header><!-- #masthead -->
	<main class="main">
		
	<div id="content" class="site-content">
