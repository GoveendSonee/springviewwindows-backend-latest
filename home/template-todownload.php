<?php

/**
 * Template Name:  To Download
 */

get_header();
?>

    <!-- Heading  -->
    <section id="heading_pages">
      <div class="container winter garden download">
          <div class="topic_page">
              <h1 class="head">To Download</h1>
              <hr class="hr_heading">
          </div>
      </div>
    </section>
    <!-- End Heading  -->

    <!-- Pages  -->
    <section id="to_download">
      <div class="container_download">

        <div class="downloadtab">
          <button class="downloadlinks" onclick="downloadCity(event, 'Catalog')" id="defaultOpen">Catalog</button>
          <button class="downloadlinks" onclick="downloadCity(event, 'Press Articles')">Press Articles</button>
          <button class="downloadlinks" onclick="downloadCity(event, 'CI')">CI</button>
          <!--<button class="downloadlinks" onclick="downloadCity(event, 'Certifications')">Certifications</button>-->
        </div>

        <div class="content_download">

          <div id="Catalog" class="download_area catalog">
            <div class="catalog_download">
            <?php
                // The Query
                $args = array(
                    'post_type' => 'downloads',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'download_taxonomy',
                            'field'    => 'slug',
                            'terms'    => 'catalog',
                        ),
                    ),
                );

                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                $query->the_post();
            ?>  

              <div class="container_catalog">
                <?php if ( get_field( 'product_image' ) ) : ?>
                    <img src="<?php the_field( 'product_image' ); ?>" class="catalog_image"/>
                <?php endif ?>
                <div class="catalog_conte">
                    <?php if ( get_field( 'product_tilte' ) ) : ?>
                        <p class="title"><?php the_field( 'product_tilte' ); ?></p>
                    <?php endif; ?>

                  <div class="icon">
                    <a href="<?php the_permalink(); ?>"><i class="fa-solid fa-eye"></i></a>
                    <?php if ( get_field( 'upload_pdf_file' ) ) : ?>
                    <a href="<?php the_field( 'upload_pdf_file' ); ?>" download
                      ><i class="fa-solid fa-download"></i></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>

            <?php
                }
                } else {
                    // No posts found
                    echo 'No posts found.';
                }
                
                // Restore original Post Data
                wp_reset_postdata();
            ?>
              
            </div>
          </div>

          <div id="Press Articles" class="download_area press_articles">
            <div class="catalog_download">
            <?php
                // The Query
                $args = array(
                    'post_type' => 'downloads',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'download_taxonomy',
                            'field'    => 'slug',
                            'terms'    => 'press-articles',
                        ),
                    ),
                );

                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                $query->the_post();
            ?>  
                <div class="container_catalog">
                    <?php if ( get_field( 'press_articles_product_image' ) ) : ?>
                        <img src="<?php the_field( 'press_articles_product_image' ); ?>" class="catalog_image"/>
                    <?php endif ?>
                  <div class="date_time"><?php the_field( 'date_of_upload' ); ?></div>
                  <div class="details_content">
                    <div class="heading_title"><?php the_field( 'press_article_title' ); ?></div>
                    <div class="sub_title"> <?php the_field( 'press_article_sub_title' ); ?></div>
                    <div class="small">
                    <?php the_field( 'short_content_press_articles' ); ?>
                    </div>
                  </div>
                  <div class="catalog_conte">
                      <a href="<?php the_permalink(); ?>"><i class="fa-solid fa-eye"></i></a>
                      <?php if ( get_field( 'upload_file' ) ) : ?>
                        <a href="<?php the_field( 'upload_file' ); ?>" download><i class="fa-solid fa-download"></i></a>
                      <?php endif ?>
                  </div>
                </div>
            <?php
                }
                } else {
                    // No posts found
                    echo 'No posts found.';
                }
                
                // Restore original Post Data
                wp_reset_postdata();
            ?>  
            </div>
          </div>

          <div id="CI" class="download_area ci">
            <?php
                    // The Query
                    $args = array(
                        'post_type' => 'downloads',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'download_taxonomy',
                                'field'    => 'slug',
                                'terms'    => 'ci',
                            ),
                        ),
                    );

                    $query = new WP_Query( $args );

                    // The Loop
                    if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                    $query->the_post();
                ?>  
                <h3><?php the_title(); ?></h3>
                <div class="dpf_ci">
                <?php if ( have_rows( 'upload_your_file' ) ) : ?>
	            <?php while ( have_rows( 'upload_your_file' ) ) : the_row(); ?>
                <div class="first">

                    <?php if ( get_sub_field( '1st_file_name' ) && get_sub_field( '1st__upload_file_copy' ) ) : ?>
                        <div class="pdf">
                            <span><i class="fa-solid fa-file-pdf"></i></span>
                            <div class="red__"><a class="pdf-link" href="<?php the_sub_field( '1st__upload_file_copy' ); ?>" download><?php the_sub_field( '1st_file_name' ); ?></a></div>
                            <span class="eyw">
                                <a href=""><i class="fa-solid fa-eye"></i></a>
                                <?php if ( get_sub_field( '1st__upload_file_copy' ) ) : ?>
                                    <a href="<?php the_sub_field( '1st__upload_file_copy' ); ?>" download><i class="fa-solid fa-download"></i></a>
                                <?php endif; ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php if ( get_sub_field( '2st_file_name_copy' ) && get_sub_field( '2st__upload_file' ) ) : ?>
                        <div class="pdf two">
                            <span><i class="fa-solid fa-file-pdf"></i></span>
                            <div class="red__"><a class="pdf-link" href="<?php the_sub_field( '2st__upload_file' ); ?>" download><?php the_sub_field( '2st_file_name_copy' ); ?></a></div>

                            <span class="eyw">
                                <a href=""><i class="fa-solid fa-eye"></i></a>
                                <?php if ( get_sub_field( '2st__upload_file' ) ) : ?>
                                    <a href="<?php the_sub_field( '2st__upload_file' ); ?>" download><i class="fa-solid fa-download"></i></a>
                                <?php endif; ?>
                            </span>
                        </div>
                    <?php endif; ?>
                
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
                </div>
                <?php
                    }
                    } else {
                        // No posts found
                        echo 'No posts found.';
                    }
                    
                    // Restore original Post Data
                    wp_reset_postdata();
                ?>  
          </div>

          
    

        </div>
      </div>
    </section>
    <!-- End Pages  -->

<?php get_footer(); ?>