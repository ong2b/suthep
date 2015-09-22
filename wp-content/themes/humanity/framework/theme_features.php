<?php if (!function_exists('dt_theme_features')) {

	// Register Theme Features
	function dt_theme_features() {
		global $wp_version;
		
		// Add theme support for Custom Background
		$b_args = array(
			'default-color' => 'ffffff',
			'default-image' => '',
			'wp-head-callback' => '_custom_background_cb',
			'admin-head-callback' => '',
			'admin-preview-callback' => ''
		);
		add_theme_support('custom-background', $b_args);
		// END of Custom Background Feature

		// Add theme support for Custom Header
		$hargs = array( 'default-image'=>'',	'random-default'=>false,	'width'=>0,					'height'=>0,
				'flex-height'=> false,	'flex-width'=> false,		'default-text-color'=> '',	'header-text'=> false,
				'uploads'=> true,		'wp-head-callback'=> '',	'admin-head-callback'=> '',	'admin-preview-callback' => '');
				
		add_theme_support('custom-header', $hargs);
		// END of Custom Header Feature
		
		
		# Now Theme supports WooCommerce
		add_theme_support('woocommerce');

		// Add theme support for Translation
		load_theme_textdomain('dt_themes', get_template_directory().'/languages');

		// Add theme support for custom CSS in the TinyMCE visual editor
		add_editor_style('custom-editor-style.css');

		// Add theme support for Automatic Feed Links
	
		add_theme_support('automatic-feed-links');
		// END of Automatic Feed Links
		
		add_theme_support( 'title-tag' );		
		// END of Title Tag

		// Add theme support for Featured Images
		add_theme_support('post-thumbnails', array('post','product','tribe_events'));
		
		add_image_size('blog-twocolumn', 573, 274, true);
		add_image_size('blog-thumb', 420, 250, true);
		add_image_size('blog-thumb-with-sidebar', 420, 420, true);
		add_image_size('single-blog', 1170, 730, true);
		add_image_size('recent-posts-widget', 60, 60, true);
		add_image_size('gallery-twocolumns', 573,430, true);
		add_image_size('gallery-three-four-columns', 420,315, true);
		add_image_size('gallery-two-columns-without-space', 645,484, true);
		// Featured Image option END
		
		if (version_compare($wp_version, '3.6', '>=')) :
		
			$args = array(
				'search-form',
				'comment-form',
				'comment-list'
			);
		
			add_theme_support( 'html5', $args );		
		endif;

	}
	// Hook into the 'after_setup_theme' action
	add_action('after_setup_theme', 'dt_theme_features');

}

if (!function_exists('dt_theme_navigation_menus')) {

	// Register Navigation Menus
	function dt_theme_navigation_menus() {
		$locations = array( 
			'header_menu' => __('Header Menu', 'dt_themes')
		);
		register_nav_menus($locations);
	}

	// Hook into the 'init' action
	add_action('init', 'dt_theme_navigation_menus');
}

if (!function_exists('dttheme_activation_function')) {

	function dttheme_activation_function($oldname, $oldtheme=false) {
		if(!in_array($oldname, array('Humanity', 'Humanity Child'))) {
			update_option(IAMD_THEME_SETTINGS, dttheme_default_option());
		}
	}

	add_action("after_switch_theme", "dttheme_activation_function", 10 , 2);
}?>