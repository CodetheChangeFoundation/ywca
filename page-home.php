<?php get_header(); ?>

<div class="content-wrapper">
    <div class="img-container">
        <img class="home-page-img" src="<?php echo get_template_directory_uri() . '/assets/images/home-page-image.jpg'; ?>"/>
    </div>

    <div class="welcome-section">
        <?php get_template_part('template-parts/first-title')?>
        <div class="welcome-text custom-paragraph">
            <?php get_template_part('template-parts/paragraph'); ?>
        </div>
    </div>

    <div class="mid-section">
        <?php get_template_part('template-parts/second-title')?>
        <div class="programs">
            <?php
                get_template_part('template-parts/program-one');
                get_template_part('template-parts/program-two');
                get_template_part('template-parts/program-three');
                get_template_part('template-parts/program-four');
            ?>
        </div>
    </div>

    <div class="lower-section">
        <p>You are about to complete the participant registration form for your child to attend YWCA after-school programs. The pieces include:</p>
        <div class="list-steps">
            <div class="list-item">
                <div class="round-list-number">1</div>
                <div class="round-list-text">Registration Form</div>
            </div>
            <div class="list-item">
                <div class="round-list-number">2</div>
                <div class="round-list-text">Program Evaluation Consent Form</div>
            </div>
            <div class="list-item">
                <div class="round-list-number">3</div>
                <div class="round-list-text">Signed Release of Liability and Media Release Form</div>
            </div>
            <div style="padding-left: 65px; font-size: 16px;">(Note: On the waiver, you will be asked if your child is permitted to walk home or needs to be picked up by an approved adult. If they are permitted to walk home, they will be released from YWCA supervision at the end of the program.</div>
            <div class="list-item">
                <div class="round-list-number">4</div>
                <div class="round-list-text">Photo Release and Consent Form</div>
            </div>
        </div>
        <p>Registration will take about 15 minutes.</p>
    </div>

    <?php
    get_template_part('/template-parts/register-button');
    ?>
</div>
<?php get_footer();?>