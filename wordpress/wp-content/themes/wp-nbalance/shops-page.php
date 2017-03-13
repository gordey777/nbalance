<?php /* Template Name: Shops page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


  <div class="<?php post_class(); ?>">
      <div class="site__head with-shadow">
        <div class="site__head_inner">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>

      <div class="stores" id="yandex-map">
        <div class="row">
          <div class="small-12 columns">
          <?php edit_post_link(); ?>
          <?php the_content(); ?>
            <div class="stores__inner">
              <div class="two-block-map">
                <div class="clear"></div>
                <div class="map-left">
                  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=MLH0yK0PNQng4dzkNMdj1DDIvHSuaZqS&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                </div>
                <div class="map-right">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/shop.jpg">
                </div>
                <div class="clear"></div>
              </div>
              <div class="tabs">
                <input type="radio" name="tabs" id="tab-1" checked="">
                <div class="tabs__trigger">
                  <label for="tab-1"><span class="nb-logo_nb"></span><span class="hide-on-mobile-inline">Официальные концептуальные </span>магазины NB</label>
                </div>
                <div class="tabs__body">

                  <div class="" data-tab="1">
                    <div class="stores__list">
                      <ul class="list js-ow-stores-wrapper-store">
                        <li class="list__item js-ow-stores-item" data-id="9515">
                          <div class="list__item_inner">
                            <h6>ТД «ГУМ»</h6>
                            <p>Красная площадь, д.3, +7 (495) 785-92-68</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9514">
                          <div class="list__item_inner">
                            <h6>ТРК «ЩУКА»</h6>
                            <p>ул. Щукинская, д.42, +7 (495) 229-97-23</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9250">
                          <div class="list__item_inner">
                            <h6>ТРЦ «Европейский»</h6>
                            <p>Площадь Киевского вокзала, д.2, +7 (495) 229-79-07</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="24160">
                          <div class="list__item_inner">
                            <h6>New Balance Outlet</h6>
                            <p>Outlet Village «Белая Дача», Московская Область, г. Котельники, Новорязанское шоссе 8, 4 км от МКАД</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="16509">
                          <div class="list__item_inner">
                            <h6>ТРЦ Avenue South-West</h6>
                            <p>просп. Вернадского, д.86а, +7 (495) 419-58-54</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9516">
                          <div class="list__item_inner">
                            <h6>ТЦ «Кунцево Плаза»</h6>
                            <p>Ярцевская ул., д.19, +7 (499) 270-35-03</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9513">
                          <div class="list__item_inner">
                            <h6>ТЦ «Капитолий Вернадского»</h6>
                            <p>Просп. Вернадского, д.6, +7 (499) 270-28-98</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9512">
                          <div class="list__item_inner">
                            <h6>ТЦ Метрополис</h6>
                            <p>Ленинградское ш., д.16, +7 (499) 922-19-13</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9252">
                          <div class="list__item_inner">
                            <h6>ТЦ «МЕГА Химки»</h6>
                            <p>Химки, микрорайон 8, +7 (495) 705-98-27</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9251">
                          <div class="list__item_inner">
                            <h6>ТЦ «МЕГА Белая Дача»</h6>
                            <p>14-й км МКАД, 1-й Покровский проезд, д.5, +7 (495) 287-07-45</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9249">
                          <div class="list__item_inner">
                            <h6>ТРЦ «Вегас»</h6>
                            <p>24-й км МКАД, пересечение с Каширским ш., +7 (495) 987-32-80</p>
                          </div>
                        </li>
                        <li class="list__item js-ow-stores-item" data-id="9248">
                          <div class="list__item_inner">
                            <h6>ТРЦ «Афимолл»</h6>
                            <p>Пресненская наб., д.2, +7 (499) 922-10-85</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div><!-- data-tab="1" -->

<!--                   <div class="" data-tab="2">
  <div class="stores__list">
    <ul class="list js-ow-stores-wrapper-dealer">
      <li class="list__item js-ow-stores-item" data-id="9434">
        <div class="list__item_inner">
          <h6>Lamoda.ru</h6>
          <p>+7 (800) 333-23-59</p>
        </div>
      </li>
    </ul>
  </div>
</div> -->

                </div><!-- /.tabs -->

              </div>
            </div>
          </div>
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

