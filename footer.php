  <footer class="footer">
    <div class="flex-container">
          <div>
            <img id="footer-logo-vertical-line" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" />
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
