<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div id="wrapper">
      <?php include Wrapper\template_path(); ?>
    </div>
  
    <?php
      do_action('get_footer'); ?>

<?php if(!is_front_page() && !is_page(array('community'))): get_template_part('templates/modules/social','stripe'); endif; ?>
<?php if(!is_page(array('contact-us','community'))): get_template_part('templates/footer/lookbook'); endif; ?>
<?php if(!is_page(array('community'))): get_template_part('templates/footer/club'); endif; ?>

      <?php get_template_part('templates/footer');
      wp_footer();
    ?>
    <?php wp_reset_query(); if (is_single()): ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55c9071c3bc72816" async="async"></script>
    <?php endif; ?>
  </body>
</html>
