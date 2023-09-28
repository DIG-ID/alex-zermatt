<article id="post-<?php the_ID(); ?>" <?php post_class( 'section-angebot-content az-container pt-28 xl:pt-48 xl:pb-40 overflow-hidden' ); ?>>
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-5 xl:col-span-3 col-start-1 md:col-start-1 xl:col-start-3 grid grid-cols-1 md:grid-cols-5 xl:grid-cols-3 md:gap-x-4 xl:gap-x-9">
            <div class="col-span-1 md:col-span-5 xl:col-span-3">
                <h1 class="title-xl xl:pb-20"><?php the_title(); ?></h1>
                <p class="text-body"><?php the_field( 'content_description' ); ?></p>
            </div>
            <div class="col-span-1 md:col-span-3 xl:col-span-2">
                <span class="h-[1px] w-full border-b border-blue block xl:mb-11"></span>
                <p class="text-body"><span class="font-bold mr-1"><?php esc_html_e( 'Datum:', 'alexzermatt' ) ?></span><?php the_field( 'content_start_date' ); ?><span class="mx-1"><?php esc_html_e( 'bis', 'alexzermatt' ) ?></span><?php the_field( 'content_end_date' ); ?></p>
                <p class="text-body"><span class="font-bold mr-1"><?php esc_html_e( 'Preis:', 'alexzermatt' ) ?></span><?php the_field( 'content_price' ); ?></p>
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 md:col-start-1 xl:col-start-6">
            <?php if (has_post_thumbnail()) : 
                $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured-image-overview');
            ?>
            <div class="featured-image">
                <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="angebote-slide-img size-featured-image-overview" />
            </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/1105x605">
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>