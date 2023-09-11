<footer class="footer-main">
	<div class="w-full py-20 md:py-24 px-4 md:px-8 border-t border-dark-green">
		<div class="w-full mb-8">
			<?php do_action( 'theme_logo' ); ?>
		</div>
		<div class="w-full grid grid-cols-1 md:grid-cols-6 lg:grid-cols-12 gap-4">
			<div class="md:col-span-3 lg:col-span-2 mb-12 lg:mb-0">
				<p class="font-sans text-base text-dark-green leading-7 mb-4"><?php the_field( 'footer_address', 'options' ); ?></p>
				<?php
				$email = get_field( 'footer_email', 'options' );
				if ( $email ) :
					?><a class="font-sans text-base text-dark-green leading-7 block transition-all duration-300 ease-in-out hover:text-green hover:underline underline-offset-4" href="mailto:<?php echo esc_attr( $email ); ?>"> <?php echo $email; ?></a><?php
				endif;
				?>
				<?php
				$phone = get_field( 'footer_phone', 'options' );
				$clean_phone = str_replace( ' ', '', $phone );
				if ( $phone ) :
					?><a class="font-sans text-base text-dark-green leading-7 block mb-6 transition-all duration-300 ease-in-out hover:text-green hover:underline underline-offset-4" href="tel:<?php echo esc_attr( $clean_phone ); ?>"> <?php echo $phone; ?></a><?php
				endif;
				?>
				<?php do_action( 'socials' ); ?>
			</div>
			<div class="lg:col-start-4 md:col-span-3 lg:col-span-4 mb-12 lg:mb-0">
				<?php echo do_shortcode( get_field( 'footer_newsletter_shortcode', 'options' ) ); ?>
			</div>
			<div class="lg:col-start-9 md:col-span-3 lg:col-span-2 mb-12 lg:mb-0">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'footer',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
					),
				);
				?>
			</div>
			<div class="md:col-span-3 lg:col-span-2">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_terms',
						'container'      => false,
						'menu_class'     => 'footer_terms',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
					),
				);
				?>
			</div>
		</div>
	</div>

	<div class="w-full px-4 md:px-8 py-5 flex justify-between items-center border-t border-dark-green">
		<p class="font-sans text-xs text-dark-green">
			<?php
			$y = date( 'Y' );
			printf(
				esc_html__( 'Urheberrecht &copy; %d Hotel Resort Alex', 'az' ),
				esc_html( $y )
			);
			?>
		</p>
		<p class="font-sans text-xs text-dark-green">
			<?php
			printf(
				__( 'Developed by: <a href="%s">dig.id</a>', 'az' ),
				esc_url( 'https://dig.id' )
			);
			?>
		</p>
	</div>
</footer>