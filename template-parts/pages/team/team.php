<section id="section-rooms" class="section-rooms az-container overflow-hidden xl:mb-40">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-9 md:gap-x-4 xl:gap-x-[118px]">
        <?php
            $terms = get_terms(array(
                'taxonomy' => 'team-position',
                'hide_empty' => false,
                'orderby' => 'date', 
            ));

            if (!empty($terms)) {
                foreach ($terms as $term) {
                    $event_args = array(
                        'post_type' => 'team-member',
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'team-position',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    );

                    $evente_query = new WP_Query($event_args);

                    if ($evente_query->have_posts()) { ?>
                        <div class="col-span-1 md:col-span-8 xl:col-span-9">
                            <h2 class="title-sub mb-8"><?php echo $term->name; ?> </h2>
                        </div>
                    <?php
                        while ($evente_query->have_posts()) {
                            $evente_query->the_post();
                            get_template_part('template-parts/components/card-team');
                        }

                        wp_reset_postdata();
                    }
                }
            }
            ?>
        </div>
    </div>
</section>