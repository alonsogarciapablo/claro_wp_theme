
<section class="navigation">
  <div class="row">
    <div class="small-11 small-centered medium-7 columns">
      <nav>
        <div class="row">
          <div class="small-12 medium-6 columns previous">
            <?php if (is_single()): ?>
              <?php next_post_link('%link'); ?>
            <?php else: ?>
	            <?php next_posts_link('Older posts'); ?>
            <?php endif ?>
          </div>
          <div class="small-12 medium-6 columns text-right next">
            <?php if (is_single()): ?>
	            <?php previous_post_link('%link'); ?>
            <?php else: ?>
	            <?php previous_posts_link('Newer posts'); ?>
            <?php endif ?>
          </div>
        </div>
      </nav>
    </div>
  </div>
</section>
