<article>
  <h3>
    <a href="<?php the_permalink(); ?>">
      <?php the_title() ?>
    </a>
  </h3>
  <p>
    <?php the_excerpt(); ?>
  </p>
  <footer>
    <?php echo get_the_date( get_option('date_format') ); ?>
  </footer>
</article>
