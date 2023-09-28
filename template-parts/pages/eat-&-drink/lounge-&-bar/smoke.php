<section class="section-smoke az-container py-36 md:py-52 bg-[#FFF8F1]">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center">
			<h2 class="title-overline"><?php the_field( 'smoke_subtitle' ); ?></h2>
			<?php
			$image = get_field( 'smoke_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'h-[200px] md:h-[440] xl:h-[440px] mb-6 object-cover' ) );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-4 xl:col-start-3">
			<p class="text-body mb-8 md:mb-0"><?php the_field( 'smoke_description_1' ); ?></p>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-4">
			<p class="text-body"><?php the_field( 'smoke_description_2' ); ?></p>
		</div>
	</div>
</section>