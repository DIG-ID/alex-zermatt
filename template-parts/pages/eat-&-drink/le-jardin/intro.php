<section class="section-intro az-container mt-16 xl:mt-64 mb-16 md:mb-28 xl:mb-48">
	<div class="az-container-grid items-center">
		<div class="col-span-1 md:col-span-8 xl:col-span-4 xl:col-start-3">
			<?php
			$image = get_field( 'intro_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'h-[380px] md:h-[800px] xl:h-[780px] mb-20 md:mb-12 xl:mb-0 object-cover invisible' ) );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-8 text-center xl:text-left">
			<h1 class="title-xl mb-12 xl:mb-24 md:max-w-xl xl:max-w-none mx-auto invisible"><?php the_field( 'intro_title' ); ?></h1>
			<p class="text-body mb-24 xl:mb-0 md:max-w-lg xl:max-w-none mx-auto invisible"><?php the_field( 'intro_description' ); ?></p>
		</div>
	</div>
</section>