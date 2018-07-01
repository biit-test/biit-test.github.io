<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biit
 */

get_header();
?>
		<section class="header__image-box">
				<div class="image-box__inner">
					<div class="image-box__title">
						<span class="image-box__title--text">«Далеко-далеко за словесными горами в стране, гласныхa и согласных» <b> &mdash; Lorem ipsum</b></span> 
					</div>
				</div>
				<div class="container">
					<div class="image-box__nav">
						<a href="/history" class="nav__item">
							<div class="item__pic"></div>	
							<span class="item__link">История кафедры</span>
						</a>
						<a href="/расписание-консультаций-преподовате" class="nav__item">
							<div class="item__pic"></div>	
							<span class="item__link">Расписание консультаций преподователей</span>
						</a>
						<a href="/publication" class="nav__item">
							<div class="item__pic"></div>	
							<span class="item__link">Публикации</span>
						</a>
						<a href="/sostav-kafedry" class="nav__item">
							<div class="item__pic"></div>	
							<span class="item__link">Состав кафедры</span>
						</a>
					</div>
				</div>
				<hr class="section-breaker">	
		</section>		
		<section class="zav-kafedri">
			<div class="zav-kafedri__profile container">
				<div class="profile__image">
					<img src="<?php bloginfo('template_directory') ?>/images/zafKaf.jpg" alt="">
				</div>
				<div class="profile__info">
					<span><b>Заведующая кафедрой</b>: Чусавитина Галина Николаевна, кандидат педагогических наук, профессор</span>	
					<span><b>Адрес</b>: пр. Ленина, 38, ауд. 6306 (кафедра) , 6307а (зав. каф.)</span>	
					<span><b>Телефон:</b> зав. кафедрой (3519) 29-85-46; преподавательские (3519) 29-85-85 (ауд.6306), (3519) 29-85-23 (ауд.6308); зав. лабораторией (3519) 29-85-89</span>	
					<span><b>E-mail:</b> <a href="BIIIT@magtu.ru">BIIIT@magtu.ru</a></span>
					<span><b>График работы кафедры:</b> пн-чт, 8.00 – 17.00; пт, 8.00 – 15.45</span>	
					<span><b>Часы приёма заведующей кафедрой:</b> вт., 15.00 – 16.00</span>	
				</div>
			</div>
			<hr class="section-breaker">
		</section>
		<section class="b-news">
			<div class="container">
				<div class="news">
					<span class="section__title">
						Новости 
					</span>
					<a href="/all-news" class="show__all--link">Показать все</a>
					<div class="news__container">
							<?php query_posts('posts_per_page=4'); ?>
							<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?> 
							<a href="<?php the_permalink(); ?>" class="news__item" id="post-<?php the_ID(); ?>"> 
								<div class="item__image">
									<?php 
								$attachments = get_children(array('post_parent' => $post->ID,
								                        'post_status' => 'inherit',
								                        'post_type' => 'attachment',
								                        'post_mime_type' => 'image',
								                        'order' => 'ASC',
								                        'orderby' => 'menu_order ID'));

								foreach($attachments as $att_id => $attachment) {
								    $full_img_url = wp_get_attachment_url($attachment->ID);
								    echo "<img src='$full_img_url'>";
								}
								?>
								<div class="item__date"><?php the_date('j F Y'); ?></div> 
								</div>
								<div class="item__title"><?php the_title(); ?></div> 
							</a> 
							<?php }?> 
							<?php 
							} // конец if 
							else 
							echo "<h2>Записей нет.</h2>"; 
							?>
						<a href="#" class="show__all mobile__vizible">Показать еще</a>
					</div>
				</div>
<!-- 				<div class="box" style="width: 100%; margin-bottom: 25px;">
					<span class="section__title ">
						Объявления
					</span>
				</div>	
				<div class="publications">
					<div class="b-activity-card">
						<span class="date">
							<h4 class="num">27</h4>
							<month>Май</month>
							<year>2018</year>
						</span>
						<h4 class="name">
							<a href="#" target="_blank">
								Фестиваль науки и технологий EasyFest</a>
						</h4>
					</div>
					<div class="b-activity-card">
						<span class="date">
							<h4 class="num">27</h4>
							<month>Май</month>
							<year>2018</year>
						</span>
						<h4 class="name">
							<a href="#" target="_blank">
								Фестиваль науки и технологий EasyFest</a>
						</h4>
					</div>
					<div class="b-activity-card">
						<span class="date">
							<h4 class="num">27</h4>
							<month>Май</month>
							<year>2018</year>
						</span>
						<h4 class="name">
							<a href="#" target="_blank">
								Фестиваль науки и технологий EasyFest</a>
						</h4>
					</div>
					<div class="b-activity-card">
						<span class="date">
							<h4 class="num">27</h4>
							<month>Май</month>
							<year>2018</year>
						</span>
						<h4 class="name">
							<a href="#" target="_blank">
								Фестиваль науки и технологий EasyFest</a>
						</h4>
					</div>
					<div class="b-activity-card">
						<span class="date">
							<h4 class="num">27</h4>
							<month>Май</month>
							<year>2018</year>
						</span>
						<h4 class="name">
							<a href="#" target="_blank">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Реторический назад букв журчит, знаках?</a>
						</h4>
					</div>
					<a href="#" class="show__all mobile__vizible">Показать все</a>
				</div> -->
			</div>
			<hr class="section-breaker">
		</section>
		<section class="b-graduate">
			<div class="container">
				<span class="section__title">
					Наши выпускники
				</span>
				<div class="graduate__btns">
					<li class="btn__video btn">Галерея</li>
					<li class="btn__gallery btn">Видео</li>
				</div>
				<div class="swiper-container" style="width: 100%;">
					<div class="graduate__content swiper-wrapper" >
						<div class="content__gallery swiper-slide" >
							<div class="gallery__container">
								<div class="gallery__item "><a data-fancybox="gallery" href="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg"><img src="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg" alt=""></a></div>
								<div class="gallery__item "><a data-fancybox="gallery" href="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg"><img src="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg" alt=""></a></div>
								<div class="gallery__item "><a data-fancybox="gallery" href="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg"><img src="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg" alt=""></a></div>
								<div class="gallery__item "><a data-fancybox="gallery" href="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg"><img src="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg" alt=""></a></div>
								<div class="gallery__item "><a data-fancybox="gallery" href="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg"><img src="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg" alt=""></a></div>
								<div class="gallery__item "><a data-fancybox="gallery" href="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg"><img src="<?php bloginfo('template_directory') ?>/images/MnIttUuASc8.jpg" alt=""></a></div>
							</div>	
						</div>
						<div class="content__gallery swiper-slide" >
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur delectus ducimus et maiores, ab tempora est corporis. Asperiores error, nisi iusto, iste excepturi eius, aperiam sunt, deleniti vel dignissimos praesentium.
						</div>
		
					</div>	
				</div>
			</div>	
				<a href="#" class="show__all mobile__vizible">Показать все</a>	
		</section>
		<section>
			<hr class="section-breaker">
			<div class="b-directions">
				<div class="container">
					<span class="section__title">
						Направления подготовки
					</span>	
				</div>
				<div class="directions container">
					<style type="text/css">
					/*.tftable {width:100%;border-collapse: collapse;}*/
					.tftable th {border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left;}
					.tftable tr {background-color:#f5f5f5;}
					.tftable td {border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}
					.tftable tr:hover {background-color:#ffffff;}
					</style>

					<table class="tftable" border="1">
					<tr class="table__head"><th>Направление</th><th>Форма обучения</th><th style="text-align: center;">Профиль</th><th>Квалификация</th><th>Вступительные ЕГЭ</th></tr>
					<tr><td>Бизнес-информатика</td><td>Очная Заочная </br> с применение ДОТ</td><td>Электронный бизнес </br> Управление контентом</td><td>Бакалавр бизнес-информатики</td><td>Русский язык </br>Математика </br> Обществознание</td></tr>
					<tr><td>Педагогическое образование</td><td>Очная</td><td>Информатика и экономика</td><td>Бакалавр педагогического</br>образования</td><td>Русский язык </br>Математика </br> Обществознание</td></tr>
					<tr><td>Прикладная информатика</td><td>Очная</td><td>Информационные системы </br>и технологии в управлении </br> ИТ-проектами</td><td>Бакалавр прикладной</br>информатики</td><td>Русский язык </br>Математика </br> Информатика</td></tr>
					<tr><td>Бизнес-информатика</td><td>Заочная</td><td>Электронный бизнес </br> Управление контентом</td><td>Магистр бизнес-</br>информатики</td><td class="long__line">Внутренний вузовский </br>экзамен</td></tr>
					<tr><td>Педагогическое образование</td><td>Очная и заочная</td><td>Информационные технологии в образовании</td><td>Магистр педагогического </br>образования</td><td class="long__line">Внутренний вузовский </br>экзамен</td></tr>
					<tr><td>Прикладная информатика</td><td>Очная и заочная</td><td>	Прикладная информатика в </br>экономике </br>Корпоративные информационные</br> системы</td><td>Магистр прикладной </br>информатики</td><td class="long__line">Внутренний вузовский </br>экзамен</td></tr>
					</table>
				</div>
			</div>
			<hr class="section-breaker">
		</section>
		<section class="location">
			<div class="container">
				<span class="section__title">
					Как до нас добраться?
				</span>
				<div class="location__container">
					<div class="location__item">
						<div class="item__pic">
							<a data-fancybox data-src="#modal" href="javascript:;">
								<img src="<?php bloginfo('template_directory') ?>/images/location.png" alt="">
								<div class="item__text">Показать на карте</div>
						        <div style="display: none;" id="modal">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad362eef7ddf9ae15c2ce02a3c7d2c2573a7023e959ae7a0ddcd315ac65ecd5f5&amp;width=593&amp;height=460&amp;lang=ru_RU&amp;scroll=true"></script>
						        </div>
							</a>	
						</div>
					</div>
					<div class="location__item">
						<div class="item__pic">
							<a href="https://vk.com/cathbiit">
								<img src="<?php bloginfo('template_directory') ?>/images/vk-icon.png" alt="">
								<div class="item__text">Группа вконтакте</div>
							</a>
						</div>
					</div>
				</div>	
			</div>		
		</section>
		<style>
			footer.footer{margin-top: 0;}
		</style>
<?php

get_footer();
