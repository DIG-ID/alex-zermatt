<section class="section-celebrations az-container pb-20 xl:py-28 overflow-hidden">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1">
			<div class="grid grid-cols-2 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-9">
				<div class="col-span-1 hidden invisible xl:block xl:visible">
					<h2 class="title-xl"><?php the_field( 'celebrations_title' ); ?></h2>
				</div>
				<div class="col-span-2 xl:col-span-1 xl:pr-12 grid grid-cols-1 md:grid-cols-2 xl:block md:gap-4 xl:gap-9">
					<p class="text-body mb-6 xl:mb-8"><?php the_field( 'celebrations_description' ); ?></p>
					<p class="text-body"><?php the_field( 'celebrations_description_2' ); ?></p>
				</div>
			</div>

		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-6 order-1 xl:order-2 text-center">
			<h2 class="title-xl xl:hidden xl:invisible mb-6 md:mb-14"><?php the_field( 'celebrations_title' ); ?></h2>
			<?php
			$image = get_field( 'celebrations_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-6 md:mb-4 xl:mb-0' ) );
			endif;
			?>
		</div>
	</div>
</section>