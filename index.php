<?php get_header(); ?>
<div class="content-wrapper">

<title><?php bloginfo('title'); ?></title>

</head>
<body>

<h1><?php get_template_part('template-parts/title')?></h1>

<h3><?php bloginfo('description'); ?></h3>

<?php while (have_posts()) { the_post(); ?>


<h2 class="strong">
<a href="index.php?p=<?php the_ID(); ?>">
<?php the_title(); ?>
</a>
</h2>

<?php the_content(); ?>

<hr/>
<?php } ?>

</div>
<?php get_footer();?>
