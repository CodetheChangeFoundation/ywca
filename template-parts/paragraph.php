<?php
  if (get_field("paragraph_enabled") && get_field("paragraph")) {
      ?> <p class="custom-paragraph"> <?php echo the_field("paragraph");?> </p> <?php
  }
 ?>