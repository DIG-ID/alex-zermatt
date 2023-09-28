<section class="section-sun-terrace az-container mb-32 md:mb-36 xl:mb-72">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center">
			<h2 class="title-overline"><?php the_field( 'sun_terrace_subtitle' ); ?></h2>
			<?php
			$image = get_field( 'sun_terrace_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-6' ) );
			endif;
			?>
		</div>
	</div>
</section>