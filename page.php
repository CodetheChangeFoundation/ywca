<?php get_header(); ?>

<h1><?php bloginfo('title'); ?></h1>

<h3><?php bloginfo('description'); ?></h3>



<?php while (have_posts()) { the_post(); ?>

    <h2 class="strong">
        <a href="index.php?p=<?php the_ID(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <?php the_content(); ?>

<?php } ?>

<?php

$paraEnabled = get_field("paragraph-enabled");
if ($paraEnabled) { // Set up varialbes if the paragraph was enabled
  $para = get_field("paragraph");
  $title = get_field("title");
  $title_size = get_field("title_size");
  if($title) { // If the title was not left blank, then display it
    echo "<${title_size}> ${title} </${title_size}>";
  }
  if ($para) { // If there is something in paragraph, display it
    echo "<p>${para}</p>";
  }
}
 ?>

<?php get_footer();?>
