<?php
get_header();
?>

<!-- Heading  -->
<section id="heading_pages">
        <div class="container">
            <a href="">
                <div class="previous">
                    <div class="icon"><i class='bx bx-arrow-back'></i><small>Back</small></div>
                </div>
            </a>
            <div class="topic_page">
                <h1 class="head">GALLERY</h1>
                <hr class="hr_headinggallery">
            </div>
        </div>
    </section>
    <!-- End Heading  -->

    <!-- Pages  -->
    <section id="gallery_page">
        <div class="container">
          
            <div class="tab">
            <?php
                $parent_cat_id = get_cat_ID('alu'); // Get the category ID of 'AlU'

                $args = array(
                    'parent' => $parent_cat_id,
                    'taxonomy' => 'product_image',
                    'hide_empty' => false,
                );

                $categories = get_categories($args); // Get the subcategories

                if (!empty($categories)) {
                    $i=0;
                    foreach ($categories as $category) {
                        ?>
                        <button class="tablinks" onclick="openCity(event, '<?php echo $category->name; ?>')" <?php echo ($i)? ' ':'id="defaultOpen"'; ?>><span> <?php echo $category->name; ?> </span></button>
                        <?php
                        $i++;
                    }
                } else {
                    echo 'No subcategories found.';
                }
            ?>
            </div>

            <style>

                  section#gallery_page .testimonial-column {
                      cursor: pointer;
                  }

                  section#gallery_page .testimonial-column .testimonial-name {
                      cursor: pointer;
                  }

                  section#gallery_page .testimonial-column .popup-container {
                      display: none;
                      position: fixed;
                      z-index: 999999;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                      background-color: rgba(0, 0, 0, 0.8);
                      overflow: auto;
                  }

                  section#gallery_page .testimonial-column .popup-content {
                      color: #fff;
                      text-align: center;
                      font-size: 18px;
                      margin: 20px;
                  }

                  section#gallery_page .testimonial-column .close-icon {
                    font-size: 2.2rem;
                    position: absolute;
                    top: 7.1rem;
                    right: 12%;
                    cursor: pointer;
                    color: #79c45f;
                    background-color: #fff;
                    padding: 0 .81rem;
                  }

                  section#gallery_page .testimonial-column .gallery-slider {
                    display: flex;
                    height: fit-content;
                    overflow: hidden;
                    position: relative;
                    justify-content: center;
                    align-items: center;
                    top: 5rem;
                    padding: 0 10%;
                  }

                  section#gallery_page .testimonial-column .gallery-image {
                    width: -webkit-fill-available;
                    height: 35rem;
                    background: #fff;
                    padding: 1rem;
                    border: 2px solid #7ac45f;
                    display: none;
                    flex: 0 0 100%;
                    opacity: 0;
                    transition: opacity 0.3s ease-in-out;
                    object-fit: cover;
                  }

                  section#gallery_page .testimonial-column .gallery-image.active {
                      display: block;
                      opacity: 1;
                  }

                  section#gallery_page .testimonial-column .prev-icon,
                  section#gallery_page .testimonial-column .next-icon {
                      position: absolute;
                      top: 47%;
                      transform: translateY(-50%);
                      font-size: 2rem;
                      color: #000;
                      background-color: #fff;
                      padding: 0 1rem;
                      cursor: pointer;
                      z-index: 2;
                  }

                  section#gallery_page .testimonial-column .prev-icon {
                    left: 13%;
                  }

                  section#gallery_page .testimonial-column .next-icon {
                      right: 13%;
                  }

                  section#gallery_page .testimonial-column a.download-icon {
                      z-index: 99999999;
                      font-size: 2rem;
                      position: absolute;
                      right: 7%;
                      cursor: pointer;
                      color: #79c45f;
                      background-color: #fff;
                      padding: 1rem 1rem;
                  }

                @media only screen and (max-width: 900px) {
                  section#gallery_page .testimonial-column .gallery-image{
                    height: 29rem;
                  }

                  section#gallery_page .testimonial-column .close-icon {
                    font-size: 1.7rem;
                    top: 7.1rem;
                    right: 14%;
                }

                }

                @media only screen and (max-width: 750px) {
                    section#gallery_page .testimonial-column .gallery-image{
                      height: 22rem;
                    }

                    section#gallery_page .testimonial-column .close-icon {
                      font-size: 1.7rem;
                      top: 7.1rem;
                      right: 14%;
                    }

                }

            </style>

            <div id="ALUMINIUM" class="tabcontent">
               <div class="gallery_filter_depart">
                  <div class="container-fluid filterbox">
                      <div class="filter-tabs">
                          <div class="resu">Show results for:</div>
                          <div class="filter-sort">
                              <div class="navigation">
                                  <a href="javascript:void(0)" data-filter="all" class="rebutton active">All</a>
                                    <?php
                                            // Get the subcategories of the "alu" category
                                        $subcategory_args = array(
                                            'taxonomy' => 'product_image',
                                            'hide_empty' => false,
                                            'child_of' => get_term_by('name', '	ALUMINIUM', 'product_image')->term_id
                                        );

                                        $subcategories = get_categories($subcategory_args);

                                        // Display the subcategory names
                                        if ($subcategories) {
                                            foreach ($subcategories as $subcategory) {
                                        ?>
                                            <a href="javascript:void(0)" data-filter="<?php echo $subcategory->name; ?>" class="rebutton"><?php echo $subcategory->name; ?></a>
                                            
                                        <?php
                                            }
                                        } else {
                                            echo 'No subcategories found.';
                                        }

                                    ?>
                              </div>
                          </div>
                      </div>
                      <div class="main-wrap wrap-inner">
                          <div id="content">
                              <div class="main-full" id="main">
                               
                                  <ol class="content">
                                        <?php
                                            // Get the alu category ID
                                            $alu_category = get_term_by('slug', 'alu', 'product_image');

                                            // Get the subcategories of the alu category
                                            $subcategories = get_terms(array(
                                                'taxonomy' => 'product_image',
                                                'parent' => $alu_category->term_id,
                                            ));

                                            if (!empty($subcategories)) {
                                                foreach ($subcategories as $subcategory) {

                                                    // Query the custom post type galleries for posts in the current subcategory
                                                    $args = array(
                                                        'post_type' => 'galleries',
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'product_image',
                                                                'field' => 'term_id',
                                                                'terms' => $subcategory->term_id,
                                                            ),
                                                        ),
                                                    );

                                                    $posts = new WP_Query($args);
                                                    $i=1;
                                                    if ($posts->have_posts()) {
                                                    while ($posts->have_posts()) {
                                                    $posts->the_post();
                                        ?>
                                      <li class="team shot-thumbnail <?php echo $subcategory->name; ?>">
                                        <div class="multi-shot testimonial-column" onclick="openPopup(<?php echo $i; ?>)">
                                             <!-- Main Content  -->
                                              <div class="dribbble-img testimonial-name">
                                                  <?php
                                                    $alt_text = get_the_title();
                                                    if ( get_field( 'gallery_product_image' ) ) : 
                                                  ?>
                                                  <a class="dribbble-link">
                                                      <picture> 
                                                          <img decoding="async" alt="<?php echo $alt_text ?>" src="<?php the_field( 'gallery_product_image' ); ?>">
                                                      </picture>
                                                  </a>
                                                  <?php endif ?>

                                                  <a href="#" class="dribbble-title">
                                                      <p><?php the_title(); ?> </p>
                                                      
                                                      <?php if ( get_field( 'gallery_location' ) ) : ?>
                                                      <p><?php the_field( 'gallery_location' ); ?></p>
                                                      <?php endif ?>
                                                  </a>
                                              </div>  
                                             <!-- End Main Content  -->

                                             <!-- Pop Up  -->
                                             <div class="popup-container" id="popup-container-<?php echo $i; ?>">
                                                  <div class="popup-content">
                                                    
                                                    <div class="gallery-slider" id="gallery-slider-<?php echo $i; ?>">
                                                        <?php if ( have_rows( 'gallery_image_of_product' ) ) : ?>
                                                        <?php $a=1; ?>
                                                        <?php while ( have_rows( 'gallery_image_of_product' ) ) : the_row(); ?>
                                                        <?php if ( get_sub_field( 'product_image' ) ) : ?>
                                                        <?php $product_image = get_sub_field('product_image'); ?>
                                                            <img src="<?php the_sub_field( 'product_image' ); ?>" alt="<?php echo $product_image; ?>" class="gallery-image <?php echo ($a==1)? 'active':''; ?>">
                                                        <?php $a++; ?>   
                                                        <?php endif ?>
                                                        <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="slider-navigation">
                                                        <span class="prev-icon" onclick="showPreviousImage(<?php echo $i; ?>)">&lt;</span>
                                                        <span class="next-icon" onclick="showNextImage(<?php echo $i; ?>)">&gt;</span>
                                                    </div>
                                                    <a href="#" class="download-icon" onclick="downloadImage(<?php echo $i; ?>)">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                  </div>
                                                  <span class="close-icon" onclick="closePopupByIcon(event, <?php echo $i; ?>)">&times;</span>
                                      
                                              </div>
                                             <!-- End PopUp  -->
                                          </div>  
                                      </li>
                                      <?php
                                            $i++;
                                            }
                                            } else {
                                            // No posts found for the subcategory
                                            echo 'No posts found.';
                                            }

                                            // Restore original post data
                                            wp_reset_postdata();
                                            }
                                            } else {
                                            // No subcategories found for the alu category
                                            echo 'No subcategories found.';
                                            }
                                      ?>
                                    
                                  </ol>
                                  
                              </div>
                          </div>
                      </div>
                  </div> 
              </div>
            </div>

            <div id="PVC" class="tabcontent">
               <div class="gallery_filter_departtwo">
                  <div class="container-fluid filterbox">
                  <div class="filter-tabs">
                        <div class="resu">Show results for:</div>
                        <div class="filter-sort">
                            <div class="navigationtwo">
                                <a href="javascript:void(0)" data-filter="all" class="rebuttontwo active">All</a>
                                <?php
                                            // Get the subcategories of the "pvc" category
                                        $subcategory_args = array(
                                            'taxonomy' => 'product_image',
                                            'hide_empty' => false,
                                            'child_of' => get_term_by('name', 'pvc', 'product_image')->term_id
                                        );

                                        $subcategories = get_categories($subcategory_args);

                                        // Display the subcategory names
                                        if ($subcategories) {
                                            foreach ($subcategories as $subcategory) {
                                ?>
                                <a href="javascript:void(0)" data-filter="<?php echo $subcategory->name; ?>" class="rebuttontwo"><?php echo $subcategory->name; ?></a>
                                <?php
                                        }
                                    } else {
                                        echo 'No subcategories found.';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    
                      <div class="main-wrap wrap-inner">
                          <div id="content">
                              <div class="main-full" id="main">
                               
                                  <ol class="content">
                                        <?php
                                            // Get the alu category ID
                                            $alu_category = get_term_by('slug', 'pvc', 'product_image');

                                            // Get the subcategories of the alu category
                                            $subcategories = get_terms(array(
                                                'taxonomy' => 'product_image',
                                                'parent' => $alu_category->term_id,
                                            ));

                                            if (!empty($subcategories)) {
                                                foreach ($subcategories as $subcategory) {

                                                    // Query the custom post type galleries for posts in the current subcategory
                                                    $args = array(
                                                        'post_type' => 'galleries',
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'product_image',
                                                                'field' => 'term_id',
                                                                'terms' => $subcategory->term_id,
                                                            ),
                                                        ),
                                                    );

                                                    $posts = new WP_Query($args);
                                                    $i=900;
                                                    if ($posts->have_posts()) {
                                                    while ($posts->have_posts()) {
                                                    $posts->the_post();
                                        ?>
                                      <li class="team shot-thumbnailtwo <?php echo $subcategory->name; ?>">
                                        <div class="multi-shot testimonial-column" onclick="openPopup(<?php echo $i; ?>)">
                                             <!-- Main Content  -->
                                              <div class="dribbble-img testimonial-name">
                                                  <?php
                                                    $alt_text = get_the_title();
                                                    if ( get_field( 'gallery_product_image' ) ) : 
                                                  ?>
                                                  <a class="dribbble-link">
                                                      <picture> 
                                                          <img decoding="async" alt="<?php echo $alt_text ?>" src="<?php the_field( 'gallery_product_image' ); ?>">
                                                      </picture>
                                                  </a>
                                                  <?php endif ?>

                                                  <a href="#" class="dribbble-title">
                                                      <p><?php the_title(); ?> </p>
                                                      
                                                      <?php if ( get_field( 'gallery_location' ) ) : ?>
                                                      <p><?php the_field( 'gallery_location' ); ?></p>
                                                      <?php endif ?>
                                                  </a>
                                              </div>  
                                             <!-- End Main Content  -->

                                             <!-- Pop Up  -->
                                             <div class="popup-container" id="popup-container-<?php echo $i; ?>">
                                                  <div class="popup-content">
                                                    
                                                    <div class="gallery-slider" id="gallery-slider-<?php echo $i; ?>">
                                                        <?php if ( have_rows( 'gallery_image_of_product' ) ) : ?>
                                                        <?php $a=900; ?>
                                                        <?php while ( have_rows( 'gallery_image_of_product' ) ) : the_row(); ?>
                                                        <?php if ( get_sub_field( 'product_image' ) ) : ?>
                                                        <?php $product_image = get_sub_field('product_image'); ?>
                                                            <img src="<?php the_sub_field( 'product_image' ); ?>" alt="<?php echo $product_image; ?>" class="gallery-image <?php echo ($a==900)? 'active':''; ?>">
                                                        <?php $a++; ?>   
                                                        <?php endif ?>
                                                        <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </div>

                                                    <div class="slider-navigation">
                                                        <span class="prev-icon" onclick="showPreviousImage(<?php echo $i; ?>)">&lt;</span>
                                                        <span class="next-icon" onclick="showNextImage(<?php echo $i; ?>)">&gt;</span>
                                                    </div>
                                                    <a href="#" class="download-icon" onclick="downloadImage(<?php echo $i; ?>)">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                  </div>
                                                  <span class="close-icon" onclick="closePopupByIcon(event, <?php echo $i; ?>)">&times;</span>
                                      
                                              </div>
                                             <!-- End PopUp  -->
                                          </div>  
                                      </li>
                                      <?php
                                            $i++;
                                            }
                                            } else {
                                            // No posts found for the subcategory
                                            echo 'No posts found.';
                                            }

                                            // Restore original post data
                                            wp_reset_postdata();
                                            }
                                            } else {
                                            // No subcategories found for the alu category
                                            echo 'No subcategories found.';
                                            }
                                      ?>
                                    
                                  </ol>
                                  
                              </div>
                          </div>
                      </div>
                  </div> 
              </div>
            </div>

             <script>
                function openPopup(index) {
                    var popupContainer = document.getElementById("popup-container-" + index);
                    popupContainer.style.display = "block";
                }

                function closePopup(index) {
                    var popupContainer = document.getElementById("popup-container-" + index);
                    popupContainer.style.display = "none";
                }

                function showNextImage(index) {
                    var gallerySlider = document.getElementById("gallery-slider-" + index);
                    var activeImage = gallerySlider.querySelector(".gallery-image.active");
                    var nextImage = activeImage.nextElementSibling;

                    if (!nextImage) {
                    // If there is no next image, select the first image
                    nextImage = gallerySlider.querySelector(".gallery-image:first-child");
                    }

                    activeImage.classList.remove("active");
                    nextImage.classList.add("active");
                }

                function showPreviousImage(index) {
                    var gallerySlider = document.getElementById("gallery-slider-" + index);
                    var activeImage = gallerySlider.querySelector(".gallery-image.active");
                    var previousImage = activeImage.previousElementSibling;

                    if (!previousImage) {
                    // If there is no previous image, select the last image
                    previousImage = gallerySlider.querySelector(".gallery-image:last-child");
                    }

                    activeImage.classList.remove("active");
                    previousImage.classList.add("active");
                }

                function closePopupByIcon(event, index) {
                    event.stopPropagation();
                    closePopup(index);
                }

                function downloadImage(index) {
                    const gallerySlider = document.getElementById("gallery-slider-" + index);
                    const activeImage = gallerySlider.querySelector(".gallery-image.active");
                    const imageUrl = activeImage.getAttribute('src');
                    const imageName = imageUrl.substring(imageUrl.lastIndexOf('/') + 1);

                    const link = document.createElement('a');
                    link.href = imageUrl;
                    link.setAttribute('download', imageName);
                    link.style.display = 'none';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }

                </script>
        </div>
    </section>
    <!-- End Pages  -->

<?php get_footer(); ?>