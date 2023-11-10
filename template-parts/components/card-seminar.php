<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-seminar col-span-4 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-3 pb-20 md:pb-24 xl:pb-64' ); ?>>
    <div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 md:gap-x-4 xl:gap-x-9">
        <div class="col-span-1 md:col-span-8 xl:col-span-10 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 md:gap-x-4 xl:gap-x-9">
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 text-center xl:text-left">
                <h2 class="title-xl"><?php the_title(); ?></h2>
                <p class="title-sm !normal-case !font-thin my-6 md:my-12 xl:mt-6 xl:mb-9"><span class="font-bold"><?php esc_html_e( 'Fläche: ', 'alexzermatt' ) ?></span><?php the_field( 'size' ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-2 col-start-1 hidden xl:block">
                <hr class="border-b border-blue">
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-3 md:gap-x-4 xl:gap-x-9 order-3 xl:order-2">
            <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 mb-6 md:mb-8 xl:mb-0">
                <p class="text-body max-w-none xl:max-w-[435px] mt-0 xl:mt-12"><?php the_field( 'description' ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-2 col-start-1 pb-7 pt-6 md:pb-12 md:pt-7 xl:py-10">
                <hr class="border-b border-blue">
            </div>
            <div class="col-span-1 md:col-span-6 xl:col-span-3 col-start-1 grid xl:hidden 2xl:grid grid-cols-5">
                <div class="col-span-5 my-8 md:mt-12 md:mb-9 xl:mt-0">
                    <p class="font-serif font-bold text-sm md:text-xl tracking-[0.6px]"><?php esc_html_e('Bestuhlung & Kapazität', 'alexzermatt') ?></p>
                </div>
                <?php
                $capacity_types = [
                    ['Theater', '1_theatre', __( 'Theater', 'az' ) ],
                    ['Rezeption', '2_reception'],
                    ['Bankett', '3_banquet'],
                    ['Klassenzimmer', '4_classroom'],
                    ['U-Form', '5_ushape']
                ];


                foreach ($capacity_types as $type) {
                    $capacity_key = 'capacity_' . strtolower(str_replace(' ', '-', $type[0]));
                    $image_path = "/assets/images/seminar/{$type[1]}.svg";
                    $image_alt = strtolower($type[0]);

                    echo '<div class="col-span-1 text-center text-body !text-[0.75rem] !break-keep">';
                    echo '<div class="text-body">' . esc_html__( $type[3], 'alexzermatt' ) . '</div>';
                    //echo '<div class="text-body">' . sprintf( __('%s', 'alexzermatt' ), $type[0] ) . '</div>';

                    //echo sprintf(__('%s', 'alexzermatt' ), $type[0]);

                    $capacity_value = get_field($capacity_key);

                    if ($capacity_value) {
                        echo "<img class=\"mx-auto my-4\" src=\"" . get_stylesheet_directory_uri() . $image_path . "\" title=\"$image_alt\" alt=\"$image_alt\">";
                        echo "<p class=\"text-body\">" . get_field($capacity_key) . "</p>";
                    } else {
                        echo "<img class=\"mx-auto my-4\" src=\"" . get_stylesheet_directory_uri() . str_replace('.svg', '_off.svg', $image_path) . "\" title=\"$image_alt\" alt=\"$image_alt\">";
                        echo "<p class=\"text-body\">" . esc_html_e('-', 'alexzermatt') . "</p>";
                    }

                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 xl:col-start-4 order-2 xl:order-3">
            <figure class="col-span-4 md:col-span-8 xl:col-span-6 mb-6 md:mb-12 xl:mb-0">
            <?php the_post_thumbnail( 'full', array( 'class' => 'object-cover max-h-[226px] md:max-h-[500px] xl:max-h-[570px]' ) ); ?>
            </figure>
        </div>
    </div>
    <div class="az-container-grid">
        <div class="col-span-7 col-start-1 hidden xl:grid 2xl:hidden grid-cols-5">
            <div class="col-span-5 my-8 md:mt-12 md:mb-9 xl:mt-0">
                <p class="font-serif font-bold text-sm md:text-xl tracking-[0.6px]"><?php esc_html_e('Bestuhlung & Kapazität', 'alexzermatt') ?></p>
            </div>
            <?php
            $capacity_types = [
                ['Theater', '1_theatre'],
                ['Rezeption', '2_reception'],
                ['Bankett', '3_banquet'],
                ['Klassenzimmer', '4_classroom'],
                ['U-Form', '5_ushape']
            ];

            foreach ($capacity_types as $type) {
                $capacity_key = 'capacity_' . strtolower(str_replace(' ', '-', $type[0]));
                $image_path = "/assets/images/seminar/{$type[1]}.svg";
                $image_alt = strtolower($type[0]);

                echo '<div class="col-span-1 text-center text-body !break-keep">';
                echo '<div class="text-body">' . esc_html_e($type[0], 'alexzermatt') . '</div>';

                $capacity_value = get_field($capacity_key);

                if ($capacity_value) {
                    echo "<img class=\"mx-auto my-4\" src=\"" . get_stylesheet_directory_uri() . $image_path . "\" title=\"$image_alt\" alt=\"$image_alt\">";
                    echo "<p class=\"text-body\">" . get_field($capacity_key) . "</p>";
                } else {
                    echo "<img class=\"mx-auto my-4\" src=\"" . get_stylesheet_directory_uri() . str_replace('.svg', '_off.svg', $image_path) . "\" title=\"$image_alt\" alt=\"$image_alt\">";
                    echo "<p class=\"text-body\">" . esc_html_e('-', 'alexzermatt') . "</p>";
                }

                echo '</div>';
            }
            ?>
        </div>
    </div>
</article>


