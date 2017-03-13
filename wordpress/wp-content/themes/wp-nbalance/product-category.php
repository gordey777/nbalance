<?php /* Template Name: Catalog Page */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>

<?php the_content(); ?>


      <div id="catalog" class="<?php post_class(); ?>">
        <div class="catalog__head">
          <div class="filter js-filter">
            <div class="filter__top">
              <div class="filter__body js-filter-params-block">
                <div class="filter__body_label js-filter-close">
                  <span><span class="nb-s-1"></span>Мужчины</span>
                </div>
                <div class="filter__body_group one">
                  <ul class="list">
                    <li class="list__item js-filter-param"><a href="#catalog/men/man_shoes/"><span>Обувь</span></a></li>
                    <li class="list__item js-filter-param"><a href="#catalog/men/odezhda/"><span>Одежда</span></a></li>
                    <li class="list__item js-filter-param"><a href="#catalog/men/aksessuary/"><span>Аксессуары</span></a></li>
                    <li class="list__item js-filter-param"><a href="#catalog/men/kollektsii/"><span>Коллекции</span></a></li>
                    <li class="list__item js-filter-param"><a href="#catalog/men/man_modeli/"><span>Модели</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="filter__select js-filter-items-block">
                <div class="filter__select_elem filter__select_elem--brad">
                  <div class="filter__select_head js-filter-items-close">
                    <span class="nb-s-1"></span>Обувь </div>
                  <ul class="list">
                    <li class="list__item js-filter-item" data-id="sec197" data-name="section" data-value="197"><a href="#catalog/men/man_shoes/man_lifestyle/">Повседневная</a></li>
                    <li class="list__item js-filter-item" data-id="sec195" data-name="section" data-value="195"><a href="#catalog/men/man_shoes/man_running/">Бег</a></li>
                    <li class="list__item js-filter-item" data-id="sec232" data-name="section" data-value="232"><a href="#catalog/men/man_shoes/man_fitnes/">Фитнес</a></li>
                    <li class="list__item js-filter-item" data-id="sec268" data-name="section" data-value="268"><a href="#catalog/men/man_shoes/man_football/">Футбол</a></li>
                  </ul>
                </div>
                <div class="filter__select_elem filter__select_elem--brad">
                  <div class="filter__select_head js-filter-items-close">
                    <span class="nb-s-1"></span>Одежда </div>
                  <ul class="list">
                    <li class="list__item js-filter-item" data-id="sec235" data-name="section" data-value="235"><a href="#catalog/men/odezhda/kurtki/">Куртки</a></li>
                    <li class="list__item js-filter-item" data-id="sec236" data-name="section" data-value="236"><a href="#catalog/men/odezhda/tolstovki/">Толстовки</a></li>
                    <li class="list__item js-filter-item" data-id="sec237" data-name="section" data-value="237"><a href="#catalog/men/odezhda/shtany/">Брюки и Шорты</a></li>
                    <li class="list__item js-filter-item" data-id="sec238" data-name="section" data-value="238"><a href="#catalog/men/odezhda/futbolki/">Футболки</a></li>
                  </ul>
                </div>
                <div class="filter__select_elem filter__select_elem--brad">
                  <div class="filter__select_head js-filter-items-close">
                    <span class="nb-s-1"></span>Аксессуары </div>
                  <ul class="list">
                    <li class="list__item js-filter-item" data-id="sec205" data-name="section" data-value="205"><a href="#catalog/men/aksessuary/noski_myzhskie/">Носки</a></li>
                    <li class="list__item js-filter-item" data-id="sec266" data-name="section" data-value="266"><a href="#catalog/men/aksessuary/myachi/">Мячи</a></li>
                    <li class="list__item js-filter-item" data-id="sec204" data-name="section" data-value="204"><a href="#catalog/men/aksessuary/ryukzaki/">Рюкзаки и сумки</a></li>
                    <li class="list__item js-filter-item" data-id="sec239" data-name="section" data-value="239"><a href="#catalog/men/aksessuary/shapki/">Головные уборы</a></li>
                    <li class="list__item js-filter-item" data-id="sec448" data-name="section" data-value="448"><a href="#catalog/men/aksessuary/sharfy_i_perchatki/">Шарфы и перчатки</a></li>
                  </ul>
                </div>
                <div class="filter__select_elem filter__select_elem--brad">
                  <div class="filter__select_head js-filter-items-close">
                    <span class="nb-s-1"></span>Коллекции </div>
                  <ul class="list">
                    <li class="list__item js-filter-item" data-id="sec207" data-name="section" data-value="207"><a href="#catalog/men/kollektsii/made_in_uk/">Made in UK</a></li>
                    <li class="list__item js-filter-item" data-id="sec208" data-name="section" data-value="208"><a href="#catalog/men/kollektsii/made_in_usa/">Made in USA</a></li>
                    <li class="list__item js-filter-item" data-id="sec206" data-name="section" data-value="206"><a href="#catalog/men/kollektsii/nbx_running/">Running</a></li>
                    <li class="list__item js-filter-item" data-id="sec315" data-name="section" data-value="315"><a href="#catalog/men/kollektsii/futbol/">Футбол</a></li>
                    <li class="list__item js-filter-item" data-id="sec449" data-name="section" data-value="449"><a href="#catalog/men/kollektsii/futbolnye_kluby/">Футбольные клубы</a></li>
                  </ul>
                </div>
                <div class="filter__select_elem filter__select_elem--brad">
                  <div class="filter__select_head js-filter-items-close">
                    <span class="nb-s-1"></span>Модели </div>
                  <ul class="list">
                    <li class="list__item js-filter-item" data-id="sec396" data-name="section" data-value="396"><a href="#catalog/men/man_modeli/man_1080/">1080</a></li>
                    <li class="list__item js-filter-item" data-id="sec402" data-name="section" data-value="402"><a href="#catalog/men/man_modeli/man_1260/">1260</a></li>
                    <li class="list__item js-filter-item" data-id="sec353" data-name="section" data-value="353"><a href="#catalog/men/man_modeli/man_1300/">1300</a></li>
                    <li class="list__item js-filter-item" data-id="sec351" data-name="section" data-value="351"><a href="#catalog/men/man_modeli/man_1400/">1400</a></li>
                    <li class="list__item js-filter-item" data-id="sec349" data-name="section" data-value="349"><a href="#catalog/men/man_modeli/man_1500/">1500</a></li>
                    <li class="list__item js-filter-item" data-id="sec404" data-name="section" data-value="404"><a href="#catalog/men/man_modeli/man_1600/">1600</a></li>
                    <li class="list__item js-filter-item" data-id="sec412" data-name="section" data-value="412"><a href="#catalog/men/man_modeli/man_1980/">1980</a></li>
                    <li class="list__item js-filter-item" data-id="sec409" data-name="section" data-value="409"><a href="#catalog/men/man_modeli/man_288/">288</a></li>
                    <li class="list__item js-filter-item" data-id="sec359" data-name="section" data-value="359"><a href="#catalog/men/man_modeli/man_300/">300</a></li>
                    <li class="list__item js-filter-item" data-id="sec401" data-name="section" data-value="401"><a href="#catalog/men/man_modeli/man_368/">368</a></li>
                    <li class="list__item js-filter-item" data-id="sec344" data-name="section" data-value="344"><a href="#catalog/men/man_modeli/man_373/">373</a></li>
                    <li class="list__item js-filter-item" data-id="sec342" data-name="section" data-value="342"><a href="#catalog/men/man_modeli/man_410/">410</a></li>
                    <li class="list__item js-filter-item" data-id="sec343" data-name="section" data-value="343"><a href="#catalog/men/man_modeli/man_420/">420</a></li>
                    <li class="list__item js-filter-item" data-id="sec361" data-name="section" data-value="361"><a href="#catalog/men/man_modeli/man_430/">430</a></li>
                    <li class="list__item js-filter-item" data-id="sec362" data-name="section" data-value="362"><a href="#catalog/men/man_modeli/man_446/">446</a></li>
                    <li class="list__item js-filter-item" data-id="sec407" data-name="section" data-value="407"><a href="#catalog/men/man_modeli/man_450/">450</a></li>
                    <li class="list__item js-filter-item" data-id="sec397" data-name="section" data-value="397"><a href="#catalog/men/man_modeli/man_480/">480</a></li>
                    <li class="list__item js-filter-item" data-id="sec367" data-name="section" data-value="367"><a href="#catalog/men/man_modeli/man_500/">500</a></li>
                    <li class="list__item js-filter-item" data-id="sec354" data-name="section" data-value="354"><a href="#catalog/men/man_modeli/man_501/">501</a></li>
                    <li class="list__item js-filter-item" data-id="sec356" data-name="section" data-value="356"><a href="#catalog/men/man_modeli/man_515/">515</a></li>
                    <li class="list__item js-filter-item" data-id="sec350" data-name="section" data-value="350"><a href="#catalog/men/man_modeli/man_530/">530</a></li>
                    <li class="list__item js-filter-item" data-id="sec410" data-name="section" data-value="410"><a href="#catalog/men/man_modeli/man_554/">554</a></li>
                    <li class="list__item js-filter-item" data-id="sec355" data-name="section" data-value="355"><a href="#catalog/men/man_modeli/man_565/">565</a></li>
                    <li class="list__item js-filter-item" data-id="sec338" data-name="section" data-value="338"><a href="#catalog/men/man_modeli/man_574/">574</a></li>
                    <li class="list__item js-filter-item" data-id="sec360" data-name="section" data-value="360"><a href="#catalog/men/man_modeli/man_575/">575</a></li>
                    <li class="list__item js-filter-item" data-id="sec339" data-name="section" data-value="339"><a href="#catalog/men/man_modeli/man_576/">576</a></li>
                    <li class="list__item js-filter-item" data-id="sec352" data-name="section" data-value="352"><a href="#catalog/men/man_modeli/man_577/">577</a></li>
                    <li class="list__item js-filter-item" data-id="sec345" data-name="section" data-value="345"><a href="#catalog/men/man_modeli/man_580/">580</a></li>
                    <li class="list__item js-filter-item" data-id="sec398" data-name="section" data-value="398"><a href="#catalog/men/man_modeli/man_590/">590</a></li>
                    <li class="list__item js-filter-item" data-id="sec406" data-name="section" data-value="406"><a href="#catalog/men/man_modeli/man_600/">600</a></li>
                    <li class="list__item js-filter-item" data-id="sec413" data-name="section" data-value="413"><a href="#catalog/men/man_modeli/man_610/">610</a></li>
                    <li class="list__item js-filter-item" data-id="sec358" data-name="section" data-value="358"><a href="#catalog/men/man_modeli/man_620/">620</a></li>
                    <li class="list__item js-filter-item" data-id="sec399" data-name="section" data-value="399"><a href="#catalog/men/man_modeli/man_635/">635</a></li>
                    <li class="list__item js-filter-item" data-id="sec400" data-name="section" data-value="400"><a href="#catalog/men/man_modeli/man_650/">650</a></li>
                    <li class="list__item js-filter-item" data-id="sec347" data-name="section" data-value="347"><a href="#catalog/men/man_modeli/man_670/">670</a></li>
                    <li class="list__item js-filter-item" data-id="sec411" data-name="section" data-value="411"><a href="#catalog/men/man_modeli/man_680/">680</a></li>
                    <li class="list__item js-filter-item" data-id="sec363" data-name="section" data-value="363"><a href="#catalog/men/man_modeli/man_696/">696</a></li>
                    <li class="list__item js-filter-item" data-id="sec364" data-name="section" data-value="364"><a href="#catalog/men/man_modeli/man_754/">754</a></li>
                    <li class="list__item js-filter-item" data-id="sec418" data-name="section" data-value="418"><a href="#catalog/men/man_modeli/man_790/">790</a></li>
                    <li class="list__item js-filter-item" data-id="sec408" data-name="section" data-value="408"><a href="#catalog/men/man_modeli/man_818/">818</a></li>
                    <li class="list__item js-filter-item" data-id="sec405" data-name="section" data-value="405"><a href="#catalog/men/man_modeli/man_860/">860</a></li>
                    <li class="list__item js-filter-item" data-id="sec414" data-name="section" data-value="414"><a href="#catalog/men/man_modeli/man_870/">870</a></li>
                    <li class="list__item js-filter-item" data-id="sec415" data-name="section" data-value="415"><a href="#catalog/men/man_modeli/man_880/">880</a></li>
                    <li class="list__item js-filter-item" data-id="sec417" data-name="section" data-value="417"><a href="#catalog/men/man_modeli/man_890/">890</a></li>
                    <li class="list__item js-filter-item" data-id="sec416" data-name="section" data-value="416"><a href="#catalog/men/man_modeli/man_980/">980</a></li>
                    <li class="list__item js-filter-item" data-id="sec403" data-name="section" data-value="403"><a href="#catalog/men/man_modeli/man_988/">988</a></li>
                    <li class="list__item js-filter-item" data-id="sec348" data-name="section" data-value="348"><a href="#catalog/men/man_modeli/man_990/">990</a></li>
                    <li class="list__item js-filter-item" data-id="sec357" data-name="section" data-value="357"><a href="#catalog/men/man_modeli/man_991/">991</a></li>
                    <li class="list__item js-filter-item" data-id="sec365" data-name="section" data-value="365"><a href="#catalog/men/man_modeli/man_992/">992</a></li>
                    <li class="list__item js-filter-item" data-id="sec341" data-name="section" data-value="341"><a href="#catalog/men/man_modeli/man_996/">996</a></li>
                    <li class="list__item js-filter-item" data-id="sec346" data-name="section" data-value="346"><a href="#catalog/men/man_modeli/man_997/">997</a></li>
                    <li class="list__item js-filter-item" data-id="sec366" data-name="section" data-value="366"><a href="#catalog/men/man_modeli/man_998/">998</a></li>
                    <li class="list__item js-filter-item" data-id="sec340" data-name="section" data-value="340"><a href="#catalog/men/man_modeli/man_999/">999</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="filter__bot">
              <div class="filter__total js-filter-summary">
                <div class="btn__wrap">
                  <a class="btn btn_st-1 js-filter-accept"><span>Принять</span></a>
                </div>
                <div class="filter__total_clear">
                  <a class="js-filter-reset"><span class="nb-i_filter_reload"></span>Сбросить всё</a>
                </div>
                <div class="filter__total_elem">
                  <ul class="list">
                    <li class="list__item js-filter-item-delete" data-id="sec188" data-name="section" data-value="188"><a href="#catalog/men/man_shoes/">Обувь</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec197" data-name="section" data-value="197"><a href="#catalog/men/man_shoes/man_lifestyle/">Повседневная</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec195" data-name="section" data-value="195"><a href="#catalog/men/man_shoes/man_running/">Бег</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec232" data-name="section" data-value="232"><a href="#catalog/men/man_shoes/man_fitnes/">Фитнес</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec268" data-name="section" data-value="268"><a href="#catalog/men/man_shoes/man_football/">Футбол</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec189" data-name="section" data-value="189"><a href="#catalog/men/odezhda/">Одежда</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec235" data-name="section" data-value="235"><a href="#catalog/men/odezhda/kurtki/">Куртки</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec236" data-name="section" data-value="236"><a href="#catalog/men/odezhda/tolstovki/">Толстовки</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec237" data-name="section" data-value="237"><a href="#catalog/men/odezhda/shtany/">Брюки и Шорты</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec238" data-name="section" data-value="238"><a href="#catalog/men/odezhda/futbolki/">Футболки</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec190" data-name="section" data-value="190"><a href="#catalog/men/aksessuary/">Аксессуары</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec205" data-name="section" data-value="205"><a href="#catalog/men/aksessuary/noski_myzhskie/">Носки</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec266" data-name="section" data-value="266"><a href="#catalog/men/aksessuary/myachi/">Мячи</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec204" data-name="section" data-value="204"><a href="#catalog/men/aksessuary/ryukzaki/">Рюкзаки и сумки</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec239" data-name="section" data-value="239"><a href="#catalog/men/aksessuary/shapki/">Головные уборы</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec448" data-name="section" data-value="448"><a href="#catalog/men/aksessuary/sharfy_i_perchatki/">Шарфы и перчатки</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec191" data-name="section" data-value="191"><a href="#catalog/men/kollektsii/">Коллекции</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec207" data-name="section" data-value="207"><a href="#catalog/men/kollektsii/made_in_uk/">Made in UK</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec208" data-name="section" data-value="208"><a href="#catalog/men/kollektsii/made_in_usa/">Made in USA</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec206" data-name="section" data-value="206"><a href="#catalog/men/kollektsii/nbx_running/">Running</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec315" data-name="section" data-value="315"><a href="#catalog/men/kollektsii/futbol/">Футбол</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec449" data-name="section" data-value="449"><a href="#catalog/men/kollektsii/futbolnye_kluby/">Футбольные клубы</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec336" data-name="section" data-value="336"><a href="#catalog/men/man_modeli/">Модели</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec396" data-name="section" data-value="396"><a href="#catalog/men/man_modeli/man_1080/">1080</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec402" data-name="section" data-value="402"><a href="#catalog/men/man_modeli/man_1260/">1260</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec353" data-name="section" data-value="353"><a href="#catalog/men/man_modeli/man_1300/">1300</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec351" data-name="section" data-value="351"><a href="#catalog/men/man_modeli/man_1400/">1400</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec349" data-name="section" data-value="349"><a href="#catalog/men/man_modeli/man_1500/">1500</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec404" data-name="section" data-value="404"><a href="#catalog/men/man_modeli/man_1600/">1600</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec412" data-name="section" data-value="412"><a href="#catalog/men/man_modeli/man_1980/">1980</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec409" data-name="section" data-value="409"><a href="#catalog/men/man_modeli/man_288/">288</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec359" data-name="section" data-value="359"><a href="#catalog/men/man_modeli/man_300/">300</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec401" data-name="section" data-value="401"><a href="#catalog/men/man_modeli/man_368/">368</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec344" data-name="section" data-value="344"><a href="#catalog/men/man_modeli/man_373/">373</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec342" data-name="section" data-value="342"><a href="#catalog/men/man_modeli/man_410/">410</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec343" data-name="section" data-value="343"><a href="#catalog/men/man_modeli/man_420/">420</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec361" data-name="section" data-value="361"><a href="#catalog/men/man_modeli/man_430/">430</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec362" data-name="section" data-value="362"><a href="#catalog/men/man_modeli/man_446/">446</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec407" data-name="section" data-value="407"><a href="#catalog/men/man_modeli/man_450/">450</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec397" data-name="section" data-value="397"><a href="#catalog/men/man_modeli/man_480/">480</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec367" data-name="section" data-value="367"><a href="#catalog/men/man_modeli/man_500/">500</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec354" data-name="section" data-value="354"><a href="#catalog/men/man_modeli/man_501/">501</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec356" data-name="section" data-value="356"><a href="#catalog/men/man_modeli/man_515/">515</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec350" data-name="section" data-value="350"><a href="#catalog/men/man_modeli/man_530/">530</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec410" data-name="section" data-value="410"><a href="#catalog/men/man_modeli/man_554/">554</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec355" data-name="section" data-value="355"><a href="#catalog/men/man_modeli/man_565/">565</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec338" data-name="section" data-value="338"><a href="#catalog/men/man_modeli/man_574/">574</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec360" data-name="section" data-value="360"><a href="#catalog/men/man_modeli/man_575/">575</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec339" data-name="section" data-value="339"><a href="#catalog/men/man_modeli/man_576/">576</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec352" data-name="section" data-value="352"><a href="#catalog/men/man_modeli/man_577/">577</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec345" data-name="section" data-value="345"><a href="#catalog/men/man_modeli/man_580/">580</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec398" data-name="section" data-value="398"><a href="#catalog/men/man_modeli/man_590/">590</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec406" data-name="section" data-value="406"><a href="#catalog/men/man_modeli/man_600/">600</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec413" data-name="section" data-value="413"><a href="#catalog/men/man_modeli/man_610/">610</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec358" data-name="section" data-value="358"><a href="#catalog/men/man_modeli/man_620/">620</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec399" data-name="section" data-value="399"><a href="#catalog/men/man_modeli/man_635/">635</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec400" data-name="section" data-value="400"><a href="#catalog/men/man_modeli/man_650/">650</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec347" data-name="section" data-value="347"><a href="#catalog/men/man_modeli/man_670/">670</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec411" data-name="section" data-value="411"><a href="#catalog/men/man_modeli/man_680/">680</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec363" data-name="section" data-value="363"><a href="#catalog/men/man_modeli/man_696/">696</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec364" data-name="section" data-value="364"><a href="#catalog/men/man_modeli/man_754/">754</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec418" data-name="section" data-value="418"><a href="#catalog/men/man_modeli/man_790/">790</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec408" data-name="section" data-value="408"><a href="#catalog/men/man_modeli/man_818/">818</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec405" data-name="section" data-value="405"><a href="#catalog/men/man_modeli/man_860/">860</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec414" data-name="section" data-value="414"><a href="#catalog/men/man_modeli/man_870/">870</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec415" data-name="section" data-value="415"><a href="#catalog/men/man_modeli/man_880/">880</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec417" data-name="section" data-value="417"><a href="#catalog/men/man_modeli/man_890/">890</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec416" data-name="section" data-value="416"><a href="#catalog/men/man_modeli/man_980/">980</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec403" data-name="section" data-value="403"><a href="#catalog/men/man_modeli/man_988/">988</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec348" data-name="section" data-value="348"><a href="#catalog/men/man_modeli/man_990/">990</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec357" data-name="section" data-value="357"><a href="#catalog/men/man_modeli/man_991/">991</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec365" data-name="section" data-value="365"><a href="#catalog/men/man_modeli/man_992/">992</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec341" data-name="section" data-value="341"><a href="#catalog/men/man_modeli/man_996/">996</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec346" data-name="section" data-value="346"><a href="#catalog/men/man_modeli/man_997/">997</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec366" data-name="section" data-value="366"><a href="#catalog/men/man_modeli/man_998/">998</a></li>
                    <li class="list__item js-filter-item-delete" data-id="sec340" data-name="section" data-value="340"><a href="#catalog/men/man_modeli/man_999/">999</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="sort">
            <div class="sort__inner">
              <div class="sort__label"><span>Сортировать по:</span></div>
              <div class="sort__list js-sort">
                <ul class="list line">
                  <li class="list__item js-sort-item" data-sortby="new" data-sortorder="desc"><a class="">Новинкам</a></li>
                  <li class="list__item js-sort-item" data-sortby="popular" data-sortorder="desc"><a class="">Популярности</a></li>
                  <li class="list__item js-sort-item" data-sortby="price_asc" data-sortorder="desc"><a class="">Цене (по возрастанию)</a></li>
                  <li class="list__item js-sort-item" data-sortby="price_desc" data-sortorder="desc"><a class="">Цене (по убыванию)</a></li>
                </ul>
              </div>
              <div class="sort__select">
                <select name="" id="js-sort-select">
                  <option selected="selected" disabled="">Сортировать по</option>
                  <option value="" data-sortby="new" data-sortorder="desc">Новинкам</option>
                  <option value="" data-sortby="popular" data-sortorder="desc">Популярности</option>
                  <option value="" data-sortby="price_asc" data-sortorder="desc">Цене ↑</option>
                  <option value="" data-sortby="price_desc" data-sortorder="desc">Цене ↓</option>
                </select>
              </div>
            </div>
          </div>
          <div class="filter__btn js-filter-open">
            <span>Фильтр</span>
          </div>
        </div>
        <div class="catalog__body">




          <div class="b-social-in-catalog">
            <?php
            $attr = array (
                'width' => '32', //input only number, in pixel
                'height' => '32', //input only number, in pixel
                'margin' => '6', //input only number, in pixel
                'display' => 'vertical', //horizontal | vertical
                'alignment' => 'center', //center | left | right
                'attr_id' => 'catalog_content_icons',
                'attr_class' => 'catalog_content_soc_icons ',
                'selected_icons' => array ( '1', '2', '3', '4', '5', '6', '7', '8' )

            );
            if ( function_exists('cn_social_icon') ) echo cn_social_icon( $attr );
            ?>
          </div>


          <div class="catalog__body_head">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="row">
            <div data-retailrocket-markup-block="5819ef365a65889fb05a4ed0" data-category-id="/catalog/men/" initialized="true"></div>
          </div>
          <div class="product-list" id="js-filter-loader">
            <ul class="list inline js-filter-content-wrapper" id="js-product-list">
              <!--RestartBuffer-->
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_373_classic_sport/?color_ref=grey">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 373 Suede</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">8 490</span> <span class="cur">q</span></span><span class="price__old">8 490</span></p>
                    <p class="price js-product-price"><span class="js-price-current">8 490</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_373_classic_sport/?color_ref=black" data-src="/upload/resize_cache/iblock/04a/180_180_1/ml373mmc_14.jpg" data-price="8 490" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/grey.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_373_classic_sport/?color_ref=grey" data-src="/upload/resize_cache/iblock/991/180_180_1/1NB_wl574sji_3_for_web_1500x915_0017_ml373mma_14.jpg" data-price="8 490" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_373_classic_sport/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/756/180_180_1/NB_ml373mmb_2_for_web_1500x915.jpg" data-price="8 490" data-discount-price=""></div>
                  </div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_373_ML373NAY/?color_ref=lNuBJDuQ">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 373</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">8 490</span> <span class="cur">q</span></span><span class="price__old">8 490</span></p>
                    <p class="price js-product-price"><span class="js-price-current">8 490</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/1a8/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_373_ML373NAY/?color_ref=black" data-src="/upload/resize_cache/iblock/4d2/180_180_1/ml373gre_nb_14_i.jpg" data-price="8 490" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/9f4/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_373_ML373NAY/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/84b/180_180_1/225827.jpg.jpg" data-price="8 490" data-discount-price=""></div>
                  </div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/?color_ref=c2axKiOI">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 247 Sport</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">9 990</span> <span class="cur">q</span></span><span class="price__old">9 990</span></p>
                    <p class="price js-product-price"><span class="js-price-current">9 990</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/1a8/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/?color_ref=black" data-src="/upload/resize_cache/iblock/29f/180_180_1/mrl247bk_nb_02_i.jpg" data-price="9 990" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/ca6/180_180_1/mrl247bi_nb_02_i.jpg" data-price="9 990" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/ORANGE.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/?color_ref=c2axKiOI" data-src="/upload/resize_cache/iblock/56b/180_180_1/mrl247or_nb_02_i.jpg" data-price="9 990" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/index.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_247_sport/?color_ref=Haki" data-src="/upload/resize_cache/iblock/e0c/180_180_1/mrl247ol_nb_02_i.jpg" data-price="9 990" data-discount-price=""></div>
                  </div>
                  <div class="list__item_label"><span>Новинка</span></div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_996AN/?color_ref=lNuBJDuQ">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 996 Revlite</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">12 190</span> <span class="cur">q</span></span><span class="price__old">12 190</span></p>
                    <p class="price js-product-price"><span class="js-price-current">12 190</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/grey.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_996AN/?color_ref=grey" data-src="/upload/resize_cache/iblock/32d/180_180_1/06-02-2014_nb_mrl996ag_grey.jpg" data-price="12 190" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_996AN/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/40f/180_180_1/new balance (1).jpg" data-price="12 190" data-discount-price=""></div>
                  </div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_576_1/?color_ref=dark_brown">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 576 made in UK</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">21 890</span> <span class="cur">q</span></span><span class="price__old">21 890</span></p>
                    <p class="price js-product-price"><span class="js-price-current">21 890</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_576_1/?color_ref=black" data-src="/upload/resize_cache/iblock/a15/180_180_1/02-10-2015_newbalance_m576ckk_black_amc_1.jpg" data-price="21 890" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_576_1/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/0ce/180_180_1/new balance (2).jpg" data-price="21 890" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/pigment-zhidkij-ne-migriruyushhij-cvet-korichnevyj.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_576_1/?color_ref=dark_brown" data-src="/upload/resize_cache/iblock/e1f/180_180_1/05-10-2015_newbalance_m576cbb_brown_sh_1.jpg" data-price="21 890" data-discount-price=""></div>
                  </div>
                  <div class="list__item_label"><span>Made in UK</span></div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_500_GM500GWK/?color_ref=white">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 500</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">7 190</span> <span class="cur">q</span></span><span class="price__old">7 190</span></p>
                    <p class="price js-product-price"><span class="js-price-current">7 190</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_500_GM500GWK/?color_ref=black" data-src="/upload/resize_cache/iblock/9a2/180_180_1/1 (5).jpg" data-price="7 190" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/white.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_500_GM500GWK/?color_ref=white" data-src="/upload/resize_cache/iblock/c62/180_180_1/1 (1).jpg" data-price="7 190" data-discount-price=""></div>
                  </div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_574_core/?color_ref=grey">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 574 Core</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">10 690</span> <span class="cur">q</span></span><span class="price__old">10 690</span></p>
                    <p class="price js-product-price"><span class="js-price-current">10 690</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_574_core/?color_ref=black" data-src="/upload/resize_cache/iblock/7e6/180_180_1/m574nk_nb_14_i.jpg" data-price="10 690" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/grey.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_574_core/?color_ref=grey" data-src="/upload/resize_cache/iblock/275/180_180_1/NB_web_1500x915-16.jpg" data-price="10 690" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_574_core/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/1ec/180_180_1/m574nn_nb_02_i.jpg" data-price="10 690" data-discount-price=""></div>
                  </div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_420_70s_running_nubuck/?color_ref=Haki">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 420 70s Running Nubuck</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">11 990</span> <span class="cur">q</span></span><span class="price__old">11 990</span></p>
                    <p class="price js-product-price"><span class="js-price-current">11 990</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/22.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_420_70s_running_nubuck/?color_ref=dark_grey" data-src="/upload/resize_cache/iblock/8ba/180_180_1/u420nkt_nb_02_i.jpg" data-price="11 990" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/index.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_420_70s_running_nubuck/?color_ref=Haki" data-src="/upload/resize_cache/iblock/7d2/180_180_1/u420not_nb_02_i.jpg" data-price="11 990" data-discount-price=""></div>
                  </div>
                  <div class="list__item_label"><span>Новинка</span></div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_420_re_engineered_MRL420SI/?color_ref=red">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 420 Re-Engineered</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">10 990</span> <span class="cur">q</span></span><span class="price__old">10 990</span></p>
                    <p class="price js-product-price"><span class="js-price-current">10 990</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_420_re_engineered_MRL420SI/?color_ref=black" data-src="/upload/resize_cache/iblock/5de/180_180_1/mrl420sd_nb_02_i.jpg" data-price="10 990" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/RED.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_420_re_engineered_MRL420SI/?color_ref=red" data-src="/upload/resize_cache/iblock/388/180_180_1/mrl420si_nb_02_i.jpg" data-price="10 990" data-discount-price=""></div>
                  </div>
                  <div class="list__item_label"><span>Новинка</span></div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_996_revlite_MRL996JL/?color_ref=lNuBJDuQ">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 996 Revlite</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">12 190</span> <span class="cur">q</span></span><span class="price__old">12 190</span></p>
                    <p class="price js-product-price"><span class="js-price-current">12 190</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_996_revlite_MRL996JL/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/d9d/180_180_1/mrl996jl_nb_02_i.jpg" data-price="12 190" data-discount-price=""></div>
                  </div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_574_15_ounce_canvas/?color_ref=lNuBJDuQ">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 574 15 Ounce Canvas</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">10 990</span> <span class="cur">q</span></span><span class="price__old">10 990</span></p>
                    <p class="price js-product-price"><span class="js-price-current">10 990</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_574_15_ounce_canvas/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/d93/180_180_1/ml574txb_nb_02_i.jpg" data-price="10 990" data-discount-price=""></div>
                  </div>
                  <div class="list__item_label"><span>Новинка</span></div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_420_heritage_70s_running/?color_ref=brown">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 420 Heritage 70s Running</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">9 590</span> <span class="cur">q</span></span><span class="price__old">9 590</span></p>
                    <p class="price js-product-price"><span class="js-price-current">9 590</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/black.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_420_heritage_70s_running/?color_ref=black" data-src="/upload/resize_cache/iblock/eca/180_180_1/u420rkg_nb_14_i.jpg" data-price="9 590" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/BROWN.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_420_heritage_70s_running/?color_ref=brown" data-src="/upload/resize_cache/iblock/4a7/180_180_1/1.jpg" data-price="9 590" data-discount-price=""></div>
                  </div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_576_M576PRW/?color_ref=green">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 576</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">21 890</span> <span class="cur">q</span></span><span class="price__old">21 890</span></p>
                    <p class="price js-product-price"><span class="js-price-current">21 890</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/fon-bumazhnyi-bd-2-72-h-11-0-m-bordovyi-1151.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_576_M576PRW/?color_ref=vinous" data-src="/upload/resize_cache/iblock/840/180_180_1/14-09-2016_new-balance_m576prwmadeinengland_burgundy_white_m576prw_cw_1.jpg" data-price="21 890" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/GREEN.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_576_M576PRW/?color_ref=green" data-src="/upload/resize_cache/iblock/cef/180_180_1/14-09-2016_newbalance_m576pngmadeinengland_green_white_m576png_jtl_1.jpg" data-price="21 890" data-discount-price=""></div>
                  </div>
                  <div class="list__item_label"><span>Made in UK</span></div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_996_suede/?color_ref=beige">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 996 Suede</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">12 190</span> <span class="cur">q</span></span><span class="price__old">12 190</span></p>
                    <p class="price js-product-price"><span class="js-price-current">12 190</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/темносиний.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_996_suede/?color_ref=lNuBJDuQ" data-src="/upload/resize_cache/iblock/ff9/180_180_1/mrl996nf_nb_14_i.jpg" data-price="12 190" data-discount-price=""></div>
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/8902-beige-zoom.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_996_suede/?color_ref=beige" data-src="/upload/resize_cache/iblock/355/180_180_1/mrl996nh_nb_14_i.jpg" data-price="12 190" data-discount-price=""></div>
                  </div>
                  <div class="list__item_label"><span>Made in USA</span></div>
                </a>
              </li>
              <li class="list__item">
                <a href="#catalog/men/man_shoes/man_lifestyle/new_balance_373_ML373/?color_ref=blue">
                  <div class="list__item_img">
                    <div class="bl_table">
                      <div class="table__td js-product-list-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/999.jpg" alt="" title="">
                      </div>
                    </div>
                  </div>
                  <p class="list__item_name">New Balance 373</p>
                  <div class="list__item_price">
                    <p class="price js-product-price js-has-discount" style="display:none"><span class="price__new"><span class="js-price-current">8 490</span> <span class="cur">q</span></span><span class="price__old">8 490</span></p>
                    <p class="price js-product-price"><span class="js-price-current">8 490</span> <span class="cur">q</span></p>
                  </div>
                  <div class="list__item_swatches js-swatches">
                    <div class="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/BLUE.jpg);" data-href="/catalog/men/man_shoes/man_lifestyle/new_balance_373_ML373/?color_ref=blue" data-src="/upload/resize_cache/iblock/ff9/180_180_1/NB-ML373HB_4.jpg" data-price="8 490" data-discount-price=""></div>
                  </div>
                </a>
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
