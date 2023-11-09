<section class="section-menus-&-schedule az-container mb-32 md:mb-36 xl:mb-72">
	<div class="az-container-grid">
		<div class="xl:col-start-3 col-span-1 md:col-span-8 xl:col-span-3 mb-28">
			<div class="wine-food-list md:mx-auto md:max-w-lg xl:max-w-none text-center">
				<h2 class="title-overline"><?php the_field( 'menus_subtitle' ); ?></h2>
				<?php
				$lists_image = get_field( 'menus_image' );
				if ( $lists_image ) :
					echo wp_get_attachment_image( $lists_image, 'full', null, array( 'class' => 'mb-6 md:mb-12 xl:mb-8' ) );
				endif;
				?>
				<p class="text-body mb-12 text-left"><?php the_field( 'menus_description' ); ?></p>
				<div class="menus-links flex flex-col w-full">
					<?php
					$menu_01 = get_field( 'menus_snack_menu_link' );
					$menu_02 = get_field( 'menus_wine_list_link' );
					$menu_03 = get_field( 'menus_whiskey_list_link' );
					if ( $menu_01 ) :
						$link_url    = $menu_01['url'];
						$link_title  = $menu_01['title'];
						$link_target = $menu_01['target'] ? $menu_01['target'] : '_self';
						?>
						<a class="btn btn--arrow-down self-start mb-12" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php
					endif;
					if ( $menu_02 ) :
						$link_url    = $menu_02['url'];
						$link_title  = $menu_02['title'];
						$link_target = $menu_02['target'] ? $menu_02['target'] : '_self';
						?>
						<a class="btn btn--arrow-down self-center mb-12" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

						<?php
					endif;
					if ( $menu_03 ) :
						$link_url    = $menu_03['url'];
						$link_title  = $menu_03['title'];
						$link_target = $menu_03['target'] ? $menu_03['target'] : '_self';
						?>
						<a class="btn btn--arrow-down self-end mr-9" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php
					endif;
					?>
				</div>
			</div>

		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-8 mb-28 xl:mb-0 xl:mt-[100%] ">
			<div class="opening-hours mx-auto md:max-w-lg xl:max-w-none text-center">
				<h2 class="title-overline"><?php the_field( 'opening_hours_subtitle' ); ?></h2>
				<?php
				$schedule_image = get_field( 'opening_hours_image' );
				if ( $schedule_image ) :
					echo wp_get_attachment_image( $schedule_image, 'full', null, array( 'class' => 'mb-6 md:mb-12 xl:mb-8' ) );
				endif;
				?>
				<p class="text-body mb-4 text-left"><?php the_field( 'opening_hours_title' ); ?></p>
				<p class="font-serif font-light text-sm md:text-xl xl:text-2xl text-blue leading-6 xl:leading-8 tracking-[0.98px] xl:tracking-[1.54px] uppercase mb-4 text-left"><?php the_field( 'opening_hours_hours' ); ?></p>
				<p class="text-body text-left"><?php the_field( 'opening_hours_description' ); ?></p>
			</div>
		</div>
	</div>
</section>