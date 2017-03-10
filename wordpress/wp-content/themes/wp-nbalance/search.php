<?php get_header(); ?>


    <div class="site__head with-shadow">
      <div class="site__head_inner">
        <h1><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
      </div>
    </div>

    <div class="account">
      <div class="row account__body">
        <div class="small-12 medium-8 large-8 medium-push-4 large-push-4 columns">
          <div class="account__content">
            <div <?php post_class(); ?>>
              <div class="account__head"><?php  echo get_search_query(); ?></div>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>
            </div>
          </div>
        </div>

          <?php get_sidebar(); ?>

      </div>
    </div>


<?php get_footer(); ?>
