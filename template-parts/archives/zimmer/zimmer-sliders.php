<section id="section-zimmer-sliders" class="section-zimmer-sliders az-container overflow-hidden xl:pb-48">
    <div class="az-container-grid">
        <div class="rooms-zimmer col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-3 xl:mb-64 relative">
            <?php
            $rooms_query = new WP_Query(array(
                'post_type' => 'zimmer',
                'order' => 'ASC',
                'category_name' => 'zimmer'
            ));
            if ($rooms_query->have_posts()) : ?>
                <div class="swiper-tabs-container relative overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php $index = 0; ?>
                        <?php while ($rooms_query->have_posts()) : $rooms_query->the_post(); 
                        get_template_part( 'template-parts/components/tabs', 'slide' );
                        $post_links[] = get_permalink();
                        $index++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 w-full absolute left-0 bottom-0 z-10">
                    <div class="col-span-1 md:col-span-8 xl:col-span-3 swiper-tabs-pagination"></div>
                </div>
            <?php
            wp_reset_postdata();
            endif;
            ?>
        </div>

        <div class="rooms-suite col-span-1 md:col-span-8 xl:col-span-10 col-start-1 md:col-start-1 xl:col-start-3 relative">
            <?php
            $rooms_query = new WP_Query(array(
                'post_type' => 'zimmer',
                'order' => 'ASC',
                'category_name' => 'suite'
            ));
            if ($rooms_query->have_posts()) : ?>
                <div class="swiper-suite-container relative overflow-hidden">
                    <div class="swiper-wrapper">
                        <?php $index = 0; ?>
                        <?php while ($rooms_query->have_posts()) : $rooms_query->the_post(); 
                        get_template_part( 'template-parts/components/tabs', 'slide' );
                        $post_links[] = get_permalink();
                        $index++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 w-full absolute left-0 bottom-0 z-10">
                    <div class="col-span-1 md:col-span-8 xl:col-span-3 swiper-suite-pagination"></div>
                </div>
            <?php
            wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>