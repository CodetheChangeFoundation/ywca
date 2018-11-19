<?php get_header(); ?>


<title><?php bloginfo('title'); ?></title>
<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
</head>
<body>

<h1><?php bloginfo('title'); ?>



    </h1>

<h3><?php bloginfo('description'); ?></h3>
<<<<<<< HEAD

<?php while (have_posts()) { the_post(); ?>


=======
 
<?php while (have_posts()) { 
    the_post(); 
    
    ?>
 
 
>>>>>>> origin
<h2 class="strong">
<a href="index.php?p=<?php the_ID(); ?>">
<?php the_title(); ?>
</a>
</h2>

<?php the_content(); ?>


<<<<<<< HEAD
<hr/>
=======


 
>>>>>>> origin
<?php } ?>

<?php get_footer();?>
