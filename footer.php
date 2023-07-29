<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amberline
 */
?>

    <!-- Footer  -->
    <footer id="footer_section">
      <div class="container">
        <div class="menu_footer">
          <div class="first_row">
            <div class="list">
              <h3 class="heading">General</h3>
                <?php
                  wp_nav_menu(array(
                      'theme_location' => 'menu-2',
                      'container' => '',
                      'menu_class' => 'whole',
                  ));
                ?>  
            </div>
          </div>
          <div class="first_two_row">
            <div class="list">
              <h3 class="heading">Policy</h3>
              <?php
                  wp_nav_menu(array(
                      'theme_location' => 'menu-3',
                      'container' => '',
                      'menu_class' => 'whole',
                  ));
                ?>  
            </div>
          </div>
          <div class="second_blank"></div>
          <div class="second_row">
            <h3 class="heading">Contact Us</h3>
            <p class="paragraph">
              Ravensdale Industrial Estate, Unit 9, Timberwharf Rd, London N16 6DB, United Kingdom
            </p>
            <div class="phone">
              Phone: <a href="tel:+442088023839">+44 20 8802 3839</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright">
      <p>© Copyright 2023 Springview Windows Ltd</p>
    </div>
    <!-- End Footer  -->

<?php wp_footer(); ?>

</body>
</html>
