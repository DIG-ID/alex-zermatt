<section id="section-intro" class="section-intro az-container pt-28 xl:pt-48 xl:pb-40 overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-3">
            <?php 
                $intro_image = get_field( 'section_intro_image' );
                if( $intro_image ) {
                    echo wp_get_attachment_image( $intro_image, 'main-header-image-half-container' );
                }
            ?>
        </div>
        <div class="zermatt__intro--right relative col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-3 xl:col-start-8 text-center xl:text-left">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0"><?php the_field( 'section_intro_title' ); ?></h1>
            <p class="text-body mb-14 xl:mb-0 max-w-none xl:max-w-[363px]"><?php the_field( 'section_intro_description' ); ?></p>
        </div>
    </div>
</section>