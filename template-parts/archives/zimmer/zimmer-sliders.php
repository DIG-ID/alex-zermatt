<section id="section-zimmer-sliders" class="section-zimmer-sliders px-0 md:px-16 xl:px-0 overflow-hidden pt-14 xl:pt-0 pb-12 md:pb-40 xl:pb-64">
    <div class="az-container-grid">
        <div class="rooms-zimmer col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-3 md:mb-64 xl:mb-64 relative">
            <?php
            $rooms_query = new WP_Query(array(
                'post_type' => 'zimmer',
                'posts_per_page' => 3,
                'order' => 'ASC',
                'category_name' => 'zimmer'
            ));
            if ($rooms_query->have_posts()) : ?>
                <div class="swiper-tabs-container relative overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-button-next zimmer-swiper-slider-button-next flex xl:hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Next">
                        </div>
                        <div class="swiper-button-prev zimmer-swiper-slider-button-prev flex xl:hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Previous">
                        </div>
                        <?php $index = 0; ?>
                        <?php while ($rooms_query->have_posts()) : $rooms_query->the_post(); 
                        get_template_part( 'template-parts/components/tabs', 'slide' );
                        $post_links[] = get_permalink();
                        $index++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 w-full relative md:absolute left-0 md:bottom-14 xl:bottom-0 z-10">
                    <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-1 swiper-tabs-pagination"></div>
                </div>
            <?php
            wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="block md:hidden col-span-1 md:col-span-8 text-center my-8">
            <span class="az-vertical-line-medium"></span>
        </div>
        <div class="rooms-suite col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-3 relative">
            <?php
            $rooms_query = new WP_Query(array(
                'post_type' => 'zimmer',
                'posts_per_page' => 2,
                'order' => 'ASC',
                'category_name' => 'suite'
            ));
            if ($rooms_query->have_posts()) : ?>
                <div class="swiper-suite-container relative overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-button-next suite-swiper-slider-button-next flex xl:hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Next">
                        </div>
                        <div class="swiper-button-prev suite-swiper-slider-button-prev flex xl:hidden">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Previous">
                        </div>
                        <?php $index = 0; ?>
                        <?php while ($rooms_query->have_posts()) : $rooms_query->the_post(); 
                        get_template_part( 'template-parts/components/tabs', 'slide' );
                        $post_links[] = get_permalink();
                        $index++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 w-full relative md:absolute left-0 md:bottom-[7.6rem] xl:bottom-0 z-10">
                    <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-1 swiper-suite-pagination"></div>
                </div>
            <?php
            wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>