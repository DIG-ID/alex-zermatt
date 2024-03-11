<section class="section-gallery az-container mb-32 md:mb-36 xl:mb-72">
	<div class="grid grid-cols-2 md:grid-cols-8 xl:grid-cols-12 gap-3 md:gap-4 xl:gap-9 ">
		<div class="col-span-2 md:col-span-8 xl:col-start-3 xl:col-span-4 order-2 xl:order-1">
			<?php
			$image_xl_1 = get_field( 'gallery_image_xl_1' );
			if ( $image_xl_1 ) :
				echo wp_get_attachment_image( $image_xl_1, 'full', null, array( 'class' => 'xl:mb-36 h-[340px] md:h-[800px] xl:h-[780px] object-cover' ) );
			endif;
			?>
		</div>
		<div class="col-span-2 md:col-span-8 xl:col-span-4 xl:col-start-8 text-center xl:text-left order-1 xl:order-2">
			<h2 class="title-xl mb-12 xl:mb-0"><?php the_field( 'gallery_title' ); ?></h2>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-start-3 xl:col-span-3 order-3">
			<?php
			$image_sm_1 = get_field( 'gallery_image_sm_1' );
			if ( $image_sm_1 ) :
				echo wp_get_attachment_image( $image_sm_1, 'full', null, array( 'class' => 'xl:mb-36' ) );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-start-8 xl:col-span-3 xl:-mt-56 order-4">
			<?php
			$image_sm_2 = get_field( 'gallery_image_sm_2' );
			if ( $image_sm_2 ) :
				echo wp_get_attachment_image( $image_sm_2, 'full', null, array( 'class' => 'xl:mb-8' ) );
			endif;
			?>
		</div>
		<div class="col-span-2 md:col-span-8 xl:col-start-3 xl:col-span-4 flex flex-col xl:justify-center items-end xl:items-start order-7 xl:order-6">
			<?php
				$link = get_field( 'gallery_link' );
				if ( $link ) :
					$link_url    = $link['url'];
					$link_title  = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<span class="btn-wrapper block text-right xl:text-left mr-16 xl:mr-0">
						<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</span>
					<?php
				endif;
				?>
		</div>
		<div class="col-span-2 md:col-span-8 xl:col-span-4 xl:-mt-56 order-6 xl:order-7">
			<?php
			$image_xl_2 = get_field( 'gallery_image_xl_2' );
			if ( $image_xl_2 ) :
				echo wp_get_attachment_image( $image_xl_2, 'full', null, array( 'class' => 'mb-12 xl:mb-8 h-[340px] md:h-[800px] xl:h-[780px] object-cover' ) );
			endif;
			?>
		</div>
	</div>
</section>