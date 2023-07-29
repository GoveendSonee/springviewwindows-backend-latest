<?php
/**
 * amberline functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package amberline
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amberline_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on amberline, use a find and replace
		* to change 'amberline' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'amberline', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'amberline' ),
			'menu-2' => esc_html__( 'Footer', 'amberline' ),
			'menu-3' => esc_html__( 'Footer Two', 'amberline' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'amberline_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'amberline_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amberline_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amberline_content_width', 640 );
}
add_action( 'after_setup_theme', 'amberline_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amberline_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'amberline' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'amberline' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'amberline_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amberline_scripts() {
	wp_enqueue_style( 'amberline-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'amberline-style', 'rtl', 'replace' );

	// CSS 
	wp_enqueue_style( 'box-icons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', false, '1.1', 'all');
	wp_enqueue_style( 'slider', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css', false, '1.1', 'all');
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/fontawesome/css/all.css', false, '1.1', 'all');
	wp_enqueue_style( 'slider-css', get_template_directory_uri() . '/assets/css/maincss.min.css', false, '1.1', 'all');
	wp_enqueue_style( 'updates-css', get_template_directory_uri() . '/assets/css/updates.css', false, '1.1', 'all');

	// JS 
	wp_enqueue_script( 'js-script-slider', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'js-script-sliderjquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'js-fontawesome', get_template_directory_uri() . '/assets/fontawesome/js/all.js', array( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'js-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), 1.1, true);
	wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth.js', array('jquery'), '1.0', true);

	wp_enqueue_script( 'amberline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amberline_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* custom options for additional data */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Theme Options',
		'menu_title' => 'Theme Options',
		'menu_slug' => 'theme-options',
		'capability' => 'manage_options',
		'position' => 100,
	));

	acf_add_options_sub_page(array(
		'page_title' => 'Header',
		'menu_title' => 'Header',
		'parent_slug' => 'theme-options',
	));

	acf_add_options_sub_page(array(
		'page_title' => 'Footer',
		'menu_title' => 'Footer',
		'parent_slug' => 'theme-options',
	));

	// Register fields for Header
	acf_add_local_field_group(array(
		'key' => 'group_subpage_1',
		'title' => 'Header Fields',
		'fields' => array(
			// Fields for Header
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-options_subpage_1',
				),
			),
		),
	));

	// Register fields for Footer
	acf_add_local_field_group(array(
		'key' => 'group_subpage_2',
		'title' => 'Footer Fields',
		'fields' => array(
			// Fields for Footer
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-options_subpage_2',
				),
			),
		),
	));
}


// Custom Post Type
function create_offers_post_type() {

    $labels = array(
        'name'               => 'Offers',
        'singular_name'      => 'Offer',
        'menu_name'          => 'Offers',
        'name_admin_bar'     => 'Offer',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Offer',
        'new_item'           => 'New Offer',
        'edit_item'          => 'Edit Offer',
        'view_item'          => 'View Offer',
        'all_items'          => 'All Offers',
        'search_items'       => 'Search Offers',
        'parent_item_colon'  => 'Parent Offers:',
        'not_found'          => 'No Offers found.',
        'not_found_in_trash' => 'No Offers found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'offers' , 'hierarchical' => true ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', '' )
    );

    register_post_type( 'offers', $args );

	// ADD Taxonomy 
	$taxonomy_labels = array(
        'name'              => 'Products',
        'singular_name'     => 'Product',
        'search_items'      => 'Search Products',
        'all_items'         => 'All Products',
        'parent_item'       => 'Parent Product',
        'parent_item_colon' => 'Parent Product:',
        'edit_item'         => 'Edit Product',
        'update_item'       => 'Update Product',
        'add_new_item'      => 'Add New Product',
        'new_item_name'     => 'New Product Name',
        'menu_name'         => 'Product'
    );

    $taxonomy_args = array(
        'labels'             => $taxonomy_labels,
        'hierarchical'       => true,
        'public'             => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'product' )
    );

    register_taxonomy( 'product', 'offers', $taxonomy_args );

}
add_action( 'init', 'create_offers_post_type' );


// Refresh The CPT CODE
function flush_rewrite_rules_on_activation() {
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'flush_rewrite_rules_on_activation');


// Custom URL Plugins 
function custom_taxonomy_rewrite_rule() {
    $taxonomy_name = 'product'; // Replace with your taxonomy slug
    $taxonomy = get_taxonomy($taxonomy_name);
    
    if ($taxonomy && $taxonomy->hierarchical) {
        $rewrite_slug = $taxonomy->rewrite['slug'];

        // Add a custom rewrite rule for subcategory archive pages
        add_rewrite_rule(
            "^$rewrite_slug/([^/]+)/([^/]+)/?$",
            'index.php?' . $taxonomy_name . '=$matches[2]',
            'top'
        );
    }
}
add_action('init', 'custom_taxonomy_rewrite_rule', 10, 0);


//Gallery 


// Custom Post Type
function create_galleries_post_type() {

    $labels = array(
        'name'               => 'galleries',
        'singular_name'      => 'gallery',
        'menu_name'          => 'galleries',
        'name_admin_bar'     => 'gallery',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New gallery',
        'new_item'           => 'New gallery',
        'edit_item'          => 'Edit gallery',
        'view_item'          => 'View gallery',
        'all_items'          => 'All galleries',
        'search_items'       => 'Search galleries',
        'parent_item_colon'  => 'Parent galleries:',
        'not_found'          => 'No galleries found.',
        'not_found_in_trash' => 'No galleries found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'galleries' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', '' )
    );

    register_post_type( 'galleries', $args );

	// ADD Taxonomy 
	$taxonomy_labels = array(
        'name'              => 'Product_images',
        'singular_name'     => 'product_image',
        'search_items'      => 'Search Product_images',
        'all_items'         => 'All Product_images',
        'parent_item'       => 'Parent product_image',
        'parent_item_colon' => 'Parent product_image:',
        'edit_item'         => 'Edit product_image',
        'update_item'       => 'Update product_image',
        'add_new_item'      => 'Add New product_image',
        'new_item_name'     => 'New product_image Name',
        'menu_name'         => 'product_image'
    );

    $taxonomy_args = array(
        'labels'             => $taxonomy_labels,
        'hierarchical'       => true,
        'public'             => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'product_image' )
    );

    register_taxonomy( 'product_image', 'galleries', $taxonomy_args );

}
add_action( 'init', 'create_galleries_post_type' );


// NAV MENU A
function add_nav_link_class($atts, $item, $args, $depth) {
    if ($args->theme_location == 'menu-1') {
        $atts['class'] = 'nav__link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_nav_link_class', 10, 4);


function add_nav_item_class($classes, $item, $args, $depth) {
    if ($args->theme_location == 'menu-1') {
        $classes[] = 'nav__item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_nav_item_class', 10, 4);


//menu-2

function add_nav_link_class_footer($atts, $item, $args, $depth) {
    if ($args->theme_location == 'menu-2') {
        $atts['class'] = 'whole';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_nav_link_class_footer', 10, 4);


function add_nav_item_class_footer($classes, $item, $args, $depth) {
    if ($args->theme_location == 'menu-2') {
        $classes[] = 'part';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_nav_item_class_footer', 10, 4);



function add_nav_link_class_footer_two($atts, $item, $args, $depth) {
    if ($args->theme_location == 'menu-3') {
        $atts['class'] = 'whole';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_nav_link_class_footer_two', 10, 4);


function add_nav_item_class_footer_two($classes, $item, $args, $depth) {
    if ($args->theme_location == 'menu-3') {
        $classes[] = 'part';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_nav_item_class_footer_two', 10, 4);