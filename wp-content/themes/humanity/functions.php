<?php
if ( ! defined( 'IAMD_BASE_URL' ) ) { 
	define( 'IAMD_BASE_URL',  get_template_directory_uri().'/' ); 
}

define( 'IAMD_FW_URL', IAMD_BASE_URL . 'framework/' );
define( 'IAMD_FW', get_template_directory().'/framework/' );
define( 'IAMD_IMPORTER_URL', IAMD_FW.'wordpress-importer/' );
define( 'IAMD_THEME_SETTINGS', 'mytheme' );
define( 'IAMD_SAMPLE_FONT', __( 'The quick brown fox jumps over the lazy dog', 'dt_themes' ) );

if ( function_exists( 'wp_get_theme' ) ) {
	$theme_data = wp_get_theme();
	define( 'IAMD_THEME_NAME', $theme_data->get( 'Name' ) );
	define( 'IAMD_THEME_FOLDER_NAME', $theme_data->template );
	define( 'IAMD_THEME_VERSION', (float) $theme_data->get( 'Version' ) );
}

require_once get_template_directory () . '/framework/include.php';

if ( ! isset( $content_width ) ) {
	$content_width = 940;
}?>