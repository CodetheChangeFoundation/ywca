<?php
  if(get_field('enable_first_title')):
    if(get_field('first_title')): ?>
    <div class="section-title">
      <?php echo get_field('first_title') ?>
    </div>
    <?php endif;
  endif;
?>
