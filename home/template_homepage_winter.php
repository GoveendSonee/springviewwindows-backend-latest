<?php
/**
 * Template Name:  Winter Garden
 */

get_header();
?>

    <!-- Heading  -->
    <section id="heading_pages">
        <div class="container winter garden">
            <div class="topic_page">
                <h1 class="head"><?php the_title(); ?></h1>
                <hr class="hr_heading">
            </div>
        </div>
    </section>
    <!-- End Heading  -->

    <!-- Pages  -->
    <section id="glass_cons" class="glassaa">
        <div class="container press_articles winter_garden">

            <div class="bio_glass">
                <?php if ( get_field( 'winter_garden_featured_image' ) ) : ?>
                    <img src="<?php the_field( 'winter_garden_featured_image' ); ?>" />
                <?php endif ?>
            </div>

            <div class="list_glass press_articles">
                <div class="paragraph">
                    <div class="title"><?php the_field( 'winter_garden_feature_title' ); ?></div>
                    <?php the_field( 'winter_garden_description' ); ?>
                </div>
            </div>
        </div>
    </section>
    
    <style>

        section#slider .repopup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #ffffff88;
        -webkit-backdrop-filter: blur(10px);
                backdrop-filter: blur(10px);
        z-index: 9999;
        }

        section#slider .repopup-content {
        position: relative;
        text-align: center;
        top: 50%;
        -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
        }

        section#slider .repopup-image {
        margin: 0 auto;
        display: block;
        -o-object-fit: cover;
            object-fit: cover;
        height: 60vh;
        width: 70vh;
        border: 6px solid #fff;
        }

        section#slider .repopup-close {
        position: absolute;
        color: #fff;
        font-size: 35px;
        cursor: pointer;
        top: 0;
        margin: 0 12rem;
        }

    </style>

    <section id="slider">
        <div class="container">
            <div class="swiper mySwiper_winter_garden">
                <div class="swiper-wrapper">
                        
                    <?php if ( have_rows( 'winter_garden_gallery_image' ) ) : ?>
                    <?php while ( have_rows( 'winter_garden_gallery_image' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'image' ) ) : ?> 
                    <div class="swiper-slide">
                        <div class="img">
                            <img src="<?php the_sub_field( 'image' ); ?>" alt="" class="repopup-trigger">
                        </div>
                    </div>
                    <?php endif ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                    <?php endif; ?>

                </div>

                <div class="repopup-overlay">
                    <div class="repopup-content">
                        <img src="" alt="Popup Image" class="repopup-image">
                        <span class="repopup-close">&times;</span>
                    </div>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>

            <script>
                const popupTriggers = document.querySelectorAll('.repopup-trigger');
                const popupOverlay = document.querySelector('.repopup-overlay');
                const popupImage = document.querySelector('.repopup-image');
                const popupClose = document.querySelector('.repopup-close');

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
    <!-- End Pages  -->

    <?php get_footer(); ?>