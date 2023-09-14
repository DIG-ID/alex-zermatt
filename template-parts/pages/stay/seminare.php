<section id="section-seminare" class="section-seminare overflow-hidden az-container md:pt-24 xl:pt-28 pb-24 xl:pb-64">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 mb-12 md:mb-8 xl:mb-7 text-center">
			<p class="title-overline"><?php echo esc_html_e( 'Seminare', 'alexzermatt' ) ?></p>
			<?php 
				$image_seminare = get_field('section_seminare_image');
				if( $image_seminare ) {
					echo wp_get_attachment_image( $image_seminare, 'full' );
				}
			?>
        </div>
		<div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 xl:col-start-3">
			<h2 class="title-xl"><?php the_field( 'section_seminare_title' ); ?></h2>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-8">
			<p class="text-body mb-10 md:mb-20 xl:mb-16"><?php the_field( 'section_seminare_description' ); ?></p>
			<span class="block text-right xl:text-left mr-16 xl:mr-0"><a class="btn btn--arrow-right" href="<?php the_field( 'section_seminare_cta_page' ); ?>"><?php echo esc_html_e( 'Saminarräume', 'alexzermatt' ) ?></a></span>
		</div>
    </div>
</section>