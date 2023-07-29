<?php

/**
 * Template Name:  About Company
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
    <section id="about_company">
        <div class="container">

            <div class="main_topic">
                <?php if ( get_field( 'about_history_title' ) ) : ?>
                <div class="dtails">
                    <div class="icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    <a href="#history" class="tet"><h2 class="head"><?php the_field( 'about_history_title' ); ?></h2></a>
                </div>
                <?php endif; ?>
                <?php if ( get_field( 'quality_title' ) ) : ?>
                <div class="dtails">
                    <div class="icon"><i class="fa-solid fa-medal fa-rotate-180"></i></div>
                    <a href="#quality" class="tet"><h2 class="head"><?php the_field( 'quality_title' ); ?></h2></a>
                </div>
                <?php endif; ?>
                <?php if ( get_field( 'movie_title' ) ) : ?>
                <div class="dtails">
                    <div class="icon"><i class="fa-sharp fa-solid fa-circle-play"></i></div>
                    <a href="#movie" class="tet"><h2 class="head"><?php the_field( 'movie_title' ); ?></h2></a>
                </div>
                <?php endif; ?>
            </div>

            <?php if ( get_field( 'about_company_description' ) ) : ?>
            <div class="details_about">
                <div class="paragraph">
                    <?php the_field( 'about_company_description' ); ?>
                </div>
            </div>
            <?php endif; ?>


        </div>
    </section>

    <section id="about_history_spring">
      <div id="history" class="container">
          <?php if ( get_field( 'page_history_heading' ) ) : ?>
            <div class="quality_product">
                <h2 class="title"><?php the_field( 'page_history_heading' ); ?></h2>
            </div>
          <?php endif; ?>
    
          <div class="swiper progress_bar year_mySwiper">
              <div class="swiper-wrapper timeline">
                  <?php if ( have_rows( 'company_year_growth' ) ) : ?>
                  <?php while ( have_rows( 'company_year_growth' ) ) : the_row(); ?>
    
                  <div class="swiper-slide containerdp left">
                      <div class="content">
                          <div class="pp">
                              <?php if ( get_sub_field( 'profile_image' ) ) : ?>
                                  <div class="redd">
                                    <img src="<?php the_sub_field( 'profile_image' ); ?>" alt="">
                                  </div>
                              <?php endif ?>
    
                              <?php if ( get_sub_field( 'short_content_of_company_profile' ) ) : ?>
                                <p class="past"><?php the_sub_field( 'short_content_of_company_profile' ); ?></p>
                              <?php endif ?>
    
                          </div>
    
                          <?php if ( get_sub_field( 'update_year_of_profile' ) ) : ?>
                            <h2><?php the_sub_field( 'update_year_of_profile' ); ?></h2>
                          <?php endif ?>
    
                      </div>
                      <div class="dot"></div>
                  </div>
    
                  <?php endwhile; ?>
                  <?php else : ?>
                      <?php // no rows found ?>
                  <?php endif; ?>
    
                  <script>
                      const containers = document.getElementsByClassName('containerdp');
    
                          // Store the previously clicked element
                          let previousElement = null;
    
                          // Add click event listeners to each container
                          Array.from(containers).forEach(container => {
                          container.addEventListener('click', function() {
                              if (previousElement) {
                              previousElement.classList.remove('clicked');
                              }
                              this.classList.add('clicked');
                              previousElement = this;
                          });
                          });
    
                  </script>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="for_year">
                <div class="quality_product">
                  <hr class="header_spring">
                  <h2 class="title">Year</h2>
                </div>
              </div>
          </div>
    
      </div>
    </section>

    <section id="about_quality">
        <div id="quality" class="container">
            <div class="quality_product">
                <?php if ( get_field( 'about_quality_heading' ) ) : ?>
                    <h2 class="title"><?php the_field( 'about_quality_heading' ); ?></h2>
                <?php endif; ?>
                <?php if ( get_field( 'about_quality_description' ) ) : ?>
                    <p class="para">
                        <?php the_field( 'about_quality_description' ); ?>
                    </p>
                <?php endif; ?>
                <?php if ( get_field( 'quality_read_more_title' ) ) : ?>
                    <div class="class">
                        <?php $quality_read_more_link = get_field( 'quality_read_more_link' ); ?>
                        <a href="<?php echo esc_url( $quality_read_more_link) ; ?>"><?php the_field( 'quality_read_more_title' ); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="about_movie">
        <div id="movie" class="container">
            <div class="quality_product">
                <?php if ( get_field( 'about_movie_heading' ) ) : ?>
                    <h2 class="title"><?php the_field( 'about_movie_heading' ); ?></h2>
                <?php endif; ?>
                <?php if ( get_field( 'upload_youtube_video_url' ) ) : ?>
                    <div class="youtube-box">
                        <div class="video-wrapper">
                        <iframe width="100%" height="600" src="<?php the_field( 'upload_youtube_video_url' ); ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- End Pages  -->

<?php get_footer(); ?>