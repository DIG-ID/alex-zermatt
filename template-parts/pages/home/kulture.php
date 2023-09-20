<section class="section-pleasure az-container mb-72">
	<div class="az-container-grid items-center">
		<div class="col-span-4 col-start-3">
			<h2 class="title-overline !block mx-auto"><?php the_field( 'kulture_subtitle' ); ?></h2>
			<?php
			$stay_img_lg = get_field( 'kulture_image_large' );
			if ( $stay_img_lg ) :
				echo wp_get_attachment_image( $stay_img_lg, 'full', false, array( 'class' => 'w-full object-cover' ) );
			endif;
			?>
		</div>
		<div class="col-span-3 col-start-8">
			<h3 class="title-xl mb-16 mt-48"><?php the_field( 'kulture_title' ); ?></h3>
			<p class="body-text mb-16"><?php the_field( 'kulture_description' ); ?></p>
			<?php
			$stay_link = get_field( 'kulture_link' );
			if ( $stay_link ) :
				$link_url    = $stay_link['url'];
				$link_title  = $stay_link['title'];
				$link_target = $stay_link['target'] ? $stay_link['target'] : '_self';
				?>
				<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>