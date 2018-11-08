<?php if( get_field("enable_primary_button") && get_field("primary_button") ): ?>
    <div class="custom-btn-wrapper">
       <button class="custom-field-btn primary-btn"><?php echo the_field("primary_button")?></button>
    </div>
<?php endif; ?>