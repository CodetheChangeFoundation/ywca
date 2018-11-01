
<?php
  if(!get_field('enable_title_section')):
    if(get_field('title_section')): ?>
      <p><?php echo get_field('title_section') ?></p>
    <?php endif;
  endif;
?>
