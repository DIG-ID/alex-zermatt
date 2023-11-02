<article data-swiper-autoplay="2000" id="post-<?php the_ID(); ?>" <?php post_class( 'swiper-slide' ); ?>>
    <?php if (has_post_thumbnail()) : 
        $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'angebote-slider-image');
    ?>
        <div class="featured-image">
            <img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="angebote-slide-img size-angebote-slider-image" />
        </div>
    <?php else : ?>
        <div class="featured-image">
            <img src="https://placehold.co/615x640">
        </div>
    <?php endif; ?>
    <h2 class="title-xl pt-7 md:pt-12 xl:pt-7 pb-10 xl:pb-16"><?php the_title(); ?></h2>
    <span class="block text-right md:text-left mr-16 xl:mr-0 pb-2"><a class="btn btn--arrow-right" href="<?php the_permalink( '' ); ?>"><?php echo esc_html_e( 'Mehr Erfahren', 'alexzermatt' ); ?></a></span>
</article>
