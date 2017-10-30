<?php get_header(); ?>


      <!-- START THE FEATURETTES -->
      <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post(); ?>

      <div class="row featurette">
        <div class="col-md-8">
          <h2 class="featurette-heading">
             <?php the_title(); ?>
          </h2>
          <p class="lead"> <?php the_content(); ?> </p>
          <?php echo do_shortcode('[stockdio-historical-chart]'); ?>
        </div>

        <div class="col-md-4">
          <?php if(has_post_thumbnail()) : ?>
            <div class="thumb">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php else: ?>
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x450/auto" alt="Banner">
          <?php endif; ?>
        </div>
      </div>

      <hr class="featurette-divider">

      <?php endwhile; ?>
    <?php else :  ?>
      <p> <?php __('No page Found');?> </p>
    <?php endif; ?>
      <!-- /END THE FEATURETTES -->

<?php get_footer();?>
