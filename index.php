<?php get_header(); ?>

<h1>
  <?php bloginfo('title'); ?>
  <?php
    if(have_posts()):
      while(have_posts()): the_post(); ?>
      <h1><?php echo the_title(); ?></h1>
      <?php endwhile;
    endif;
  ?>
  <?php
    if(!get_field('enable_title_section')):
      if(get_field('title_section')): ?>
        <p><?php echo get_field('title_section') ?></p>
      <?php endif;
    endif;
  ?>

</h1>
<?php the_content(); ?>

<h3><?php bloginfo('description'); ?></h3>
<?php while (have_posts()) { the_post(); ?>

<h5><?php the_date(); ?></h5>


<h2>
<a href="index.php?p=<?php the_ID(); ?>">

</a>
</h2>

<hr/>
<?php } ?>
</body>
</html>
