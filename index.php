<?php get_header(); ?>

<h1><?php bloginfo('title'); ?></h1>
 
<h3><?php bloginfo('description'); ?></h3>
 
<?php while (have_posts()) { 
    the_post(); 
    
    ?>
 
 
<h2 class="strong">
<a href="index.php?p=<?php the_ID(); ?>">
<?php the_title(); ?>
</a>
</h2>
 
<?php the_content(); ?>

<?php get_template_part("template-parts/primary-button") ?>
<?php get_template_part("template-parts/submit-button") ?>




 
<?php } ?>

<?php get_footer();?>