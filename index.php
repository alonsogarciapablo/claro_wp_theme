<?php get_header(); ?>

<section class="page-section list-of-posts blog">
  <div class="row">
    <div class="small-11 small-centered medium-7 columns">
      <header class="text-center">
        <h2><?php the_title(); ?></h2>
      </header>

      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

        <?php get_template_part('content', 'list'); ?>

      <?php endwhile; ?><?php endif; ?>
    </div>
  </div>
</section>

<?php get_template_part('navigation'); ?>

<?php get_footer(); ?>
