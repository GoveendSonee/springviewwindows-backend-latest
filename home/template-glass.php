<?php

/**
 * Template Name:  Glass Construction
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
                <h1 class="head" style="text-transform: uppercase;"><?php the_title(); ?></h1>
                <hr class="hr_heading">
            </div>
        </div>
    </section>
    <!-- End Heading  -->

    <!-- Pages  -->
    <!-- Pages  -->
    <section id="glass_cons">
        <?php if ( have_rows( 'glass_construction_offer' ) ) : ?>
        <?php while ( have_rows( 'glass_construction_offer' ) ) : the_row(); ?>

        <?php if ( get_sub_field( 'glass_below_fouth_description' ) ) : ?>
            <div class="container">
                <div class="bio_glass">
                <?php if ( get_sub_field( 'left_glass_below_foutth_image' ) ) : ?>
                    <img src="<?php the_sub_field( 'left_glass_below_foutth_image' ); ?>" />
                <?php endif ?>
                </div>
                <div class="list_glass">
                    <?php the_sub_field( 'glass_below_fouth_description' ); ?>
                </div>
            </div>
        <?php endif ?>

        <?php if ( get_sub_field( 'glass_below_fifth_description' ) ) : ?>
            <br><hr class="galss_"><br>
            <div class="container">
                <div class="bio_glass no">
                <?php if ( get_sub_field( 'right_glass_below_fifth_image' ) ) : ?>
                    <img src="<?php the_sub_field( 'right_glass_below_fifth_image' ); ?>" />
                <?php endif ?>
                </div>
                <div class="list_glass">
                    <?php the_sub_field( 'glass_below_fifth_description' ); ?>
                </div>
                <div class="bio_glass we">
                <?php if ( get_sub_field( 'right_glass_below_fifth_image' ) ) : ?>
                    <img src="<?php the_sub_field( 'right_glass_below_fifth_image' ); ?>" />
                <?php endif ?>
                </div>
            </div>
            <br><hr class="galss_"><br>
        <?php endif ?>

        <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

    </section>
    <!-- End Pages  -->
   
    <!-- End Pages  -->

<?php 
    get_footer();
?>