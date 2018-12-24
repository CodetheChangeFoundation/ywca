<?php get_header(); ?>

<div class="content-wrapper">

    <div class="w-100">
        <img class="home-page-img" src="<?php echo get_template_directory_uri() . '/assets/images/home-page-image.jpg'; ?>"/>
    </div>

    <div class="container welcome-section">
        <?php get_template_part('template-parts/first-title');?>
        <div class="row">
            <?php get_template_part('template-parts/paragraph'); ?>
        </div>
    </div>

    <div class="container mid-section">
        <?php get_template_part('template-parts/second-title')?>
        <div class="row">
            <?php
            get_template_part('template-parts/program-one');
            get_template_part('template-parts/program-two');
            get_template_part('template-parts/program-three');
            get_template_part('template-parts/program-four');
            ?>
        </div>
    </div>

    <div class="lower-section">
        <?php get_template_part('template-parts/steps'); ?>
    </div>

    <?php
    get_template_part('/template-parts/register-button');
    ?>
</div>
<?php get_footer();?>