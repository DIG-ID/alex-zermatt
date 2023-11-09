<section id="section-intro" class="section-intro az-container pt-28 xl:pt-48 xl:pb-40 xl:mb-36 overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-3">
            <?php 
                $intro_image = get_field( 'archive_zimmer_image', 'option' );
                if( $intro_image ) {
                    echo wp_get_attachment_image( $intro_image, 'main-header-image-half-container', false, array( 'class' => 'h-[380px] md:h-[800px] xl:h-[780px] w-full object-cover invisible' ) );
                }
            ?>
        </div>
        <div class="rooms__intro--right relative col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-3 xl:col-start-8 max-w-none xl:max-w-[510px] text-center xl:text-left">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0 invisible"><?php the_field( 'archive_zimmer_title', 'option' ); ?></h1>
            <p class="text-body mb-14 xl:mb-0 invisible"><?php the_field( 'archive_zimmer_description', 'option' ); ?></p>
        </div>
        <div class="block xl:hidden col-span-1 md:col-span-8 text-center">
            <span class="az-vertical-line-medium"></span>
        </div>
    </div>
</section>