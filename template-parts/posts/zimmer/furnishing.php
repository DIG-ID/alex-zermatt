<section id="section-more-info" class="section-more-info az-container pb-36 overflow-hidden">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-2">
            <h2 class="title-xl mb-4"><?php esc_html_e( 'Ausstattung', 'alexzermatt' ) ?></h2>
        </div>
        <div class="col-span-1 md:col-span-6 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-4 columns-2">
            <?php
            $feature_to_svg = array(
                'schreibtisch' => 'desk.svg',
                'badewanne' => 'bathtub.svg',
                'bademantel' => 'bathrobe.svg',
                'balkon' => 'balcony.svg',
                'frühstück' => 'breakfast.svg',
                'flachbildschirm' => 'flatscreenTV.svg',
                'kingsize Bett' => 'kingsize-bed.svg',
                'einzelbett' => 'single_extra.svg',
                'zusatzbett' => 'single_extra.svg',
                'telefon' => 'phone.svg',
                'safe' => 'safe.svg',
                'WLAN' => 'wifi.svg',
                'kamin' => 'fireplace.svg',
            );
            $selected_features = get_field('furnishing_features'); 

            if ($selected_features) {
                echo '<ul>';
                foreach ($selected_features as $feature) {
                    $feature_label = $feature['label'];
                    $feature_value = $feature['value'];

                    if (isset($feature_to_svg[$feature_value])) {
                        $svg_filename = $feature_to_svg[$feature_value];
                        echo '<li class="flex items-center mb-7"><img src="' . esc_url(get_template_directory_uri() . '/assets/images/room-icons/' . $svg_filename) . '" alt="' . esc_attr($feature_label) . '"><span class="font-serif font-light text-sm md:text-[22px] text-blue leading-[22px] md:leading-[30px] tracking-[1.54px] uppercase ml-3">' . esc_html($feature_label) . '</span></li>';
                    } else {
                        echo '<li>' . esc_html($feature_label) . '</li>';
                    }
                }
                echo '</ul>';
            } else {
                echo __('No features selected.', 'az');
            }
            ?>
        </div>
    </div>
</section>