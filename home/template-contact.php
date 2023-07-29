<?php

/**
 * Template Name:  Contact
 */

get_header();
?>

    <!-- Heading  -->
    <section id="heading_pages">
        <div class="container">
            <a  id="back-link" href="">

                <div class="previous">
                    <div class="icon"><i class='bx bx-arrow-back'></i><small>Back</small></div>
                </div>
            </a>
            <div class="topic_page">
                <h1 class="head"><?php the_title(); ?></h1>
                <hr class="hr_headinggallery">
            </div>
        </div>
    </section>
    <!-- End Heading  -->

    <!-- Pages  -->
    <section id="contact_us">
        <div class="container_contact">
            <div class="dest">
                <div class="form_fill">
                    <div class="tie">
                        <?php if ( get_field( 'contact_heading' ) ) : ?>
                          <h4 class="title"><?php the_field( 'contact_heading' ); ?></h4>
                        <?php endif; ?>
                        <?php if ( get_field( 'contact_us_short_content' ) ) : ?>
                          <p class="para"><?php the_field( 'contact_us_short_content' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="contact-form">
                        <?php echo do_shortcode( '[forminator_form id="1099"]' ); ?>
                    </div>
                </div>
                <div class="location_fill">
                    <?php if ( get_field( 'connect_with_us_heading_' ) ) : ?>
                      <h3 class="sec_title"><?php the_field( 'connect_with_us_heading_' ); ?></h3>
                    <?php endif; ?>

                    <div class="loction_area">
                        <?php if ( get_field( 'connect_with_email' ) ) : ?>
                        <div class="icon_detail">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:<?php the_field( 'connect_with_email' ); ?>"><?php the_field( 'connect_with_email' ); ?></a>
                        </div>
                        <?php endif; ?>

                        <?php if ( get_field( 'connect_with_whatsapp_number' ) ) : ?>
                        <div class="icon_detail">
                            <i class="fa-brands fa-whatsapp"></i>
                            <a href="https://api.whatsapp.com/send?phone=<?php the_field( 'connect_with_whatsapp_number' ); ?>"><?php the_field( 'connect_with_whatsapp_number' ); ?></a>
                        </div>
                        <?php endif; ?>

                    </div>
                    <br>

                    <?php if ( get_field( 'contact_information_heading__' ) ) : ?>
                      <h3 class="sec_title"><?php the_field( 'contact_information_heading__' ); ?></h3>
                    <?php endif; ?>

                    <div class="loction_area">

                        <?php if ( get_field( 'conact_infor_location' ) ) : ?>
                          <div class="icon_detail">
                              <i class="fa-solid fa-location-dot"></i>
                              <a><?php the_field( 'conact_infor_location' ); ?></a>
                          </div>
                        <?php endif; ?>

                        <?php if ( get_field( 'phone_number' ) ) : ?>
                          <div class="icon_detail">
                              <i class="fa-solid fa-phone"></i>
                              <a href="tel:<?php the_field( 'phone_number' ); ?>">Phone: <?php the_field( 'phone_number' ); ?></a>
                          </div>
                        <?php endif; ?>

                    </div>

                    <div class="icon_po">
                        <?php if ( get_field( 'add_facebook_link' ) ) : ?><a href="<?php the_field( 'add_facebook_link' ); ?>"><i class="fa-brands fa-facebook-f"></i></a><?php endif; ?>
                        <?php if ( get_field( 'add_instagram_link' ) ) : ?><a href="<?php the_field( 'add_instagram_link' ); ?>"><i class="fa-brands fa-instagram"></i></a><?php endif; ?>
                        <?php if ( get_field( 'add_twitter_link' ) ) : ?><a href="<?php the_field( 'add_twitter_link' ); ?>"><i class="fa-brands fa-twitter"></i></a><?php endif; ?>
                        <?php if ( get_field( 'add_linkedin_link' ) ) : ?><a href="<?php the_field( 'add_linkedin_link' ); ?>"><i class="fa-brands fa-linkedin-in"></i></a><?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Pages  -->

<?php get_footer(); ?>