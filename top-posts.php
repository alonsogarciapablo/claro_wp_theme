
<section class="page-section list-of-posts">
  <div class="row">
    <div class="small-11 small-centered medium-7 columns">
      <header class="text-center">
        <h2>Most popular posts</h2>
      </header>
      <?php
        $args = array(  'numberposts'  => 4,  /* get 4 posts, or set -1 for all */
                        'orderby'      => 'meta_value',  /* this will look at the meta_key you set below */
                        'meta_key'     => 'post_views_count',
                        'order'        => 'DESC',
                        'post_type'    => 'post',
                        'post_status'  => 'publish',
	                'exclude'      => get_the_ID()
                     );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <?php get_template_part('content', 'list'); ?>

     <?php endforeach ?>
    </div>
  </div>
</section>

