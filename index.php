<?php get_header(); ?>
  <div class="content-wrapper">

    <div class="container welcome-section">
        <?php get_template_part('template-parts/first-title');?>
    </div>  

    <body>
      <h3>
        <?php bloginfo('description'); ?>
      </h3>

      <?php while (have_posts()) {
        the_post();
        the_content();
      }
    ?>
  </div>
<?php get_footer();?>
</body>