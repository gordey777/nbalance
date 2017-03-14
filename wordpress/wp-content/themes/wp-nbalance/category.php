<?php get_header(); ?>

<div class="account">
  <div class="row account__body">
    <div class="small-12 columns">
      <div class="account__content">
        <div <?php post_class(); ?>>
          <div class="account__head">
            <h1 class="cat-title inner-title"><?php _e( 'Categories for', 'wpeasy' ); the_category(', '); ?></h1>
            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
