<?php get_header(); ?>

    <div class="account">
      <div class="row account__body">
        <div class="small-12 columns">
          <div class="account__content">
            <div <?php post_class(); ?>>
              <div class="account__head"><h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1></div>
                <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
            </div>
          </div>
        </div>


      </div>
    </div>
<?php get_footer(); ?>
