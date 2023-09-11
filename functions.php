<?php
/**
 * Setup theme
 */
function az_theme_setup() {

	register_nav_menus(
		array(
			'main'         => __( 'Main Menu', 'az' ),
			'footer'       => __( 'Footer Menu', 'az' ),
			'footer_terms' => __( 'Footer Terms Menu', 'az' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_post_type_support( 'page', 'excerpt' );

	set_post_thumbnail_size( 500, 350, 'center', 'center' );

	add_image_size( 'gallery-full', 1024, false );

	add_image_size( 'mega-link-thumbnail', 1000, 500, array( 'center', 'center' ) );

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

}

add_action( 'widgets_init', 'az_theme_footer_widgets_init' );

if ( ! function_exists( 'az_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function az_get_font_face_styles() {

		return "
			/* cyrillic-ext */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 300;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
				unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			}
			/* cyrillic */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 300;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
				unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			}
			/* vietnamese */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 300;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
				unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			}
			/* latin-ext */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 300;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
				unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 300;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
			/* cyrillic-ext */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 400;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
				unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			}
			/* cyrillic */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 400;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
				unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			}
			/* vietnamese */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 400;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
				unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			}
			/* latin-ext */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 400;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
				unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 400;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
			/* cyrillic-ext */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 700;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCAIT5lu.woff2) format('woff2');
				unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			}
			/* cyrillic */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 700;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCkIT5lu.woff2) format('woff2');
				unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			}
			/* vietnamese */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 700;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCIIT5lu.woff2) format('woff2');
				unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			}
			/* latin-ext */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 700;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
				unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
				font-family: 'Raleway';
				font-style: normal;
				font-weight: 700;
				font-display: swap;
				src: url(https://fonts.gstatic.com/s/raleway/v28/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
				unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
      @font-face {
        font-family: 'Mont';
        src: url('" . get_theme_file_uri( 'assets/fonts/Mont-Bold.woff2' ) . "') format('woff2'),
            url('" . get_theme_file_uri( 'assets/fonts/Mont-Bold.woff' ) . "') format('woff');
        font-weight: bold;
        font-style: normal;
        font-display: swap;
      }
      
      @font-face {
				font-family: 'Mont Book';
				src: url('" . get_theme_file_uri( 'assets/fonts/Mont-Book.woff2' ) . "') format('woff2'),
						url('" . get_theme_file_uri( 'assets/fonts/Mont-Book.woff' ) . "') format('woff');
				font-weight: normal;
				font-style: normal;
				font-display: swap;
      }    
    
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
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Mont-Book.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Mont-Bold.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
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
				'page_title'      => __( 'Alex Zermatt Options', 'az' ),
				'menu_title'      => __( 'Alex Zermatt Theme', 'az' ),
				'menu_slug'       => 'az-theme-general-options',
				'capability'      => 'edit_posts',
				'icon_url'        => get_template_directory_uri() . '/assets/images/az-theme-icon.png',
				'redirect'        => false,
				'update_button'   => __( 'Update Options', 'az' ),
				'updated_message' => __( 'az Options Updated', 'az' ),
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
