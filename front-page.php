<?php
    /**
     * Template Name: Home Page
     */

    get_header(); 

    get_template_part('/src/component/home/banner');
    get_template_part('/src/component/home/offer');
    get_template_part('/src/component/home/google');
    get_template_part('/src/component/home/recent_install');
    get_template_part('/src/component/home/we_known');
    get_template_part('/src/component/home/quality_product');

    get_footer(); 
    
?>