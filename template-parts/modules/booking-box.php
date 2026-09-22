<?php
/**
 * Simple Booking Syncro Box module.
 *
 * Renders the booking widget inside the theme grid. Every box passes its own
 * "source" to the booking engine through CustomQueryStringParams, so the
 * placements can be told apart in the Simple Booking / GA4 reports.
 *
 * @param array $args {
 *     @type string $source   Identifies the placement. Default 'website'.
 *     @type string $paddings Vertical padding utilities for the section.
 * }
 */

if ( ! function_exists( 'az_simplebooking_box' ) ) :
	return;
endif;

$source   = isset( $args['source'] ) ? $args['source'] : 'website';
$paddings = isset( $args['paddings'] ) ? $args['paddings'] : 'py-12 xl:py-24';
?>
<section class="section-booking-box az-container <?php echo esc_attr( $paddings ); ?>">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3">
			<p class="font-serif font-thin text-gold text-xs leading-none tracking-[1.1px] mb-5 uppercase"><?php esc_html_e( 'Reservieren', 'az' ); ?></p>
			<?php
			az_simplebooking_box(
				array(
					'CustomQueryStringParams' => array(
						array(
							'name'  => 'source',
							'value' => $source,
						),
					),
				)
			);
			?>
		</div>
	</div>
</section>
