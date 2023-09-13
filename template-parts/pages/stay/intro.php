<section id="section-intro" class="section-intro pt-28 overflow-hidden">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2">
        <?php 
			$intro_image = get_field('section_intro_image');
			if( $intro_image ) {
				echo wp_get_attachment_image( $intro_image, 'main-header-image' );
			}
		?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2">
            <span class="az-vertical-line-small"></span>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2">
            <h1 class="title-xl text-center"><?php the_field( 'section_intro_title' ) ?></h1>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-3 xl:col-start-5">
            <p class="text-body text-center md:max-w-[380px] xl:max-w-[420px] mx-auto pt-8 pb-16"><?php the_field( 'section_intro_description' ) ?></p>
        </div>
    </div>
</section>