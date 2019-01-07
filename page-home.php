<?php get_header(); ?>

<div class="content-wrapper">

    <?php get_template_part('template-parts/landing-page-image'); ?>

    <div class="container welcome-section">
        <?php get_template_part('template-parts/first-title');?>
        <div class="row">
            <?php get_template_part('template-parts/paragraph'); ?>
        </div>
    </div>

    <div class="container mid-section">
        <?php get_template_part('template-parts/second-title')?>
        <div class="row program-row">
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

    <?php get_template_part('/template-parts/button'); ?>
</div>
<?php get_footer();?>