<section id="section-village" class="section-village az-container mb-32 md:mb-36 xl:mb-44">
	<div class="az-container-grid">
        <?php 
			$image_banner = get_field('section_village_banner_image');
			$size = 'full';
			$size_md = 'angebote-slider-image';
		?>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center hidden md:block">
			<h2 class="title-overline"><?php the_field( 'section_village_title_overline' ); ?></h2>
			<?php
			if ( $image_banner ) :
				$image_args = array(
					'class' => 'w-full mb-11 xl:mb-20 img-wide',
				);
				echo wp_get_attachment_image( $image_banner, $size, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center block md:hidden">
			<h2 class="title-overline"><?php the_field( 'section_village_title_overline' ); ?></h2>
			<?php
			if ( $image_banner ) :
				$image_args = array(
					'class' => 'w-full mb-11 xl:mb-20 img-wide',
				);
				echo wp_get_attachment_image( $image_banner, $size_md, false, $image_args );
			endif;
			?>
		</div>
	</div>
    <div class="az-container-grid mb-11 md:mb-16 xl:mb-36">
        <div class="col-span-1 md:col-span-4 xl:col-span-3 xl:col-start-3">
            <h2 class="title-xl mb-6 xl:mb-0"><?php the_field( 'section_village_title' ); ?></h2>
        </div>
        <div class="col-span-1 md:col-span-4 xl:col-span-3 md:col-start-5 xl:col-start-8">
            <p class="text-body text-body-1"><?php the_field( 'section_village_description' ); ?></p>
        </div>
    </div>
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 order-2 xl:order-1">
            <p class="text-body text-body-2 columns-1 md:columns-2 xl:columns-1"><?php the_field( 'section_village_description_left' ); ?></p>
        </div>
        <?php 
			$image_village = get_field('section_village_image');
		?>
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-8 order-1 xl:order-2 hidden xl:block">
			<?php
			if ( $image_village ) :
				$image_args = array(
					'class' => 'w-full mb-6 img-square',
				);
				echo wp_get_attachment_image( $image_village, $size, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-8 order-1 xl:order-2 block xl:hidden">
			<?php
			if ( $image_village ) :
				$image_args = array(
					'class' => 'w-full mb-6 img-square',
				);
				echo wp_get_attachment_image( $image_village, $size_md, false, $image_args );
			endif;
			?>
		</div>
    </div>
</section>