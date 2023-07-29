    <!-- Quality  -->
    <section id="quality">
      <div class="container">
        <div class="heading_main">
          <?php if( get_field('we_are_known_main_title_copy') ): ?>
            <h1><?php the_field( 'we_are_known_main_title_copy' ); ?></h1>
          <?php endif; ?>
      </div>
        <div class="list_out_del">
            <?php if ( have_rows( 'we_are_known_for' ) ) : ?>
              <?php while ( have_rows( 'we_are_known_for' ) ) : the_row(); ?>
                <span>
                  <?php if ( get_sub_field( 'image' ) ) : ?>
                    <img class="image" src="<?php the_sub_field( 'image' ); ?>" alt="">
                  <?php endif ?>
                  <?php if ( get_sub_field( 'title' ) ) : ?>
                    <?php the_sub_field( 'title' ); ?>
                  <?php endif ?>
                </span>
                <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- End Quality  -->