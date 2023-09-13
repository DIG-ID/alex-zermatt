<div class="mega-menu-wrapper bg-white absolute top-[108px] left-0 right-0 bottom-0 h-0 invisible overflow-hidden -z-10 transition-all duration-500 ease-in-out flex xl:justify-center xl:items-center">
	<div class="mega-menu-content grid grid-cols-2 xl:grid-cols-5 max-w-7xl w-full px-8 xl:px-0">
		<div class="col-span-2 xl:col-span-1">
			<h3 class="font-serif font-light text-blue text-2xl tracking-[1.54px] uppercase mb-14"><?php esc_html_e( 'Aufenthalt', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mega-menu-left',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-2 xl:col-span-1">
			<h3 class="font-serif font-light text-blue text-2xl tracking-[1.54px] uppercase mb-14"><?php esc_html_e( 'Genuss', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mega-menu-left-2',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-1 hidden invisible xl:block">

		</div>
		<div class="col-span-2 xl:col-span-1 xl:text-right">
			<h3 class="font-serif font-light text-blue text-2xl tracking-[1.54px] uppercase mb-14"><?php esc_html_e( 'Erlebnis', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mega-menu-right',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-2 xl:col-span-1 xl:text-right">
			<h3 class="font-serif font-light text-blue text-2xl tracking-[1.54px] uppercase mb-14"><?php esc_html_e( 'Kultur', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mega-menu-right-2',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-5 invisible hidden xl:flex lx:items-center xl:justify-center">
			<span class="separator inline-block w-32 h-[1px] bg-blue my-16"></span>
		</div>
		<div class="col-span-1 xl:col-span-2">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mega-menu-submenu-left',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-sub-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-1 hidden invisible xl:block">

		</div>
		<div class="col-span-1 xl:col-span-2 xl:text-right">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mega-menu-submenu-right',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-sub-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-2 xl:col-span-5 flex flex-col xl:flex-row items-center justify-between mt-16">
			<a href="#" class="block font-serif font-light text-blue text-xl uppercase tracking-[1.54px] whitespace-nowrap transition-all duration-300 ease-in-out hover:text-gold"><?php esc_html_e( 'Book table', 'az' ); ?></a>
			<span class="block w-full h-[1px] bg-blue ml-20 mr-12"></span>
			<a href="" class="block font-serif font-medium text-blue text-xl uppercase tracking-[1.54px] whitespace-nowrap transition-all duration-300 ease-in-out hover:text-gold"><?php esc_html_e( 'Book Now', 'az' ); ?></a>
			<span class="block w-full h-[1px] bg-blue mr-20 ml-12"></span>
			<a href="" class="block font-serif font-light text-blue text-xl uppercase tracking-[1.54px] whitespace-nowrap transition-all duration-300 ease-in-out hover:text-gold"><?php esc_html_e( 'Vouchers', 'az' ); ?></a>
		</div>
	</div>
</div>