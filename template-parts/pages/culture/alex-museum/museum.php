<section id="section-museum" class="section-museum az-container mb-32 md:mb-36 xl:mb-48">
    <div class="az-container-grid">
        <?php
        $museum_args = array(
            'post_type'   => 'museum',
            'order'       => 'ASC',
            'orderby'     => 'date',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1 
        );
        $museum_query = new WP_Query($museum_args);
        if ($museum_query->have_posts()) : ?>
            <div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-8 md:gap-x-4 xl:gap-x-9">
        <?php
            while ($museum_query->have_posts()) :
                $museum_query->the_post();
                get_template_part('template-parts/components/card-museum');
            endwhile;
            ?>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-12 justify-center flex">
            <?php
            // Pagination
            if ($museum_query->max_num_pages > 1) {
                echo '<div class="pagination flex min-w-[375px]">';
            
                $current_page = max(1, get_query_var('paged'));
                $total_pages = $museum_query->max_num_pages;
            
                if ($current_page > 1) {
                    echo '<a href="' . get_previous_posts_page_link() . '" class="pagination-arrow prev-arrow flipped mr-7"><img src="' . get_stylesheet_directory_uri() . '/assets/images/slider-arrow.svg" alt="Previous" style="transform: scaleX(-1);" /></a>';
                } elseif ($current_page == 1) {
                    echo '<span class="w-[145px] mr-7"></span>';
                }
            
                echo '<div class="numeric-pagination">' . $current_page . ' / ' . $total_pages . '</div>';

                if ($current_page < $total_pages) {
                    echo '<a href="' . get_next_posts_page_link() . '" class="pagination-arrow next-arrow ml-7"><img src="' . get_stylesheet_directory_uri() . '/assets/images/slider-arrow.svg" alt="Next" /></a>';
                }
                
                echo '</div>';
            }
             ?>
            </div>
            <?php 
        wp_reset_postdata();
        endif;
        ?>
    </div>

    
</section>