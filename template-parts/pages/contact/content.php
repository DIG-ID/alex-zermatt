<section id="section-intro" class="section-intro az-container pt-28 xl:pt-48 xl:pb-[200px] overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
        <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-3 xl:col-start-3 xl:max-w-[363px] text-center xl:text-left order-2 xl:order-1">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0"><?php the_title(); ?></h1>
            <p class="text-bigger-light"><?php the_field( 'contacts_text', 'option' ); ?></p>
			<p class="text-bigger-light my-10"><?php the_field( 'contacts_address', 'option' ); ?></p>
			<a href="mailto:<?php the_field( 'contacts_email', 'option' ); ?>" class="text-bigger-light inline-block mb-3"><?php the_field( 'contacts_email', 'option' ); ?></a>
			<a href="tel:<?php the_field( 'contacts_phone', 'option' ); ?>" class="text-bigger-light inline-block mb-3"><?php esc_html_e( 'Tel:', 'alexzermatt' ); the_field( 'contacts_phone', 'option' ); ?></a>
			<p class="text-bigger-light mb-32"><?php esc_html_e( 'Fax:', 'alexzermatt' ); the_field( 'contacts_fax', 'option' ); ?></p>
			<a href="<?php the_field( 'contacts_gmaps_link', 'option' ); ?>" class="text-body inline-block mb-3 underline"><?php esc_html_e( 'Auf Google Maps anzeigen', 'alexzermatt' ); ?></a>
        </div>
        <div class="relative col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-7 max-w-none order-1 xl:order-2">
            <?php 
                $intro_image = get_field( 'contacts_image', 'option' );
                if( $intro_image ) {
                    echo wp_get_attachment_image( $intro_image, 'main-header-image-half-container' );
                }
            ?>
        </div>
    </div>
</section>