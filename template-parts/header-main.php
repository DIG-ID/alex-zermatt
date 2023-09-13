<header id="header-main" class="header-main w-full fixed top-0 z-40 bg-white" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main w-full flex items-center py-10" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'az' ); ?>">
		<div class="mega-menu-buttons px-8">
			<button class="main-menu-toggle">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="text hidden invisible xl:block xl:visible font-serif font-light text-xl uppercase tracking-[1.54px]"><?php esc_html_e( 'Menu', 'az' ); ?></span>
			</button>
		</div>
		<div class="menu relative w-full max-w-[1320px] mx-auto">
			<div class="site-branding absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
				<?php
				if ( is_front_page() ) :
					echo '<h1 class="screen-reader-text">' . get_bloginfo( 'name' ) . '</h1>';
				else :
					echo '<p class="screen-reader-text">' . get_bloginfo( 'name' ) . '</p>';
				endif;
				?>
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link "><?php do_action( 'theme_logo' ); ?></a>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="az-custom-language-menu px-8">
			<select name="language" id="az-language-custom-selector">
				<option value="en">EN</option>
				<option value="fr">FR</option>
				<option value="de">DE</option>
			</select>
		</div>

	</nav>

	<div class="mega-menu-wrapper bg-slate-200 absolute top-[108px] left-0 right-0 bottom-0 h-0 invisible overflow-hidden -z-10 transition-all duration-500 ease-in-out flex justify-center items-center">
		<div class="mega-menu-content grid grid-cols-5 max-w-7xl w-full">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
						<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
						<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
						<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'main-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
	</div>
</header>
