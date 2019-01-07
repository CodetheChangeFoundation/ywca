<div class="custom-paragraph">
<?php if (get_field("paragraph_large_text")): ?>
       <span class="welcome-large-text"><?php echo the_field("paragraph_large_text")?></span>
<?php endif;
if (get_field("paragraph_small_text")): ?>
       <span class="welcome-small-text"><?php echo the_field("paragraph_small_text")?></span>
<?php endif; ?>
</div>
