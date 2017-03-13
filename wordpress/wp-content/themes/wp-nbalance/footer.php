
    </main>
    <div class="footer__fix"></div>
    <footer class="footer js-footer">
      <div class="footer__tools">


        <div class="site_center_wrapper">
          <ul class="footer__cols list">

            <?php if( have_rows('footer_icon_links', 20) ):
            $i = 0;?>
              <?php while ( have_rows('footer_icon_links', 20) ) : the_row();
              if ($i == 0) {
                $listClass = "i_footer_pin";
              }
              elseif ($i == 1) {
                $listClass = "i_footer_nb";
              }
              elseif ($i == 2) {
                $listClass = "i_footer_mynb";
              }
                ?>

                      <li class="footer__col list__item">
                        <a href="<?php the_sub_field('link'); ?>">
                          <span class="icon <?php echo $listClass; ?>"></span>
                          <span><?php the_sub_field('title'); ?></span>
                        </a>
                      </li>

              <?php $i++;
              endwhile; ?>
            <?php endif; ?>

            <li class="footer__col list__item">
              <a href="#" onclick="return false;" class="js-subs-trigger"><span class="icon i_footer_subs"></span><span>подписка</span></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer__subs js-subs" id="js-ow-subscribe-block" style="display: block; height: 305px;">
        <div class="footer__subs_inner js-ow-subscribe-success-hide js-subs-form-container">
          <div>
            <h4>ПОДПИСКА НА РАССЫЛКУ</h4>
            <p>Получите эксклюзивные предложения и сообщения от New Balance.</p>
            <div class="footer__subs_form js-subs-form">


<?php echo do_shortcode('[contact-form-7 id="13" title="Подписка"]'); ?>


            </div>
            <!--p><span>Подписавшись, я соглашаюсь с <a href="about/privacy-policy/">политикой конфиденциальности New Balance</a> и <a href="about/condition/">условиями</a>.</span>
            </p-->
            <a href="#" onclick="return false;" class="footer__subs_close js-subs-close"><span class="icon i_close-big"></span></a>
          </div>
        </div>

        <div class="footer__subs footer__subs--accept js-subs-accept" style="display: none;" id="js-ow-subscribe-success">
          <div class="footer__subs_inner">
            <div>
              <h4>СПАСИБО ЗА ПОДПИСКУ!</h4>
            </div>
            <a href="#" onclick="return false;" class="footer__subs_close js-subs-close"><span class="icon i_close-big"></span></a>
          </div>
        </div>

      </div>


      <div class="footer__menu js-footer-menu">
        <div class="site_center_wrapper">
          <ul class="footer__cols list">
            <?php if ( is_active_sidebar('footer_widgetarea') ) : ?>
              <?php dynamic_sidebar( 'footer_widgetarea' ); ?>
            <?php endif; ?>

          </ul>
        </div>
      </div>
      <div class="footer__country">
        <a href="#">
          <span class="icon flag-rus"></span>
          <span>Сменить страну</span>
          <span class="nbfont nb-s-1"></span>
        </a>
      </div>
      <div class="footer__copy">
        <div class="site_center_wrapper">
          <p>&copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?>.
          </p>
        </div>
      </div>
    </footer>

    </div>
  </div>
  <?php wp_footer(); ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

$(".menu-mobile__inner li.menu-item").addClass("list__item");
$(".footer_widget li.menu-item").addClass("list__item");
$(".footer_widget ul.menu").addClass("list js-footer-menu-list");

  $("#main-slider").owlCarousel({
    items: 1,
    margin: 0,
    dots: true,
    nav: false,

  });


  $("#product-slider").owlCarousel({
    items: 1,
    margin: 0,
    dots: true,
    nav: true,
    navText: '',
    center: true,
  });


  $("#news-owl-carousel").owlCarousel({
    items: 5,
    margin: 0,
    dots: false,
    nav: true,
    navText: '',
        responsiveClass:true,
    responsive:{
        0:{
            items:1,

        },
        600:{
            items:3,

        },
        1000:{
            items:5,

        }
    }
  });

});
  </script>


<!--   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper.jquery.min.js"></script> -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
<!--   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/chosen.jquery.min.js"></script> -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.site_scripts.js"></script>
<!--   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.min.js"></script> -->
<!--   <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> -->


</body>

</html>

