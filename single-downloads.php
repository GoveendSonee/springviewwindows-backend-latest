<?php get_header(); ?>

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


<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();

        // CATALOG 
        if (has_term('catalog', 'download_taxonomy')) {
         
            get_template_part('catalog');
            ?>
                <!-- Pages  -->
                <div class="title_content press_articles">
                  <?php the_field( 'product_tilte' ); ?>
                </div>

                <!-- Slider Gallery  -->
                <div class="catalog_details_page">
                  <div class="swiper mySwiper_exaltare_catalog">
                      <div class="swiper-wrapper image-container">
                          <?php if ( have_rows( 'gallery_image' ) ) : ?>
                          <?php while ( have_rows( 'gallery_image' ) ) : the_row(); ?>
                          <div class="swiper-slide">
                              <div class="slide_content">
                                  <img src="<?php the_sub_field( 'for_detail_page_image_gallery' ); ?>" alt="" class="">
                              </div>
                          </div>
                          <?php endwhile; ?>
                          <?php else : ?>
                            <?php // ?>
                          <?php endif; ?>
                      </div>
                      <div class="fold">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                  </div>
                  
                  <?php if ( get_field( 'upload_download_gallery_zip_file' ) ) : ?>
                      <div class="download_catalog_pdf">
                        <a href="<?php the_field( 'upload_download_gallery_zip_file' ); ?>" class="button" download>
                            <i class="fa-solid fa-download"></i>  Download File
                        </a>
                      </div>
                  <?php endif; ?>

                </div>
                <!-- End Pages  -->

            <?php
        }
        
        // PRESS ARTICLES
        elseif (has_term('press-articles', 'download_taxonomy')) {
            
            get_template_part('press-articles');
            ?>

                <div class="title_content press_articles">
                    <?php 
                        $catalog_terms = get_the_terms(get_the_ID(), 'download_taxonomy');
                        if (!empty($catalog_terms)) {
                            foreach ($catalog_terms as $term) {
                                echo '<p>' . esc_html($term->name) . '</p>';
                            }
                        }
                    ?>
                </div>

                <section id="glass_cons" class="glassaa">
                    <div class="container press_articles">
                        <div class="bio_glass">
                            <?php if ( get_field( 'press_articles_product_image' ) ) : ?>
                                <img src="<?php the_field( 'press_articles_product_image' ); ?>" class="catalog_image"/>
                            <?php endif ?>
                        </div>
                        <div class="list_glass press_articles">

                            <?php if ( get_field( 'press_article_title' ) ) : ?>
                                <div class="paragraph">
                                    <?php the_field( 'press_article_title' ); ?>
                                </div>
                            <?php endif ?>
                                
                            <?php if ( get_field( 'press_article_sub_title' ) ) : ?>
                                <div class="sub_paragraph">
                                    <?php the_field( 'press_article_sub_title' ); ?>
                                </div>
                            <?php endif ?>

                            <?php if ( get_field( 'date_of_upload' ) ) : ?>
                            <small class="data" style="text-transform:uppercase;"><?php the_field( 'date_of_upload' ); ?></small>
                            <?php endif ?>

                            <?php if ( get_field( 'short_content_press_articles_copy' ) ) : ?>
                            <div class="description">
                                <?php the_field( 'short_content_press_articles_copy' ); ?>
                            </div>
                            <?php endif ?>

                            <?php if ( get_field( 'upload_file' ) ) : ?>
                                <a href="<?php the_field( 'upload_file' ); ?>" class="button"><i class="fa-solid fa-download"></i>  Download PDF</a>
                            <?php endif ?>

                        </div>
                    </div>
                </section>

            <?php
        }
      
        else {
        
            get_template_part('content', 'downloads');
            ?>
                hii pages 
            <?php
        }
    }
}

?>


<?php get_footer(); ?>

