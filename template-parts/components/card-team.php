<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-team col-span-1 md:col-span-4 xl:col-span-3 mb-24' ); ?>>
    <div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 xl:col-start-4 order-2 xl:order-3">
        <?php if (has_post_thumbnail()) : 
            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured-image-museum');
        ?>
            <div class="featured-image mb-7">
                <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="object-cover w-full" />
            </div>
        <?php else : ?>
            <div class="featured-image mb-7">
                <img src="https://placehold.co/453x453">
            </div>
        <?php endif; ?>
        <h2 class="title-xl mb-4"><?php the_title(); ?></h2>
        <div class="text-body mb-6 md:mb-7 max-w-none md:max-w-[393px]"><?php the_excerpt(); ?></div>
    </div>
</article>