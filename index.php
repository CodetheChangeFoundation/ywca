<?php get_header(); ?>
  <div class="content-wrapper">
    <title>
      <?php bloginfo('title'); ?>
    </title>
    </head>

    <body>
      <h3>
        <?php bloginfo('description'); ?>
      </h3>

      <?php while (have_posts()) {
        the_post();
      ?>
      <?php the_content();
      }
    ?>
  </div>
<?php get_footer();?>
</body>