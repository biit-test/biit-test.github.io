<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package biit
 */

?>

	</div><!-- #content -->
	</main>
	<footer class="footer">
		<div class="container">
			<p>+7 (3519) 29-84-02 455000 Россия, г. Магнитогорск, пр. Ленина, 38 mgtu@magtu.ru</p>
			<p>© 2018 Магнитогорский государственный технический университет им. Г.И. Носова</p>
			<p>Лицензия: серия 90Л01 №0009323 рег. №2277 от 19 июля 2016 г. </p>
			<p>Свидетельство о гос. аккредитации: серия 90А01 №0002380 от 26.09.2016 г., срок действия до 31.03.21 г.</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory') ?>/js/swiper.min.js"></script>
	  <script>
	    var swiper = new Swiper('.swiper-container', {
	      pagination: {
	        el: '.swiper-pagination',
	        type: 'fraction',
	      },
	      navigation: {
	        nextEl: '.btn__gallery',
	        prevEl: '.btn__video',
	      },
	    });
	  </script>
	  <script>
		var flag = false;
		var link = "<?php bloginfo('template_directory') ?>";
		if($("#special-version-controls").css("display") == "block"){
			$('head').append('<link rel="stylesheet" type="text/css" href='+link+'/css/visually-impaired.css>');
			flag = true;
		}
		function showHideV(){
			if(flag){
				$('link[href*="impaired.css"]').remove();
				flag = false;
			}
			else{
				$('head').append('<link rel="stylesheet" type="text/css" href='+link+'/css/visually-impaired.css>');
				flag = true;
			}
		};
	  </script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.fancybox.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</body>
</html>
