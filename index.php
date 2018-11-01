<?php get_header(); ?>


<h1>
<?php
  get_template_part('title');
?>
</h1>


<?php the_content(); ?>

<h3><?php bloginfo('description'); ?></h3>

<?php
// if (have_posts()):
    while (have_posts()) {
      the_post();
 // endwhile; // end while
// endif; // end if
?>
<h5><?php the_date(); ?></h5>
<?php the_content(); ?>
<h2>
  <a href="index.php?p=<?php the_ID(); ?>"></a>
</h2>

<?php } ?>
</body>
</html>
