<section id="section-matterhorn" class="section-matterhorn az-container mb-32 md:mb-36 xl:mb-44">
	<div class="section-matterhorn-content">
		<div class="az-container-grid">
            <?php 
                $image_banner = get_field('section_matterhorn_banner_image');
                $size = 'full';
                $size_md = 'angebote-slider-image';
            ?>
            <div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 text-center hidden md:block">
                <h2 class="title-overline"><?php the_field( 'section_matterhorn_title_overline' ); ?></h2>
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
                <h2 class="title-overline"><?php the_field( 'section_matterhorn_title_overline' ); ?></h2>
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
				<p class="text-body text-body-1 mb-6 xl:mb-0"><?php the_field( 'section_matterhorn_description' ); ?></p>
			</div>
			<div class="col-span-1 md:col-span-4 xl:col-span-3 md:col-start-5 xl:col-start-8">
				<h2 class="title-xl"><?php the_field( 'section_matterhorn_title' ); ?></h2>
			</div>
		</div>
		<div class="az-container-grid mb-11 md:mb-16 xl:mb-36">
			<div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3">
				<?php
				$image = get_field( 'section_matterhorn_image_1' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-6 w-full img-square' ) );
				endif;
				?>
			</div>
			<div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-8">
				<p class="text-body text-body-2 columns-1 md:columns-2 xl:columns-1"><?php the_field( 'section_matterhorn_description_2' ); ?></p>
			</div>
		</div>
	</div>
	<div class="az-container-grid section-matterhorn-tradition">
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