<!-- Banner  -->
<section id="banner_width">
    <div class="banner_cont">
    <div class="img">
        <?php if ( get_field( 'banner_image' ) ) : ?>
            <img src="<?php the_field( 'banner_image' ); ?>" alt="<?php the_field( 'banner_title' ); ?>" />
        <?php endif ?>
    </div>
    <div class="description_banner container">
        <div class="main_">
        <?php if ( get_field( 'banner_title' ) ) : ?>
            <h1 class="heading"><?php the_field( 'banner_title' ); ?></h1>
        <?php endif ?>

        <?php if ( get_field( 'banner_description' ) ) : ?>
            <p class="para">
                <?php the_field( 'banner_description' ); ?>
            </p>
        <?php endif ?>
        <?php $buttom_link = get_field( 'buttom_link' ); ?>
        <?php if ( $buttom_link ) : ?>
            <a href="<?php echo esc_url( $buttom_link) ; ?>" class="button"><?php the_field( 'button_title' ); ?></a>
        <?php endif; ?>
        </div>
        <div class="form">
        <?php if ( get_field( 'contact_form_title' ) ) : ?>
            <div class="title"><?php the_field( 'contact_form_title' ); ?></div>
        <?php endif; ?>
        <!--<form action="submit-form.php" method="post">-->
        <!--    <div class="form-group">-->
        <!--    <label for="full-name">Your Name:</label>-->
        <!--    <input-->
        <!--        class="form_re"-->
        <!--        type="text"-->
        <!--        id="full-name"-->
        <!--        name="full-name"-->
        <!--        required-->
        <!--    />-->
        <!--    </div>-->

        <!--    <div class="form-group">-->
        <!--    <label for="email">Your Email:</label>-->
        <!--    <input-->
        <!--        class="form_re"-->
        <!--        type="email"-->
        <!--        id="email"-->
        <!--        name="email"-->
        <!--        required-->
        <!--    />-->
        <!--    </div>-->

        <!--    <div class="form-group">-->
        <!--    <label for="phone">Phone Number:</label>-->
        <!--    <input-->
        <!--        class="form_re"-->
        <!--        type="tel"-->
        <!--        id="phone"-->
        <!--        name="phone"-->
        <!--        required-->
        <!--    />-->
        <!--    </div>-->

        <!--    <div class="form-group">-->
        <!--    <label for="post-code">Post Code/Area:</label>-->
        <!--    <input-->
        <!--        class="form_re"-->
        <!--        type="text"-->
        <!--        id="post-code"-->
        <!--        name="post-code"-->
        <!--        required-->
        <!--    />-->
        <!--    </div>-->

        <!--    <div class="form-group">-->
        <!--    <label for="message">Your Message:</label>-->
        <!--    <textarea-->
        <!--        class="form_re"-->
        <!--        id="message"-->
        <!--        name="message"-->
        <!--        required-->
        <!--    ></textarea>-->
        <!--    </div>-->

        <!--    <div class="form-group subm">-->
        <!--        <label for="file-input">Upload Document</label>-->
        <!--        <input type="file" id="file-input" class="file-input" />-->
        <!--        <label for="file-input" class="file-label">-->
        <!--            <span class="placeholder">Drop PDF File here</span>-->
        <!--            <i class="fa-solid fa-upload"></i>-->
        <!--        </label>-->
        <!--    </div>-->

        <!--    <div class="form-group send" id="form_align">-->
        <!--    <button class="form_send" type="submit">Send</button>-->
        <!--    </div>-->
        <!--</form>-->
        <?php echo do_shortcode( '[forminator_form id="979"]' ); ?>
        <?php 
            // echo do_shortcode( '[contact-form-7 id="106" title="Banner Form"]'  ); 
        ?>
        </div>
    </div>
    </div>
</section>
<!-- End Banner  -->