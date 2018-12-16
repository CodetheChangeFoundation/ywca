<?php if( get_field("enable_paragraph") && get_field("paragraph_large_text") && get_field("paragraph_small_text") ): ?>
       <span><?php echo the_field("paragraph_large_text")?></span>
       <span><?php echo the_field("paragraph_small_text")?></span>
<?php endif; ?>