<?php
if ( isset( $args['paddings'] ) ) :
	$paddings = $args['paddings'];
else :
	$paddings = 'py-0';
endif;
?>
<section id="section-box-teasers" class="section-box-teasers az-container az-container-grid <?php echo esc_attr( $paddings ); ?>">
	<div class="az-container-span-xl">
		<div class="az-container-grid-xl">
			<?php
			if ( have_rows( 'teaser_boxes' ) ) :
				while ( have_rows( 'teaser_boxes' ) ) :
					the_row();
					?>
					<div class="col-span-1 md:col-span-4 xl:col-span-4 text-center pb-24 md:pb-0">
						<p class="title-overline"><?php the_sub_field( 'title_overline' ); ?></p>
						<?php
						$image = get_sub_field( 'image' );
						if ( $image ) :
							echo wp_get_attachment_image( $image, 'full' );
						endif;
						?>
						<h2 class="title-xl text-left my-10 min-h-[56px] xl:min-h-[96px]"><?php the_sub_field( 'title' ); ?></h2>
						<span class="block text-right xl:text-left mr-16 xl:mr-0 pb-2"><a class="btn btn--arrow-right" href="<?php the_sub_field( 'cta_link' ); ?>"><?php echo esc_html_e( 'Mehr Erfahren', 'alexzermatt' ); ?></a></span>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>