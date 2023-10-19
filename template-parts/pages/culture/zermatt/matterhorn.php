<section id="section-matterhorn" class="section-matterhorn az-container mb-32 md:mb-36 xl:mb-44">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center">
			<h2 class="title-overline"><?php the_field( 'section_matterhorn_title_overline' ); ?></h2>
			<?php
			$image = get_field( 'section_matterhorn_banner_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-11 xl:mb-20' ) );
			endif;
			?>
		</div>
	</div>
    <div class="az-container-grid md:mb-16 xl:mb-36">
        <div class="col-span-1 md:col-span-4 xl:col-span-3 xl:col-start-3">
            <p class="text-body"><?php the_field( 'section_matterhorn_description' ); ?></p>
        </div>
        <div class="col-span-1 md:col-span-4 xl:col-span-3 md:col-start-5 xl:col-start-8">
            <h2 class="title-xl"><?php the_field( 'section_matterhorn_title' ); ?></h2>
        </div>
    </div>
    <div class="az-container-grid md:mb-16 xl:mb-36">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3">
        <?php
			$image = get_field( 'section_matterhorn_image_1' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-6 w-full' ) );
			endif;
			?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-8">
            <p class="text-body columns-2 xl:columns-1"><?php the_field( 'section_matterhorn_description_2' ); ?></p>
        </div>
    </div>
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 order-2 xl:order-1">
            <h2 class="title-xl mb-7 xl:mb-20"><?php the_field( 'section_matterhorn_title_secondary' ); ?></h2>
            <p class="text-body"><?php the_field( 'section_matterhorn_description_3' ); ?></p>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-7 order-1 xl:order-2">
            <?php
			$image = get_field( 'section_matterhorn_image_2' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-6 w-full' ) );
			endif;
			?>
        </div>
    </div>
</section>