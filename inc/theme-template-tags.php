<?php

/**
 * This function open the main content.
 */
function theme_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'theme_before_main_content' );

/**
 * This function closes the main content.
 */
function theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'theme_after_main_content' );

/**
 * This function open the post content.
 */
function theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'theme_before_post_content' );

/**
 * This function closes the post content.
 */
function theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'theme_after_post_content' );


/**
 * This theme logo.
 */
function theme_logo() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" id="az-logo" width="146" height="52" viewBox="0 0 146 52" fill="none">
		<path d="M7.8 32.9C3.2 32.9 0 36.2 0 40.5C0 44.8 3.3 48.1 7.8 48.1C12.4 48.1 15.7 44.9 15.7 40.5C15.6 36.1 12.3 32.9 7.8 32.9ZM7.8 46.6C4.2 46.6 1.5 44 1.5 40.5C1.5 37 4.2 34.3 7.8 34.3C11.4 34.3 14.1 36.9 14.1 40.5C14.1 44 11.4 46.6 7.8 46.6ZM24.5 36.2C22.6 36.2 21.1 37.1 20.2 38.4L19.9 36.4H18.8V47.7H20.3V41.4C20.3 39.2 22 37.5 24.1 37.5C26.3 37.5 27.5 38.9 27.5 41.3V47.7H29V40.9C29 38.2 27.3 36.2 24.5 36.2ZM32.7 32.4H34.2V47.8H32.7V32.4ZM37.9 36.5H39.4V47.8H37.9V36.5ZM37.8 32.6H39.5V34.4H37.8V32.6ZM48.7 36.2C46.8 36.2 45.3 37.1 44.4 38.4L44.1 36.4H43V47.7H44.5V41.4C44.5 39.2 46.2 37.5 48.3 37.5C50.5 37.5 51.7 38.9 51.7 41.3V47.7H53.2V40.9C53.2 38.2 51.5 36.2 48.7 36.2ZM67.7 42.2C67.7 38.9 65.4 36.3 61.9 36.3C58.5 36.3 56 38.8 56 42.2C56 45.6 58.5 48.1 61.9 48.1C64.4 48.1 66.4 46.8 67.4 44.5H65.9C65.1 45.9 63.7 46.7 62 46.7C59.6 46.7 57.8 45.1 57.6 42.7H67.7V42.2ZM57.5 41.4C57.8 39.2 59.6 37.6 61.9 37.6C64.2 37.6 65.9 39.1 66.3 41.4H57.5ZM78.7 40.9H85V39.5H78.7V34.5H85.5V33.1H77.1V47.8H85.8V46.4H78.7V40.9ZM98.4 38.5C97.3 37.1 95.6 36.2 93.6 36.2C90.2 36.2 87.6 38.7 87.6 42.1C87.6 45.5 90.2 48 93.6 48C95.6 48 97.3 47.1 98.4 45.7L98.6 47.7H99.8V36.5H98.6L98.4 38.5ZM93.7 46.7C91.1 46.7 89.1 44.8 89.1 42.2C89.1 39.6 91.1 37.7 93.7 37.7C96.3 37.7 98.3 39.6 98.3 42.2C98.3 44.8 96.3 46.7 93.7 46.7ZM105.6 44V37.8H109.4V36.5H105.6V34.3H105.4L102.2 37.5V37.8H104.2V44C104.2 46.4 105.7 47.8 108.1 47.8H109.6V46.5H108.3C106.5 46.5 105.6 45.6 105.6 44ZM116.6 36.2C113.2 36.2 110.7 38.7 110.7 42.1C110.7 45.5 113.2 48 116.6 48C119.1 48 121.1 46.7 122.1 44.4H120.6C119.8 45.8 118.4 46.6 116.7 46.6C114.3 46.6 112.5 45 112.3 42.6H122.5V42.1C122.4 38.9 120 36.2 116.6 36.2ZM112.2 41.4C112.5 39.2 114.3 37.6 116.6 37.6C118.9 37.6 120.6 39.1 121 41.4H112.2ZM126.6 38.4L126.3 36.5H125.2V47.8H126.7V41.6C126.7 39.3 128 37.8 130.3 37.8H131.4V36.4H130.4C128.7 36.4 127.4 37.2 126.6 38.4ZM143.1 36.5L138.9 45.5L134.5 36.5H132.9L138.2 47.1L137.7 48.1C136.7 50.1 136.1 50.5 134.5 50.5H133.6V51.8H134.6C136.7 51.8 137.8 51 139 48.4L144.7 36.4H143.1V36.5ZM16.1 12.1C18 11 19.3 9 19.3 6.8C19.3 3.2 16 0.5 11.6 0.5H0.1V25H11.7C16.4 25 19.9 22 19.9 18C19.9 15.4 18.5 13.2 16.1 12.1ZM6.8 5.8H10.3C11.8 5.8 12.7 6.7 12.7 7.9C12.7 9.1 11.8 10 10.3 10H6.8V5.8ZM10.6 19.5H6.8V15H10.6C12.1 15 13.1 15.9 13.1 17.2C13.1 18.6 12.1 19.5 10.6 19.5ZM43.9 9.2C43.9 4.1 40 0.5 34.5 0.5H23.6V25H30.6V17.5H33.1L37.2 25H45L40 16.1C42.4 14.7 43.9 12.2 43.9 9.2ZM33.7 11.9H30.5V6.6H33.7C35.6 6.6 36.8 7.7 36.8 9.3C36.7 10.7 35.6 11.9 33.7 11.9ZM47.8 0.599998H54.8V25.1H47.8V0.599998ZM70.2 9.8C67.8 9.2 65.9 8.8 65.9 7.4C65.9 6.3 67.1 5.7 68.3 5.7C69.7 5.7 70.9 6.4 70.9 8H77.9C77.9 3 74.4 0 68.4 0C62.4 0 58.8 2.8 58.8 7.6C58.8 13.2 63.5 14.3 67.1 15.1C69.5 15.7 71.5 16.1 71.5 17.6C71.5 18.9 70.1 19.7 68.7 19.7C67.1 19.7 65.7 18.8 65.7 17.1H58.5C58.5 22.4 62.5 25.6 68.7 25.6C74.6 25.6 78.8 22.8 78.8 17.5C78.8 11.9 73.9 10.7 70.2 9.8ZM80.2 6.6H87V25.1H94V6.6H100.8V0.599998H80.2V6.6ZM110.1 15.5H118.4V10H110.1V6.4H119.4V0.599998H103.2V25.1H119.7V19.2H110.1V15.5ZM140.1 16.2C142.6 14.8 144.1 12.3 144.1 9.3C144.1 4.2 140.2 0.599998 134.7 0.599998H123.8V25.1H130.8V17.6H133.3L137.4 25.1H145.2L140.1 16.2ZM133.9 11.9H130.7V6.6H133.9C135.8 6.6 137 7.7 137 9.3C137 10.7 135.8 11.9 133.9 11.9Z"/>
	</svg>
	<?php
}

add_action( 'theme_logo', 'theme_logo' );


/**
 * Get our socials from the theme customizer and display them.
 */
function az_theme_socials() {
	$facebook_url  = get_field( 'socials_facebook', 'options' );
	$pinterest_url = get_field( 'socials_pinterest', 'options' );
	$instagram_url = get_field( 'socials_instagram', 'options' );
	$linkedin_url  = get_field( 'socials_linkedin', 'options' );

	$social_output = '<div class="socials-wrapper">';

	if ( $facebook_url ) :
		$social_output .= '<a href="' . esc_url( $facebook_url ) . '" target="_blank" class="social-link social-link__facebook"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>';
	endif;
	if ( $pinterest_url ) :
		$social_output .= '<a href="' . esc_url( $pinterest_url ) . '" target="_blank" class="social-link social-link__pinterest"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg></a>';
	endif;
	if ( $instagram_url ) :
		$social_output .= '<a href="' . esc_url( $instagram_url ) . '" target="_blank" class="social-link social-link__instagram"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>';
	endif;
	if ( $linkedin_url ) :
		$social_output .= '<a href="' . esc_url( $linkedin_url ) . '" target="_blank" class="social-link social-link__instagram"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>';
	endif;

	$social_output .= '</div>';

	echo $social_output;
}

add_action( 'socials', 'az_theme_socials' );

/**
 * Implement and customize Yoast Breadcrumbs.
 */
function az_theme_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) ) :
		add_filter( 'wpseo_breadcrumb_separator', function( $separator ) {
			return '<span class="breadcrumbs-separator"><svg id="breadcrumbs-icon-separator" xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none"><path d="M1 9L4.67453 5.70707C5.10849 5.31818 5.10849 4.68182 4.67453 4.29293L1 1" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg></span>';
		} );
		yoast_breadcrumb( '<p id="breadcrumbs"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" id="breadcrumbs-icon-home"><g stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#000000"> <path d="M7.846 2.574a.25.25 0 01.308 0l5.25 4.12a.25.25 0 01.096.196v7.36a.75.75 0 001.5 0V6.89a1.75 1.75 0 00-.67-1.377L9.08 1.394a1.75 1.75 0 00-2.16 0l-5.25 4.12A1.75 1.75 0 001 6.89v7.36a.75.75 0 001.5 0V6.89a.25.25 0 01.096-.196l5.25-4.12z"></path> <path d="M6.5 14.25V10.5h3v3.75a.75.75 0 001.5 0v-4C11 9.56 10.44 9 9.75 9h-3.5C5.56 9 5 9.56 5 10.25v4a.75.75 0 001.5 0z"></path> </g> </g></svg>', '</p>' );
	endif;
}

add_action( 'breadcrumbs', 'az_theme_breadcrumbs' );