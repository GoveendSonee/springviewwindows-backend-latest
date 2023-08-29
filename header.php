<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amberline
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Top Header  -->
    <section id="top_header">
      <div class="container">
        <div class="row">
          <div class="opening_time">
            <div class="content">
              <i class="bx bx-time-five"></i> <?php the_field( 'show_room_time', 'option' ); ?>
            </div>
          </div>
          <div class="phne">
            <div class="content">
              <i class="bx bxs-phone"></i> Call us at:
              <a href="tel:<?php the_field( 'phone_number', 'option' ); ?>"><?php the_field( 'phone_number', 'option' ); ?></a>
            </div>
          </div>
          <div class="search resultshowing_push">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label>
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Top Header  -->

    <!-- Menu & Header  -->
    <section id="menu">
      <div class="container">
        <header class="header">
          <div class="header__content">
            <div class="main_logo">

              <a href="<?php echo get_home_url(); ?>" class="logo">
                <?php $logo = get_field( 'logo', 'option' ); ?>
                <?php if ( $logo ) : ?>
                  <img src="<?php echo esc_url( $logo['url'] ); ?>" class="card-img-top" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                <?php endif; ?>
              </a>

              <nav class="nav">

                <a href="<?php echo get_home_url(); ?>" class="logo-mobile">
                  <?php $mobile_logo = get_field( 'mobile_logo', 'option' ); ?>
                  <?php if ( $mobile_logo ) : ?>
                    <img src="<?php echo esc_url( $mobile_logo['url'] ); ?>" class="card-img-top" alt="<?php echo esc_attr( $mobile_logo['alt'] ); ?>" />
                  <?php endif; ?>
                </a>

                <div class="timing_menu">
                  <div class="row">
                    <div class="opening_time">
                      <div class="content">
                        <i class="bx bx-time-five"></i> <?php the_field( 'show_room_time', 'option' ); ?>
                      </div>
                    </div>
                    <div class="phne">
                      <div class="content">
                        <i class="bx bxs-phone"></i> Call us at:
                        <a href="tel:<?php the_field( 'phone_number', 'option' ); ?>"><?php the_field( 'phone_number', 'option' ); ?></a>
                      </div>
                    </div>
                    <div class="search resultshowing_push">
                      <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                          <label>
                              <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span>
                              <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                          </label>
                          <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
                <?php
                  wp_nav_menu(array(
                      'theme_location' => 'menu-1',
                      'container' => '',
                      'menu_class' => 'nav__list',
                  ));
                ?>  
              </nav>
            </div>

            <div class="hamburger">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </div>
          </div>
        </header>
      </div>
    </section>
    <!-- Menu & Header  -->