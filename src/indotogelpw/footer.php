<?php
/**
 * Theme's footer file.
 * 
 * @link https://github.com/indotogel/indotogel-wp-themes
 */
?>
    <?php 
    get_template_part( 'partials/footer', 'main' ); ?>
    
    <script src="<?php bloginfo('template_url'); ?>/scripts/app.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
