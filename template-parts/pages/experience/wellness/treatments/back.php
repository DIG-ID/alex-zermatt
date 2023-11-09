<section class="section-intro az-container mb-10">
	<div class="az-container-grid items-center">
		<div class="col-span-1 md:col-span-8 xl:col-span-4 xl:col-start-3">
			<?php
			$backlink = get_field( 'back_link' );
			if ( $backlink ) :
				$link_url    = $backlink['url'];
				$link_title  = $backlink['title'];
				$link_target = $backlink['target'] ? $backlink['target'] : '_self';
				?>
					<a class="btn btn--arrow-left" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>