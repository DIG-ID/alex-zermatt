<section id="section-intro" class="section-intro overflow-hidden">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3">
        <span class="az-vertical-line-img"></span>
        <?php 
			$intro_image = get_field('section_rooms_image');
			if( $intro_image ) {
				echo wp_get_attachment_image( $intro_image, 'full' );
			}
		?>
        </div>
    </div>
</section>