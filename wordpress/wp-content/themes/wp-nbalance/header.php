<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.css" rel='stylesheet'>
  <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel='stylesheet'>
  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>


  <div class="site_container">


    <header class="header with-shadow" id="header">
      <div class="promo js-promo">
        <div class="promo__inner" id="bx_3218110189_19164">
          <p>
            Все заказы, поступившие до&nbsp;16:00 и подтвержденные нашим менеджером, доставляются по Москве на следующий день, по Санкт-Петербургу — через день.
            <br>
          </p>
          <p>
            Сроки доставки в другие регионы России вы можете уточнить у наших операторов по телефону&nbsp;
            <nobr>8 (800) 500-10-11.</nobr>
            <br>
          </p>
          <p>
            При заказе от 10 000 рублей – доставка бесплатная!
          </p> <a href="#orders/dostavka/">Подробнее &gt;</a>
          <p></p>
        </div>
        <a href="javascript:void(0);" class="promo__close js-promo-close"><span class="icon i_close-big"></span></a>
      </div>

      <div class="metabar">
        <div class="metabar__info">
          <ul class="list inline">
            <li class="list__item">
              <a href="/?page_id=41" class="flag icon flag-rus"></a>
            </li>
            <li class="list__item">
              <a href="shops.htm">
                <span class="nbfont nb-i_header_pin"></span> Найти магазин
              </a>
            </li>
          </ul>
        </div>
        <div class="header_phone">
          <a href="tel:8 800 500 10 11">+ 375 (29) 999-99-99</a> </div>
        <div class="metabar__promo" id="js-text-promo-source">
          <a href="#" class="js-promo-toggle">
            <span>Бесплатная доставка при заказе от 10 000&nbsp;рублей</span>
            <span class="nbfont nb-s-1"></span>
            <span>Узнать больше</span>
          </a>
        </div>
      </div>


      <div class="navbar">
        <div class="logo">
          <?php if ( is_front_page() && is_home() ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <span class="nbfont nb-logo_nb"></span>
              <?php if ( is_front_page() && is_home() ){
              } else { ?>
            </a>
          <?php } ?>
        </div>
        <nav id="main___menu">
          <?php wpeHeadNav(); ?>

          <div class="smoke js-smoke" style="height: 3007px;"></div>
        </nav>

        <div class="menu-small"><a href="javascript:void(0);" class="js-menumobile-open"><span class="nbfont nb-i_header_menu"></span></a></div>

          <div class="menu-mobile js-menumobile">
            <div class="menu-mobile__inner">
              <div>
                <?php wpeHeadMobileNav(); ?>
              </div>
            </div>
          </div>

        <div>
          <div id="bx_basketFKauiI" class="bx-basket bx-opener">
            <!--'start_frame_cache_bx_basketFKauiI'-->
            <div class="bx-hdr-profile">
              <div class="minicart" id="js-small-basket-block">
                <a class="mapshops" href="shops.htm">
                  Магазины
                </a>
              </div><!--'end_frame_cache_bx_basketFKauiI'-->
            </div>
          </div>
          <div class="account-menu">
            <div class="phone-top"> <a href="tel:+3752999999999"><span> +375 (29)</span> 999-99-99</a> </div>
          </div>
          <div class="location">
            <a href="#support/shops/">
              <span class="nb-i_header_pin"></span>
            </a>
          </div>
          <div class="search-small js-header-search-open">
            <a href="#" onclick="return false;">
              <span class="nb-i_header_search"></span>
            </a>
          </div>
          <div class="search js-header-search" id="title-search">
            <div class="search__inner">
              <form method="get" action="<?php echo home_url(); ?>" role="search">
                <input id="title-search-input" class="search-input" type="text" name="s" size="40" maxlength="50" autocomplete="off" placeholder="Что вы ищете?" data-begin-placeholder="Что вы ищете?" data-second-placeholder="Найти">
                <button class="search-submit" type="submit" role="button"><span class="nb-i_header_search"></span></button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="search__dd js-header-search-dd" id="js-search-title-result">
    </div>
    <main>
