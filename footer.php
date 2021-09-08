<footer class="footer">

  <div class="footer-top d-flex">
      <div class="footer-logo">
        <div class="logo"><?php dynamic_sidebar('footer-logo'); ?>
          <img src="wp-content/themes/OTM-WP-THEME-2.0-MASTER/assets/img/footer-logo.png" alt="">
        </div>
        
        <div class="contact-info">
          <p>Paper Point LLC</p>
          <p>support@paperpoint.com</p>
          <p>877-570-9755</p>
        </div>

      </div>
      
    <div class="foot-menus">
      <div class="menu-1">
        <h3>Services</h3>
        <?php 
        $footer1_menu_array = array(
          'container' => 'div',
          'items_wrap' => '<ul id="%1$s">%3$s</ul>',
          'theme_location' => 'footer-nav1',
          'container_class' => 'footer-menu-1',
          'fallback_cb' => false
        );

        wp_nav_menu( $footer1_menu_array );
        ?>
      </div>

      <div class="menu-2">
      <h3>Company</h3>
        <?php 
        $footer2_menu_array = array(
          'container' => 'div',
          'items_wrap' => '<ul id="%1$s">%3$s</ul>',
          'theme_location' => 'footer-nav2',
          'container_class' => 'footer-menu-2',
          'fallback_cb' => false
        );

        wp_nav_menu( $footer2_menu_array );
        ?>
      </div>    
    </div>

  </div>

  <?php include_once "template-parts/footermenu.php" ?>

</footer>

<?php wp_footer(); ?>
<?php otm_page_footer_scripts(); ?>
</body>
</html>
