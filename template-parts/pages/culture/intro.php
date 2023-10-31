<section id="section-intro" class="section-intro az-container pt-28 overflow-hidden">
	<div class="az-container-grid gap-y-3">
		<?php 
			$intro_image = get_field( 'section_intro_image' );
			$size = 'main-header-image';
			$size_md = 'main-header-image-small';
		?>
		<div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 hidden xl:block">
			<?php
			if ( $intro_image ) :
				$image_args = array(
					'class' => 'w-full',
				);
				echo wp_get_attachment_image( $intro_image, $size, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 block xl:hidden">
			<?php
			if ( $intro_image ) :
				$image_args = array(
					'class' => 'w-full',
				);
				echo wp_get_attachment_image( $intro_image, $size_md, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2">
			<span class="az-vertical-line-small"></span>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 justify-center">
			<h1 class="title-xl text-center"><?php the_field( 'section_intro_title' ) ?></h1>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-3 xl:col-start-5">
			<p class="text-body text-center md:max-w-[380px] xl:max-w-[420px] mx-auto pt-8 pb-16"><?php the_field( 'section_intro_description' ) ?></p>
		</div>
	</div>
</section>