<?php
  if (get_field("paragraph_enabled") && get_field("paragraph")) {
      ?> <p> <?php echo the_field("paragraph");?> </p> <?php
  }
 ?>