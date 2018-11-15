<?php
/*
  Template Name: Registration Page
*/
get_header(); ?>

<h1><?php get_template_part('title'); ?></h1>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <article class="post">
        <p><?php the_content(); ?></p>
    </article>
    <?php
} // end while
} // end if
?>

<h2>
  <a href="index.php?p=<?php the_ID(); ?>"></a>
</h2>

<?php  ?>
</body>
</html>
