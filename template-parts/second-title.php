<?php
  if(get_field('enable_second_title')):
    if(get_field('second_title')): ?>
    <div class="section-title">
      <?php echo get_field('second_title') ?>
    </div>
    <?php endif;
  endif;
?>
