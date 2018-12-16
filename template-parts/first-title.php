<?php
  if(get_field('enable_first_title')):
    if(get_field('first_title')): ?>
    <div class="first-title">
      <?php echo get_field('first_title') ?>
      <div class="title-underline">
    </div>
    <?php endif;
  endif;
?>
