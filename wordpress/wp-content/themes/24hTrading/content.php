<?php /* content for single.php*/ if(is_single()) : ?>


  <div class="row featurette">
    <div class="col-md-8">
      <h2 class="featurette-heading">
         <?php the_title(); ?>
      </h2>
      <span class="meta-data-post">
        <?php the_time('F j, Y g:i a'); ?>
        by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
          <?php the_author(); ?>
        </a>
      </span>
      <?php if(has_post_thumbnail()) : ?>
        <div class="thumb">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php else: ?>
        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x450/auto" alt="Banner">
      <?php endif; ?>
      <p class="lead"> <?php the_content(); ?> </p>
    </div>



    <div class="col-md-4">
      <div class="contenitore_sidebar">
        <?php if(is_active_sidebar('sidebar')): ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">

    <?php comments_template(); ?>

  <hr class="featurette-divider">





<?php /* content for index.php */ else: ?>
  <div class="row featurette">
    <div class="col-md-8">
      <h2 class="featurette-heading">
        <a href="<?php the_permalink(); ?>">
         <?php the_title(); ?>
       </a>
      </h2>
      <span class="meta-data-post">
        <?php the_time('F j, Y g:i a'); ?>
        by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
          <?php the_author(); ?>
        </a>
      </span>
      <p class="lead"> <?php the_excerpt(); ?> </p>
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

<?php endif; ?>
