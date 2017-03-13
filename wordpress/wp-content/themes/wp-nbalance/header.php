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
      <?php if( have_rows('promo_widget', 20 ) ): ?>
        <div class="promo js-promo">
          <div class="promo__inner" id="bx_3218110189_19164">
            <?php while ( have_rows('promo_widget', 20) ) : the_row(); ?>
              <?php the_sub_field('text'); ?>

              <a href="<?php the_sub_field('link'); ?>">Подробнее &gt;</a>
            <?php  endwhile; ?>

          </div>
          <a href="javascript:void(0);" class="promo__close js-promo-close"><span class="icon i_close-big"></span></a>
        </div>
      <?php endif; ?>
      <div class="metabar">
        <div class="metabar__info">
          <ul class="list inline">
            <?php if( have_rows('link_countries', 20 ) ): ?>
              <?php while ( have_rows('link_countries', 20) ) : the_row(); ?>
                <li class="list__item">
                  <a href="<?php the_sub_field('link'); ?>" class="flag icon flag__acf" style="background: url(<?php the_sub_field('image'); ?>) no-repeat 0 0/16em 309.4em;"></a>
                </li>

              <?php  endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('link_shop', 20 ) ): ?>
              <?php while ( have_rows('link_shop', 20) ) : the_row(); ?>
                <li class="list__item">
                  <a href="<?php the_sub_field('link'); ?>">
                    <span class="nbfont nb-i_header_pin"></span> <?php the_sub_field('title'); ?>
                  </a>
                </li>
              <?php  endwhile; ?>
            <?php endif; ?>

          </ul>
        </div>

        <?php if( have_rows('phone', 20 ) ): ?>
          <?php while ( have_rows('phone', 20) ) : the_row(); ?>
            <div class="header_phone">
              <a href="tel:<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
            </div>
          <?php  endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('promo_widget', 20 ) ): ?>

          <div class="metabar__promo" id="js-text-promo-source">
            <a href="#" class="js-promo-toggle">
              <?php while ( have_rows('promo_widget', 20) ) : the_row(); ?>
                <?php the_sub_field('link_title'); ?>
              <?php  endwhile; ?>
            </a>
          </div>
        <?php endif; ?>

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

          <?php if( have_rows('link_shops', 20 ) ): ?>
            <?php while ( have_rows('link_shops', 20) ) : the_row(); ?>
              <div id="bx_basketFKauiI" class="bx-basket bx-opener">
                <div class="bx-hdr-profile">
                  <div class="minicart" id="js-small-basket-block">
                    <a class="mapshops" href="<?php the_sub_field('link'); ?>">
                      <?php the_sub_field('title'); ?>
                    </a>
                  </div>
                </div>
              </div>

            <?php  endwhile; ?>
          <?php endif; ?>


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
