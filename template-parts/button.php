<?php if(get_field("enable_button") && get_field("button_text")): ?>
    <div class="custom-btn-wrapper">
        <a href="<?php the_field("button_link")?>" class="custom-btn-link">
            <button class="<?php the_field("button_colour") ?> custom-field-btn">
                <?php the_field("button_text")?>
            </button>
        </a>
    </div>
<?php endif;?>