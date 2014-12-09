<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,900,700,600,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,900,700,600,300' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr.js"></script>
    
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
              Hi! I'm a remote full-stack software developer who cares about UX and builds products that delight and help real people.
              <a href="mailto:alonsogarciapablo@gmail.com?subject=Hello!">Let's talk!</a>
            </p>
          </div>
        </div>
      </div>
      
      <nav id="site-nav">
        <?php 
          $defaults = array(
          	'theme_location'  => 'header-menu',
          	'container'       => false,
          	'menu_class'      => 'centered-inline-list',
          	'echo'            => true,
          	'fallback_cb'     => 'wp_page_menu',
          	'before'          => '',
          	'after'           => '',
          	'link_before'     => '',
          	'link_after'      => '',
          	'depth'           => 0,
          	'walker'          => ''
          );

          wp_nav_menu( $defaults );
        ?>
      </nav>
    </header>
    
    <div id="content">
