<section id="section-museum" class="section-museum az-container mb-32 md:mb-36 xl:mb-44">
	<div class="az-container-grid">
        <?php
        $museum_args   = array(
            'post_type'   => 'museum',
            'order'       => 'ASC',
            'orderby'     => 'date',
            'post_status' => 'publish',
            'nopaging'    => true,
        );
        $museum_query = new WP_Query( $museum_args );
        if ( $museum_query->have_posts() ) :
            while ( $museum_query->have_posts() ) :
                $museum_query->the_post();
                get_template_part( 'template-parts/components/card-museum' );
            endwhile;
        wp_reset_postdata();
        endif;
        ?>
    </div>
</section>