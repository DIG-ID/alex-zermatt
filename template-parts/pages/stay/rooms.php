<section id="section-rooms" class="section-rooms az-container overflow-hidden">
	<div class="az-container-grid">
		<?php 
			$image_rooms = get_field('section_rooms_image');
			$size = 'full';
			$size_md = 'angebote-slider-image';
		?>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 mb-12 md:mb-8 xl:mb-7 hidden xl:block">
			<span class="az-vertical-line-img"></span>
			<?php
			if ( $image_rooms ) :
				$image_args = array(
					'class' => 'w-full',
				);
				echo wp_get_attachment_image( $image_rooms, $size, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 mb-12 md:mb-8 xl:mb-7 block xl:hidden">
			<span class="az-vertical-line-img"></span>
			<?php
			if ( $image_rooms ) :
				$image_args = array(
					'class' => 'w-full',
				);
				echo wp_get_attachment_image( $image_rooms, $size_md, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 xl:col-start-3">
			<h2 class="title-xl max-w-[200px] md:max-w-none mb-5 xl:mb-0"><?php the_field( 'section_rooms_title' ); ?></h2>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-8 pb-2">
			<p class="text-body mb-10 md:mb-20 xl:mb-16 max-w-[85%] md:max-w-none"><?php the_field( 'section_rooms_description' ); ?></p>
			<span class="block text-right xl:text-left mr-16 xl:mr-0 btn-wrapper"><a class="btn btn--arrow-right" href="<?php the_field( 'section_rooms_cta_page' ); ?>"><?php echo esc_html_e( 'Zimmer & Suiten', 'alexzermatt' ) ?></a></span>
		</div>
	</div>
</section>