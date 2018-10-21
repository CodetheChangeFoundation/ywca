<?php get_header(); ?>

<h1><?php bloginfo('title'); ?></h1>

<h3><?php bloginfo('description'); ?></h3>

<?php

$args = array(
	'post_type' => 'paragraph',
);
$your_loop = new WP_Query( $args );

if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post();
$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

<h1>Content</h1>
<?php the_content(); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>


<?php while (have_posts()) { the_post(); ?>

<h2 class="strong">
<a href="index.php?p=<?php the_ID(); ?>">
<?php the_title(); ?>
</a>
</h2>

<?php the_content(); ?>

<?php } ?>

<?php get_footer();?>
