<?php get_header(); ?>


<div class="img-container"> 
    <img class="home-page-img" src="<?php echo get_template_directory_uri() . '/assets/images/home-page-image.jpg'; ?>"/>
</div>

<div class="welcome-section">
    <div class="section-title">Welcome!</div>
    <div class="welcome-text">
        <span>YWCA Metro Vancouver is committed to giving children and youth across Metro Vancouver the tools they need to make smart choices
            and grow up healthy, happy and engaged in their communities. </span><span>Our after-school programs connect youth with positive role models
                and inspire them to play a leading role in their personal development and the development of their communities. We offer our programs
                in Vancouver, Richmond, Surrey and Cloverdale.
            </span>
    </div>
</div>

<div class="mid-section">
    <div class="section-title">Programs</div>
    <div class="programs">
        <div class="dot-wrapper">
            <span style="background-color: #92C04E" class="dot"></span>
            <span class="program-title">That's Just Me</span>
        </div>
        <div class="dot-wrapper">
            <span style="background-color: #F03C69" class="dot"></span>
            <span class="program-title">Welcome To My Life</span>
        </div>
        <div class="dot-wrapper">
            <span style="background-color: #00AB96" class="dot"></span>
            <span class="program-title">Being Me</span>
        </div>
        <div class="dot-wrapper">
            <span style="background-color: #6399AB" class="dot"></span>
            <span class="program-title">Boys 4 Life</span>
        </div>
    </div>
</div>

<div class="lower-section">
    <p>You are about to complete the participant registration form for your child to attend YWCA after-school programs. The pieces include:</p>
    <div class="list-steps">
        <div class="list-item">
            <div class="round-list-number">1</div>
            <div>Registration Form</div>
        </div>

        
        <div class="round-list-number">2</div>
        <div class="round-list-number">3</div>
        <div class="round-list-number">4</div>
    </div>
    <p>Registration will take about 15 minutes.</p>
</div>

<?php
  if(!get_field('enable_register_button')):
    if(get_field('register_button')): ?>
      <p><?php echo get_field('register_button') ?></p>
    <?php endif;
  endif;
?>





 


<?php get_footer();?>