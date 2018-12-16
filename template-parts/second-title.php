<?php
  if(get_field('enable_second_title')):
    if(get_field('second_title')): ?>
    <div class="secondary-title">
      <?php echo get_field('second_title') ?>
      <div class="title-underline">
    </div>
    <?php endif;
  endif;
?>
