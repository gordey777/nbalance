
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
              <form novalidate="novalidate">
                <input type="hidden" name="sessid" id="sessid" value="7985288abca30b8f60efa5e206308e55">
                <div class="form__row js-field-block">
                  <input type="email" name="ow_subscribe_email" id="js-ow-subscribe-email" placeholder="Электронный адрес" required="" data-msg-required="Введите адрес" data-msg-email="Введите корректный адрес" aria-required="true">
                  <div class="error js-field-error js-ow-subscribe-error" id="js-ow-subscribe-error">
                  </div>
                </div>
                <!--div class="form__row">
                        <input type="checkbox" id="js-subscribe_oferta" checked>
                            <label for="js-subscribe_oferta" name="subscribe_oferta" class="footer_oferta">я согласен с условиями <a href="support/dogovor-oferty/" target="_blank">публичной оферты</a>.</label>
                    </div-->
                <div class="form__row js-field-block">
                  <input class="checkinput termsNconditions" checked="" data-rule-required="1" data-msg-required="Необходимо прочесть и согласиться с условиями" type="checkbox" name="dwfrm_oferta_policyaccept" id="dwfrm_oferta_policyaccept" value="true" maxlength="2147483647" aria-required="true">
                  <label for="dwfrm_oferta_policyaccept" class="footer_oferta">я согласен с условиями <a href="#" target="_blank">публичной оферты</a>.</label>
                  <div class="error js-field-error" style="margin-top: 12px;">
                  </div>
                </div>
                <div class="form__row">
                  <button type="submit" id="js-ow-subscribe-submit" class="btn btn_st-1"><span>Подписка</span></button>
                </div>
              </form>
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


  $("#news-owl-carousel").owlCarousel({
    items: 3,
    margin: 0,
    dots: false,
    nav: true,
    navText: '',
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

