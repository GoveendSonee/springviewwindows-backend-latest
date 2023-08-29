<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package amberline
 */

get_header();
?>

	<!-- Heading  -->
	<section id="heading_pages">
        <div class="container">
            <div class="topic_page">
                <h1 class="head">Search Results:- <?php echo (get_search_query()); ?> </h1>
                <hr class="hr_headinggallery">
            </div>
        </div>
    </section>
    <!-- End Heading  -->


	<section id="homapgethirdcard" class="of_res">
		<div class="container">
			<div class="card_third">
			<?php
				// Check if there are search results
				if (have_posts()) {
				while (have_posts()) {
					the_post();
					$search_query = get_search_query();
					// Get the taxonomy names
					$taxonomy_name = 'product'; 

					// Get the terms (taxonomy names) for the post
					$terms = get_the_terms(get_the_ID(), $taxonomy_name);

					$term_names = array();
					if ($terms && !is_wp_error($terms)) {
						foreach ($terms as $term) {
							$term_names[] = '<a href="' . esc_url(get_term_link($term, $taxonomy_name)) . '">' . $term->name . '</a>';
						}
					}
					
					// Display content for the 'offers' custom post type
					if (get_post_type() === 'offers') {
				?>
				<div class="first">
					<?php if (stripos(get_the_title(), $search_query) !== false || stripos(get_the_excerpt(), $search_query) !== false) { ?>

					<?php if ( get_field( 'first_image' ) ) : ?>
							<img class="ro_spring" src="<?php the_field( 'first_image' ); ?>" alt="">
					<?php endif ?>
					<span class="acti" style="background: #f2f9ef; padding: 0.5rem;">
						<?php
							if (!empty($term_names)) {
								echo '<small>Products Category: ' . implode(', ', $term_names) . '</small>';
							}
						?>
					</span>  
				
						<?php echo '<h3 class="titple""><a href="' . esc_url(get_permalink()) . '" style="font-size: 1rem!important; font-weight: 400; padding: 0.5rem 0!important;">' . preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<span class="search-highlight" style="background-color: #ffcc00; font-weight: bold; color: #000;">$1</span>', get_the_title()) . '</a></h3>'; ?>	
							<div class="para">
								<?php echo '<p class="search-result-content">' . preg_replace('/(' . preg_quote($search_query, '/') . ')/i', '<span class="search-highlight" style="background-color: #ffcc00; font-weight: bold; color: #000;">$1</span>', wp_trim_words(get_the_excerpt(), 30, '...')) . '</p>'; ?>
							</div>
					<?php } ?>
				</div>
				<?php
					} 
						}
					} else {
						echo 'No search results found.';
					}
				?>
			</div>
		</div>
	</section>
    
<?php
get_footer();
?>
