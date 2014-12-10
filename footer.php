    </div><!-- content -->

    <footer id="site-footer">
      <div class="row">
        <div class="small-11 small-centered columns text-center">
          <h4 class="my-name">
            <strong>Pablo</strong> Alonso
          </h4>
          <ul class="centered-inline-list social-media-links">
            <li><a href="mailto:<?php bloginfo('admin_email') ?>">Email</a></li>
            <li><a target="_blank" href="http://linkedin.com/in/alonsogarciapablo">LinkedIn</a></li>
            <li><a target="_blank" href="http://twitter.com/_pablo_alonso">Twitter</a></li>
            <li><a target="_blank" href="https://github.com/alonsogarciapablo">Github</a></li>
            <li><a target="_blank" href="http://codepen.io/alonsogarciapablo/">Codepen</a></li>
          </ul>
          <p class="copyright">
            Designed and built by me. Check out the <a href="https://github.com/alonsogarciapablo/claro_wp_theme" target="_blank">source code here</a>.
          </p>
        </div>
      </div>
    </footer>

    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
