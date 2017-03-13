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

        <?php
        $attr = array (


            'display' => 'horizontal',
            'alignment' => 'center',
            'attr_id' => 'before_content_icons',
            'attr_class' => 'before_content_soc_icons',
            'selected_icons' => array ( '1', '2', '3', '4', '5', '6', '7', '8' )

        );
        if ( function_exists('cn_social_icon') ) echo cn_social_icon( $attr );
        ?>

      </div>
    </div><!-- /.index__social -->

      <?php if( have_rows('offers' ) ): ?>
        <div class="offers">
          <div class="row">
            <?php while ( have_rows('offers') ) : the_row(); ?>
                <div class="small-12 medium-6 columns" id="bx_3485106786_26081">
                  <div class="offers__item">
                    <a href="<?php the_sub_field('link'); ?>">
                      <div class="offers__inner">
                        <div class="offers__image" <?php $image = get_sub_field('image'); if( !empty($image) ): ?>style="background-image: url(
                                                    <?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                                                      );"<?php endif; ?>></div>
                        <div class="offers__desc">
                          <div class="offers__desc_inner">
                            <h6><?php the_sub_field('title'); ?></h6>
                            <h5><?php the_sub_field('slogan'); ?></h5>
                            <div class="offers__desc_links">
                              <span><?php the_sub_field('link_title'); ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>


            <?php  endwhile; ?>

          </div>
        </div>
      <?php endif; ?>



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
                                <div class="slide-background-image" style="
                                background-image: url(<?php the_post_thumbnail_url( array(400, 600) ); ?>);">
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
