<section id="section-seminare" class="section-seminare az-container overflow-hidden pt-12 md:pt-12 xl:pt-32">
    <div class="az-container-grid">
        <?php
        $seminar_args   = array(
            'post_type'   => 'seminar',
            'order'       => 'ASC',
            'orderby'     => 'date',
            'post_status' => 'publish',
            'nopaging'    => true,
        );
        $seminare_query = new WP_Query( $seminar_args );
        if ( $seminare_query->have_posts() ) :
            while ( $seminare_query->have_posts() ) :
                $seminare_query->the_post();
                get_template_part( 'template-parts/components/card-seminar' );
            endwhile;
        wp_reset_postdata();
        endif;
        ?>
    </div>
</section>