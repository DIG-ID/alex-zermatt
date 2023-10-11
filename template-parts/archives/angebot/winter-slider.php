<section id="section-winter-slider" class="section-winter-slider az-container overflow-hidden pb-40 md:pb-16 xl:pb-72">
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-3 mb-12 md:mb-8 xl:mb-7 relative">
            <p class="title-overline left-1/2 transform -translate-x-1/2 md:transform-none md:left-[250px]"><?php esc_html_e( 'Winter', 'alexzermatt' ) ?></p>
            <div class="swiper-button-next angebot-swiper-button-next winter-swiper-button-next">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Next">
            </div>
            <div class="swiper-button-prev angebot-swiper-button-prev winter-swiper-button-prev">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Previous">
            </div>
            <div class="swiper angebote-winter-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'angebot',
                        'category_name' => 'winter',
                        'order' => 'ASC',
                    );
                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) :
                            $query->the_post();
                            get_template_part( 'template-parts/components/angebote', 'slide' );
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>