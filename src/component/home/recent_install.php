    <!-- Recent Installation -->
    <section id="recent_install">
      <div class="container">
        <div class="heading_main">
          <?php if( get_field('title_most_recent_install') ): ?>
            <h1><?php the_field( 'title_most_recent_install' ); ?></h1>
          <?php endif; ?>
        </div>
        <div class="details">
            <!-- Swiper -->
            <div class="swiper mySwiper_exaltare">

              <div class="swiper-wrapper image-container">

                <?php if ( have_rows( 'product_image_recent_installation' ) ) : ?>
                  <?php while ( have_rows( 'product_image_recent_installation' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'product_image' ) ) : ?>
                    <div class="swiper-slide">
                        <div class="slide_content">
                            <img src="<?php the_sub_field( 'product_image' ); ?>" alt="" class="popup-trigger">
                        </div>
                    </div>
                    <?php endif ?>
                  <?php endwhile; ?>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
                  
              </div>

              <div class="popup-overlay">
                <div class="popup-content">
                  <img src="" alt="Popup Image" class="popup-image">
                  <span class="popup-close">&times;</span>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
        <script>
          const popupTriggers = document.querySelectorAll('.popup-trigger');
          const popupOverlay = document.querySelector('.popup-overlay');
          const popupImage = document.querySelector('.popup-image');
          const popupClose = document.querySelector('.popup-close');

          popupTriggers.forEach((trigger) => {
            trigger.addEventListener('click', () => {
              const imageSrc = trigger.getAttribute('src');
              popupImage.setAttribute('src', imageSrc);
              popupOverlay.style.display = 'block';
            });
          });

          popupClose.addEventListener('click', () => {
            popupOverlay.style.display = 'none';
          });
        </script>
      </div>
    </section>
    <!-- End Recent Installation -->