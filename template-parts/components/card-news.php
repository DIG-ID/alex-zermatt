<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-news col-span-1 md:col-span-4 xl:col-span-3 mb-24' ); ?>>
    <div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 xl:col-start-4 order-2 xl:order-3">
        <?php if (has_post_thumbnail()) : 
            $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'overall-square');
        ?>
            <div class="featured-image mb-4">
                <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="object-cover w-full" />
            </div>
        <?php else : ?>
            <div class="featured-image mb-4">
                <img src="https://placehold.co/453x453" class="object-cover w-full size-overall-square">
            </div>
        <?php endif; 
        $formatted_date = get_the_date('d/m/y');
        echo '<p class="title-sub mb-4">' . $formatted_date . '</p>';
        ?>
        <h2 class="font-serif font-extralight text-2xl md:text-[1.75rem] xl:text-[1.25rem] text-blue leading-7 md:leading-none tracking-[1.1px] md:tracking-[1.4px] xl:tracking-[2.6px] uppercase break-words mb-4"><?php the_title(); ?></h2>
        <div class="text-body mb-6 md:mb-7 xl:mb-10 max-w-none md:max-w-[393px]"><?php the_excerpt(); ?></div>
        <span class="block text-right md:text-left mr-16 xl:mr-0"><a class="btn btn--arrow-right" href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Mehr Erfahren', 'alexzermatt' ) ?></a></span>
    </div>
</article>