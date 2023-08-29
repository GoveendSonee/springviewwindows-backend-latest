<section id="homapgethirdcard">
  <div class="container">
    <div class="card_third">

      <div class="first">
        <?php if ( get_field( 'homepage_home_image' ) ) : ?>
          <img class="ro_spring" src="<?php the_field( 'homepage_home_image' ); ?>" />
        <?php endif; ?>

        <?php if ( get_field( 'homepage_home_title' ) ) : ?>
        <h4 class="titple"><?php the_field( 'homepage_home_title' ); ?></h4>
        <?php endif; ?>

        <?php if ( get_field( 'homepage_home_description' ) ) : ?>
        <div class="para">
          <?php the_field( 'homepage_home_description' ); ?>
        </div>
        <?php endif; ?>

        <?php if ( get_field( 'homepage_home_see_more_title' ) ) : ?>
          <?php $homepage_home_see_more_link = get_field( 'homepage_home_see_more_link' ); ?>
          <span class="acti">
            <a href="<?php echo esc_url( $homepage_home_see_more_link); ?>"><?php the_field( 'homepage_home_see_more_title' ); ?></a>
            <i class='bx bx-chevron-right'></i>
          </span>  
        <?php endif; ?>
      </div>

      <div class="first">
        <?php if ( get_field( 'homepage_industry_image_copy' ) ) : ?>
          <img class="ro_spring" src="<?php the_field( 'homepage_industry_image_copy' ); ?>" />
        <?php endif; ?>

        <?php if ( get_field( 'homepage_industry_title_copy' ) ) : ?>
        <h4 class="titple"><?php the_field( 'homepage_industry_title_copy' ); ?></h4>
        <?php endif; ?>

        <?php if ( get_field( 'homepage_industry_description_copy' ) ) : ?>
        <div class="para">
          <?php the_field( 'homepage_industry_description_copy' ); ?>
        </div>
        <?php endif; ?>

        <?php if ( get_field( 'homepage_industry_see_more_title_copy' ) ) : ?>
          <?php $homepage_industry_see_more_link_copy = get_field( 'homepage_industry_see_more_link_copy' ); ?>
          <span class="acti">
            <a href="<?php echo esc_url( $homepage_industry_see_more_link_copy); ?>"><?php the_field( 'homepage_industry_see_more_title_copy' ); ?></a>
            <i class='bx bx-chevron-right'></i>
          </span>  
        <?php endif; ?>
      </div>

      <div class="first">
        <?php if ( get_field( 'homepage_architects_image_copy2' ) ) : ?>
          <img class="ro_spring" src="<?php the_field( 'homepage_architects_image_copy2' ); ?>" />
        <?php endif; ?>

        <?php if ( get_field( 'homepage_architects_title_copy2' ) ) : ?>
        <h4 class="titple"><?php the_field( 'homepage_architects_title_copy2' ); ?></h4>
        <?php endif; ?>

        <?php if ( get_field( 'homepage_architects_description_copy2' ) ) : ?>
        <div class="para">
          <?php the_field( 'homepage_architects_description_copy2' ); ?>
        </div>
        <?php endif; ?>

        <?php if ( get_field( 'homepage_architects_see_more_title_copy2' ) ) : ?>
          <?php $homepage_architects_see_more_link_copy2 = get_field( 'homepage_architects_see_more_link_copy2' ); ?>
          <span class="acti">
            <a href="<?php echo esc_url( $homepage_architects_see_more_link_copy2); ?>"><?php the_field( 'homepage_architects_see_more_title_copy2' ); ?></a>
            <i class='bx bx-chevron-right'></i>
          </span>  
        <?php endif; ?>
      </div>
      
    </div>
  </div>
</section>

<!-- Offer Section  -->
<section id="offer_part" style="margin: -1rem 0 0;">

  <div class="heading_main">
    <?php if ( get_field( 'our_services_title' ) ) : ?>
      <h1><?php the_field( 'our_services_title' ); ?></h1>
    <?php endif; ?>
  </div>

  <div class="hero">

    <nav class="nav_class">
      <ul>
        <?php $main_category = get_field( 'main_category' ); ?>
            <?php if ( $main_category ) : ?>
              <?php $get_terms_args = array(
                'taxonomy' => 'product',
                'orderby'   => 'none',
                'hide_empty' => false,
                'include' => $main_category,
              ); ?>
              <?php $terms = get_terms( $get_terms_args ); ?>
              <?php if ( $terms ) : ?>
                <?php foreach ( $terms as $term ) : ?>
                  <li><a href="#<?php echo esc_html( $term->name ); ?>" class="underline-effect"><?php echo esc_html( $term->name ); ?></a></li>
                <?php endforeach; ?>
              <?php endif; ?>
          <?php endif; ?>
      </ul>
    </nav>

    <section id="ALUMINIUM" class="alu_oofer">
      <?php if ( have_rows( 'alu' ) ) : ?>
      <?php while ( have_rows( 'alu' ) ) : the_row(); ?>
        <div class="image_offer">
          <div class="imag_on">
            <?php if ( get_sub_field( 'background_image_alu' ) ) : ?>
              <img src="<?php the_sub_field( 'background_image_alu' ); ?>" />
            <?php endif ?>
          </div>
          <div class="details">
            <div class="content_windows">
              <div class="main_title">
                <div class="logo">
                  <div class="svg">
                    <svg style="color: #4E4E4E!important;" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Glassdoor</title><path d="M17.144 20.572H3.43C3.43 22.465 4.963 24 6.856 24h10.286c1.893 0 3.428-1.535 3.428-3.428V6.492c0-.07-.054-.125-.124-.125h-3.18c-.067 0-.123.056-.123.126v14.08zm0-20.572c1.892 0 3.427 1.535 3.427 3.43H6.858v14.078c0 .068-.056.125-.125.125H3.554c-.07 0-.125-.057-.125-.125V3.428C3.43 1.536 4.963 0 6.856 0h10.287" fill="#444444"></path></svg>
                  </div>
                  <h1 class="view"><?php the_sub_field( 'title' ); ?></h1>
                </div>
                <p class="cont"><?php the_sub_field( 'short_description' ); ?></p>
              </div>
              <div class="description">
                <?php if ( have_rows( 'product_list_for_alu' ) ) : ?>
			          <?php while ( have_rows( 'product_list_for_alu' ) ) : the_row(); ?>

                <div class="pointing_view">

                  <?php if ( get_sub_field( 'image' ) ) : ?>
                    <img src="<?php the_sub_field( 'image' ); ?>" class="image_view"/>
                  <?php endif ?>

                  <?php $product_page_link = get_sub_field( 'product_page_link' ); ?>
                  <?php $term = get_term_by( 'id', $product_page_link, 'product' ); ?>
                  <?php if ( $term ) : ?>
                    <p class="views"><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a></p>
                  <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </section>

    <section id="PVC">
      <?php if ( have_rows( 'pvc' ) ) : ?>
      <?php while ( have_rows( 'pvc' ) ) : the_row(); ?>
      <div class="image_offer second">
        <div class="details">
          <div class="content_windows">
            <div class="main_title">
                <?php if ( get_sub_field( 'title' ) ) : ?>
                  <div class="logo">
                    <div class="svg">
                      <svg style="color: #4E4E4E!important;" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Glassdoor</title><path d="M17.144 20.572H3.43C3.43 22.465 4.963 24 6.856 24h10.286c1.893 0 3.428-1.535 3.428-3.428V6.492c0-.07-.054-.125-.124-.125h-3.18c-.067 0-.123.056-.123.126v14.08zm0-20.572c1.892 0 3.427 1.535 3.427 3.43H6.858v14.078c0 .068-.056.125-.125.125H3.554c-.07 0-.125-.057-.125-.125V3.428C3.43 1.536 4.963 0 6.856 0h10.287" fill="#444444"></path></svg>
                    </div>
                    <h1 class="view"><?php the_sub_field( 'title' ); ?></h1>
                  </div>
                <?php endif; ?>
                <?php if ( get_sub_field( 'short_description' ) ) : ?>
                <p class="cont"><?php the_sub_field( 'short_description' ); ?></p>
              <?php endif; ?>
            </div>
            <div class="description">

                <?php if ( have_rows( 'product_list_for_pvc' ) ) : ?>
                  <?php while ( have_rows( 'product_list_for_pvc' ) ) : the_row(); ?>
                    <div class="pointing_view">
                      <?php if ( get_sub_field( 'image' ) ) : ?>
                        <img src="<?php the_sub_field( 'image' ); ?>" alt="" class="image_view"/>
                      <?php endif ?>
                      <?php $product_category_title = get_sub_field( 'product_category_title' ); ?>
                      <?php $term = get_term_by( 'id', $product_category_title, 'product' ); ?>
                      <?php if ( $term ) : ?>
                        <p class="views"><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a></p>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
             
            </div>
          </div>
        </div>
        <div class="imag_on">
          <?php if ( get_sub_field( 'background_image_pvc' ) ) : ?>
            <img src="<?php the_sub_field( 'background_image_pvc' ); ?>" alt="">
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </section>
    
    <section id="WOOD">
      <?php if ( have_rows( 'innovation' ) ) : ?>
      <?php while ( have_rows( 'innovation' ) ) : the_row(); ?>
      <div class="image_offer">
        <div class="details">
          <div class="content_windows">
            <div class="main_title">
              <?php if ( get_sub_field( 'title' ) ) : ?>
                <div class="logo">
                  <div class="svg">
                    <svg style="color: #4E4E4E!important;" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Glassdoor</title><path d="M17.144 20.572H3.43C3.43 22.465 4.963 24 6.856 24h10.286c1.893 0 3.428-1.535 3.428-3.428V6.492c0-.07-.054-.125-.124-.125h-3.18c-.067 0-.123.056-.123.126v14.08zm0-20.572c1.892 0 3.427 1.535 3.427 3.43H6.858v14.078c0 .068-.056.125-.125.125H3.554c-.07 0-.125-.057-.125-.125V3.428C3.43 1.536 4.963 0 6.856 0h10.287" fill="#444444"></path></svg>
                  </div>
                  <h1 class="view"><?php the_sub_field( 'title' ); ?></h1>
                </div>
              <?php endif ?>

              <?php if ( get_sub_field( 'short_description' ) ) : ?>
                <p class="cont"><?php the_sub_field( 'short_description' ); ?></p>
              <?php endif ?>
            </div>
            <div class="description">

                <?php if ( have_rows( 'product_list_for_innovation' ) ) : ?>
                  <?php while ( have_rows( 'product_list_for_innovation' ) ) : the_row(); ?>
                    <div class="pointing_view">
                      <?php if ( get_sub_field( 'image' ) ) : ?>
                        <img src="<?php the_sub_field( 'image' ); ?>" alt="" class="image_view"/>
                      <?php endif ?>
                      <?php $product_category_title = get_sub_field( 'product_category_title' ); ?>
                      <?php $term = get_term_by( 'id', $product_category_title, 'product' ); ?>
                      <?php if ( $term ) : ?>
                        <p class="views"><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a></p>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
              
            </div>
          </div>
        </div>
        <div class="imag_on">
          <?php if ( get_sub_field( 'background_image_innovation' ) ) : ?>
            <img src="<?php the_sub_field( 'background_image_innovation' ); ?>" />
          <?php endif ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </section>
    
    <section id="GLASS-CONSTRUCTIONS">
      <?php if ( have_rows( 'glass_constructions' ) ) : ?>
      <?php while ( have_rows( 'glass_constructions' ) ) : the_row(); ?>
        <div class="image_offer second glasss__">
          <div class="imag_on">
            <?php if ( get_sub_field( 'background_image_for_glass_constructions' ) ) : ?>
              <img src="<?php the_sub_field( 'background_image_for_glass_constructions' ); ?>" />
            <?php endif ?>
          </div>
          <div class="details">
            <div class="content_windows">
              <div class="main_title">
                <?php if ( get_sub_field( 'title' ) ) : ?>
                  <div class="logo">
                    <div class="svg">
                      <svg style="color: #4E4E4E!important;" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Glassdoor</title><path d="M17.144 20.572H3.43C3.43 22.465 4.963 24 6.856 24h10.286c1.893 0 3.428-1.535 3.428-3.428V6.492c0-.07-.054-.125-.124-.125h-3.18c-.067 0-.123.056-.123.126v14.08zm0-20.572c1.892 0 3.427 1.535 3.427 3.43H6.858v14.078c0 .068-.056.125-.125.125H3.554c-.07 0-.125-.057-.125-.125V3.428C3.43 1.536 4.963 0 6.856 0h10.287" fill="#444444"></path></svg>
                    </div>
                    <?php $page_link_glass = get_sub_field( 'page_link_glass' ); ?>
                    <?php if ( $page_link_glass ) : ?>
                      <a style="text-decoration:none!important;" href="<?php echo esc_url( $page_link_glass); ?>"><h1 class="view"><?php the_sub_field( 'title' ); ?></h1></a>
                    <?php endif; ?>
                  </div>
                <?php endif ?>
                <?php if ( get_sub_field( 'short_description' ) ) : ?>
                  <p class="cont"><?php the_sub_field( 'short_description' ); ?></p>
                <?php endif ?>
              </div>
              <div class="description third">
                
                  <?php if ( have_rows( 'glass_constructions_product' ) ) : ?>
                    <?php while ( have_rows( 'glass_constructions_product' ) ) : the_row(); ?>
                    <div class="pointing_view">
                      <?php if ( get_sub_field( 'image' ) ) : ?>
                        <img src="<?php the_sub_field( 'image' ); ?>" class="image_view"/>
                      <?php endif ?>
                      <p class="views"><?php the_sub_field( 'product_title' ); ?></p>
                    </div>
                    <?php endwhile; ?>
                  <?php else : ?>
                    <?php // no rows found ?>
                  <?php endif; ?>

              </div>
              <div class="offer_includes">
                <?php if ( get_sub_field( 'heading_our_offer_includes_' ) ) : ?>
                  <h4><?php the_sub_field( 'heading_our_offer_includes_' ); ?></h4>
                <?php endif ?>

                <ol class="lisat">
                  <?php if ( have_rows( 'our_offer_includes:' ) ) : ?>
                    <?php while ( have_rows( 'our_offer_includes:' ) ) : the_row(); ?>
                        <li class="lisat"><?php the_sub_field( 'list_of_points' ); ?></li>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php // no rows found ?>
                  <?php endif; ?>
                </ol>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </section>

  </div>

</section>
<!-- End Offer Section  -->