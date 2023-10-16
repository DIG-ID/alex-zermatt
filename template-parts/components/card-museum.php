<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-museum col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-8 mb-24 md:mb-[70px] xl:mb-40' ); ?>>
    <div class="col-span-1 md:col-span-8 xl:col-span-8 mb-12 md:mb-11 xl:mb-20 order-1">
        <?php if (has_post_thumbnail()) : 
            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured-image-museum');
        ?>
            <div class="featured-image">
                <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="w-full size-featured-image-museum" />
            </div>
        <?php else : ?>
            <div class="featured-image">
                <img src="https://placehold.co/1268x436">
            </div>
        <?php endif; ?>
    </div>
    <div class="col-span-1 md:col-span-3 xl:col-span-3 col-start-1 order-2">
        <h2 class="title-xl mb-6 md:mb-7 xl:mb-7"><?php the_title(); ?></h2>
    </div>
    <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-6 order-3">
        <div class="text-body mb-12 xl:mb-12"><?php the_excerpt(); ?></div>
        <span class="block text-right md:text-left mr-16 xl:mr-0"><a class="btn btn--arrow-right" href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Mehr Erfahren', 'alexzermatt' ) ?></a></span>
    </div>
</article>