<?php get_header(); ?>

<h1><?php bloginfo('title'); ?></h1>

<h3><?php bloginfo('description'); ?></h3>

<?php

$args = array(
    'post_type' => 'page',
);
$your_loop = new WP_Query( $args );

if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post();
    $meta = get_post_meta( $post->ID, 'paragraph_fields', true );

    if ($meta['select'] == "top" && is_page($post->ID)) {
        echo $meta['text'];
    }
    ?>



<?php endwhile; endif; wp_reset_postdata();
?>



<?php while (have_posts()) { the_post(); ?>

    <h2 class="strong">
        <a href="index.php?p=<?php the_ID(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

    <?php the_content(); ?>

<?php } ?>

<?php

$args = array(
    'post_type' => 'page',
);
$your_loop = new WP_Query( $args );

if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post();
    $meta = get_post_meta( $post->ID, 'paragraph_fields', true );
    if ($meta['select'] == "bottom" && is_page($post->ID)) {
        echo $meta['text'];
    }
    ?>



<?php endwhile; endif; wp_reset_postdata();
?>
<?php get_footer();?>
