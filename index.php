<?php get_header(); ?>
  <div class="content-wrapper">
    <title>
      <?php bloginfo('title'); ?>
    </title>
    </head>

    <body>
      <h1>
        <?php get_template_part('template-parts/first-title')?>
        <?php get_template_part('template-parts/second-title')?>
      </h1>
      <h3>
        <?php bloginfo('description'); ?>
      </h3>
      <?php get_template_part('template-parts/paragraph'); ?>

      <?php while (have_posts()) {
        the_post();
      ?>
      <?php the_content();
      }
    ?>
  </div>
<?php get_footer();?>
</body>