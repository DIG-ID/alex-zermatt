<section id="section-events" class="section-events az-container overflow-hidden xl:pb-48">
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-8 md:gap-x-4 xl:gap-x-9">
        <?php
        $event_args   = array(
            'post_type'   => 'event',
            'order'       => 'ASC',
            'orderby'     => 'date',
            'post_status' => 'publish',
        );
        $evente_query = new WP_Query( $event_args );
        if ( $evente_query->have_posts() ) :
            while ( $evente_query->have_posts() ) :
                $evente_query->the_post();
                get_template_part( 'template-parts/components/card-event' );
            endwhile;
        wp_reset_postdata();
        endif;
        ?>
        </div>
    </div>
</section>