<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A first site using custom wordpress theme">

<title><?php bloginfo('title'); ?></title>
<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
</head>
<body>
 
<h1><?php bloginfo('title'); ?>
    
<!--<?php    $reflFunc = new ReflectionFunction('the_title');
print $reflFunc->getFileName() . ':' . $reflFunc->getStartLine(); ?> -->
    
    </h1>
 
<h3><?php bloginfo('description'); ?></h3>
 
<?php while (have_posts()) { the_post(); ?>
 
<h5><?php the_date(); ?></h5>
 
<h2>
<a href="index.php?p=<?php the_ID(); ?>">
<?php the_title(); ?>
</a>
</h2>
 
<?php the_content(); ?>
 
<hr/>
<div class="footer">
    <h1>This is a footer</h1>
</div>
<?php } ?>
</body>
</html>