<section id="section-intro" class="section-intro az-container pt-28 xl:pt-48 xl:pb-[200px] overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
        <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-3 xl:col-start-3 text-center xl:text-left order-2 xl:order-1">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0 invisible"><?php the_title(); ?></h1>
            <p class="text-bigger-light invisible"><?php the_field( 'contacts_text', 'option' ); ?></p>
			<p class="text-bigger-light my-10 invisible"><?php the_field( 'contacts_address', 'option' ); ?></p>
			<a href="mailto:<?php the_field( 'contacts_email', 'option' ); ?>" class="text-bigger-light inline-block mb-3 invisible hover:cursor-pointer"><?php the_field( 'contacts_email', 'option' ); ?></a>
			<a href="tel:<?php the_field( 'contacts_phone', 'option' ); ?>" class="text-bigger-light inline-block mb-3 invisible hover:cursor-pointer"><?php esc_html_e( 'Tel:', 'alexzermatt' ); the_field( 'contacts_phone', 'option' ); ?></a>
			<p class="text-bigger-light mb-32 invisible">
                <?php if( get_field( 'contacts_fax', 'option' )) : ?>
                    <?php esc_html_e( 'Fax:', 'alexzermatt' ); the_field( 'contacts_fax', 'option' ); ?>
                <?php endif; ?>
            </p>
			<a href="<?php the_field( 'contacts_gmaps_link', 'option' ); ?>" class="inline-block mb-3 hover:cursor-pointer text-body !font-bold hover:text-gold"><?php esc_html_e( 'Auf Google Maps anzeigen', 'alexzermatt' ); ?></a>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-7 order-1 xl:order-2">
            <?php 
                $intro_image = get_field( 'contacts_image', 'option' );
                if( $intro_image ) {
                    echo wp_get_attachment_image( $intro_image, 'main-header-image-half-container', false, array( 'class' => 'h-[380px] md:h-[800px] xl:h-[780px] object-cover invisible w-full' ) );
                }
            ?>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-3 xl:col-start-3 order-3 xl:-mt-24">
            <?php
            $link = get_field( 'contacts_link', 'option' );
            if ( $link ) :
                $link_url    = $link['url'];
                $link_title  = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <span class="btn-wrapper block text-right xl:text-left mr-16 xl:mr-0 mb-16 xl:mb-0">
                    <a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                </span>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>