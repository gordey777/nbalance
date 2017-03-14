<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <div class="site__head with-shadow">
      <div class="site__head_inner">
        <h1><?php the_title(); ?></h1>
      </div>
      <?php edit_post_link(); ?>
    </div>

    <div class="account">
      <div class="row account__body">
        <div class="small-12 medium-8 large-8 medium-push-4 large-push-4 columns">
          <div class="account__content">
            <div <?php post_class(); ?>>

              <?php the_content(); ?>
            </div>
          </div>
        </div>

          <?php get_sidebar(); ?>


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

