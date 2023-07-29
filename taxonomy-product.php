<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amberline
 */
	get_header();
	
?>

    <!-- Heading  -->
    <section id="heading_second_pages">
        <div class="container">
        <a  id="back-link" href="">

                <div class="previous">
                    <div class="icon"><i class='bx bx-arrow-back'></i><small>Back</small></div>
                </div>
            </a>
        </div>
    </section>
    <!-- End Heading  -->

    <!-- Category Single Page  -->
    <section id="category_single">
      <div class="container___">
        <div class="category_details">
          <!-- Swiper -->
          <div class="swiper mySwiper_category">
            <div class="swiper-wrapper">
              <?php 
                  if ( have_posts() ) : 
                  while ( have_posts() ) :
                  the_post();
              ?>
              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <?php if ( get_field( 'offer_page_top_product_image' ) ) : ?>
                        <img src="<?php the_field( 'offer_page_top_product_image' ); ?>" />
                      <?php endif ?>
                    </div>
                    <div class="second_ro">

                      <?php if ( get_field( 'offer_page_top_product_image' ) ) : ?>
                        <div class="cate">
                          <?php the_field('product_category_title_'); ?>
                        </div>
                      <?php endif; ?>

                      <h1 class="heading_r"><a href=""><?php the_title(); ?></a></h1>
                      <p class="para"><?php the_field( 'offer_page_short_content' ); ?></p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <?php if ( have_rows( 'product_' ) ) : ?>
                        <?php while ( have_rows( 'product_' ) ) : the_row(); ?>
                          <div class="heading"><?php the_sub_field( 'properties_heading' ); ?> </div>
                          
                          <?php the_sub_field( 'description' ); ?>
                          
                        <?php endwhile; ?>
                      <?php endif; ?>

                      <?php if ( have_rows( 'specification_properties' ) ) : ?>
	                    <?php while ( have_rows( 'specification_properties' ) ) : the_row(); ?>
                          <div class="below_heading"><?php the_sub_field( 'specification_heading' ); ?></div>

                          <div class="specified">
                            <?php if ( have_rows( 'list_out_points' ) ) : ?>
                            <?php while ( have_rows( 'list_out_points' ) ) : the_row(); ?>
                              <div class="point_view">
                                <div class="icon"><i class="<?php the_sub_field( 'fontawesome_icon_code' ); ?>"></i></div>
                                <div class="text"><?php the_sub_field( 'title_of_heading_' ); ?> </div>
                              </div>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php // no rows found ?>
                            <?php endif; ?>

                          </div>

                      <?php endwhile; ?>
                      <?php endif; ?>
                      
                                                <?php
                            $the_content = apply_filters('the_content', get_the_content());
                            if ( !empty($the_content) ) {
                          ?>
                          <div class="product_view">
                            <div class="items" style="display: flex;">
                                <style>
                                
                                    .product_view .description{
                                        margin: 2rem 0 1rem;
                                    }
                                
                                  .description .collapsed{
                                    transition: all ease-in-out 0.5s;
                                    display: none;
                                    overflow: hidden;
                                    color: #564D4D;
                                    font-size: 15px;
                                    margin:  0 0 .51rem 0;
                                    padding: 0 1rem 0 0rem;
                                    list-style: none;
                                  }


                                  .description p{
                                    display: block;
                                    color: #564D4D;
                                    font-size: 15px;
                                    margin:  0 0 .51rem 0;
                                    padding: 0 1rem 0 .5rem;
                                    list-style: none;
                                  }

                                  .description p a{
                                    color: #79C45F!important;
                                  }

                                  .description button.read-more {
                                        border: none;
                                        text-decoration: none;
                                        font-size: 15px;
                                        background: #79C45F;
                                        font-weight: 500;
                                        cursor: pointer;
                                        color: #fff;
                                        padding: 0.61rem 3.4rem;
                                        border-radius: 0.41rem;
                                  }

                                  @media only screen and (max-width: 700px) {
                                    .description .collapsed{
                                      font-size: 13px;
                                      height: 3.2rem;
                                    }
                                  }
                                </style>
                                <div class="description">
                                  <div class="collapsed">
                                    <span>
                                      <?php echo $the_content; ?>
                                    </span> 
                                  </div>
                                  <button class="read-more" onclick="toggleDescription(this)">Read More</button>
                                </div>
                                <script>
                                  function toggleDescription(button) {
                                    var description = button.previousElementSibling;
                                    description.classList.toggle('collapsed');
                                    button.textContent = description.classList.contains('collapsed') ? 'Read More' : 'Read Less';
                                  }
                                </script>
                            </div>
                          </div>
                          <?php } ?>
                          
                    </div>
                    <div class="inspired_home">
                      <?php if ( get_field( 'get_inspired_heading_' ) ) : ?>
                        <div class="title">
                          <?php the_field( 'get_inspired_heading_' ); ?>
                        </div>
                      <?php endif; ?>

                      <div class="first_row">

                        <?php if ( get_field( 'first_image' ) ) : ?>
                          <div class="content_image first">
                            <img src="<?php the_field( 'first_image' ); ?>" alt="">
                            <div class="path_img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/path.png" alt="">
                            </div>
                          </div>
                        <?php endif ?>

                        <?php if ( get_field( 'first_image_copy' ) ) : ?>
                          <div class="content_image second">
                            <img src="<?php the_field( 'first_image_copy' ); ?>" alt="">
                            <div class="path_img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/path.png" alt="">
                            </div>
                          </div>
                        <?php endif ?>

                        <?php if ( get_field( 'first_image_copy2' ) ) : ?>
                          <div class="content_image third">
                            <img src="<?php the_field( 'first_image_copy2' ); ?>" alt="">
                            <div class="path_img">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/path.png" alt="">
                            </div>
                          </div>
                        <?php endif ?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php
                  endwhile;
                  endif;
              ?>
            </div>
            
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <!-- End Swiper -->
        </div>
      </div>
    </section>
    <!-- End Category Single Page  -->

    
<?php
get_footer();
