<section id="section-intro" class="section-intro az-container pt-28 xl:pt-96 pb-28 xl:pb-80 overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
		<div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-3 text-center xl:text-left">
			<h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0 invisible"><?php the_title(); ?></h1>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 xl:max-w-[363px] text-center xl:text-left">
			<div class="text-body mb-14 xl:mb-0 invisible"><?php the_excerpt(); ?></div>
		</div>
	</div>
</section>
<section id="gallery-content" class="section-gallery-content az-container overflow-hidden">
	<div class="az-container-grid">
		<div class="col-span-2 md:col-span-8 xl:col-span-10 xl:col-start-2">
			<?php
			if ( have_rows( 'galleries' ) ) :
				while ( have_rows( 'galleries' ) ) :
					the_row();
					$gallery_title = get_sub_field( 'title' );
					$gallery       = get_sub_field( 'gallery' );
					if ( $gallery ) :
						$count = 0;
						?>
						<div class="gallery-<?php echo esc_attr( strtolower( $gallery_title ) ); ?>-container grid grid-cols-2 md:grid-cols-8 xl:grid-cols-10 md:gap-x-4 xl:gap-x-9 items-end mb-32 gap-x-2">
							<?php
							foreach ( $gallery as $gallery_image ) :
								$count++;
								if ( 1 === $count ) :
									?>
									<div class="col-span-1 md:col-span-2 xl:col-span-2 text-center">
										<h2 class="title-overline"><?php echo $gallery_title; ?></h2>
										<a href="<?php echo wp_get_attachment_image_url( $gallery_image['ID'],'full' ); ?>" data-fancybox="gallery-<?php echo esc_attr( strtolower( $gallery_title ) ); ?>" data-caption="<?php echo esc_html( $gallery_image['caption'] ); ?>" class="inline-block w-full mb-6 md:mb-4 xl:mb-8">
											<img src="<?php echo wp_get_attachment_image_url( $gallery_image['ID'], 'gallery-square' ); ?>" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>" class="object-cover w-full h-full"/>
										</a>
									</div>
									<?php
								else :
									?>
									<div class="col-span-1 md:col-span-2 xl:col-span-2">
										<a href="<?php echo wp_get_attachment_image_url( $gallery_image['ID'],'full' ); ?>" data-fancybox="gallery-<?php echo esc_attr( strtolower( $gallery_title ) ); ?>" data-caption="<?php echo esc_html( $gallery_image['caption'] ); ?>" class="inline-block w-full mb-6 md:mb-4 xl:mb-8">
											<img src="<?php echo wp_get_attachment_image_url( $gallery_image['ID'], 'gallery-square' ); ?>" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>" class="object-cover w-full h-full"/>
										</a>
									</div>
									<?php
								endif;
							endforeach;
							?>
						</div>
						<?php
					endif;
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>