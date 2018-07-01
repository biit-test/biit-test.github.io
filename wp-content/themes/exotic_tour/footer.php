<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exotic_tour
 */

?>
                <div class="zone zone-footer">
                  <footer class="footer" id="footerContainer">
                    <div class="page_wrapper">
                      <div class="page_wrapper">
             
						  <div class="footer_copyright">
                            <div class="footer_copyright-main">© 2017 - 2018 Exotictour24.ru</div>
                            <div class="footer_copyright-additional">Копирование и публичное воспроизведение материалов и оформления сайта допускается только с письменного разрешения. Все права защищены.</div>
							<div class="" style="width: 30%;float: left;margin-top: -35px;"><script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
							<!-- VK Widget -->
							<div id="vk_groups"></div>
							<script type="text/javascript">
							VK.Widgets.Group("vk_groups", {mode: 3, color3: '8BC34A'}, 158376682);
							</script></div>
						  </div>
                            <div class="footer__register">
                              <?php
                              global $user_ID, $user_identity;

                              get_currentuserinfo();

                              if (!$user_ID):

                               ?>

                               <form name="loginform" id="autoriz" action="<?php echo get_settings('siteurl'); ?>/wp-login.php" method="post">

                                 <div class="left">

                                   <input type="text" name="log" placeholder="Логин" value="" id="login" />

                                 </div> <div>

                                   <input type="password" name="pwd" placeholder="Пароль" value="" id="password" />

                                 </div> <div>

                                   <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />

                                   <a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=lostpassword">Забыли пароль?</a>

                                   <a class="footer_rigister--btn" href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register">/ Регистрация</a> 

                                 </div> 
                                   <input type="submit" name="submit" value="Войти" id="enter" /><br/>
                               </form> 

                               <?php else: ?>

                                 <h4 class="smile" style="color: #333">Добро пожаловать, <?php echo $user_identity; ?>.</h4>

                               <?php endif; ?> 

                               <?php if (current_user_can('level_10')){ ?>

                               <div class="left" style="float: left;">

                                 <a href="<?php bloginfo('url'); ?>/wp-admin/">Администрирование</a>

                               </div>

                               <div class="right" style="text-align:right">

                                 <?php wp_loginout(); ?>

                               </div> <?php } ?>
                            </div>
                          <div class="zone zone-socials">
                            <div class="footer_socials">
                            </div></div></div>
                          </div>
                        </footer>
                      </div>
                      <style>
                      .menu{
                        font-size: 16px;
                      }
                    </style>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/swiper.min.js"></script>
  <script>
    var cover = document.getElementsByClassName("pop__up");
    document.getElementById("add__rews").onclick = function(){
        cover[0].style.display = "block";
        document.getElementsByClassName("rr_review_form")[0].style.display = "block";
    }
    cover[0].onclick = function(){
      this.style.display = "none";
      document.getElementsByClassName("rr_review_form")[0].style.display = "none";
    }
  </script>
  <script>
    var swiper = new Swiper('.swiper-container', {
	  spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
 </div> 
<div class="confidetial">
<a href="/пользовательское-соглашение/" target="_blank">пользовательское соглашение</a>
<a href="/политика-конфиденциальности/" target="_blank">политика конфиденциальности</a>
<a href="/юридическая-информация/" target="_blank">юридическая информация</a>
<?php wp_footer(); ?>
</body>
</html>
