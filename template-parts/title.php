<?php
  if(!get_field('enable_title_section')):
    if(get_field('title_section')): ?>
    <div class="custom-title">
      <?php echo get_field('title_section') ?>
      <div class="title-underline">
    </div>
    <?php endif;
  endif;
?>
