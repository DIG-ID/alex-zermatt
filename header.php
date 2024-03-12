<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<!-- Start cookieyes banner -->
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
				dataLayer.push(arguments);
		}
		gtag("consent", "default", {
				ad_storage: "denied",
				ad_user_data: "denied", 
				ad_personalization: "denied",
				analytics_storage: "denied",
				functionality_storage: "denied",
				personalization_storage: "denied",
				security_storage: "granted",
				wait_for_update: 2000,
		});
		gtag("set", "ads_data_redaction", true);
		gtag("set", "url_passthrough", true);
		</script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TPWSW4LW');</script>
		<!-- End Google Tag Manager -->
		<script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/877c1d9f3ca6a5e718cf89c9/script.js"></script>
		<!-- End cookieyes banner -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
			<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPWSW4LW"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php do_action( 'wp_body_open' ); ?>
		<?php get_template_part( 'template-parts/header', 'main' ); ?>
