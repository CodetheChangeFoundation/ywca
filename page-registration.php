<?php
/*
  Template Name: Registration Page
*/
get_header(); ?>

<h1><?php get_template_part('template-parts/title') ?></h1>

<?php
    while (have_posts()) {
        the_post();
        ?>

<p><?php the_content(); ?></p>

<h2>
  <a href="index.php?p=<?php the_ID(); ?>"></a>
</h2>

<?php } ?>
</body>
</html>
