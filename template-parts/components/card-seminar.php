<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-seminar col-span-4 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-3 pb-20 md:pb-24 xl:pb-64' ); ?>>
    <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-10 md:gap-x-4 xl:gap-x-9">
        <div class="col-span-1 md:col-span-8 xl:col-span-10 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10 md:gap-x-4 xl:gap-x-9">
            <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1">
                <h2 class="title-xl"><?php the_title(); ?></h2>
                <p class="title-sm !normal-case !font-thin mt-6 mb-9"><span class="font-bold"><?php esc_html_e( 'Fläche: ', 'alexzermatt' ) ?></span><?php the_field( 'size' ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-2 col-start-1">
                <hr class="border-b border-blue">
            </div>
        </div>
        
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-3 md:gap-x-4 xl:gap-x-9">
            <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1">
                <p class="text-body max-w-none xl:max-w-[340px] mt-0 xl:mt-12"><?php the_field( 'description' ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-8 xl:col-span-2 col-start-1">
                <hr class="border-b border-blue">
            </div>
            <div class="col-span-1 md:col-span-6 xl:col-span-3 col-start-1 grid grid-cols-5">
                <div class="col-span-5">
                    <p class="title-sm !normal-case"><?php esc_html_e( 'Bestuhlung & Kapazität', 'alexzermatt' ) ?></p>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-body"><?php esc_html_e( 'Theatre', 'alexzermatt' ) ?></p>
                    <?php
                    $capacity_theatre = get_field('capacity_theatre');
                    switch ($capacity_theatre) {
                        case true:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/1_theatre.svg" title="theatre" alt="theatre">';
                            echo '<p class="text-body">' . get_field('capacity_theatre') . '</p>';
                            break;
                        default:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/1_theatre_off.svg" title="theatre" alt="theatre">';
                            echo '<p class="text-body">' . esc_html_e('-', 'alexzermatt') . '</p>';
                            break;
                    }
                    ?>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-body"><?php esc_html_e( 'Reception', 'alexzermatt' ) ?></p>
                    <?php
                    $capacity_reception = get_field('capacity_reception');
                    switch ($capacity_reception) {
                        case true:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/2_reception.svg" title="reception" alt="reception">';
                            echo '<p class="text-body">' . get_field('capacity_reception') . '</p>';
                            break;
                        default:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/2_reception_off.svg" title="reception" alt="reception">';
                            echo '<p class="text-body">' . esc_html_e('-', 'alexzermatt') . '</p>';
                            break;
                    }
                    ?>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-body"><?php esc_html_e( 'Banquet', 'alexzermatt' ) ?></p>
                    <?php
                    $capacity_banquet = get_field('capacity_banquet');
                    switch ($capacity_banquet) {
                        case true:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/3_banquet.svg" title="banquet" alt="banquet">';
                            echo '<p class="text-body">' . get_field('capacity_banquet') . '</p>';
                            break;
                        default:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/3_banquet_off.svg" title="banquet" alt="banquet">';
                            echo '<p class="text-body">' . esc_html_e('-', 'alexzermatt') . '</p>';
                            break;
                    }
                    ?>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-body"><?php esc_html_e( 'Classroom', 'alexzermatt' ) ?></p>
                    <?php
                    $capacity_classroom = get_field('capacity_classroom');
                    switch ($capacity_classroom) {
                        case true:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/4_classroom.svg" title="classroom" alt="classroom">';
                            echo '<p class="text-body">' . get_field('capacity_classroom') . '</p>';
                            break;
                        default:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/4_classroom_off.svg" title="classroom" alt="classroom">';
                            echo '<p class="text-body">' . esc_html_e('-', 'alexzermatt') . '</p>';
                            break;
                    }
                    ?>
                </div>
                <div class="col-span-1 text-center">
                    <p class="text-body"><?php esc_html_e( 'U-shape', 'alexzermatt' ) ?></p>
                    <?php
                    $capacity_ushape = get_field('capacity_u-shape');
                    switch ($capacity_ushape) {
                        case true:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/5_ushape.svg" title="u-shape" alt="u-shape">';
                            echo '<p class="text-body">' . get_field('capacity_u-shape') . '</p>';
                            break;
                        default:
                            echo '<img class="mx-auto my-4" src="' . get_stylesheet_directory_uri() . '/assets/images/seminar/5_ushape_off.svg" title="u-shape" alt="u-shape">';
                            echo '<p class="text-body">' . esc_html_e('-', 'alexzermatt') . '</p>';
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 xl:col-start-4">
            <figure class="col-span-4 md:col-span-8 xl:col-span-6 mb-8 xl:mb-0">
            <?php the_post_thumbnail( 'full', array( 'class' => 'object-cover max-h-[226px] md:max-h-[500px] xl:max-h-[570px]' ) ); ?>
            </figure>
        </div>
    </div>
</article>


