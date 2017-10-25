<?php get_header(); ?>


      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post(); ?>

          <?php get_template_part('content'); ?>

        <?php endwhile; ?>
      <?php else :  ?>
        <p> <?php __('No posts Found');?> </p>
      <?php endif; ?>
      <!-- /END THE FEATURETTES -->


<?php get_footer();?>
