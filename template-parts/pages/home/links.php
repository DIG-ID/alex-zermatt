<section class="section-links az-container relative pb-16 xl:pb-0">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 flex justify-between py-10">
			<?php
			$tr_link = get_field( 'booking_links_table_reservation', 'options' );
			if ( $tr_link ) :
				$link_url    = $tr_link['url'];
				$link_title  = $tr_link['title'];
				$link_target = $tr_link['target'] ? $tr_link['target'] : '_self';
				?>
				<a class="btn !hidden absolute md:relative md:!block -top-40 md:top-auto left-1/2 md:left-auto -translate-x-1/2 md:translate-x-0" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" data-fancybox="reservation-home" data-caption="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			$br_link = get_field( 'booking_links_booking_reservation', 'options' );
			if ( $br_link ) :
				$link_url    = $br_link['url'];
				$link_title  = $br_link['title'];
				$link_target = $br_link['target'] ? $br_link['target'] : '_self';
				?>
				<a class="btn btn-overline-home !font-medium absolute inline-block left-1/2 -translate-x-1/2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			$vouchers_link = get_field( 'booking_links_vouchers', 'options' );
			if ( $vouchers_link ) :
				$link_url    = $vouchers_link['url'];
				$link_title  = $vouchers_link['title'];
				$link_target = $vouchers_link['target'] ? $vouchers_link['target'] : '_self';
				?>
				<a class="btn !hidden absolute md:relative md:!block -top-28 md:top-auto left-1/2 md:left-auto -translate-x-1/2 md:translate-x-0" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php
			endif;
			?>
		</div>
	</div>
</section>