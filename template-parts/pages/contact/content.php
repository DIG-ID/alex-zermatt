<section class="section-contact px-4 lg:px-8 py-32 w-full grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 gap-4 items-center">
	<div class="col-span-1 md:col-start-1 lg:col-start-1 xl:col-start-2 md:col-span-4 lg:col-span-4 xl:col-span-3 lg:text-end">
		<h2 class="font-montbold text-3xl lg:text-4xl text-green uppercase mb-8"><?php the_field( 'contact_title' ); ?></h2>
		<p class="font-sans text-base text-dark-green leading-7 mb-4"><?php the_field( 'footer_address', 'options' ); ?></p>
		<?php
		$email = get_field( 'contact_email' );
		if ( $email ) :
			?><a class="font-sans text-base text-dark-green leading-7 block transition-all duration-300 ease-in-out hover:text-green hover:underline underline-offset-4" href="mailto:<?php echo esc_attr( $email ); ?>"> <?php echo $email; ?></a><?php
		endif;
		$phone = get_field( 'contact_phone' );
		$clean_phone = str_replace( ' ', '', $phone );
		if ( $phone ) :
			?><a class="font-sans text-base text-dark-green leading-7 block mb-6 transition-all duration-300 ease-in-out hover:text-green hover:underline underline-offset-4" href="tel:<?php echo esc_attr( $clean_phone ); ?>"> <?php echo $phone; ?></a><?php
		endif;
		?>
		<?php do_action( 'socials' ); ?>
	</div>
	<div class="col-span-1 md:col-start-5 lg:col-start-6 xl:col-start-6 md:col-span-8 lg:col-span-6 xl:col-span-4">
		<?php echo do_shortcode( get_field( 'contact_form_shortcode' ) ); ?>
	</div>
</section>