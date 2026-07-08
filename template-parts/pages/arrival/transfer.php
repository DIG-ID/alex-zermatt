<section id="section-transfers" class="section-transfers az-container pt-28 xl:pt-96 xl:pb-20 overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 text-center xl:text-left">
            <h2 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0"><?php get_field('transfers_title'); ?></h2>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 xl:max-w-[414px] text-center xl:text-left">
            <div class="text-body mb-14 xl:mb-0"><?php get_field('transfers_intro'); ?></div>
        </div>
    </div>
</section>

<section id="section-rooms" class="section-rooms az-container overflow-hidden mb-20 md:mb-40 xl:mb-80 ">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-8 col-start-1 xl:col-start-3">
            <?php if ( have_rows( 'transfers_items' ) ) : ?>
                <?php while ( have_rows( 'transfers_items' ) ) : the_row(); ?>
                    <div class="transfer-item border-t border-blue pt-8 md:pt-12 xl:pt-14 pb-8 md:pb-12 xl:pb-14 last:pb-0">
                        <div class="grid grid-cols-1 xl:grid-cols-8 gap-y-5 xl:gap-8">
                            <div class="xl:col-span-4">
                                <h3 class="title-xl"><?php the_sub_field( 'title' ); ?></h3>
                            </div>
                            <div class="xl:col-span-4 transfer-item__text text-body">
                                <?php echo wp_kses_post( get_sub_field( 'text' ) ); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>