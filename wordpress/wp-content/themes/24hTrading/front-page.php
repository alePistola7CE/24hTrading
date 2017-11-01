<?php get_header(); ?>


<!-- Three columns of text below the carousel -->
<div class="row">
    <?php if(is_active_sidebar('widget1')) : ?>
      <?php dynamic_sidebar('widget1'); ?>
    <?php endif;?>

    <?php if(is_active_sidebar('widget2')) : ?>
      <?php dynamic_sidebar('widget2'); ?>
    <?php endif;?>

    <?php if(is_active_sidebar('widget3')) : ?>
      <?php dynamic_sidebar('widget3'); ?>
    <?php endif;?>
</div><!-- /.row -->

<hr class="featurette-divider">

<?php get_footer(); ?>
