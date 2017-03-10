<?php  /* Template Name: Home page */ get_header(); ?>
      <div class="index">


        <?php if( have_rows('main_slider' ) ): ?>

          <div id="main-slider" class="owl-carousel">

            <?php while ( have_rows('main_slider') ) : the_row(); ?>
              <div class="item">
               <a href="<?php the_sub_field('link'); ?>">
                <?php $image = get_sub_field('image');
                if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                </a>
              </div>
            <?php  endwhile; ?>
          </div><!-- .main-slider -->

        <?php endif; ?>


        <div class="index__social">
          <div class="social">
            <div>
              <span class="social__label">Поделиться</span>
            </div>
            <div>
              <div class="social-likes social-likes_visible" data-counters="no">
                <div class="social-likes__widget social-likes__widget_facebook" title="Поделиться ссылкой на Фейсбуке"><span class="social-likes__button social-likes__button_facebook"><span class="social-likes__icon social-likes__icon_facebook"></span></span>
                </div>
                <div class="social-likes__widget social-likes__widget_twitter" title="Поделиться ссылкой в Твиттере"><span class="social-likes__button social-likes__button_twitter"><span class="social-likes__icon social-likes__icon_twitter"></span></span>
                </div>
                <div class="social-likes__widget social-likes__widget_mailru" title="Поделиться ссылкой в Моём мире"><span class="social-likes__button social-likes__button_mailru"><span class="social-likes__icon social-likes__icon_mailru"></span></span>
                </div>
                <div class="social-likes__widget social-likes__widget_vkontakte" title="Поделиться ссылкой во Вконтакте"><span class="social-likes__button social-likes__button_vkontakte"><span class="social-likes__icon social-likes__icon_vkontakte"></span></span>
                </div>
                <div class="social-likes__widget social-likes__widget_odnoklassniki" title="Поделиться ссылкой в Одноклассниках"><span class="social-likes__button social-likes__button_odnoklassniki"><span class="social-likes__icon social-likes__icon_odnoklassniki"></span></span>
                </div>
                <div class="social-likes__widget social-likes__widget_plusone" title="Поделиться ссылкой в Гугл-плюсе"><span class="social-likes__button social-likes__button_plusone"><span class="social-likes__icon social-likes__icon_plusone"></span></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="offers">
          <div class="row collapse full-width">
            <div class="small-12 medium-6 columns" id="bx_3485106786_26081">
              <div class="offers__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_991_5_miuk_yard_pack/?color_ref=lNuBJDuQ">
                  <div class="offers__inner">
                    <div class="offers__image" style="background-image: url(/<?php echo get_template_directory_uri(); ?>/img/NB_web_9915_594x339.jpg);"></div>
                    <div class="offers__desc">
                      <div class="offers__desc_inner">
                        <h6>New Balance 991.5 MiUK Yard Pack</h6>
                        <h5>Яркие и премиальные</h5>
                        <div class="offers__desc_links">
                          <span>Для него</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="small-12 medium-6 columns" id="bx_3485106786_26082">
              <div class="offers__item">
                <a href="#catalog/women/women_shoes/women_lifestyle/new_balance_300_nb_grey/?color_ref=grey">
                  <div class="offers__inner">
                    <div class="offers__image" style="background-image: url(/<?php echo get_template_directory_uri(); ?>/img/NB_web_300_594x339.jpg);"></div>
                    <div class="offers__desc">
                      <div class="offers__desc_inner">
                        <h6>New Balance 300 NB Grey</h6>
                        <h5>Ретро-стиль и новейшие технологии</h5>
                        <div class="offers__desc_links">
                          <span>Для нее</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row collapse full-width">
            <div class="small-12 medium-6 columns" id="bx_3485106786_26543">
              <div class="offers__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/?color_ref=Haki">
                  <div class="offers__inner">
                    <div class="offers__image" style="background-image: url(/<?php echo get_template_directory_uri(); ?>/img/NB_web_247_sport_594x339.jpg);"></div>
                    <div class="offers__desc">
                      <div class="offers__desc_inner">
                        <h6>New Balance 247 Sport</h6>
                        <h5>Комфорт в любых приключениях</h5>
                        <div class="offers__desc_links">
                          <span>Для него</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="small-12 medium-6 columns" id="bx_3485106786_26084">
              <div class="offers__item">
                <a href="#catalog/women/women_shoes/women_running/new_balance_vazee_prism_v2/?color_ref=BlackAndWhite">
                  <div class="offers__inner">
                    <div class="offers__image" style="background-image: url(/<?php echo get_template_directory_uri(); ?>/img/NB_web_Vazeev2_594x339.jpg);"></div>
                    <div class="offers__desc">
                      <div class="offers__desc_inner">
                        <h6>New Balance Vazee Prism v2</h6>
                        <h5>Максимальная скорость и устойчивость</h5>
                        <div class="offers__desc_links">
                          <span>Для нее</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div data-retailrocket-markup-block="5819ef1c65bf196ac8bb2ecb" initialized="true">

          <div class="rr-widget home" data-algorithm-type="visitor-category-interest" data-algorithm="popular" data-template-param-header-text="Хиты продаж" data-template-param-number-of-items="5" data-template-param-item-image-width="320" data-template-param-item-image-height="320" data-template-container-id="widget-template" data-textoverflowhidden="true" data-retailrocket-morebutton="true" data-retailrocket-buybutton="true" data-widget-applied="true" data-number-of-rendered-items="5" data-rendered-items-ids="26264,25965,25608,3348,26169">
            <header class="widgettitle"> Хиты продаж </header>
            <ul class="items">
              <li class="item">
                <div class="block">
                  <a class="item-info" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/" onmousedown="rrApi.recomMouseDown(26264, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });">
                    <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/w1.jpeg"> </div>
                    <div class="item-title"> New Balance 247 Sport </div>
                  </a>
                  <div class="item-block-price">
                    <div class="item-price"> <span class="item-price-value">9 990</span> <span class="item-price-currency">q</span> </div>
                  </div>
                  <nav class="item-actions">
                    <a class="item-actions-more" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/" onmousedown="rrApi.recomMouseDown(26264, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });"></a>
                    <a class="item-actions-buy" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/" onclick="rrApi.recomAddToCart(26264, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });return retailrocket._widgetAddToBasket(&quot;26264&quot;, &quot;&quot;)"></a>
                  </nav>
                  <div class="item-label"> Новинка </div>
                </div>
              </li>
              <li class="item">
                <div class="block">
                  <a class="item-info" href="http://newbalance.ru/catalog/women/women_shoes/women_lifestyle/new_balance_300_nb_grey/" onmousedown="rrApi.recomMouseDown(25965, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });">
                    <div class="item-image"><img src="<?php echo get_template_directory_uri(); ?>/img/w2.jpeg"> </div>
                    <div class="item-title"> New Balance 300 NB Grey </div>
                  </a>
                  <div class="item-block-price">
                    <div class="item-price"> <span class="item-price-value">13 990</span> <span class="item-price-currency">q</span> </div>
                  </div>
                  <nav class="item-actions">
                    <a class="item-actions-more" href="http://newbalance.ru/catalog/women/women_shoes/women_lifestyle/new_balance_300_nb_grey/" onmousedown="rrApi.recomMouseDown(25965, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });"></a>
                    <a class="item-actions-buy" href="http://newbalance.ru/catalog/women/women_shoes/women_lifestyle/new_balance_300_nb_grey/" onclick="rrApi.recomAddToCart(25965, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });return retailrocket._widgetAddToBasket(&quot;25965&quot;, &quot;&quot;)"></a>
                  </nav>
                  <div class="item-label"> Новинка </div>
                </div>
              </li>
              <li class="item">
                <div class="block">
                  <a class="item-info" href="http://newbalance.ru/catalog/women/women_shoes/women_running/new_balance_vazee_prism_v2/" onmousedown="rrApi.recomMouseDown(25608, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });">
                    <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/w3.jpeg"> </div>
                    <div class="item-title"> New Balance Vazee Prism v2 </div>
                  </a>
                  <div class="item-block-price">
                    <div class="item-price"> <span class="item-price-value">11 290</span> <span class="item-price-currency">q</span> </div>
                  </div>
                  <nav class="item-actions">
                    <a class="item-actions-more" href="http://newbalance.ru/catalog/women/women_shoes/women_running/new_balance_vazee_prism_v2/" onmousedown="rrApi.recomMouseDown(25608, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });"></a>
                    <a class="item-actions-buy" href="http://newbalance.ru/catalog/women/women_shoes/women_running/new_balance_vazee_prism_v2/" onclick="rrApi.recomAddToCart(25608, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });return retailrocket._widgetAddToBasket(&quot;25608&quot;, &quot;&quot;)"></a>
                  </nav>
                </div>
              </li>
              <li class="item">
                <div class="block">
                  <a class="item-info" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_576_M576BRM/" onmousedown="rrApi.recomMouseDown(3348, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });">
                    <div class="item-image"><img src="<?php echo get_template_directory_uri(); ?>/img/w4.jpeg"> </div>
                    <div class="item-title"> New Balance 576 Made in UK </div>
                  </a>
                  <div class="item-block-price">
                    <div class="item-price"> <span class="item-price-value">21 890</span> <span class="item-price-currency">q</span> </div>
                  </div>
                  <nav class="item-actions">
                    <a class="item-actions-more" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_576_M576BRM/" onmousedown="rrApi.recomMouseDown(3348, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });"></a>
                    <a class="item-actions-buy" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_576_M576BRM/" onclick="rrApi.recomAddToCart(3348, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });return retailrocket._widgetAddToBasket(&quot;3348&quot;, &quot;&quot;)"></a>
                  </nav>
                  <div class="item-label"> Made in UK </div>
                </div>
              </li>
              <li class="item">
                <div class="block">
                  <a class="item-info" href="http://newbalance.ru/catalog/kids/boys_shoes/574_high_visibility_KL574CXP/" onmousedown="rrApi.recomMouseDown(26169, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });">
                    <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/w5.jpeg"> </div>
                    <div class="item-title"> New Balance 574 High Visibility </div>
                  </a>
                  <div class="item-block-price">
                    <div class="item-price"> <span class="item-price-value">6 190</span> <span class="item-price-currency">q</span> </div>
                  </div>
                  <nav class="item-actions">
                    <a class="item-actions-more" href="http://newbalance.ru/catalog/kids/boys_shoes/574_high_visibility_KL574CXP/" onmousedown="rrApi.recomMouseDown(26169, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });"></a>
                    <a class="item-actions-buy" href="http://newbalance.ru/catalog/kids/boys_shoes/574_high_visibility_KL574CXP/" onclick="rrApi.recomAddToCart(26169, { suggester: &quot;widget&quot;, methodName: &quot;popular&quot; });return retailrocket._widgetAddToBasket(&quot;26169&quot;, &quot;&quot;)"></a>
                  </nav>
                </div>
              </li>
            </ul>
          </div>
        </div>


        <div class="index__news">
          <h5>Новости</h5>

          <div id="news-owl-carousel" class="swiper-container slider--fw swiper-container-horizontal owl-carousel" style="cursor: -webkit-grab;">
              <?php $args = array(
                'numberposts' => -1,
                'category'    => 3, //ID Категории НОВОСТИ
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true,
              );

              $posts = get_posts( $args );

              foreach($posts as $post){
                            setup_postdata($post); ?>
                              <div class="slide-content-wrapper">
                                <div class="slide-background-image">
                                  <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php if ( has_post_thumbnail()) :
                                      the_post_thumbnail('medium');
                                    else: ?>
                                      <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                                    <?php endif; ?>
                                  </a><!-- /post thumbnail -->
                                </div>
                                <div class="slide-content">
                                  <h5><?php the_title(); ?></h5>
                                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span>УЗНАТЬ БОЛЬШЕ</span></a>
                                </div>
                                <div class="slide-date"><?php the_time('j F, Y'); ?></div>
                              </div>
              <?php }

              wp_reset_postdata();  ?>

          </div>

        </div><!-- /.index__news -->
      </div>

<?php get_footer(); ?>
