<div class="mega-menu-wrapper bg-white absolute top-[64px] xl:top-[108px] left-0 bottom-0 w-full h-0 invisible overflow-scroll xl:overflow-hidden -z-10 transition-all duration-500 ease-in-out xl:flex xl:justify-center xl:items-center">
	<div class="mega-menu-content grid grid-cols-2 xl:grid-cols-5 max-w-7xl w-full px-8 xl:px-0">
		<div class="col-span-2 xl:col-span-1">
			<p class="font-serif font-thin text-gold text-xs leading-none tracking-[1.1px] mb-5 xl:invisible xl:hidden uppercase mt-10"><?php esc_html_e( 'Menu', 'az' ); ?></p>

			<button class="menu-accordion flex items-center xl:items-start xl:text-left xl:block xl:w-full">
				<h3 class="font-serif font-light text-blue text-sm xl:text-2xl tracking-[0.98px] xl:tracking-[1.54px] uppercase xl:mb-14"><?php esc_html_e( 'Aufenthalt', 'az' ); ?></h3>
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none" class="-mt-1 ml-2 xl:invisible xl:hidden">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8.72217 0C7.53138 0.490841 6.61008 1.18688 5.91234 1.97548C4.56776 3.49516 4.09038 5.31655 4.06523 6.55254L5.06502 6.57289C5.08606 5.53907 5.4955 3.95572 6.66128 2.63812C7.1784 2.05366 7.85196 1.51281 8.72217 1.09444L8.72217 0Z" fill="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C1.19079 0.490841 2.11209 1.18688 2.80982 1.97548C4.15441 3.49516 4.63179 5.31655 4.65694 6.55254L3.65715 6.57289C3.63611 5.53907 3.22667 3.95572 2.06089 2.63812C1.54377 2.05366 0.870212 1.51281 -2.9501e-07 1.09444L0 0Z" fill="#002850"/>
				</svg>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-stay',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-2 xl:col-span-1">
			<button class="menu-accordion flex items-center xl:items-start xl:text-left xl:block xl:w-full">
				<h3 class="font-serif font-light text-blue text-sm xl:text-2xl tracking-[0.98px] xl:tracking-[1.54px] uppercase xl:mb-14"><?php esc_html_e( 'Genuss', 'az' ); ?></h3>
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none" class="-mt-1 ml-2 xl:invisible xl:hidden transition-all duration-300 ease-in-out rotate-0">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8.72217 0C7.53138 0.490841 6.61008 1.18688 5.91234 1.97548C4.56776 3.49516 4.09038 5.31655 4.06523 6.55254L5.06502 6.57289C5.08606 5.53907 5.4955 3.95572 6.66128 2.63812C7.1784 2.05366 7.85196 1.51281 8.72217 1.09444L8.72217 0Z" fill="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C1.19079 0.490841 2.11209 1.18688 2.80982 1.97548C4.15441 3.49516 4.63179 5.31655 4.65694 6.55254L3.65715 6.57289C3.63611 5.53907 3.22667 3.95572 2.06089 2.63812C1.54377 2.05366 0.870212 1.51281 -2.9501e-07 1.09444L0 0Z" fill="#002850"/>
				</svg>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-eat&drink',
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
			<button class="menu-accordion flex items-center xl:block xl:w-full xl:text-right">
				<h3 class="font-serif font-light text-blue text-sm xl:text-2xl tracking-[0.98px] xl:tracking-[1.54px] uppercase xl:mb-14"><?php esc_html_e( 'Erlebnis', 'az' ); ?></h3>
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none" class="-mt-1 ml-2 xl:invisible xl:hidden transition-all duration-300 ease-in-out rotate-0">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8.72217 0C7.53138 0.490841 6.61008 1.18688 5.91234 1.97548C4.56776 3.49516 4.09038 5.31655 4.06523 6.55254L5.06502 6.57289C5.08606 5.53907 5.4955 3.95572 6.66128 2.63812C7.1784 2.05366 7.85196 1.51281 8.72217 1.09444L8.72217 0Z" fill="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C1.19079 0.490841 2.11209 1.18688 2.80982 1.97548C4.15441 3.49516 4.63179 5.31655 4.65694 6.55254L3.65715 6.57289C3.63611 5.53907 3.22667 3.95572 2.06089 2.63812C1.54377 2.05366 0.870212 1.51281 -2.9501e-07 1.09444L0 0Z" fill="#002850"/>
				</svg>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-experience',
					'container'      => false,
					'menu_class'     => 'mega-menu-nav mega-menu-top-level',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-2 xl:col-span-1 xl:text-right">
			<button class="menu-accordion flex items-center xl:block xl:w-full xl:text-right">
				<h3 class="font-serif font-light text-blue text-sm xl:text-2xl tracking-[0.98px] xl:tracking-[1.54px] uppercase xl:mb-14"><?php esc_html_e( 'Kultur', 'az' ); ?></h3>
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none" class="-mt-1 ml-2 xl:invisible xl:hidden transition-all duration-300 ease-in-out rotate-0">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8.72217 0C7.53138 0.490841 6.61008 1.18688 5.91234 1.97548C4.56776 3.49516 4.09038 5.31655 4.06523 6.55254L5.06502 6.57289C5.08606 5.53907 5.4955 3.95572 6.66128 2.63812C7.1784 2.05366 7.85196 1.51281 8.72217 1.09444L8.72217 0Z" fill="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0C1.19079 0.490841 2.11209 1.18688 2.80982 1.97548C4.15441 3.49516 4.63179 5.31655 4.65694 6.55254L3.65715 6.57289C3.63611 5.53907 3.22667 3.95572 2.06089 2.63812C1.54377 2.05366 0.870212 1.51281 -2.9501e-07 1.09444L0 0Z" fill="#002850"/>
				</svg>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-kulture',
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
		<div class="col-span-1 xl:col-span-5 flex flex-col xl:flex-row xl:items-center xl:justify-between mt-8 xl:mt-16">
			<p class="font-serif font-thin text-gold text-xs leading-none tracking-[1.1px] mb-5 xl:invisible xl:hidden uppercase"><?php esc_html_e( 'Book', 'az' ); ?></p>
			<a href="#" class="flex items-center justify-between xl:block font-serif font-light text-blue text-sm xl:text-xl uppercase tracking-[0.98px] xl:tracking-[1.54px] whitespace-nowrap mb-5 xl:mb-0 transition-all duration-300 ease-in-out hover:text-gold max-w-[160px] xl:max-w-none">
				<?php esc_html_e( 'Book table', 'az' ); ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="51" height="15" viewBox="0 0 51 15" fill="none" class="xl:invisible xl:hidden">
					<line x1="51" y1="7.5" x2="4.37114e-08" y2="7.5" stroke="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M39.6584 0C40.4791 1.93329 41.6217 3.42803 42.904 4.56255C45.4445 6.81031 48.4908 7.60676 50.5434 7.64853L50.5638 6.64874C48.7133 6.61108 45.905 5.88258 43.5666 3.81361C42.4885 2.8597 41.501 1.6127 40.7525 -3.70621e-07L39.6584 0Z" fill="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M39.6584 14.999C40.4791 13.0657 41.6217 11.571 42.904 10.4365C45.4445 8.18871 48.4908 7.39226 50.5434 7.35049L50.5638 8.35028C48.7133 8.38794 45.905 9.11645 43.5666 11.1854C42.4885 12.1393 41.501 13.3863 40.7525 14.999L39.6584 14.999Z" fill="#002850"/>
				</svg>
			</a>
			<span class="invisible hidden xl:visible xl:block w-full h-[1px] bg-blue ml-20 mr-12"></span>
			<a href="" class="flex items-center justify-between xl:block font-serif font-light xl:font-medium text-blue text-sm xl:text-xl uppercase tracking-[0.98px] xl:tracking-[1.54px] whitespace-nowrap mb-5 xl:mb-0 transition-all duration-300 ease-in-out hover:text-gold max-w-[160px] xl:max-w-none">
				<?php esc_html_e( 'Book Now', 'az' ); ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="51" height="15" viewBox="0 0 51 15" fill="none" class="xl:invisible xl:hidden">
					<line x1="51" y1="7.5" x2="4.37114e-08" y2="7.5" stroke="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M39.6584 0C40.4791 1.93329 41.6217 3.42803 42.904 4.56255C45.4445 6.81031 48.4908 7.60676 50.5434 7.64853L50.5638 6.64874C48.7133 6.61108 45.905 5.88258 43.5666 3.81361C42.4885 2.8597 41.501 1.6127 40.7525 -3.70621e-07L39.6584 0Z" fill="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M39.6584 14.999C40.4791 13.0657 41.6217 11.571 42.904 10.4365C45.4445 8.18871 48.4908 7.39226 50.5434 7.35049L50.5638 8.35028C48.7133 8.38794 45.905 9.11645 43.5666 11.1854C42.4885 12.1393 41.501 13.3863 40.7525 14.999L39.6584 14.999Z" fill="#002850"/>
				</svg>
			</a>
			<span class="invisible hidden xl:visible xl:block w-full h-[1px] bg-blue mr-20 ml-12"></span>
			<a href="" class="flex items-center justify-between xl:block font-serif font-light text-blue text-sm xl:text-xl uppercase tracking-[0.98px] xl:tracking-[1.54px] whitespace-nowrap mb-5 xl:mb-0 transition-all duration-300 ease-in-out hover:text-gold max-w-[160px] xl:max-w-none">
				<?php esc_html_e( 'Vouchers', 'az' ); ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="51" height="15" viewBox="0 0 51 15" fill="none" class="xl:invisible xl:hidden">
					<line x1="51" y1="7.5" x2="4.37114e-08" y2="7.5" stroke="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M39.6584 0C40.4791 1.93329 41.6217 3.42803 42.904 4.56255C45.4445 6.81031 48.4908 7.60676 50.5434 7.64853L50.5638 6.64874C48.7133 6.61108 45.905 5.88258 43.5666 3.81361C42.4885 2.8597 41.501 1.6127 40.7525 -3.70621e-07L39.6584 0Z" fill="#002850"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M39.6584 14.999C40.4791 13.0657 41.6217 11.571 42.904 10.4365C45.4445 8.18871 48.4908 7.39226 50.5434 7.35049L50.5638 8.35028C48.7133 8.38794 45.905 9.11645 43.5666 11.1854C42.4885 12.1393 41.501 13.3863 40.7525 14.999L39.6584 14.999Z" fill="#002850"/>
				</svg>
			</a>
		</div>
		<div class="col-span-2 mt-4 md:hidden md:invisible">
			<p class="font-serif font-thin text-gold text-xs leading-none tracking-[1.1px] mb-5 xl:invisible xl:hidden uppercase"><?php esc_html_e( 'Language', 'az' ); ?></p>
			<div class="wpml-megamenu-language-switcher">
				<?php do_action( 'wpml_add_language_selector' ); ?>
			</div>
		</div>
	</div>
</div>