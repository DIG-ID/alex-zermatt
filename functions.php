<?php
/**
 * Setup theme
 */
function az_theme_setup() {

	register_nav_menus(
		array(
			'main'                    => __( 'Main Menu', 'az' ),
			'menu-stay'               => __( 'Menu Stay', 'az' ),
			'menu-eat&drink'          => __( 'Menu Eat & Drink', 'az' ),
			'menu-experience'         => __( 'Menu Experience', 'az' ),
			'menu-kulture'            => __( 'Menu Kulture', 'az' ),
			'mega-menu-submenu-left'  => __( 'Mega Menu Sub-menu Left', 'az' ),
			'mega-menu-submenu-right' => __( 'Mega Menu Sub-menu Right', 'az' ),
			'copyright'               => __( 'Copryright Menu', 'az' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_post_type_support( 'page', 'excerpt' );

	add_image_size( 'main-header-image', 1594, 436, array( 'center', 'center' ) );

	add_image_size( 'main-header-image-md', 1280, 790, array( 'center', 'center' ) );

	add_image_size( 'main-header-image-small', 768, 678, array( 'center', 'center' ) );

	add_image_size( 'featured-header-image', 1594, 967, array( 'center', 'center' ) );

	add_image_size( 'featured-image-overview', 1105, 605, array( 'center', 'center' ) );

	add_image_size( 'featured-image-museum', 1268, 436, array( 'center', 'center' ) );

	add_image_size( 'main-header-image-half-container', 706, 830, array( 'center', 'center' ) );

	add_image_size( 'angebote-slider-image', 615, 640, array( 'center', 'center' ) );

	add_image_size( 'overall-square', 500, 500, array( 'center', 'center' ) );

	add_image_size( 'gallery-square', 290, 290, array( 'center', 'center' ) );

	//set_post_thumbnail_size( 500, 350, 'center', 'center' );

	//add_image_size( 'gallery-full', 1024, false );

	//add_image_size( 'mega-link-thumbnail', 1000, 500, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'az_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function az_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Header Language Switcher',
			'id'            => 'header_ls',
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'az_theme_footer_widgets_init' );

if ( ! function_exists( 'az_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function az_get_font_face_styles() {

		return "
			@import url('https://use.typekit.net/nsu2etq.css');
			@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap');
		";

	}

endif;

if ( ! function_exists( 'az_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function az__preload_webfonts() {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="use.typekit.net" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'az__preload_webfonts' );

/**
 * Add custom classes to posts body
 */
function custom_body_classes( $classes ) {
	if ( is_single() ) {
		global $post;
		foreach ( ( get_the_category( $post->ID ) ) as $category ) {
			$classes[] = $category->category_nicename;
		}
	}
	return $classes;
}
add_filter( 'body_class', 'custom_body_classes' );


/**
 * Enqueue styles and scripts
 */
function az_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme(); 
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', az_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );

	/*if ( is_home() ) :
		wp_enqueue_script( 'blog-ajax', get_template_directory_uri() . '/dist/js/blog-ajax.js', array( 'jquery' ), $theme_version, true );
		wp_localize_script( 'blog-ajax', 'blog_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'az_theme_enqueue_styles' );

/**
 * Setup swiper data
 */
function az_theme_localize_swiper_data() {
	$zimmer_query = new WP_Query(
		array(
			'post_type'      => 'zimmer',
			'posts_per_page' => 3,
			'order'          => 'ASC',
			'category_name'  => 'zimmer',
		),
	);

	$suite_query = new WP_Query(
		array(
			'post_type'      => 'zimmer',
			'posts_per_page' => 2,
			'order'          => 'ASC',
			'category_name'  => 'suite',
		),
	);

	$asommer_query = new WP_Query(
		array(
			'post_type'      => 'activities',
			'posts_per_page' => 3,
			'order'          => 'ASC',
			'category_name'  => 'sommer',
		),
	);

	$awinter_query = new WP_Query(
		array(
			'post_type'      => 'activities',
			'posts_per_page' => 3,
			'order'          => 'ASC',
			'category_name'  => 'winter',
		),
	);

	$zimmer_titles = array();
	$zimmer_links  = array();

	$suite_titles = array();
	$suite_links  = array();

	$sommer_titles = array();
	$sommer_links  = array();

	$winter_titles = array();
	$winter_links  = array();

	if ( $zimmer_query->have_posts() ) :
		while ( $zimmer_query->have_posts() ) :
			$zimmer_query->the_post();
			$zimmer_titles[] = get_the_title();
			$zimmer_links[]  = get_permalink();
		endwhile;
		wp_reset_postdata();
	endif;

	if ( $suite_query->have_posts() ) :
		while ( $suite_query->have_posts() ) :
			$suite_query->the_post();
			$suite_titles[] = get_the_title();
			$suite_links[]  = get_permalink();
		endwhile;
		wp_reset_postdata();
	endif;

	if ( $asommer_query->have_posts() ) :
		while ( $asommer_query->have_posts() ) :
			$asommer_query->the_post();
			$sommer_titles[] = get_the_title();
			$sommer_links[]  = get_permalink();
		endwhile;
		wp_reset_postdata();
	endif;

	if ( $awinter_query->have_posts() ) :
		while ( $awinter_query->have_posts() ) :
			$awinter_query->the_post();
			$winter_titles[] = get_the_title();
			$winter_links[]  = get_permalink();
		endwhile;
		wp_reset_postdata();
	endif;

	wp_localize_script(
		'theme-scripts',
		'swiperData',
		array(
			'zimmerTitles' => $zimmer_titles,
			'zimmerLinks'  => $zimmer_links,
			'suiteTitles'  => $suite_titles,
			'suiteLinks'   => $suite_links,
			'sommerTitles' => $sommer_titles,
			'sommerLinks'  => $sommer_links,
			'winterTitles' => $winter_titles,
			'winterLinks'  => $winter_links,
		),
	);
}

add_action( 'wp_enqueue_scripts', 'az_theme_localize_swiper_data' );


//enable pagination for archives
function enable_pagination_for_custom_post_types() {
    if (is_post_type_archive(array('news', 'event'))) {
        global $wp_query;
        if ($wp_query->is_main_query()) {
            if (is_post_type_archive('news')) {
                $wp_query->set('posts_per_page', 9); 
            } elseif (is_post_type_archive('event')) {
                $wp_query->set('posts_per_page', 4); 
            }
            $wp_query->get('paged');
        }
    }
}
add_action('pre_get_posts', 'enable_pagination_for_custom_post_types');



/**
 * Wrap the post thumbnail image in a figure element only in the blog posts and project posts.
 */
/*function az_wrap_post_thumbnail_in_figure( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	$allowed_sizes = array( 'card-post-thumbnail', 'card-project-thumbnail-portrait', 'card-project-thumbnail-landscape' );
	if ( ! in_array( $size, $allowed_sizes ) ) :
		return $html;
	endif;
	return '<a href="' . get_the_permalink() . '"><figure>' . $html . '</figure></a>';
}

add_filter( 'post_thumbnail_html', 'az_wrap_post_thumbnail_in_figure', 10, 5 );*/

// Remove <p> from Contact Form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );


/**
 * Create a customized options page and store the data in a variable for later use
 */
function az_theme_acf_op_gc_init() {
	if ( function_exists( 'acf_add_options_page' ) ) :
		$theme_option_page = acf_add_options_page(
			array(
				'page_title'      => __( 'Alex Zermatt Theme Options', 'az' ),
				'menu_title'      => __( 'Theme Options', 'az' ),
				'menu_slug'       => 'az-theme-general-options',
				'capability'      => 'edit_posts',
				'icon_url'        => get_template_directory_uri() . '/assets/images/hotel-resort-alex-theme-icon.png',
				'redirect'        => false,
				'update_button'   => __( 'Update Options', 'az' ),
				'updated_message' => __( 'Alex Zermatt Options Updated', 'az' ),
			)
		);
	endif;
}

add_action( 'acf/init', 'az_theme_acf_op_gc_init' );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function az_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'az_theme_lower_yoast_metabox_priority' );

/**
 * Remove the "Archives:" from a custom post type archive page title.
 */
function az_theme_remove_archive_prefix( $title ) {
	if ( is_post_type_archive( 'category' ) ) :
		$title = post_type_archive_title( '', false );
	elseif ( is_post_type_archive( 'tag' ) ) :
		$title = post_type_archive_title( '', false );
	endif;
	return $title;
}

add_filter( 'get_the_archive_title', 'az_theme_remove_archive_prefix' );

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings
require get_template_directory() . '/inc/theme-admin-settings.php';
