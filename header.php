<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
      } else {
        bloginfo('name'); echo " - "; bloginfo('description');
       }
    ?>" />
    <title><?php if (is_front_page()) { bloginfo('name'); echo " - "; bloginfo('description'); } else { wp_title( '-', true, 'right' ); } ?> Pablo Alonso</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,900,700,600,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,900,700,600,300' rel='stylesheet' type='text/css'>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
    
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="site-header">
      <div class="row">
        <div class="small-11 small-centered columns">
          <h1 class="text-center my-name">
            <a href="<?php echo get_option('home'); ?>">
              <strong>Pablo</strong> Alonso
            </a>
          </h1>
          <div class="row">
            <p class="small-12 medium-6 medium-centered large-7 columns text-center who-am-i">
              Hi! I'm a Ruby on Rails and front-end web developer. I ♥ crafting great
              user experiencies. I'm currently looking for new opportunities.<br>
              <a href="mailto:<?php bloginfo('admin_email') ?>?subject=Hello!">Let's talk!</a>
            </p>
          </div>
        </div>
      </div>

      <nav id="site-nav">
        <?php 
          $defaults = array(
            'theme_location'  => 'header-menu',
            'container'       => false,
            'menu_class'      => 'centered-inline-list'
          );

          wp_nav_menu( $defaults );
        ?>
      </nav>
    </header>

    <div id="content">

