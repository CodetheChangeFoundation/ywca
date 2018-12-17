<?php 
if (get_field("program_one_name")): 
    $link = get_field("program_one_link");
    $image = get_field("program_one_image");
    $description = get_field("program_one_description");
    if ($link): ?>
        <a href="<?php echo the_field("program_one_link") ?>" class="program-link">
    <?php endif; ?>
        <div class="dot-wrapper">
            <?php if ($image): ?>
                <img src="<?php echo the_field("program_one_image")?>" class="dot"/>
            <?php endif ?>
            <p class="program-title"><?php echo the_field("program_one_name")?></p>
            <?php if ($description): ?>
                <p class="program-description">
                    <?php echo the_field("program_one_description")?>
                </p>
            <?php endif; ?>
        </div>
    <?php if ($link): ?>
        </a>
    <?php endif; 
endif;?>