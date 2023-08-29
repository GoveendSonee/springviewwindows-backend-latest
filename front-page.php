<?php
    /**
     * Template Name: Home Page
     */

    get_header(); 

    get_template_part('/src/component/home/banner');

    // Display a search box
    get_search_form();

    // Check if there is a search query
    if (is_search()) {
        echo '<h2>Search Results</h2>';
        
        // Custom query to retrieve search results from the "Offers" custom post type
        $args = array(
            'post_type' => 'offers', // Replace with your custom post type slug
            's' => get_search_query(),
            'posts_per_page' => -1,
        );
        $offers_query = new WP_Query($args);

        if ($offers_query->have_posts()) {
            while ($offers_query->have_posts()) {
                $offers_query->the_post();
                // Display custom post type content here
                // You can format it similarly to your taxonomy-product.php
            }
            wp_reset_postdata();
        } else {
            echo 'No search results found.';
        }
    }

    get_template_part('/src/component/home/offer');
    get_template_part('/src/component/home/google');
    get_template_part('/src/component/home/recent_install');
    get_template_part('/src/component/home/we_known');
    get_template_part('/src/component/home/quality_product');

    get_footer(); 
    
?>