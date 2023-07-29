  <!-- Quality Products  -->
  <section id="quality_products">
    <div class="container">
      <div class="heading_main">
        <?php if( get_field('main_title') ): ?>
          <h1><?php the_field( 'main_title' ); ?></h1>
        <?php endif; ?>
        <br>
        <?php if( get_field('short_description') ): ?>
          <small class="content"><?php the_field( 'short_description' ); ?></small>
        <?php endif; ?>
      </div>
      <div class="products_details">
        <?php if ( have_rows( 'products' ) ) : ?>
          <?php while ( have_rows( 'products' ) ) : the_row(); ?>
            <?php if ( get_sub_field( 'image' ) ) : ?>
              <img src="<?php the_sub_field( 'image' ); ?>" />
            <?php endif ?>
          <?php endwhile; ?>
          <?php else : ?>
          <?php // no rows found ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- End Quality Products  -->

  <section id="gapping" style="margin: 3rem;"></section>