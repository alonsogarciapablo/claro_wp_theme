<article class="page-section post">
  <div class="row">
    <div class="small-11 small-centered medium-10 columns">
      <header class="text-center">
        <h2><?php the_title(); ?></h2>
        <?php if (is_single()): ?>
          <span><?php the_date(); ?></span>
        <?php endif ?>
      </header>
    </div>
  </div>
  <div class="row">
    <div class="small-11 small-centered medium-7 columns">
      <div>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>

