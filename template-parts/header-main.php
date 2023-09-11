<header id="header-main" class="header-main w-full fixed top-0 z-10" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main px-4 py-4 md:px-8 md:py-6" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'az' ); ?>">
		<div class="main-header-content flex lg:columns-2 justify-between">
			<div class="flex items-center gap-3">
				<button class="main-menu-toggle">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
				<div class="site-branding">
					<?php
					if ( is_front_page() ) :
						echo '<h1 class="screen-reader-text">' . get_bloginfo( 'name' ) . '</h1>';
					else :
						echo '<p class="screen-reader-text">' . get_bloginfo( 'name' ) . '</p>';
					endif;
					?>
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link "><?php do_action( 'theme_logo' ); ?></a>
				</div>
			</div>

			<div class="cta-buttons lg:flex items-center gap-3 hidden invisible md:visible">
				<?php
				$link_sales = get_field( 'cta_buttons_contact_sales', 'options' );
				if ( $link_sales ) :
					$link_url    = $link_sales['url'];
					$link_title  = $link_sales['title'];
					$link_target = $link_sales['target'] ? $link_sales['target'] : '_self';
					?>
					<a class="btn btn--secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
							<path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
					<?php
				endif;
				$link_shop = get_field( 'cta_buttons_got_to_shop', 'options' );
				if ( $link_shop ) :
					$link_url    = $link_shop['url'];
					$link_title  = $link_shop['title'];
					$link_target = $link_shop['target'] ? $link_shop['target'] : '_self';
					?>
					<a class="btn btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
							<path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
					<?php
				endif;
				?>
			</div>
		</div>

		<div class="main-menu-wrapper">
			<div class="main-menu-content">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main',
						'container'      => false,
						'menu_class'     => 'main-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
					),
				);
				?>
				<svg xmlns="http://www.w3.org/2000/svg" width="44" height="3" viewBox="0 0 44 3" fill="none">
					<path d="M42.6669 2.48711H33.3335C32.6002 2.48711 32.0002 1.92751 32.0002 1.24356C32.0002 0.559601 32.6002 0 33.3335 0H42.6669C43.4002 0 44.0002 0.559601 44.0002 1.24356C44.0002 1.92751 43.4002 2.48711 42.6669 2.48711ZM26.6668 2.48711H17.3334C16.6001 2.48711 16.0001 1.92751 16.0001 1.24356C16.0001 0.559601 16.6001 0 17.3334 0H26.6668C27.4001 0 28.0001 0.559601 28.0001 1.24356C28.0001 1.92751 27.4001 2.48711 26.6668 2.48711ZM10.6667 2.48711H1.33334C0.600004 2.48711 0 1.92751 0 1.24356C0 0.559601 0.600004 0 1.33334 0H10.6667C11.4001 0 12.0001 0.559601 12.0001 1.24356C12.0001 1.92751 11.4001 2.48711 10.6667 2.48711Z" fill="#10664F"/>
				</svg>
				<?php do_action( 'socials' ); ?>
			</div>
		</div>
	</nav>
</header>
