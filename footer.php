  <div class="push"></div>
  <footer class="footer">
    <div class="flex-container">
          <div>
            <img class="header-logo logo-border footer-logo" src="<?php echo get_header_image(); ?>" alt="YWCA logo" />
          </div>
        <?php dynamic_sidebar('footer_text');?>
        </div>
        <p>
          &copy <?php echo date("Y"); ?> YWCA. <a href="http://codethechange.ca"> Developed by Code the Change Foundation.</a>
        </p>
    </div>
  </div>
  </footer>
  <?php wp_footer() ?>
