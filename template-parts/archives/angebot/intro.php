<section id="section-intro" class="section-intro az-container pt-28 xl:pt-48 xl:pb-[200px] overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 xl:max-w-[363px] text-center xl:text-left order-2 xl:order-1">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0"><?php the_field( 'archive_angebote_title', 'option' ); ?></h1>
            <p class="text-body mb-14 xl:mb-0"><?php the_field( 'archive_angebote_description', 'option' ); ?></p>
        </div>
        <div class="relative col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-7 max-w-none order-1 xl:order-2">
            <?php 
                $intro_image = get_field( 'archive_angebote_image', 'option' );
                if( $intro_image ) {
                    echo wp_get_attachment_image( $intro_image, 'main-header-image-half-container' );
                }
            ?>
        </div>
    </div>
</section>