<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-event col-span-1 md:col-span-8 xl:col-span-4 mb-24 md:mb-[70px] xl:mb-40' ); ?>>
    <div class="col-span-1 md:col-span-8 xl:col-span-7 col-start-1 xl:col-start-4 order-2 xl:order-3">
        <figure class="col-span-4 md:col-span-8 xl:col-span-6 mb-6 md:mb-10 xl:mb-5">
            <?php the_post_thumbnail( 'angebote-slider-image', array( 'class' => 'object-cover w-full' ) ); ?>
        </figure>
        <h2 class="title-xl mb-6 md:mb-7 xl:mb-7"><?php the_title(); ?></h2>
        <div class="text-body mb-6 md:mb-7 xl:hidden max-w-none md:max-w-[414px]"><?php the_excerpt(); ?></div>
        <span class="block text-right md:text-left mr-16 xl:mr-0"><a class="btn btn--arrow-right" href="<?php the_permalink(); ?>"><?php echo esc_html_e( 'Mehr Erfahren', 'alexzermatt' ) ?></a></span>
    </div>
</article>