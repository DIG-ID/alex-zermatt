<section class="section-sun-terrace az-container mb-32 md:mb-36 xl:mb-72">
	<div class="az-container-grid">
		<?php 
			$image = get_field('sun_terrace_image');
			$size = 'full';
			$size_md = 'angebote-slider-image';
		?>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center hidden xl:block">
			<h2 class="title-overline"><?php the_field( 'sun_terrace_subtitle' ); ?></h2>
			<?php
			if ( $image ) :
				$image_args = array(
					'class' => 'w-full mb-6',
				);
				echo wp_get_attachment_image( $image, $size, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center block xl:hidden">
			<h2 class="title-overline"><?php the_field( 'sun_terrace_subtitle' ); ?></h2>
			<?php
			if ( $image ) :
				$image_args = array(
					'class' => 'w-full mb-6',
				);
				echo wp_get_attachment_image( $image, $size_md, false, $image_args );
			endif;
			?>
		</div>
	</div>
</section>