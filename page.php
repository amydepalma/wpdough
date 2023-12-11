<?php get_header() ?>

<div class="page-width box-shadow has-white-background-color">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer() ?>
