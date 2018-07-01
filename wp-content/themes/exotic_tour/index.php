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
 * @package exotic_tour
 */

get_header();?>
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?php bloginfo('template_directory')?>/images/slider/1.png"/></div>
      <div class="swiper-slide"><img src="<?php bloginfo('template_directory')?>/images/slider/2.png"/></div>
      <div class="swiper-slide"><img src="<?php bloginfo('template_directory')?>/images/slider/3.png"/></div>
      <div class="swiper-slide"><img src="<?php bloginfo('template_directory')?>/images/slider/4.png"/></div>
      <div class="swiper-slide"><img src="<?php bloginfo('template_directory')?>/images/slider/5.png"/></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
<div class="header-part">
	<div class="page_wrapper">
		<div class="zone zone-part-header">
			<div class="search-panel" style="text-align: center;" >
				<div class="moudel-search-1" style="margin-top: 30px;">
				<!--<img src="<?php bloginfo('template_directory')?>/images/xm1TfXfarH8.jpg" alt="">
				<img src="<?php bloginfo('template_directory')?>/images/6XXe84BhHQ4.jpg" alt="">-->
<div id='tuw_list_holder'><span class="devtur-copyright">Загрузка модуля <a href="http://devtur.ru/" title="поиск туров" target="_blank">поиска туров</a> …</span></div>
<script language="javascript" type="text/javascript">
	var tuw_config = {
		depart_list: '',	country_list: '', tourtype_list: '',
		depart: '0', country: '15', tourtype: '',
		theme: 'default', width: ''
	}
	var tuw_version = 3;
</script>	
<script charset="UTF-8" language="javascript" type="text/javascript" src="http://tuw.devtur.ru/pub/load_core.js"></script>
				</div>
			</div> 

		</div>
	</div>
</div>

<div class="page_content page_wrapper __full ">
	<div class="page_sidebar sidebar">
		<div class="zone zone-leftSidebar">
		</div>
	</div>
	<div class="page_main">
		<div class="zone zone-content">
			<div class="hotelWidgetFrame">

				<div class="concepts_container-title hotelGaleryWidgetContainerTitle">
					<div class="concepts_country" >
						<a href="javascript:void(0);" class="concepts_country-link" data-bind="text: $root.selectedCountryName">Горящие туры</a>
					</div>
				</div>
				<div class="page_container-content" data-bind="visible: !isGalleryLoading()" style="">

					<div id="hotelList">
							<div id="hotelListInner" style="padding-bottom: 30px;text-align: center;">
								<img src="<?php bloginfo('template_directory')?>/images/e-RG9xN_ObM.jpg" alt="">	
							</div>
						</div>
					</div>
				</div>
				<a name="f90744e7fe0e47acbf722eac0b3879d8"></a>



				<div class="page_container" id="97b176bc5ddf40ab8b39803f9e43d4c7" style="" data-bind="visible: countryId">
					<div class="concepts">
						<div class="loading" data-bind="visible: concepts.loading" style="display: none;"></div>
						<div class="concepts_container">
							<div class="concepts_container-title">
								Концепции отдыха
								<div class="concepts_country" data-bind="dropdown: {key: 'countryDropdown', model: globalRegions}">
									<a href="javascript:void(0);" class="concepts_country-link" data-bind="text: countryName">России</a>
									<div class="concepts_country-dropdown">
										<div class="dropdown-menu countries-dropdown __light">
											<div class="dropdown-menu_arrow countries-dropdown_arrow"></div>
											<!--ko foreach: globalRegions-->
											<ul class="countries-dropdown_col" data-bind="foreach:$data">
												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/a6ba5742/Bulgaria.png?v=636265746309668293" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Болгария</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/Vietnam.png?v=636265746587328776" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Вьетнам</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/Israel.png?v=636265747195771379" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Израиль</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/Jordan.png?v=636265747662034403" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Иордания</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/Spain.png?v=636265746080602225" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Испания</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													ko ifnot:isMockRegion
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/italy-flag.png?v=636265746191385193" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Италия</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/4be57644/cypruslogo.jpg?v=636265746645923587" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Кипр</a>
													</div>
													<!--/ko-->
												</li>
											</ul>

											<ul class="countries-dropdown_col" data-bind="foreach:$data">
												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/Maldives.png?v=636265747362182238" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Мальдивы</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/Morocco.png?v=636265746790613173" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Марокко</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/a6ba5742/Mexico.png?v=636265748495178361" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Мексика</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/United Arab Emirates.png?v=636265746004663577" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">ОАЭ</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/rus.png?v=636265745567622883" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Россия</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/tajland.gif?v=636265745886067292" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Таиланд</a>
													</div>
													<!--/ko-->
												</li>

												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/a6ba5742/Turkey.png?v=636265745734032782" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Турция</a>
													</div>
													<!--/ko-->
												</li>
											</ul>

											<ul class="countries-dropdown_col" data-bind="foreach:$data">
												<!--ko if:$index()!=0 && isMockRegion()--><!--/ko-->
												<li class="countries-dropdown_item" data-bind="css: {'__title': isMockRegion}, click: unwrap(globalRegionName)? $root.selectCountry.bind($root):function(){return false;}, dropdown: unwrap(globalRegionName)?{key: 'countryDropdown', role: 'closeBtn' }:{}">
													<!--ko if:isMockRegion--><!--/ko-->
													<!--ko ifnot:isMockRegion-->
													<img src="http://media.sunmar.ru/Media/Default/_Profiles/eca23904/f1dae0cc/Sri-Lanka.png?v=636265747746880529" class="countries-dropdown_item-flag" width="30" height="20" data-bind="attr:{src: flagSrc()||'/'}, style:{visibility: unwrap(flagSrc)?'inherit':'hidden'}" style="visibility: inherit;">
													<div class="countries-dropdown_item-inner">
														<a class="countries-dropdown_item-link" href="javascript:void(0)" data-bind="text: name">Шри-Ланка</a>
													</div>
													<!--/ko-->
												</li>
											</ul>
											<!--/ko-->
										</div>
									</div>
								</div>
							</div>
							<div class="concepts_container-header">
								<div class="concepts_group">
									<div class="concepts-list __slider_disabled" data-bind="css: {'__slider_disabled': unwrap(concepts.list).length <= 9}">
										<div class="concepts-list_slider" data-bind="foreach: concepts.list, slick: {slidesToShow: 9, infinite: false, draggable: false, dots: false}">
											<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
												<div class="concepts-list_item" id="post-<?php the_ID(); ?>">
													<a class="concept " href="<?php the_permalink(); ?>">
														<div class="post_image"><?php the_post_thumbnail( 'spec_thumb'); ?></div>
														<div class="concept_head" data-bind="style: {'border-color': $root.isSelectedConcept($data) ? borderColor : ''}" style="border-color: #8BC34A;">
														</div>		
														<span class="concept_label"><?php the_title(); ?></span>
													</a>
												</div>
												<?php }?>
											<?php
											} // конец if
											else 
												echo "<h2>Записей нет.</h2>";
											?>
										</div>
									</div>
								</div>
								<div class="concepts_image" data-bind="with: selectedConcept, style: {background: unwrap(selectedConcept) ? unwrap(selectedConcept).backgroundColor : ''}" style="background: #8BC34A;">
									<img width="1263" height="471" data-bind="attr: {'data-original': backgroundImageUrl, alt: backgroundImageCaption, title: backgroundImageCaption}, lazyImg: {}" src="<?php bloginfo('template_directory')?>/images/Q9Fz2d6Sdb.jpg">
								</div>
							</div>
							<div class="concepts_container-content">
								<div class="loading" data-bind="visible: hotels.loading()" style="display: none;"></div>
								<div class="concepts_wrapper">
									<div data-bind="with: selectedConcept">
										<div class="concepts_container-subtitle" data-bind="text: name">Ваше мнение о Нас</div>
										<div class="concepts_container-description">
											<p data-bind="text: description"></p>
											<a href="/concepts/rekomenduemie-oteli" class="link link-hotels" data-bind="text: conceptPageLinkText, attr: {href: conceptPageLinkUrl}"></a>
										</div>
									</div>
									<div class="concepts_hotels">
										<div class="dropdown-overlay"></div> 
										<div class="hotels-carousel __blue slick-initialized slick-slider" data-bind="foreach: pages, slick: {lazyLoad: 'ondemand'}" style="visibility: visible;">
											<div class="slick-list draggable" tabindex="0">

											<?php echo do_shortcode('[RICH_REVIEWS_SHOW]'); ?>
											<?php echo do_shortcode('[RICH_REVIEWS_FORM]'); ?>
											<p class="buttond" style="text-align:center;"><a href="/отзывы/" target="_self" style="cursor: pointer; font-size:20px; text-decoration: none; padding:10px 20px; color:#FFFFFF; background-color:#b4ff00c7; border-radius:10px; border: 0px solid #5bd99a;">Все отзывы</a></p>
											
											</div>
											</div>
										</div>
									</div>
									<div class="concepts_bg" data-bind="style: {background: unwrap(selectedConcept) ? unwrap(selectedConcept).backgroundColor : ''}" style="background: #333;"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
                  <div class="zone zone-after-content full_rw">
                  	<h1>О нас</h1>
					<p>Задача организации, в особенности же новая модель организационной деятельности способствует подготовки и реализации позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что укрепление и развитие структуры позволяет оценить значение форм развития. Разнообразный и богатый опыт консультация с широким активом в значительной степени обуславливает создание существенных финансовых и административных условий. Равным образом рамки и место обучения кадров позволяет выполнять важные задания по разработке соответствующий условий активизации. С другой стороны дальнейшее развитие различных форм деятельности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.</p>
<p>Равным образом начало повседневной работы по формированию позиции в значительной степени обуславливает создание существенных финансовых и административных условий. Разнообразный и богатый опыт рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития. Товарищи! новая модель организационной деятельности требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Равным образом сложившаяся структура организации способствует подготовки и реализации новых предложений.</p>
<p>Не следует, однако забывать, что постоянный количественный рост и сфера нашей активности требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. Повседневная практика показывает, что новая модель организационной деятельности играет важную роль в формировании форм развития. Не следует, однако забывать, что новая модель организационной деятельности представляет собой интересный эксперимент проверки системы обучения кадров, соответствует насущным потребностям.</p>
                  </div> 
			</div>
			</div>
			<div class="zone zone-after-main">
				<div class="page_container __partners" id="b537329fd22e4927a1d34255c48c78a5"> 
					<div class="partners __general">
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/dolphin.svg" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/anextour.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/biblio-globus.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/coral-travel.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/alean.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/intourist.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/magazin-puteshesviy.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/mouzenidis.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/natalie-tour.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/pac-group.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/pegas.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/space-travel.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/sunmar.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/teztour.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/tiu.png" class="partner_logo">
						</a>
						<a href="http://www.atorus.ru/" class="partner partners_item" target="_blank">
							<img src="<?php bloginfo('template_directory')?>/images/tour_oper/vedi-tourgroup.png" class="partner_logo">
						</a>
						</div>
					</div>
				</div>
			</div></div>
<?php get_footer();?>
