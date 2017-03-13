<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if( get_field('title_bg') ) { ?>
      <div class="site__title"  style="background-image: url(<?php the_field('title_bg'); ?>);">
    <?php }
    else { ?>
      <div class="site__title"  style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg_content.jpg);">
    <?php } ?>
      <div>
        <div class="row">
          <div class="small-12 columns">
            <h1><?php the_title(); ?></h1>
            <h6></h6>
            <h6><?php the_time('d F, Y'); ?></h6>
          </div>
        </div>
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

    <div class="content row fixed-width-narrow">
      <div class="small-12 columns">
        <?php edit_post_link(); ?>
        <div class="content__text">
            <?php the_content(); ?>
        </div>

      </div>
    </div>
    <div class="index__news">

      <?php $category = get_the_category(); ?>

      <h5><?php echo $category[0]->cat_name; ?></h5>

      <div id="news-owl-carousel" class="swiper-container slider--fw swiper-container-horizontal owl-carousel" style="cursor: -webkit-grab;">
    <?php $categories = get_the_category($post->ID);
    if ($categories) {
     $category_ids = array();
     foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
     $args=array(
     'category__in' => $category_ids,
     'orderby'=>date,
     'post__not_in' => array($post->ID),
     'showposts'=>99,
     'caller_get_posts'=>1);
     $my_query = new wp_query($args);
     if( $my_query->have_posts() ) {

            while ($my_query->have_posts()) {
                $my_query->the_post();
            ?>
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
            <?php
            }

        }
    wp_reset_query();
    }
    ?>




    </div><!-- /.index__news -->

  </div>
</div>

  <?php endwhile; else: ?>
    <div class="content row fixed-width-narrow">
      <div class="small-12 columns">
        <div class="content__text">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </div>

      </div>
    </div>

  <?php endif; ?>

<?php get_footer(); ?>
