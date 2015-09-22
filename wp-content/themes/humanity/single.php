<?php get_header();
	global $dt_allowed_html_tags;

	$tpl_default_settings = get_post_meta( $post->ID, '_dt_post_settings', TRUE );
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

	$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
	$sidebar_class = "";

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
	}?>

<?php if ( $show_sidebar ):
	if ( $show_left_sidebar ): ?>
		<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
	endif;
endif;?>

<!-- ** Primary Section ** -->
<section id="primary" class="<?php echo esc_attr($page_layout);?>"><?php
	#Top code section
	$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-post-top-code'])){
		echo "<div class='dt-top-code'>".stripslashes($dttheme_integration['single-post-top-code'])."</div>";
	}
	#Top code section 
	
	if( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			get_template_part( 'framework/loops/content', 'single' );
		endwhile;
	endif;
	
	#Bottom code section 
	$dttheme_integration = $dttheme_options['integration'];
	if(isset($dttheme_integration['enable-single-post-bottom-code'])){
		echo "<div class='dt-bottom-code'>".stripslashes($dttheme_integration['single-post-bottom-code'])."</div>";
	}
	
?></section><!-- ** Primary Section End ** -->
<?php if ( $show_sidebar ):
	if ( $show_right_sidebar ): ?>
		<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section>
	<?php  endif;
	endif;?>
<?php get_footer(); ?>