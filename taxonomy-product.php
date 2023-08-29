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

    <section id="offer_part" style="margin: -1rem 0 0;">
      <div class="hero">
        <nav class="nav_class">
         
          <?php

            $term = get_queried_object();
            $taxonomy = $term->taxonomy;

            // Determine the parent category for maintaining consistency
            $parent_term = $term;
            while ($parent_term->parent != 0) {
                $parent_term = get_term($parent_term->parent, $taxonomy);
            }

            // Create an array to store the term hierarchy
            $term_hierarchy = array();

            // Build the term hierarchy
            $current_term = $parent_term;
            while ($current_term->parent != 0) {
                array_unshift($term_hierarchy, $current_term);
                $current_term = get_term($current_term->parent, $taxonomy);
            }
            array_unshift($term_hierarchy, $current_term); // Add the top-level term

            // Get the child terms (categories) of the parent term
            $child_terms = get_terms(array(
                'taxonomy' => $taxonomy,
                'parent' => $parent_term->term_id,
            ));

            if (!empty($child_terms) && !is_wp_error($child_terms)) {
                echo '<ul>';
                foreach ($child_terms as $child_term) {
                    $active_class = ($child_term->term_id === $term->term_id) ? 'active_sub_field' : '';
                    echo '<li class="' . esc_attr($active_class) . '"><a href="' . esc_url(get_term_link($child_term)) . '">' . esc_html($child_term->name) . '</a></li>';
                }
                echo '</ul>';
            } else {
                echo '';
            }

            // $term = get_queried_object();
            // $taxonomy = $term->taxonomy;

            // // Determine the parent category for maintaining consistency
            // $parent_term = $term;
            // while ($parent_term->parent != 0) {
            //     $parent_term = get_term($parent_term->parent, $taxonomy);
            // }

            // // Create an array to store the term hierarchy
            // $term_hierarchy = array();

            // // Build the term hierarchy
            // $current_term = $parent_term;
            // while ($current_term->parent != 0) {
            //     array_unshift($term_hierarchy, $current_term);
            //     $current_term = get_term($current_term->parent, $taxonomy);
            // }
            // array_unshift($term_hierarchy, $current_term); // Add the top-level term

            // // Output the term hierarchy
            // echo '<ul class="category-navigation">';
            // foreach ($term_hierarchy as $hierarchical_term) {
            //     echo '<li><a href="' . esc_url(get_term_link($hierarchical_term)) . '">' . esc_html($hierarchical_term->name) . '</a></li>';
            // }
            // echo '</ul>';

            // // Output current term name and description
            // echo '<h1>' . single_term_title('', false) . '</h1>';
            // echo term_description();

            // // Get the child terms (categories) of the parent term
            // $child_terms = get_terms(array(
            //     'taxonomy' => $taxonomy,
            //     'parent' => $parent_term->term_id,
            // ));

            // if (!empty($child_terms) && !is_wp_error($child_terms)) {
            //     echo '<ul>';
            //     foreach ($child_terms as $child_term) {
            //       $active_class = ($child_term->term_id === $term->term_id) ? 'active' : '';
            //         echo '<li class="' . esc_attr($active_class) . '"><a href="' . esc_url(get_term_link($child_term)) . '">' . esc_html($child_term->name) . '</a></li>';
            //     }
            //     echo '</ul>';
            // } else {
            //     echo 'No subcategories found.';
            // }

          ?>

<!-- 

              $term = get_queried_object();
              $taxonomy = $term->taxonomy;
              $term_id = $term->term_id;

              // Get all parent categories
              $parent_categories = get_ancestors($term_id, $taxonomy, 'taxonomy');
              $parent_categories = array_reverse($parent_categories);

              // Output all parent categories
              if (!empty($parent_categories)) {
                  echo '<ul>';
                  foreach ($parent_categories as $parent_id) {
                      $parent_term = get_term($parent_id, $taxonomy);
                      echo '<li><a href="' . esc_url(get_term_link($parent_term)) . '" class="underline-effect">' . esc_html($parent_term->name) . '</a></li>';
                  }
                  echo '</ul>';
              }

              // Output current term name and description
              // echo '<h1>' . single_term_title('', false) . '</h1>';
              // echo term_description();

              // Get the child terms (categories) of the current term
              $child_terms = get_terms(array(
                  'taxonomy' => $taxonomy,
                  'parent' => $term_id,
              ));

              if (!empty($child_terms) && !is_wp_error($child_terms)) {
                  echo '<ul>';
                  foreach ($child_terms as $child_term) {
                      echo '<li><a href="' . esc_url(get_term_link($child_term)) . '" class="underline-effect">' . esc_html($child_term->name) . '</a></li>';
                  }
                  echo '</ul>';
              } else {
                  echo '<p class="test" style="text-align: center;">No subcategories found.</p>';
              } -->

          
        </nav>
      </div>
    </section>

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
                          <div class="heading"><?php the_sub_field( 'properties_heading' ); ?></div>
                          
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
            
            <div class="springview-windowspagination">
            <div class="custom-pagination"></div>
              <div class="custom-navigation">
                <button class="custom-navigation-button" id="prevButton">Previous</button>
                <button class="custom-navigation-button" id="nextButton">Next</button>
              </div>
            </div>
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
