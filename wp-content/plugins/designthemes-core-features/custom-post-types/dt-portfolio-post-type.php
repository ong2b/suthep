<?php
if (! class_exists ( 'DTPortfolioPostType' )) {
	class DTPortfolioPostType {
		
		/**
		 */
		function __construct() {
			// Add Hook into the 'init()' action
			add_action ( 'init', array (
					$this,
					'dt_init' 
			) );
			
			// Add Hook into the 'admin_init()' action
			add_action ( 'admin_init', array (
					$this,
					'dt_admin_init' 
			) );
		}
		
		/**
		 * A function hook that the WordPress core launches at 'init' points
		 */
		function dt_init() {
			$this->createPostType ();
			add_action ( 'save_post', array (
					$this,
					'save_post_meta' 
			) );
			
			add_action ( 'pre_post_update', array (
					$this,
					'save_post_meta' 
			) );
		}
		
		/**
		 * A function hook that the WordPress core launches at 'admin_init' points
		 */
		function dt_admin_init() {
			wp_enqueue_script ( 'jquery-ui-sortable' );
			
			remove_filter( 'manage_posts_custom_column', 'likeThisDisplayPostLikes'); # Fix for http://wordpress.org/plugins/roses-like-this/
			
			add_action ( 'add_meta_boxes', array (
					$this,
					'dt_add_portfolio_meta_box' 
			) );
			
			add_filter ( "manage_edit-dt_portfolios_columns", array (
					$this,
					"dt_portfolios_edit_columns" 
			) );
			
			add_action ( "manage_posts_custom_column", array (
					$this,
					"dt_portfolios_columns_display" 
			), 10, 2 );
		}
		
		/**
		 */
		function createPostType() {
			$labels = array (
					'name' => __ ( 'Galleries', 'dt_themes' ),
					'all_items' => __ ( 'All Galleries', 'dt_themes' ),
					'singular_name' => __ ( 'Gallery', 'dt_themes' ),
					'add_new' => __ ( 'Add New', 'dt_themes' ),
					'add_new_item' => __ ( 'Add New Gallery', 'dt_themes' ),
					'edit_item' => __ ( 'Edit Gallery', 'dt_themes' ),
					'new_item' => __ ( 'New Gallery', 'dt_themes' ),
					'view_item' => __ ( 'View Gallery', 'dt_themes' ),
					'search_items' => __ ( 'Search Galleries', 'dt_themes' ),
					'not_found' => __ ( 'No galleries found', 'dt_themes' ),
					'not_found_in_trash' => __ ( 'No portfolios found in Trash', 'dt_themes' ),
					'parent_item_colon' => __ ( 'Parent Gallery:', 'dt_themes' ),
					'menu_name' => __ ( 'Galleries', 'dt_themes' ) 
			);
			
			$args = array (
					'labels' => $labels,
					'hierarchical' => false,
					'description' => 'This is custom post type galleries',
					'supports' => array (
							'title',
							'editor',
							'comments' 
					),
					
					'public' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'menu_position' => 5,
					'menu_icon' => plugin_dir_url ( __FILE__ ) . 'images/icon_portfolio.png',
					
					'show_in_nav_menus' => true,
					'publicly_queryable' => true,
					'exclude_from_search' => false,
					'has_archive' => true,
					'query_var' => true,
					'can_export' => true,
					'rewrite' => true,
					'capability_type' => 'post' 
			);
			
			register_post_type ( 'dt_galleries', $args );
			
			register_taxonomy ( "dt_gallery_entries", "dt_galleries" , array (
				"hierarchical" => true,
				"label" => "Categories",
				"singular_label" => "Category",
				"show_admin_column" => true,
				"rewrite" => true,
				"query_var" => true )
			);
			
			#To register Gallery Tag Taxonomy
			register_taxonomy( "dt_gallery_tag_entries" ,
				array( "dt_galleries" ),
				array( "hierarchical" => false,
					"labels" => array(
						"name" => __("Tags",'dt_themes' ),
						"singular_name" => __("Tag",'dt_themes' ),
						'search_items'			=> __( 'Search Tags', 'dt_themes' ),
						'popular_items'			=> __( 'Popular Tags', 'dt_themes' ),
						'all_items'				=> __( 'All Tags', 'dt_themes' ),
						'parent_item'			=> __( 'Parent Tag', 'dt_themes' ),
						'parent_item_colon'		=> __( 'Parent Tag', 'dt_themes' ),
						'edit_item'				=> __( 'Edit Tag', 'dt_themes' ),
						'update_item'			=> __( 'Update Tag', 'dt_themes' ),
						'add_new_item'			=> __( 'Add New Tag', 'dt_themes' ),
						'new_item_name'			=> __( 'New Tag', 'dt_themes' ),
						'add_or_remove_items'	=> __( 'Add or remove', 'dt_themes' ),
						'choose_from_most_used'	=> __( 'Choose from most used', 'dt_themes' ),
						'menu_name'				=> __( 'Tags','dt_themes' ),
						),
					"show_admin_column" => true,
					"rewrite" => true,
					"query_var" => true 
			));
		}
		
		/**
		 */
		function dt_add_portfolio_meta_box() {
			add_meta_box ( "dt-portfolio-default-metabox", __ ( 'Default Options', 'dt_themes' ), array (
					$this,
					'dt_default_metabox' 
			), 'dt_galleries', "normal", "default" );
		}
		
		/**
		 */
		function dt_default_metabox() {
			include_once plugin_dir_path ( __FILE__ ) . 'metaboxes/dt_portfolio_default_metabox.php';
		}
		
		/**
		 *
		 * @param unknown $columns        	
		 * @return multitype:
		 */
		function dt_portfolios_edit_columns($columns) {
			$newcolumns = array (
					"cb" => "<input type=\"checkbox\" />",
					"thumb column-comments" => "Image",
					"title" => "Title",
					"author" => "Author"					
			);
			$columns = array_merge ( $newcolumns, $columns );
			return $columns;
		}
		
		/**
		 *
		 * @param unknown $columns        	
		 * @param unknown $id        	
		 */
		function dt_portfolios_columns_display($columns, $id) {
			global $post;
			switch ($columns) {
				
				case "thumb column-comments" :
					$gallery_settings = get_post_meta ( $post->ID, '_gallery_settings', TRUE );
					$gallery_settings = is_array ( $gallery_settings ) ? $gallery_settings : array ();
					
					if (array_key_exists ( "items_thumbnail", $gallery_settings )) {
						$item = $gallery_settings ['items_thumbnail'] [0];
						$name = $gallery_settings ['items_name'] [0];
						
						if ("video" === $name) {
							echo '<span class="dt-video"></span>';
						} else {
							echo "<img src='{$item}' height='60px' width='60px' />";
						}
					}
					break;

				case "likes":
					$likes = get_post_meta($post->ID, "_likes");
					if ($likes) {
					  echo esc_attr($likes[0]);
					} else {
					  echo 0;
					}
				break;
					
			}
		}
		
		/**
		 */
		function save_post_meta($post_id) {
			if (defined ( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE)
				return $post_id;
			
		if(isset($_POST['layout'])) :
			$settings = array ();
			
			$settings ['location-info'] = isset ( $_POST ['location-info'] ) ? dt_wp_kses($_POST ['location-info']) : "";
			$settings ['layout'] = isset ( $_POST ['layout'] ) ? $_POST ['layout'] : "";
			$settings ['show-social-share'] = isset ( $_POST ['mytheme-social-share'] ) ? $_POST ['mytheme-social-share'] : "";
			$settings ['show-related-items'] = isset ( $_POST ['mytheme-related-item'] ) ? $_POST ['mytheme-related-item'] : "";
			
			$settings ['items'] = isset ( $_POST ['items'] ) ? $_POST ['items'] : "";
			$settings ['items_thumbnail'] = isset ( $_POST ['items_thumbnail'] ) ? $_POST ['items_thumbnail'] : "";
			$settings ['items_name'] = isset ( $_POST ['items_name'] ) ? $_POST ['items_name'] : "";
			
			update_post_meta ( $post_id, "_gallery_settings", array_filter ( $settings ) );
			
			/* TO set Default Category */
			$terms = wp_get_object_terms ( $post_id, 'dt_gallery_entries' );
			if (empty ( $terms )) :
				wp_set_object_terms ( $post_id, 'Uncategorized', 'dt_gallery_entries', true );
			endif;
		endif;
		}
	}
}
?>