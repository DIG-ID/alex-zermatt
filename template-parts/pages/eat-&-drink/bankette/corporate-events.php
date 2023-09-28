<section class="section-corporate-events az-container pb-28 xl:py-28 overflow-hidden">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-2 order-2 xl:order-1">
			<div class="grid grid-cols-2 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-9">
				<div class="col-span-1">
					<h2 class="title-xl"><?php the_field( 'corporate_events_title' ); ?></h2>
				</div>
				<div class="col-span-1">
					<p class="text-body mb-12 xl:mb-8"><?php the_field( 'corporate_events_description' ); ?></p>
				</div>
			</div>

		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 order-1 xl:order-2 text-center">
			<h2 class="title-xl xl:hidden xl:invisible"><?php the_field( 'corporate_events_title' ); ?></h2>
			<?php
			$image = get_field( 'corporate_events_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-12 xl:mb-0' ) );
			endif;
			?>
		</div>
	</div>
</section>