<footer class="footer-main border-t border-t-blue pt-32">

	<div class="az-container-footer az-container">
		<div class="col-span-2 md:col-span-8 xl:col-span-2 xl:col-start-3 mb-12 xl:mb-16">
			<div class="w-full">
				<?php do_action( 'theme_logo' ); ?>
			</div>
		</div>
		<div class="col-span-2 md:col-span-2 xl:col-span-2 mb-12 xl:mb-16">
			<h3 class="title-footer"><?php esc_html_e( 'Contacts', 'az' ); ?></h3>
			<p class="text-footer"><?php the_field( 'contacts_text', 'options' ); ?></p>
			<div class="flex flex-col">
				<a class="text-footer--link" href="tel:<?php the_field( 'contacts_phone', 'options' ); ?>"><?php the_field( 'contacts_phone', 'options' ); ?></a>
				<a class="text-footer--link" href="mailto:<?php the_field( 'contacts_email', 'options' ); ?>"><?php the_field( 'contacts_email', 'options' ); ?></a>
			</div>
		</div>
		<div class="col-span-2 md:col-span-2 xl:col-span-2 mb-12 xl:mb-16">
			<h3 class="title-footer"><?php esc_html_e( 'Follow us', 'az' ); ?></h3>
			<div class="flex flex-col">
				<?php
				$facebook  = get_field( 'socials_facebook_url', 'options' );
				$instagram = get_field( 'socials_instagram_url', 'options' );
				if ( $facebook ) :
					?>
					<a class="text-footer--link" href="<?php echo esc_url( $facebook ); ?>" target="_blank"><?php esc_html_e( 'facebook', 'az' ); ?></a>
					<?php
				endif;
				if ( $instagram ) :
					?>
					<a class="text-footer--link" href="<?php echo esc_url( $instagram ); ?>" target="_blank"><?php esc_html_e( 'instagram', 'az' ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
		<div class="col-span-2 md:col-span-3 xl:col-span-2 mb-12 xl:mb-16">
			<h3 class="title-footer"><?php esc_html_e( 'Newsletter', 'az' ); ?></h3>
			<?php 
			$form_shortcode = get_field('contacts_newsletter_form_shortcode', 'options');
			echo do_shortcode($form_shortcode);
			?>
		</div>
	</div>

	<div class="az-container-footer az-container">
		<div class="col-span-1 md:col-span-2 xl:col-span-2 xl:col-start-3 mb-12 xl:mb-32">
			<h3 class="title-footer"><?php esc_html_e( 'Aufenthalt', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-stay',
					'container'      => false,
					'menu_class'     => 'footer-menu-nav',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-1 md:col-span-2 xl:col-span-2 mb-12 xl:mb-32">
			<h3 class="title-footer"><?php esc_html_e( 'Genuss', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-eat&drink',
					'container'      => false,
					'menu_class'     => 'footer-menu-nav',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-1 md:col-span-2 xl:col-span-2 mb-12 xl:mb-32">
			<h3 class="title-footer"><?php esc_html_e( 'Erlebnis', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-experience',
					'container'      => false,
					'menu_class'     => 'footer-menu-nav',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
		<div class="col-span-1 md:col-span-2 xl:col-span-2 mb-12 xl:mb-32">
			<h3 class="title-footer"><?php esc_html_e( 'Kultur', 'az' ); ?></h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-kulture',
					'container'      => false,
					'menu_class'     => 'footer-menu-nav',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</div>
	</div>


	<div class="az-container-grid az-container border-t border-t-blue py-6">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 flex flex-col xl:flex-row justify-center xl:justify-between items-center">
			<div class="copy-info flex flex-col xl:flex-row order-2 xl:order-1">
				<p class="text-footer !text-xs xl:!text-sm text-center xl:text-right mr-0 xl:mr-4">
					<?php
					$y = date( 'Y' );
					printf(
						esc_html__( 'Urheberrecht &copy; %d Hotel Resort Alex', 'az' ),
						esc_html( $y )
					);
					?>
				</p>
				<p class="text-footer !text-xs xl:!text-sm text-center xl:text-right">
					<?php
					printf(
						__( 'Developed by: <a href="%s">dig.id</a>', 'az' ),
						esc_url( 'https://dig.id' )
					);
					?>
				</p>
			</div>
			<div class="copy-menu order-1 xl:order-2 mb-6 xl:mb-0">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'copyright',
						'container'      => false,
						'menu_class'     => 'copy-menu-nav',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
					)
				);
				?>
			</div>
		</div>

	</div>
</footer>