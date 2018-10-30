<?php if( get_field("enable_submit_button") && get_field("submit_button") ): ?>
    <div class="submit-btn-wrapper">
       <button class="submit-btn"><?php echo the_field("submit_button")?></button>
    </div>
<?php endif; ?>