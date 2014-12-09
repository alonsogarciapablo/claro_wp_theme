<?php

  // function to count views.
  function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count=='') {
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
    } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  }

  function custom_excerpt_length( $length ) {
    return 25;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

  function new_excerpt_more( $more ) {
    return '…';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
?>
