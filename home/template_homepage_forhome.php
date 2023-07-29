<?php

/**
 * Template Name:  Homepage 3rd Card For Home
 */

get_header();
?>

    <!-- Banner  -->
    <section id="banner_width">
      <div class="banner_cont for_home">
        <div class="img">
            <?php if ( get_field( 'homepage_banner_image' ) ) : ?>
                <img src="<?php the_field( 'homepage_banner_image' ); ?>" />
            <?php endif ?>
        </div>
        <div class="description_banner container">
          <div class="main_">
            <?php if ( get_field( 'homepage_banner_title' ) ) : ?>
            <h1 class="heading"><?php the_field( 'homepage_banner_title' ); ?></h1>
            <?php endif ?>

            <?php if ( get_field( 'homepage_banner_description' ) ) : ?>
                <p class="para">
                    <?php the_field( 'homepage_banner_description' ); ?>
                </p>
            <?php endif ?>

            <?php $homepage_button_link_copy = get_field( 'homepage_button_link_copy' ); ?>
            <?php if ( $homepage_button_link_copy ) : ?>
            <a href="<?php echo esc_url( $homepage_button_link_copy); ?>" class="button"><?php the_field( 'homepage_button_title' ); ?></a>
            <?php endif ?>

          </div>
        </div>
      </div>
    </section>
    <!-- End Banner  -->

    <!-- For Detail Section  -->
    <section id="home_page_below">
        <div class="heading_main">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="first_rbelow">

                    <?php if ( get_field( 'for_home_details_section_image' ) ) : ?>
                    <div class="img_field">
                        <img src="<?php the_field( 'for_home_details_section_image' ); ?>" />
                    </div>
                    <?php endif ?>

                    <?php if ( get_field( 'for_home_details_section_quotation_content' ) ) : ?>
                    <div class="content">
                        <h1 class="heado">
                            <?php the_field( 'for_home_details_section_quotation_content' ); ?>
                        </h1>
                    </div>
                    <?php endif ?>

                </div>
                <div class="second_rbelow">
                    <div class="product_details">

                        <?php if ( get_field( 'first_offer_product_section_heading_title' ) ) : ?>
                        <div class="heading_main">
                            <h1><?php the_field( 'first_offer_product_section_heading_title' ); ?></h1>
                        </div>
                        <?php endif ?>

                        <?php if ( get_field( 'first_offer_product_section_description' ) ) : ?>
                        <div class="product_content">
                            <?php the_field( 'first_offer_product_section_description' ); ?>
                        </div>
                        <?php endif ?>


                        <div class="img">
                            <?php if ( have_rows( 'first_offer_product_section_gallery_image' ) ) : ?>
                                <?php while ( have_rows( 'first_offer_product_section_gallery_image' ) ) : the_row(); ?>
                                    <?php if ( get_sub_field( 'image' ) ) : ?>
                                        <img src="<?php the_sub_field( 'image' ); ?>" />
                                    <?php endif ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>
                        </div>

                        <div class="btn">
                            <?php $first_offer_product_section_seemore_link = get_field( 'first_offer_product_section_seemore_link' ); ?>
                            <?php if ( $first_offer_product_section_seemore_link ) : ?>
                                <?php $get_terms_args = array(
                                    'taxonomy' => 'product',
                                    'hide_empty' => 0,
                                    'include' => $first_offer_product_section_seemore_link,
                                ); ?>
                                <?php $terms = get_terms( $get_terms_args ); ?>
                                <?php if ( $terms ) : ?>
                                    <?php foreach ( $terms as $term ) : ?>
                                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php the_field( 'first_offer_product_section_see_more_button_title' ); ?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="product_details">

                        <?php if ( get_field( 'second_offer_product_section_heading_title_copy' ) ) : ?>
                        <div class="heading_main">
                            <h1><?php the_field( 'second_offer_product_section_heading_title_copy' ); ?></h1>
                        </div>
                        <?php endif; ?>

                        <?php if ( get_field( 'second_offer_product_section_description_copy' ) ) : ?>
                        <div class="product_content">
                            <?php the_field( 'second_offer_product_section_description_copy' ); ?>
                        </div>
                        <?php endif; ?>

                        <div class="img">
                            <?php if ( have_rows( 'second_offer_product_section_gallery_image_copy' ) ) : ?>
                                <?php while ( have_rows( 'second_offer_product_section_gallery_image_copy' ) ) : the_row(); ?>
                                    <?php if ( get_sub_field( 'image' ) ) : ?>
                                        <img src="<?php the_sub_field( 'image' ); ?>" />
                                    <?php endif ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>
                        </div>

                        <div class="btn">
                            <?php $second_offer_product_section_seemore_link_copy = get_field( 'second_offer_product_section_seemore_link_copy' ); ?>
                            <?php if ( $second_offer_product_section_seemore_link_copy ) : ?>
                                <?php $get_terms_args = array(
                                    'taxonomy' => 'product',
                                    'hide_empty' => 0,
                                    'include' => $second_offer_product_section_seemore_link_copy,
                                ); ?>
                                <?php $terms = get_terms( $get_terms_args ); ?>
                                <?php if ( $terms ) : ?>
                                    <?php foreach ( $terms as $term ) : ?>
                                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php the_field( 'second_offer_product_section_see_more_button_title_copy' ); ?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- For Detail Section  -->

    <?php get_footer(); ?>