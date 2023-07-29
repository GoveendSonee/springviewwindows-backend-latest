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
<?php if ( have_posts() ) : ?>

<header class="page-header">
  <?php
      the_archive_title( '<h1 class="page-title">', '</h1>' );
      the_archive_description( '<div class="archive-description">', '</div>' );
      ?>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while ( have_posts() ) :
      the_post();

      the_title( '<h1 class="entry-title">', '</h1>' );

    endwhile;

    the_posts_navigation();

    else :

    get_template_part( 'template-parts/content', 'none' );

    endif;
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

              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="main_slide">
                  <div class="content">
                    <div class="first">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pages/alu_windows.png" alt="">
                    </div>
                    <div class="second_ro">
                      <div class="cate">ALU Windows</div>
                      <h1 class="heading_r"><a href="">MB86</a></h1>
                      <p class="para">86 with excellent insulating properties </p>
                    </div>
                  </div>
                  <div class="secondary_slide_content">
                    <div class="property">
                      <div class="heading">Product Properties</div>
                      <ul class="product_view">
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate</li>
                        <li class="items">Lorem ipsum dolor sit amet. <b>Et similique corporis in</b> cupiditate molestias ab illum</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique</li>
                        <li class="items">Lorem ipsum dolor sit amet. Et similique corporis in cupiditate molestias ab</li>
                      </ul>
                      <div class="below_heading">Specifications</div>
                      <div class="specified">
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-water"></i></div>
                          <div class="text">Air Permiability </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                          <div class="text">Water Tightness </div>
                        </div>
                        <div class="point_view">
                          <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                          <div class="text">UW </div>
                        </div>
                      </div>
                    </div>
                    <div class="inspired_home">
                      <div class="title">
                        Get Inspired
                      </div>
                      <div class="first_row">
                        <div class="content_image first">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/1.png" alt="">
                        </div>
                        <div class="content_image second">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/2.png" alt="">
                        </div>
                        <div class="content_image third">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/category/3.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
