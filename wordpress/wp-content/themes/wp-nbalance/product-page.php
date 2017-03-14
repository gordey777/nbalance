<?php /* Template Name: Product Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php edit_post_link(); ?>

    <?php the_content(); ?>


    <div class="<?php post_class(); ?>">
      <div id="js-product-block">

        <div id="product-slider" class="owl-carousel">
              <div class="item row">
                <img id="35267" src="<?php echo get_template_directory_uri(); ?>/img/m1080sb6_nb_14_i.jpg" alt="">
              </div>
              <div class="item row">
                <img id="35268" src="<?php echo get_template_directory_uri(); ?>/img/m1080sb6_nb_15_i.jpg" alt="">
              </div>
              <div class="item row">
                <img id="35269" src="<?php echo get_template_directory_uri(); ?>/img/m1080sb6_nb_16_i.jpg" alt="">
              </div>
        </div>


        <div class="item__info">
          <div class="row">
            <div class="small-12 columns">
              <div class="row">
                <div class="medium-2 columns item__info_img js-display-prop-PREVIEW_PICTURE"><img src="<?php echo get_template_directory_uri(); ?>/img/m1080sb6_nb_14_i.jpg" alt="")"></div>
                <div class="small-12 columns end medium-10" id="bx_1060765314_21746_skudiv">
                  <div class="row">
                    <div class="small-12 medium-6 columns">
                      <div class="row">
                        <div class="small-12 columns">
                          <h1><?php the_title(); ?></h1>
                          <meta itemprop="name" content="New Balance 1080 Fresh Foam">
                          <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <div class="item__info_price js-product-price-block">
                              <span class="price js-display-prop-PRICE" itemprop="price" content="12990">12 990 <span class="cur">q</span></span>
                            </div>
                            <div class="item__info_price price js-product-discount-block" style="display:none">
                              <span class="price__new js-display-prop-PRICE">12 990 <span class="cur">q</span></span>
                              <span class="price__old  js-display-prop-OLD_PRICE">12 990 <span class="cur">q</span></span>
                            </div>
                            <link itemprop="availability" href="http://schema.org/InStock">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="small-12 medium-6 columns">
                      <div class="item__info_color">
                        <ul class="list inline js-product-offer-prop" data-id="115">
                          <li title="Серый" data-id="15" class="list__item js-product-offer-prop-item black active">
                            <a style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/grey.jpg)"></a>
                          </li>
                        </ul>
                        <p><b>Цвет:</b> <span class="js-display-prop-COLOR_REF">Серый</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 medium-6 medium-push-6 columns">
                      <div class="item__selectors">
                        <div class="selectors js-selectors">
                          <ul class="list line">
                            <li class="list__item js-selectors-item">
                              <a>
                                <span class="selectors__title">размер</span>
                                <span class="selectors__val js-selectors-val js-display-prop-SIZES_SHOES">40.5</span>
                              </a>
                              <div class="selectors__popup line js-selectors-popup">
                                <div class="selectors__popup_list js-selectors-list">
                                  <ul class="list js-product-offer-prop" data-id="113">
                                    <li data-id="31" class="list__item js-product-offer-prop-item active" data-size-eu="41.5" data-size-us="8" data-size-cm="26" title="40.5"><a><span>40.5</span></a></li>
                                    <li data-id="32" class="list__item js-product-offer-prop-item" data-size-eu="42" data-size-us="8.5" data-size-cm="26,5" title="41"><a><span>41</span></a></li>
                                    <li data-id="33" class="list__item js-product-offer-prop-item" data-size-eu="42.5" data-size-us="9" data-size-cm="27" title="42"><a><span>42</span></a></li>
                                    <li data-id="34" class="list__item js-product-offer-prop-item" data-size-eu="43" data-size-us="9.5" data-size-cm="27,5" title="42.5"><a><span>42.5</span></a></li>
                                    <li data-id="35" class="list__item js-product-offer-prop-item" data-size-eu="44" data-size-us="10" data-size-cm="28" title="43"><a><span>43</span></a></li>
                                    <li data-id="36" class="list__item js-product-offer-prop-item" data-size-eu="44.5" data-size-us="10.5" data-size-cm="28,5" title="43.5"><a><span>43.5</span></a></li>
                                    <li data-id="37" class="list__item js-product-offer-prop-item disabled" data-size-eu="45" data-size-us="11" data-size-cm="29" title="44"><a><span>44</span></a></li>
                                    <li data-id="38" class="list__item js-product-offer-prop-item" data-size-eu="45.5" data-size-us="11.5" data-size-cm="29.5" title="44.5"><a><span>44.5</span></a></li>
                                    <li data-id="39" class="list__item js-product-offer-prop-item" data-size-eu="46.5" data-size-us="12" data-size-cm="30" title="45"><a><span>45</span></a></li>
                                  </ul>
                                </div>
                                <div class="selectors__popup_footer js-selectors-total">
                                  <ul class="list">
                                    <li class="list__item">
                                      <p>EU: <span class="js-product-size-eu">41.5</span></p>
                                    </li>
                                    <li class="list__item">
                                      <p>US: <span class="js-product-size-usa">8</span></p>
                                    </li>
                                    <li class="list__item">
                                      <p><span class="js-product-size-foot">26</span></p>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <!-- Кол-во элементов -->
                            <li class="list__item js-selectors-item">
                              <a>
                                <span class="selectors__title">кол-во</span>
                                <input id="js-product-quantity" type="hidden" value="1" data-check="0" data-max="11">
                                <span class="selectors__val js-selectors-val js-quantity-display-value">1</span>
                              </a>
                              <div class="selectors__popup js-selectors-popup">
                                <div class="selectors__popup_list js-selectors-list">
                                  <ul class="list js-quantity-selector">
                                    <li class="list__item js-quantity-selector-item" data-value="2"><a>2</a></li>
                                    <li class="list__item js-quantity-selector-item active" data-value="1"><a>1</a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <!-- END: quanity -->
                          </ul>
                        </div>
                        <div class="btn__wrap" id="js-product-button-block" style="display: inline-block;">
                          <a href="https://newbalance.ru/personal/cart/" id="js-product-basket-button" class="btn btn_st-1 btn--big btn--incart" onclick="addToBasketJs()"><span class="btn__val"><span class="js-product-basket-title">В корзину</span><i class="nb-i_header_cart"></i></span></a>
                          <a href="javascript:void(0)" class="btn btn_st-3 btn--big js-popup-open" id="js-product-quick-order" data-block="js-quick-order-block"><span>Быстрый заказ</span></a>
                        </div>

                        <div class="btn__wrap" id="js-product-button-block_inshop">
                          <a href="javascript:void(0)" class="btn btn_st-3 btn--big js-popup-open quick-reserve js-quick-reserve" id="js-quick-reserve" data-block="js-order-reserved">
                            <span class="btn__val"><span class="js-product-basket-title">Забронировать в магазине</span>
                            <i class="nb-i_header_cart"></i>
                            </span>
                          </a>
                        </div>
                        <div id="js-product-not-available" class="item__not-available" style="display:none"></div>
                      </div>
                      <div class="item__info_link hide-on-desktop"><a href="https://newbalance.ru/catalog/men/man_shoes/man_running/new_balance_1080_fresh_foam/?color_ref=grey#tablesize" class="js-scroll" data-id="js-sizetable-dest"><span class="nb-i_item_tablesize"></span>Таблица размеров</a></div>
                    </div>
                    <div class="small-12 medium-6 medium-pull-6 columns">
                      <div class="item__info_metadata bl_table">
                        <div>
                          <p>Артикул: <span class="js-display-prop-ARTNUMBER item__info_metadata--black">M1080SB6/D</span></p>
                        </div>
                        <div>
                          <a href="https://newbalance.ru/catalog/men/man_shoes/man_running/new_balance_1080_fresh_foam/?color_ref=grey#reviews" class="js-scroll" data-id="js-product-reviews-block">Написать отзыв</a>
                        </div>
                      </div>
                      <div class="item__info_descr">
                        <span itemprop="description">
              Модель помогает извлечь максимальную пользу из Вашего пробега. Больше амортизации, больше поддержки! Больше комфорта, чтобы бежать километр за километром без остановки. Совершенно новые Fresh Foam 1080v6 - это удобные кроссовки для женщин, которые дают больше, чем нужно Вашей пробежки. Промежуточная подошва Fresh Foam обеспечивает амортизацию совершенно иного уровня.               </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="site__pag">
          <div class="row">
            <div class="small-12 column">
              <div class="site__pag_inner">

                <div class="">

                  <div class="breadcrumbs">
                    <ul class="list line">
                      <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="list__item"><a itemprop="url" href="https://newbalance.ru/catalog/men/"><span itemprop="title">Мужчины</span></a></li>
                      <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="list__item"><a itemprop="url" href="https://newbalance.ru/catalog/men/man_shoes/"><span itemprop="title">Обувь</span></a></li>
                      <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="list__item"><a itemprop="url" href="https://newbalance.ru/catalog/men/man_shoes/man_running/"><span itemprop="title">Бег</span></a></li>
                    </ul>
                  </div>

                </div>

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
              </div>
            </div>
          </div>
        </div>
        <div class="item__detail">
          <div class="row  item__detail_title js-accordeon">
            <div class="small-12 columns">
              <span>описание</span>
              <span class="nb-i_accordeon-close"></span>
              <span class="nb-i_accordeon-open" style="display: none;"></span>
            </div>
          </div>
          <div class="row item__detail_content">
            <div class="small-12 columns">
              Вес: 293.4 г
              <br> Тип бега: восстановительный
              <br> Пронация: нейтральная
              <br> Перепад высоты подошвы 8 мм
              <br> Подметка из "дутой" резины
              <br> "Дышащая" сетка в верхней части кроссовка
              <br> Антибактериальные стельки Ortholite®
              <br>
              <br> </div>
          </div>
        </div>
        <div id="js-sizetable-source" style="display:none">
        </div>

      </div>

      <a name="shops"></a>
      <div class="item__detail" id="js-product-shops-block">
        <div class="row  item__detail_title js-accordeon js-closed">
          <div class="small-12 columns">
            <span>НАЛИЧИЕ В МАГАЗИНАХ</span>
            <span class="nb-i_accordeon-close"></span>
            <span class="nb-i_accordeon-open"></span>
          </div>
        </div>
        <div class="row item__detail_content" style="display: none;">
          <div class="small-12 columns">
            <div class="shops-list" id="js-shops-container">
              Информация загружается
            </div>
          </div>
        </div>
      </div>
      <a name="tablesize"></a>
      <div class="item__detail" id="js-sizetable-dest">
        <div class="row  item__detail_title js-accordeon js-closed">
          <div class="small-12 columns">
            <span>ТАБЛИЦА РАЗМЕРОВ</span>
            <span class="nb-i_accordeon-open"></span>
            <span class="nb-i_accordeon-close"></span>
          </div>
        </div>
        <div class="row item__detail_content" style="display: none;">
          <div class="small-12 columns">
            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="size-info">
              <tbody>
                <tr>
                  <td align="center" width="25%" valign="middle"><b>RUS</b></td>
                  <td align="center" width="25%" valign="middle"><b>USA</b></td>
                  <td align="center" width="25%" valign="middle"><b>EU</b></td>
                  <td align="center" width="25%" valign="middle"><b>см</b></td>
                </tr>
                <tr>
                  <td align="center" valign="middle">34</td>
                  <td align="center" valign="middle">3</td>
                  <td align="center" valign="middle">35</td>
                  <td align="center" valign="middle">22</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">34.5</td>
                  <td align="center" valign="middle">3.5</td>
                  <td align="center" valign="middle">35.5</td>
                  <td align="center" valign="middle">22.5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">35</td>
                  <td align="center" valign="middle">4</td>
                  <td align="center" valign="middle">36</td>
                  <td align="center" valign="middle">22</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">36</td>
                  <td align="center" valign="middle">4.5</td>
                  <td align="center" valign="middle">37</td>
                  <td align="center" valign="middle">22.5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">36.5</td>
                  <td align="center" valign="middle">5</td>
                  <td align="center" valign="middle">37.5</td>
                  <td align="center" valign="middle">23</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">37</td>
                  <td align="center" valign="middle">5.5</td>
                  <td align="center" valign="middle">38</td>
                  <td align="center" valign="middle">23.5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">37.5</td>
                  <td align="center" valign="middle">6</td>
                  <td align="center" valign="middle">38.5</td>
                  <td align="center" valign="middle">24</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">38.5</td>
                  <td align="center" valign="middle">6.5</td>
                  <td align="center" valign="middle">39.5</td>
                  <td align="center" valign="middle">24.5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">39</td>
                  <td align="center" valign="middle">7</td>
                  <td align="center" valign="middle">40</td>
                  <td align="center" valign="middle">25</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">40</td>
                  <td align="center" valign="middle">7.5</td>
                  <td align="center" valign="middle">40.5</td>
                  <td align="center" valign="middle">25,5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">40.5</td>
                  <td align="center" valign="middle">8</td>
                  <td align="center" valign="middle">41.5</td>
                  <td align="center" valign="middle">26</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">41</td>
                  <td align="center" valign="middle">8.5</td>
                  <td align="center" valign="middle">42</td>
                  <td align="center" valign="middle">26,5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">42</td>
                  <td align="center" valign="middle">9</td>
                  <td align="center" valign="middle">42.5</td>
                  <td align="center" valign="middle">27</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">42.5</td>
                  <td align="center" valign="middle">9.5</td>
                  <td align="center" valign="middle">43</td>
                  <td align="center" valign="middle">27,5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">43</td>
                  <td align="center" valign="middle">10</td>
                  <td align="center" valign="middle">44</td>
                  <td align="center" valign="middle">28</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">43.5</td>
                  <td align="center" valign="middle">10.5</td>
                  <td align="center" valign="middle">44.5</td>
                  <td align="center" valign="middle">28,5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">44</td>
                  <td align="center" valign="middle">11</td>
                  <td align="center" valign="middle">45</td>
                  <td align="center" valign="middle">29</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">44.5</td>
                  <td align="center" valign="middle">11.5</td>
                  <td align="center" valign="middle">45.5</td>
                  <td align="center" valign="middle">29.5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">45</td>
                  <td align="center" valign="middle">12</td>
                  <td align="center" valign="middle">46.5</td>
                  <td align="center" valign="middle">30</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">46</td>
                  <td align="center" valign="middle">12.5</td>
                  <td align="center" valign="middle">47</td>
                  <td align="center" valign="middle">30.5</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">46.5</td>
                  <td align="center" valign="middle">13</td>
                  <td align="center" valign="middle">47.5</td>
                  <td align="center" valign="middle">31</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">48</td>
                  <td align="center" valign="middle">14</td>
                  <td align="center" valign="middle">49</td>
                  <td align="center" valign="middle">32</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">49</td>
                  <td align="center" valign="middle">15</td>
                  <td align="center" valign="middle">50</td>
                  <td align="center" valign="middle">33</td>
                </tr>
                <tr>
                  <td align="center" valign="middle">50</td>
                  <td align="center" valign="middle">16</td>
                  <td align="center" valign="middle">51</td>
                  <td align="center" valign="middle">34</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <a name="reviews" id="js-product-reviews-block"></a>
      <div class="item__detail" id="js-reviews-list">
        <div class="row  item__detail_title js-accordeon">
          <div class="small-12 columns">
            <span>отзывы</span>
            <span class="nb-i_accordeon-open" style="display: none;"></span>
            <span class="nb-i_accordeon-close"></span>
          </div>
        </div>
        <div class="item__detail_content">
          <div class="row review-summary">
            <div class="small-12 medium-6 large-7 columns">
              <p>Общий рейтинг продукта</p>
              <div class="rating__box">
                <div class="rating static">
                  <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span> </div>
                <div class="rating__total"></div>
              </div>
            </div>
            <div class="small-12 medium-5 medium-offset-1 large-4 large-offset-1 columns text-right">
              <b>0 отзывов</b>
              <div class="btn__wrap">
                <a href="https://newbalance.ru/catalog/men/man_shoes/man_running/new_balance_1080_fresh_foam/?add_review=Y&amp;color_ref=grey" class="btn btn_st-1 btn--mid"><span>Написать отзыв</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="js-quick-order-container">
      <div class="js-popup popup oneclick" id="js-quick-order-block">
      </div>
      <div class="popup confirm js-popup js-ow-form-wrapper" id="js-quick-order-result" data-class="slide">
      </div>
      <div id="js-quick-order-result-opener" data-block="js-quick-order-result"></div>
    </div>
    <div id="js-order-reserved-container">
      <div class="js-popup popup oneclick" id="js-order-reserved">
      </div>
      <div class="popup confirm js-popup js-ow-form-wrapper" id="js-quick-order-result_new" data-class="slide">
      </div>
      <div id="js-quick-order-result-opener" data-block="js-quick-order-result_new"></div>
    </div>
    <div class="row">
      <div data-retailrocket-markup-block="5819ef5b65bf196ac8bb2ed3" data-product-id="21747, 21748, 21749, 21750, 21751, 21752, 21753, 21754, 21755" initialized="true">

        <div class="rr-widget home" data-algorithm="alternative" data-algorithm-argument="21747, 21748, 21749, 21750, 21751, 21752, 21753, 21754, 21755" data-template-param-header-text="Вас также может заинтересовать" data-template-param-number-of-items="5" data-template-param-item-image-width="320" data-template-param-item-image-height="320" data-template-container-id="widget-template" data-textoverflowhidden="true" data-retailrocket-morebutton="true" data-retailrocket-buybutton="true" data-widget-applied="true" data-number-of-rendered-items="5" data-rendered-items-ids="8153,19520,19901,19856,24976">
          <header class="widgettitle"> Вас также может заинтересовать </header>
          <ul class="items">
            <li class="item">
              <div class="block">
                <a class="item-info" href="http://newbalance.ru/catalog/men/man_shoes/new_balance_vazee_prism_/" onmousedown="rrApi.recomMouseDown(8153, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });">
                  <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/nbimg.jpeg" onerror="retailrocket.widget.hideProduct(this)"> </div>
                  <div class="item-title"> New Balance Vazee Prism </div>
                </a>
                <div class="item-block-price">
                  <div class="item-new-price"> <span class="item-price-value">6 490</span> <span class="item-price-currency">q</span> </div>
                  <div class="item-old-price"> <span class="item-old-price-value">12 990</span> <span class="item-price-currency">q</span> </div>
                </div>
                <nav class="item-actions">
                  <a class="item-actions-more" href="http://newbalance.ru/catalog/men/man_shoes/new_balance_vazee_prism_/" onmousedown="rrApi.recomMouseDown(8153, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });"></a>
                  <a class="item-actions-buy" href="http://newbalance.ru/catalog/men/man_shoes/new_balance_vazee_prism_/" onclick="rrApi.recomAddToCart(8153, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });return retailrocket._widgetAddToBasket(&quot;8153&quot;, &quot;&quot;)"></a>
                </nav>
                <div class="item-label"> Спецпредложение </div>
              </div>
            </li>
            <li class="item">
              <div class="block">
                <a class="item-info" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_574_ML574/" onmousedown="rrApi.recomMouseDown(19520, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });">
                  <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/nbimg.jpeg" onerror="retailrocket.widget.hideProduct(this)"> </div>
                  <div class="item-title"> New Balance 574 Collegiate </div>
                </a>
                <div class="item-block-price">
                  <div class="item-new-price"> <span class="item-price-value">7 690</span> <span class="item-price-currency">q</span> </div>
                  <div class="item-old-price"> <span class="item-old-price-value">10 990</span> <span class="item-price-currency">q</span> </div>
                </div>
                <nav class="item-actions">
                  <a class="item-actions-more" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_574_ML574/" onmousedown="rrApi.recomMouseDown(19520, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });"></a>
                  <a class="item-actions-buy" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_574_ML574/" onclick="rrApi.recomAddToCart(19520, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });return retailrocket._widgetAddToBasket(&quot;19520&quot;, &quot;&quot;)"></a>
                </nav>
                <div class="item-label"> Спецпредложение </div>
              </div>
            </li>
            <li class="item">
              <div class="block">
                <a class="item-info" href="http://newbalance.ru/catalog/men/man_shoes/man_fitnes/new_balance_fresh_foam_80v3_trainer/" onmousedown="rrApi.recomMouseDown(19901, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });">
                  <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/nbimg.jpeg" onerror="retailrocket.widget.hideProduct(this)"> </div>
                  <div class="item-title"> New Balance Fresh Foam 80v3 Trainer </div>
                </a>
                <div class="item-block-price">
                  <div class="item-new-price"> <span class="item-price-value">6 990</span> <span class="item-price-currency">q</span> </div>
                  <div class="item-old-price"> <span class="item-old-price-value">9 990</span> <span class="item-price-currency">q</span> </div>
                </div>
                <nav class="item-actions">
                  <a class="item-actions-more" href="http://newbalance.ru/catalog/men/man_shoes/man_fitnes/new_balance_fresh_foam_80v3_trainer/" onmousedown="rrApi.recomMouseDown(19901, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });"></a>
                  <a class="item-actions-buy" href="http://newbalance.ru/catalog/men/man_shoes/man_fitnes/new_balance_fresh_foam_80v3_trainer/" onclick="rrApi.recomAddToCart(19901, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });return retailrocket._widgetAddToBasket(&quot;19901&quot;, &quot;&quot;)"></a>
                </nav>
                <div class="item-label"> Спецпредложение </div>
              </div>
            </li>
            <li class="item">
              <div class="block">
                <a class="item-info" href="http://newbalance.ru/catalog/men/man_shoes/man_running/new_balance_fresh_foam_vongo/" onmousedown="rrApi.recomMouseDown(19856, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });">
                  <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/nbimg.jpeg" onerror="retailrocket.widget.hideProduct(this)"> </div>
                  <div class="item-title"> New Balance Fresh Foam Vongo </div>
                </a>
                <div class="item-block-price">
                  <div class="item-new-price"> <span class="item-price-value">8 390</span> <span class="item-price-currency">q</span> </div>
                  <div class="item-old-price"> <span class="item-old-price-value">11 990</span> <span class="item-price-currency">q</span> </div>
                </div>
                <nav class="item-actions">
                  <a class="item-actions-more" href="http://newbalance.ru/catalog/men/man_shoes/man_running/new_balance_fresh_foam_vongo/" onmousedown="rrApi.recomMouseDown(19856, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });"></a>
                  <a class="item-actions-buy" href="http://newbalance.ru/catalog/men/man_shoes/man_running/new_balance_fresh_foam_vongo/" onclick="rrApi.recomAddToCart(19856, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });return retailrocket._widgetAddToBasket(&quot;19856&quot;, &quot;&quot;)"></a>
                </nav>
                <div class="item-label"> Спецпредложение </div>
              </div>
            </li>
            <li class="item">
              <div class="block">
                <a class="item-info" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_vazee_rush_MLRUSHHD/" onmousedown="rrApi.recomMouseDown(24976, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });">
                  <div class="item-image"> <img src="<?php echo get_template_directory_uri(); ?>/img/nbimg.jpeg" onerror="retailrocket.widget.hideProduct(this)"> </div>
                  <div class="item-title"> New Balance Vazee Rush </div>
                </a>
                <div class="item-block-price">
                  <div class="item-price"> <span class="item-price-value">12 990</span> <span class="item-price-currency">q</span> </div>
                </div>
                <nav class="item-actions">
                  <a class="item-actions-more" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_vazee_rush_MLRUSHHD/" onmousedown="rrApi.recomMouseDown(24976, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });"></a>
                  <a class="item-actions-buy" href="http://newbalance.ru/catalog/men/man_shoes/man_lifestyle/new_balance_vazee_rush_MLRUSHHD/" onclick="rrApi.recomAddToCart(24976, { suggester: &quot;widget&quot;, methodName: &quot;alternative&quot; });return retailrocket._widgetAddToBasket(&quot;24976&quot;, &quot;&quot;)"></a>
                </nav>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>


  <?php endwhile; else: // If 404 page error ?>
      <div>
        <div class="row">
          <div class="small-12 columns">

            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
          </div>
        </div>
      </div>
  <?php endif; ?>
<?php get_footer(); ?>
