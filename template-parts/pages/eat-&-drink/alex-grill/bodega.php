<section class="section-bodega az-container py-36 md:py-52 bg-[#FFF8F1]">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-12 text-center">
			<h2 class="title-xl !text-gold mb-28 md:mb-32 xl:mb-36"><?php the_field( 'bodega_title' ); ?></h2>
		</div>

		<div class="col-span-1 md:col-span-4 xl:col-span-3 xl:col-start-3 flex flex-col justify-center xl:justify-start order-2 md:order-1 mb-9 md:mb-0">
			<p class="text-body"><?php the_field( 'bodega_description_1' ); ?></p>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-3 xl:col-start-8 order-1 md:order-2 mb-9 xl:mb-0">
			<?php
			$image_xl_1 = get_field( 'bodega_image_1' );
			if ( $image_xl_1 ) :
				echo wp_get_attachment_image( $image_xl_1, 'full', null, array( 'class' => 'object-cover' ) );
			endif;
			?>
		</div>

		<div class="col-span-1 md:col-span-4 xl:col-span-4 xl:col-start-3 xl:-mt-44 order-3 md:order-3 mb-9 xl:mb-0">
			<?php
			$image_xl_1 = get_field( 'bodega_image_2' );
			if ( $image_xl_1 ) :
				echo wp_get_attachment_image( $image_xl_1, 'full', null, array( 'class' => 'h-[340px] md:h-[430px] xl:h-[780px] object-cover' ) );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-3 xl:col-start-8 flex flex-col justify-center xl:-mt-44 order-4 xl:order-4 mb-9 md:mb-0">
			<p class="text-body"><?php the_field( 'bodega_description_2' ); ?></p>
		</div>
		
		<div class="col-span-1 md:col-span-4 xl:col-span-3 xl:col-start-3 flex flex-col justify-center xl:justify-end order-6 md:order-5 ">
			<p class="text-body"><?php the_field( 'bodega_description_3' ); ?></p>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-3 xl:col-start-8 xl:-mt-44 order-5 md:order-6 mb-9 md:mb-0">
			<?php
			$image_xl_1 = get_field( 'bodega_image_3' );
			if ( $image_xl_1 ) :
				echo wp_get_attachment_image( $image_xl_1, 'full', null, array( 'class' => 'object-cover' ) );
			endif;
			?>
		</div>
	</div>
</section>