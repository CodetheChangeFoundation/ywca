<?php if (get_field("introduction")): ?>
    <p class="steps-intro"><?php the_field("introduction")?></p>
<?php endif; ?>

<div class="list-steps">
<!-- Required -->
    <div class="list-item">
        <div class="round-list-number">1</div>
        <div class="round-list-text"><?php the_field("step_1")?></div>
    </div>

    <?php if (get_field("step_1_notes")): ?>
        <div class="list-step-note"><?php the_field("step_1_notes")?></div>
    <?php endif; ?>

    <div class="list-item">
        <div class="round-list-number">2</div>
        <div class="round-list-text"><?php the_field("step_2")?></div>
    </div>

    <?php if (get_field("step_2_notes")): ?>
        <div class="list-step-note"><?php the_field("step_2_notes")?></div>
    <?php endif; ?>

<!-- Optional -->
    <?php if (get_field("step_3")): ?>
        <div class="list-item">
            <div class="round-list-number">3</div>
            <div class="round-list-text"><?php the_field("step_3")?></div>
        </div>

        <?php if (get_field("step_3_notes")): ?>
            <div class="list-step-note"><?php the_field("step_3_notes")?></div>
        <?php endif; 
        
        if (get_field("step_4")): ?>
            <div class="list-item">
                <div class="round-list-number">4</div>
                <div class="round-list-text"><?php the_field("step_4")?></div>
            </div>

            <?php if (get_field("step_4_notes")): ?>
                <div class="list-step-note"><?php the_field("step_4_notes")?></div>
            <?php endif;

            if (get_field("step_5")): ?>
                <div class="list-item">
                    <div class="round-list-number">5</div>
                    <div class="round-list-text"><?php the_field("step_5")?></div>
                </div>
                <?php if (get_field("step_5_notes")): ?>
                    <div class="list-step-note"><?php the_field("step_5_notes")?></div>
                <?php endif;

                if (get_field("step_6")): ?>
                    <div class="list-item">
                        <div class="round-list-number">6</div>
                        <div class="round-list-text"><?php the_field("step_6")?></div>
                    </div>

                    <?php if (get_field("step_6_notes")): ?>
                        <div class="list-step-note"><?php the_field("step_6_notes")?></div>
                    <?php endif;
                endif;
            endif;
        endif;
    endif;?>

</div>

<?php if (get_field("ending_notes")): ?>
    <p class="steps-ending-notes"><?php the_field("ending_notes")?></p>
<?php endif; ?>
