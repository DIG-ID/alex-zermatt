<section class="section-experience az-container mb-72">
	<div class="az-container-grid items-end">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3">
			<?php
			$stay_img_sm = get_field( 'experience_image_small' );
			if ( $stay_img_sm ) :
				echo wp_get_attachment_image( $stay_img_sm, 'full', false, array( 'class' => 'w-full object-cover mb-24' ) );
			endif;
			?>
			<h3 class="title-xl mb-16"><?php the_field( 'experience_title' ); ?></h3>
			<p class="body-text mb-16"><?php the_field( 'experience_description' ); ?></p>
			<?php
			$stay_link = get_field( 'experience_link' );
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
		<div class="xl:col-span-4 xl:col-start-7">
			<h2 class="title-overline !block mx-auto"><?php the_field( 'experience_subtitle' ); ?></h2>
			<?php
			$stay_img_lg = get_field( 'experience_image_large' );
			if ( $stay_img_lg ) :
				echo wp_get_attachment_image( $stay_img_lg, 'full', false, array( 'class' => 'w-full object-cover -mb-24' ) );
			endif;
			?>
		</div>
	</div>
</section>