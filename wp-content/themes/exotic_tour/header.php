<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exotic_tour
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<div class="wrapper"></div>
<div class="pop__up">
<div class="new_form">
    <div class="popup_window__title"><a href="#" >Заказажите обратный звонок</a></div>
</div>
</div>
<head>
<script src="/callme/js/callme.min.js" charset="utf-8"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta content="Orchard" name="generator">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="telephone=no" http-equiv="format-detection">
<meta content="width=device-width" http-equiv="viewport">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/swiper.min.css">
<link href="<?php bloginfo('template_directory')?>/style.css" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>
<body class="page">
<div class="page_outer">
  <header class="header __main">
    <div class="page_wrapper">
      <div class="header_logo">
        <a href="/" class="logo">
          <img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="">
        </a>
      </div>
      <div class="header_content">
        <div class="header_top">
          <div class="zone zone-top">
            <div class="header_submenu">
			
            </div>
            <div class="header_phones">
              <div class="header_phone">
                <span class="header_phone-num __plus">+7 (915) 101 94 53</span>
              </div>
            </div>
			<div class="zakaz_zvonka">
			  <a onclick="return false;" rel="order_call_window" class="callme_viewform feedback-btn popup_button"><p class="buttond" style="text-align:center;cursor: pointer; font-size:17px; text-decoration: none; padding:5px 10px; color:#FFFFFF; background-color:#b4ff00c7; border-radius:10px; border: 0px solid #5bd99a;">Заказать звонок</p></a>
			</div>
            <div class="header_lang">
              <a href="vk.com/"><img src="<?php bloginfo('template_directory')?>/images/vk.ico" alt=""></a>
            </div>
          </div>                
		  </div>
          <div class="header_separator"></div>
          <div class="header_main">
            <div class="header_location">
              <div class="zone zone-current-departure-city">
                <div class="location">
                  <div class="location_dropdown">
                    <div class="dropdown-menu location-dropdown">
                      <div class="loading" data-bind="visible: loading" style="display: none;"></div>
                      <div class="dropdown-menu_arrow location-dropdown_arrow"></div>
                      <div class="location-dropdown_title">Город вылета</div>
                      <div class="location-dropdown_content">
                        <!--ko foreach: list--><!--/ko-->
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
			  </div>
              <div class="header_menu">
                <div class="zone zone-navigation">
                  <ul class="menu menu menu-main-menu">
                    <li data-bind="" class="menu_item">
                      <a href="" class="menu_link">Страны и отели</a>
                      <div class="menu_item-dropdown">
                        <div class="dropdown-menu countries-dropdown">
                          <div class="loading" data-bind="visible: loading" style="display: none;"></div>
                          <div class="dropdown-menu_arrow countries-dropdown_arrow"></div>
                          <!--ko foreach: list--><!--/ko-->
                        </div>
                      </div>
                    </li>
                    <li class="menu_item">
                    <a class="menu_link" href="/concepts/rekomenduemie-oteli">Концепции отдыха</a>
                    </li>
                    <li class="menu_item __dropdown" data-bind="dropdown:{}">
                      <a class="menu_link" href="">Информация</a>
                      <div class="menu_item-dropdown">
                        <div class="dropdown-menu info-dropdown __bordered">
                          <div class="dropdown-menu_arrow info-dropdown_arrow"></div>
                          <div class="info-dropdown_content">
                            <a class="info-dropdown_link" href="/kontaktnaya-informatsiya-dlya-agenstv-2">Туристическим агентствам</a>
                            <a class="info-dropdown_link" href="/hot-offers">Акции</a>
                            <a class="info-dropdown_link" href="/kontaktnaya-informatsiya-dlya-chastnih-lits">Частным лицам</a>
                            <a class="info-dropdown_link" href="/poleznaya-informatsiya">Полезная информация</a>
                            <a class="info-dropdown_link" href="">Вакансии</a>
                            <a class="info-dropdown_link" href="/poleznaya-informatsiya">Просмотр заявок для туристов</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
				  </div>                         
                </div>
              </div>
            </div>
          </div>
        </header>
