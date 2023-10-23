<section id="section-intro" class="section-intro az-container pt-28 xl:pt-96 pb-14 xl:pb-0 overflow-hidden">
	<div class="az-container-grid gap-y-3 pb-5 xl:pb-0">
        <div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-3">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0"><?php the_title(); ?></h1>
            <p class="text-body md:max-w-[280px] xl:max-w-[363px]"><?php the_field( 'section_intro_description' ); ?></p>			
        </div>
        <div class="relative col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-5 xl:col-start-7">
            <h2 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0"><?php the_field( 'section_intro_media_contacts_title' ); ?></h2>
            <p class="text-body xl:max-w-[363px]"><?php the_field( 'section_intro_media_contacts_address' ); ?></p>
        </div>
    </div>
    <div class="az-container-grid gap-y-3 mt-5 pb-10 md:pb-6 xl:pb-40">
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-3 h-1 border-t border-blue "></div>
        <div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-5 xl:col-start-7 h-1 border-t border-blue hidden xl:block"></div>
    </div>
    <div class="az-container-grid gap-y-3 mb-10 md:mb-5">
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-3 mb-6 xl:mb-0">
            <a href="<?php the_field( 'section_intro_media_texts_link' ); ?>" class="link__arrow-right title-xl mb-10 md:mb-12 mt-12 xl:mt-0 hover:text-gold">
                <span style="max-width:90%;"><?php esc_html_e( 'Medienmitteilungen', 'alexzermatt' ); ?></span>
                <span class="float-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="31" viewBox="0 0 36 31" fill="none">
                    <path d="M35.7705 16.0772L21.6838 30.7609C21.5369 30.914 21.3377 31 21.1301 31C20.9224 31 20.7232 30.914 20.5764 30.7609C20.4295 30.6079 20.347 30.4003 20.347 30.1838C20.347 29.9673 20.4295 29.7597 20.5764 29.6066L33.3268 16.3158H0.782595C0.575038 16.3158 0.375982 16.2298 0.229217 16.0768C0.0824519 15.9238 0 15.7164 0 15.5C0 15.2836 0.0824519 15.0762 0.229217 14.9232C0.375982 14.7702 0.575038 14.6842 0.782595 14.6842H33.3268L20.5764 1.39337C20.4295 1.2403 20.347 1.03269 20.347 0.816219C20.347 0.599744 20.4295 0.392136 20.5764 0.239065C20.7232 0.0859946 20.9224 4.26723e-09 21.1301 0C21.3377 -4.26723e-09 21.5369 0.0859938 21.6838 0.239065L35.7705 14.9228C35.8432 14.9986 35.901 15.0886 35.9403 15.1876C35.9797 15.2866 36 15.3928 36 15.5C36 15.6072 35.9797 15.7134 35.9403 15.8124C35.901 15.9114 35.8432 16.0014 35.7705 16.0772Z" fill="#002850"/>
                </svg>
                </span>
            </a>			
        </div>
        <div class="relative col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-7">
            <a href="<?php the_field( 'section_intro_media_results_link' ); ?>" class="link__arrow-right title-xl mb-10 md:mb-12 mt-12 xl:mt-0 hover:text-gold">
                <span style="max-width:90%;"><?php esc_html_e( 'Medienresultate', 'alexzermatt' ); ?></span>
                <span class="float-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="31" viewBox="0 0 36 31" fill="none">
                    <path d="M35.7705 16.0772L21.6838 30.7609C21.5369 30.914 21.3377 31 21.1301 31C20.9224 31 20.7232 30.914 20.5764 30.7609C20.4295 30.6079 20.347 30.4003 20.347 30.1838C20.347 29.9673 20.4295 29.7597 20.5764 29.6066L33.3268 16.3158H0.782595C0.575038 16.3158 0.375982 16.2298 0.229217 16.0768C0.0824519 15.9238 0 15.7164 0 15.5C0 15.2836 0.0824519 15.0762 0.229217 14.9232C0.375982 14.7702 0.575038 14.6842 0.782595 14.6842H33.3268L20.5764 1.39337C20.4295 1.2403 20.347 1.03269 20.347 0.816219C20.347 0.599744 20.4295 0.392136 20.5764 0.239065C20.7232 0.0859946 20.9224 4.26723e-09 21.1301 0C21.3377 -4.26723e-09 21.5369 0.0859938 21.6838 0.239065L35.7705 14.9228C35.8432 14.9986 35.901 15.0886 35.9403 15.1876C35.9797 15.2866 36 15.3928 36 15.5C36 15.6072 35.9797 15.7134 35.9403 15.8124C35.901 15.9114 35.8432 16.0014 35.7705 16.0772Z" fill="#002850"/>
                </svg>
                </span>
            </a>
        </div>
    </div>
    <div class="az-container-grid gap-y-3 xl:pb-64">
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-3 h-1 border-t border-blue"></div>
        <div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-5 xl:col-start-7 h-1 border-t border-blue hidden xl:block"></div>
    </div>
</section>