<?php get_header();

	$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

	$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
	$sidebar_class = "";
	global $dt_allowed_html_tags;

	switch ( $page_layout ) {
		case 'with-left-sidebar':
			$page_layout = "page-with-sidebar page-with-left-sidebar";
			$show_sidebar = $show_left_sidebar = true;
			$sidebar_class = "secondary-has-left-sidebar";
		break;

		case 'with-right-sidebar':
			$page_layout = "page-with-sidebar page-with-right-sidebar";
			$show_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-right-sidebar";
		break;

		case 'content-full-width':
		default:
			$page_layout = "content-full-width";
		break;
	}

	if ( $show_sidebar ):
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;?>
			<section id="primary" class="<?php echo esc_attr($page_layout);?>"><?php
				#Top code section
				$dttheme_options = get_option(IAMD_THEME_SETTINGS);
				$dttheme_integration = $dttheme_options['integration'];
				if(isset($dttheme_integration['enable-single-page-top-code'])){
					$single_page_top_code =  stripslashes($dttheme_integration['single-page-top-code']);
					echo "<div class='dt-top-code'>".$single_page_top_code.'</div>';
				}
				#Top code section
				
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'framework/loops/content', 'page' );
					endwhile;
				endif;
				#Bottom code section 
				$dttheme_integration = $dttheme_options['integration'];
				if(isset($dttheme_integration['enable-single-page-bottom-code'])){
					$single_page_bottom_code =  stripslashes($dttheme_integration['single-page-bottom-code']);
					echo "<div class='dt-bottom-code'>".$single_page_bottom_code."</div>";
				}
				?>
			</section><!-- **Primary - End** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;
get_footer();?>