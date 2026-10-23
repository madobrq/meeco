<?php
/**
 * Fonctions du thème enfant Meeco.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function meeco_enqueue_assets() {
	$version = wp_get_theme()->get( 'Version' );

	// Polices de la charte : Fredoka (titres) et Figtree (texte)
	wp_enqueue_style(
		'meeco-fonts',
		'https://fonts.googleapis.com/css2?family=Fredoka:wght@500&family=Figtree:wght@400;500;600&display=swap',
		array(),
		null
	);

	// Styles du thème parent
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	// Styles du thème enfant (variables de la charte)
	wp_enqueue_style(
		'meeco-style',
		get_stylesheet_uri(),
		array( 'parent-style', 'meeco-fonts' ),
		$version
	);

	// Styles et scripts des composants
	wp_enqueue_style(
		'meeco-main',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array( 'meeco-style' ),
		$version
	);

	wp_enqueue_script(
		'meeco-main',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'meeco_enqueue_assets' );
