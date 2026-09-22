<?php
/**
 * Simple Booking - Syncro Box v4 integration.
 *
 * Single-property edition (PID = Hotel-Id). The widget is only loaded on pages
 * that actually render a box: az_simplebooking_box() queues the box and the
 * loader is printed once in the footer.
 *
 * @see https://cdn.simplebooking.it/ - Syncro Box v4 docs.
 */

/**
 * The Hotel-Id provided by the Simple Booking helpdesk.
 * Matches the id already used by the "Jetzt buchen" links (ibe2/hotel/3411).
 */
if ( ! defined( 'AZ_SIMPLEBOOKING_PID' ) ) :
	define( 'AZ_SIMPLEBOOKING_PID', '3411' );
endif;

/**
 * The site's own GA4 measurement id.
 *
 * Undocumented but required: the widget ships with Simple Booking's own GA4
 * ids as the default for GoogleAnalyticsId, so without this it never reads our
 * client/session and the booking engine URL comes out with no _gl. Derived
 * from the _ga_LBKCEZXMSN cookie the live site sets.
 */
if ( ! defined( 'AZ_SIMPLEBOOKING_GA4_ID' ) ) :
	define( 'AZ_SIMPLEBOOKING_GA4_ID', 'G-LBKCEZXMSN' );
endif;

/**
 * Map the current WPML language onto a Syncro Box language code.
 *
 * The widget expects the uppercase two letter code (DE, EN, FR, ...).
 *
 * @return string
 */
function az_simplebooking_lang() {
	$lang = apply_filters( 'wpml_current_language', null );
	if ( empty( $lang ) ) :
		$lang = 'de'; // Fallback to the site's default language.
	endif;
	return strtoupper( substr( $lang, 0, 2 ) );
}

/**
 * Build the configuration object for a single box.
 *
 * @param array $args Per box overrides (PromoCode, MinStay, MainContainerId, ...).
 *
 * @return array
 */
function az_simplebooking_config( $args = array() ) {

	$config = array(
		'CodLang'          => az_simplebooking_lang(),
		'Currency'         => 'CHF',
		'OpenInNewWindow'  => true,
		'GoogleAnalyticsId' => AZ_SIMPLEBOOKING_GA4_ID,

		/*
		 * Both are declared explicitly on purpose. The documentation says they
		 * default to true, but the widget ships ForwardConsentState as false
		 * and tests it with a strict === true, so leaving it out means the
		 * sb_consent parameter never reaches the booking engine.
		 */
		'ForwardTrackingParams' => true,
		'ForwardConsentState'   => true,

		/*
		 * WORKAROUND UNDER TEST - remove once Simple Booking confirms the ID.
		 *
		 * Without this the box runs in multi-property mode and the "Check
		 * availability" button only fires the default onNoPropertySelected
		 * alert ("Waehlen Sie eine Unterkunft"), because the PID alone is not
		 * resolving to a property. Declaring the single property explicitly
		 * should let the box preselect it.
		 */
		'Properties'       => array(
			array(
				'id'   => (int) AZ_SIMPLEBOOKING_PID,
				'name' => 'Hotel Alex',
			),
		),
		'Styles'           => array(
			'Theme'                            => 'light-pink',
			'FontFamily'                       => '"Roboto", sans-serif',

			// Primary colour (theme "blue").
			'CustomColor'                      => '#002850',
			'CustomLabelColor'                 => '#002850',
			'CustomWidgetColor'                => '#002850',
			'CustomWidgetElementHoverColor'    => '#002850',
			'CustomWidgetElementHoverBGColor'  => '#002850',
			'CustomBoxShadowColor'             => '#002850',
			'CustomBoxShadowColorHover'        => '#002850',
			'CustomIntentSelectionColor'       => '#002850',
			'CustomIntentSelectionDaysBGColor' => '#002850',

			// Secondary colour (theme "gold").
			'CustomLabelHoverColor'            => '#906841',
			'CustomButtonBGColor'              => '#906841',
			'CustomIconColor'                  => '#906841',
			'CustomLinkColor'                  => '#906841',
			'CustomBoxShadowColorFocus'        => '#906841',
			'CustomAddRoomBoxShadowColor'      => '#906841',
			'CustomAccentColor'                => '#906841',

			// Backgrounds.
			'CustomBGColor'                    => '#ffffff',
			'CustomFieldBackgroundColor'       => '#ffffff',
			'CustomWidgetBGColor'              => '#ffffff',
			'CustomSelectedDaysColor'          => '#ffffff',
			'CustomCalendarBackgroundColor'    => '#ffffff',

			'CustomButtonColor'                => '#ffffff',
		),
	);

	$config = array_merge( $config, $args );

	/**
	 * Filter the Syncro Box configuration before it is printed.
	 *
	 * @param array $config The configuration array.
	 * @param array $args   The per box overrides.
	 */
	return apply_filters( 'az_simplebooking_config', $config, $args );
}

/**
 * Render a Syncro Box container and queue its configuration.
 *
 * The first box on the page uses the default "sb-container" id, any further
 * box gets its own id through MainContainerId.
 *
 * @param array $args {
 *     Optional.
 *
 *     @type string $class       Extra classes for the wrapper.
 *     @type string $placeholder Markup shown until the async script runs.
 *     ... any other key is passed straight to the Syncro Box config.
 * }
 */
function az_simplebooking_box( $args = array() ) {

	static $count = 0;

	$class       = isset( $args['class'] ) ? $args['class'] : '';
	$placeholder = isset( $args['placeholder'] ) ? $args['placeholder'] : '';
	unset( $args['class'], $args['placeholder'] );

	$container_id = 0 === $count ? 'sb-container' : 'sb-container-' . ( $count + 1 );
	if ( $count > 0 ) :
		$args['MainContainerId'] = $container_id;
	endif;
	$count++;

	az_simplebooking_queue( az_simplebooking_config( $args ) );
	?>
	<div id="<?php echo esc_attr( $container_id ); ?>" class="simplebooking-box <?php echo esc_attr( $class ); ?>"><?php echo wp_kses_post( $placeholder ); ?></div>
	<?php
}

/**
 * Collect the boxes rendered on the current request.
 *
 * @param array|null $config A configuration to queue, or null to read the queue.
 *
 * @return array
 */
function az_simplebooking_queue( $config = null ) {
	static $queue = array();
	if ( null !== $config ) :
		$queue[] = $config;
	endif;
	return $queue;
}

/**
 * Print the loader and every queued box configuration.
 *
 * Runs late in the footer so all boxes of the page are known by then.
 */
function az_simplebooking_print_script() {

	$boxes = az_simplebooking_queue();
	if ( empty( $boxes ) ) :
		return;
	endif;

	$src = 'https://cdn.simplebooking.it/search-box-script.axd?PID=' . rawurlencode( AZ_SIMPLEBOOKING_PID );
	?>
	<script type="text/javascript" data-cfasync="false" data-no-optimize="1" data-no-defer="1">
		/*
		 * The widget calls window.gtag('get', ...) to read the GA4 client and
		 * session id, and bails out entirely when window.gtag is undefined.
		 * GTM alone does not always define it, so make sure the standard stub
		 * exists - it only queues onto the dataLayer GTM already reads.
		 */
		window.dataLayer = window.dataLayer || [];
		if (typeof window.gtag !== 'function') {
			window.gtag = function () { window.dataLayer.push(arguments); };
		}

		(function (i, s, o, g, r, a, m) {
			i['SBSyncroBoxParam'] = r; i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', <?php echo wp_json_encode( $src ); ?>, 'SBSyncroBox');

		<?php foreach ( $boxes as $box ) : ?>
			SBSyncroBox(<?php echo wp_json_encode( $box ); ?>);
		<?php endforeach; ?>
	</script>
	<?php
}

add_action( 'wp_footer', 'az_simplebooking_print_script', 20 );

/**
 * Keep WP Rocket from delaying or deferring the booking widget: the box would
 * only render after the first user interaction otherwise.
 *
 * @param array $excluded The current exclusions.
 *
 * @return array
 */
function az_simplebooking_rocket_exclusions( $excluded ) {
	$excluded[] = 'cdn.simplebooking.it';
	$excluded[] = 'SBSyncroBox';
	return $excluded;
}

add_filter( 'rocket_delay_js_exclusions', 'az_simplebooking_rocket_exclusions' );
add_filter( 'rocket_exclude_defer_js', 'az_simplebooking_rocket_exclusions' );
add_filter( 'rocket_minify_excluded_external_js', 'az_simplebooking_rocket_exclusions' );
