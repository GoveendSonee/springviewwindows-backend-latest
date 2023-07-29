<?php

/**
 * Template Name:  Offer Page
 */

get_header();
?>

<!-- Banner Section  -->
<section id="banner_section">
  <div class="card">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/offer_banner.jpeg" class="card-img-top" alt="" />
  </div>
</section>
<!-- End Banner  -->

<!-- Selection Button  -->
<section id="selection_buttom">
<div class="container_wrapper">
  <div class="menu-bottom-component">
    <div class="wrapper first">
      <div class="wrapper">
        <ul class="offer-menu">
          <li class="has-submenu">
            <a href="">ALU <i class="bx bx-chevron-down"></i></a>
            <ul class="offer-submenu">
              <li><a href="/en/offer/alu/window.html">Windows</a></li>
              <li>
                <a href="/en/offer/alu/terrace-systems.html"
                  >Terrace systems</a
                >
              </li>
              <li>
                <a href="/en/offer/alu/facade-systems.html"
                  >Facade systems</a
                >
              </li>
              <li>
                <a href="/en/offer/alu/front-door.html">Front door</a>
              </li>
            </ul>
          </li>
          <li class="has-submenu">
            <a href="">PVC <i class="bx bx-chevron-down"></i></a>
            <ul class="offer-submenu">
              <li><a href="/en/offer/pvc/window.html">Windows</a></li>
              <li>
                <a href="/en/offer/pvc/terrace-windows.html"
                  >Terrace windows</a
                >
              </li>
              <li>
                <a href="/en/offer/pvc/front-door.html">Front door</a>
              </li>
            </ul>
          </li>
          <li><a href="">Glass constructions</a></li>
          <li><a href="">Innovations</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>
<!-- End Selection Button  -->

<?php get_footer(); ?>