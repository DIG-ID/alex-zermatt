<section id="section-intro" class="section-intro az-container pt-28 xl:pt-96 xl:pb-[200px] overflow-hidden">
	<div class="az-container-grid gap-y-3 xl:items-center">
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-3 text-center xl:text-left">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0 invisible"><?php the_field( 'archive_event_title', 'option' ); ?></h1>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 xl:max-w-[363px] text-center xl:text-left">
            <p class="text-body mb-14 xl:mb-0 invisible"><?php the_field( 'archive_event_description', 'option' ); ?></p>
        </div>
    </div>
</section>