<?php

/**
 * Template Name:  About Quality
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
                <hr class="hr_headinggallery quality">
            </div>
        </div>
    </section>
    <!-- End Heading  -->

     <!-- Pages  -->
    <section id="about_quality_page">
        <div class="container">
            <div class="quality_product">
                <h2 class="title"><?php the_field( 'why_springview_heading' ); ?></h2>
            </div>
            <div class="list_out_product_qaulity">
                <?php if ( have_rows( 'why_springview_points' ) ) : ?>
                <?php while ( have_rows( 'why_springview_points' ) ) : the_row(); ?>
                    <div class="details">
                        <div class="icon">
                            <?php if ( get_sub_field( 'image_icon' ) ) : ?>
                                <img src="<?php the_sub_field( 'image_icon' ); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="content_details">
                            <div class="title"><?php the_sub_field( 'point_topic' ); ?></div>
                            <ul class="point_list">
                                <?php if ( have_rows( 'list_out_point' ) ) : ?>
                                <?php while ( have_rows( 'list_out_point' ) ) : the_row(); ?>
                                    <li class="list_out"><span><i class="fa-solid fa-chevron-right"></i></span> <div class="ph"><?php the_sub_field( 'point_details' ); ?></div></li>
                                <?php endwhile; ?>
                                <?php else : ?>
                                    <?php // no rows found ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="redesign" class="quality_re">
        <div class="quality_redesign">
            <?php if ( get_field( 'about_quality_quotation_featured_image' ) ) : ?>
              <img src="<?php the_field( 'about_quality_quotation_featured_image' ); ?>" />
            <?php endif ?>
            <div class="re_content">
                <div class="content">
                  <?php if ( get_field( 'about_quality_quotation_quotation_short_content' ) ) : ?>
                    <div class="re">
                      <?php the_field( 'about_quality_quotation_quotation_short_content' ); ?>
                    </div>
                    <div class="author"> -<?php the_field( 'about_quality_quotation_quotation_writer_author_name' ); ?></div>
                  <?php endif ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pages  -->

<?php get_footer(); ?>