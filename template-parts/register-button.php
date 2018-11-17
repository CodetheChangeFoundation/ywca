<?php if( get_field("enable_register_button") && get_field("register_button") ): ?>
    <div class="custom-btn-wrapper">
       <button class="custom-field-btn register-btn"><?php echo the_field("register_button")?></button>
    </div>
<?php endif; ?>