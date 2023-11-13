<?php
if ( ! is_404() ) :
	?>
	<section class="section-buttons-bar fixed left-0 right-0 bottom-0 z-30 bg-white drop-shadow-[0_-2px_2px_rgba(0,0,0,0.06)]">
		<div class="az-container-grid az-container">
			<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 flex sm:justify-between justify-center items-center py-4 sm:py-6">
				<?php
				$tr_link = get_field( 'booking_links_table_reservation', 'options' );
				if ( $tr_link ) :
					$link_url    = $tr_link['url'];
					$link_title  = $tr_link['title'];
					$link_target = $tr_link['target'] ? $tr_link['target'] : '_self';
					?>
					<a class="btn whitespace-nowrap !hidden !invisible sm:!inline-block sm:!visible" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" data-fancybox="reservation-footer" data-caption="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<span class="w-full bg-blue h-[1px] mx-4 lg:mx-14 hidden invisible sm:inline-block sm:visible"></span>
					<?php
				endif;
				$br_link = get_field( 'booking_links_booking_reservation', 'options' );
				if ( $br_link ) :
					$link_url    = $br_link['url'];
					$link_title  = $br_link['title'];
					$link_target = $br_link['target'] ? $br_link['target'] : '_self';
					?>
					<a class="btn !font-medium whitespace-nowrap" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				$vouchers_link = get_field( 'booking_links_vouchers', 'options' );
				if ( $vouchers_link ) :
					$link_url    = $vouchers_link['url'];
					$link_title  = $vouchers_link['title'];
					$link_target = $vouchers_link['target'] ? $vouchers_link['target'] : '_self';
					?>
					<span class="w-full bg-blue h-[1px] mx-4 lg:mx-14 hidden invisible sm:inline-block sm:visible"></span>
					<a class="btn whitespace-nowrap !hidden !invisible sm:!inline-block sm:!visible" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
	</section>
	<?php
endif;