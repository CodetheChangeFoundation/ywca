<div class="dot-wrapper col col-md-3 col-sm-6 col-xs-12">
    <?php
    if (get_field("program_two_name")):
        $link = get_field("program_two_link");
        $image = get_field("program_two_image");
        $description = get_field("program_two_description");
        
        if ($link): ?>
            <a href="<?php echo the_field("program_two_link") ?>" class="program-link">
        <?php endif; ?>
        
        <?php if ($image): ?>
            <img src="<?php echo the_field("program_two_image")?>" class="dot"/>
        <?php endif ?>
        
        <p class="program-title"><?php echo the_field("program_two_name")?></p>
        <?php if ($link): ?>
        </a>
        <?php endif;
        if ($description): ?>
            <p class="program-description">
                <?php echo the_field("program_two_description")?>
            </p>
        <?php endif; ?>
    <?php endif;?>
</div>