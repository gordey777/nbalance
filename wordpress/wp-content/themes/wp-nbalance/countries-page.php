<?php  /* Template Name: Cauntries */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="earth">
      <div class="row fixed-width-narrow">
          <div class="small-12 columns">
              <h6><?php the_title(); ?></h6>
              <?php edit_post_link(); ?><?php the_content(); ?>
          </div>
      </div>

      <div class="row fixed-width-narrow earth__list">
          <div class="small-12 medium-3 large-3 columns">
              <ul class="list">
                  <li class="list__item"><b>North America</b></li>
                  <li class="list__item"><a href="http://www.newbalance.com/">United States</a></li>
                  <li class="list__item"><a href="http://www.newbalance.ca/">Canada</a></li>
                  <li class="list__item"><a href="http://www.newbalance.com.mx/">México</a></li>
              </ul>
              <ul class="list">
                  <li class="list__item"><b>Latin America</b></li>
                  <li class="list__item"><a href="http://www.newbalance.com.ar/">Argentina</a></li>
                  <li class="list__item"><a href="http://www.newbalance.com.br/">Brasil</a></li>
                  <li class="list__item"><a href="http://www.newbalance.com.pa/">América Central</a></li>
                  <li class="list__item"><a href="http://www.newbalance.com.pa/">Caribbean</a></li>
                  <li class="list__item"><a href="http://www.newbalance.com.co/">Colombia</a></li>
                  <li class="list__item"><a href="http://www.newbalance.com.ve/">Venezuela</a></li>
                  <li class="list__item"><a href="http://www.newbalance.cl/">Chile</a></li>
              </ul>
          </div>
          <div class="small-12 medium-3 large-3 columns">
              <ul class="list">
                  <li class="list__item"><b>Europe</b></li>
                  <li class="list__item"><a href="http://www.newbalance.co.uk/">United Kingdom</a></li>
                  <li class="list__item"><a href="http://www.newbalance.be/">Belgique</a></li>
                  <li class="list__item"><a href="http://www.newbalance.hr/">Hrvatska</a></li>
                  <li class="list__item"><a href="http://www.newbalance.cz/">Česká Republika</a></li>
                  <li class="list__item"><a href="http://www.newbalance.dk/">Danmark</a></li>
                  <li class="list__item"><a href="http://www.newbalance.de/">Deutschland</a></li>
                  <li class="list__item"><a href="http://www.newbalance.es/">ESPAÑA</a></li>
                  <li class="list__item">Suomi</li>
                  <li class="list__item"><a href="http://www.newbalance.fr/">France</a></li>
                  <li class="list__item"><a href="http://www.newbalance.gr/">ΕΛΛΆΔΑ</a></li>
                  <li class="list__item">Magyarországon</li>
                  <li class="list__item"><a href="http://www.newbalance.ie/">Ireland</a></li>
                  <li class="list__item"><a href="http://www.newbalance.it/">Italia</a></li>
                  <li class="list__item"><a href="http://www.newbalance.lu/">Luxemburg</a></li>
                  <li class="list__item"><a href="http://nl.newbalance.eu/">Nederland</a></li>
                  <li class="list__item">Norway</li>
                  <li class="list__item"><a href="http://at.newbalance.eu/">Österreich</a></li>
                  <li class="list__item"><a href="http://www.newbalance.pl/">Polska</a></li>
                  <li class="list__item">Portugal</li>
                  <li class="list__item"><a href="http://www.newbalance.ru/">Россия</a></li>
                  <li class="list__item">Slovenija</li>
                  <li class="list__item">Sverige</li>
                  <li class="list__item">Suisse</li>
                  <li class="list__item"><a href="http://www.new-balance.com.ua/">Україна</a></li>
              </ul>
          </div>
          <div class="small-12 medium-3 large-3 columns">
              <ul class="list">
                  <li class="list__item"><b>Africa</b></li>
                  <li class="list__item"><a href="http://www.newbalance.co.za/">South Africa</a></li>
              </ul>
              <ul class="list">
                  <li class="list__item"><b>Middle East</b></li>
                  <li class="list__item">Egypt</li>
                  <li class="list__item"><a href="http://www.newbalance.co.il/">Israel</a></li>
                  <li class="list__item">Jordan</li>
                  <li class="list__item">Kuwait</li>
                  <li class="list__item">Qatar</li>
                  <li class="list__item">Saudi Arabia</li>
                  <li class="list__item">United Arab Emirates</li>
              </ul>
          </div>
          <div class="small-12 medium-3 large-3 columns">
              <ul class="list">
                  <li class="list__item"><b>Asia</b></li>
                  <li class="list__item"><a href="http://www.newbalance.com.hk/">Hong Kong</a></li>
                  <li class="list__item">India</li>
                  <li class="list__item">Indonesia</li>
                  <li class="list__item">Malaysia</li>
                  <li class="list__item">Philippines</li>
                  <li class="list__item"><a href="http://www.newbalance.com.sg/">Singapore</a></li>
                  <li class="list__item">Thailand</li>
                  <li class="list__item"><a href="http://www.newbalance.com.tr/">Türkiye</a></li>
                  <li class="list__item"><a href="http://www.newbalance.com.cn/">中国大陆</a></li>
                  <li class="list__item"><a href="http://www.newbalancetaiwan.com.tw/">台灣</a></li>
                  <li class="list__item"><a href="http://www.newbalance.co.jp/">日本</a></li>
                  <li class="list__item"><a href="http://www.nbkorea.com/">대한민국</a></li>
              </ul>
              <ul class="list">
                  <li class="list__item"><b>Oceania</b></li>
                  <li class="list__item"><a href="http://www.newbalance.com.au/">Australia</a></li>
                  <li class="list__item"><a href="http://www.newbalance.co.nz/">New Zealand</a></li>
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
