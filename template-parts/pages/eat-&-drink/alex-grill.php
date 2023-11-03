<section class="section-alex-grill az-container overflow-hidden pb-28">
	<div class="az-container-grid">
		<?php 
			$image_ag = get_field('alex_grill_image');
			$size = 'full';
			$size_md = 'angebote-slider-image';
		?>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 mb-12 md:mb-8 xl:mb-7 hidden xl:block">
			<span class="az-vertical-line-img"></span>
			<?php
			if ( $image_ag ) :
				$image_args = array(
					'class' => 'w-full',
				);
				echo wp_get_attachment_image( $image_ag, $size, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3 mb-12 md:mb-8 xl:mb-7 block xl:hidden">
			<span class="az-vertical-line-img"></span>
			<?php
			if ( $image_ag ) :
				$image_args = array(
					'class' => 'w-full',
				);
				echo wp_get_attachment_image( $image_ag, $size_md, false, $image_args );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 xl:col-start-3">
			<h2 class="title-xl max-w-[200px] md:max-w-none mb-5 xl:mb-0 break-words hyphens-auto"><?php the_field( 'alex_grill_title' ); ?></h2>
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-8 pb-2">
			<p class="text-body mb-10 md:mb-20 xl:mb-16 max-w-[85%] md:max-w-none"><?php the_field( 'alex_grill_description' ); ?></p>
			<?php
			$ag_link = get_field( 'alex_grill_link' );
			if ( $ag_link ) :
				$link_url    = $ag_link['url'];
				$link_title  = $ag_link['title'];
				$link_target = $ag_link['target'] ? $ag_link['target'] : '_self';
				?>
				<span class="btn-wrapper block text-right xl:text-left mr-16 xl:mr-0">
					<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</span>
				<?php
			endif;
			?>
		</div>
	</div>
</section>