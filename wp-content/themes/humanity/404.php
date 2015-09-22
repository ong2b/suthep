<?php get_header();
	$page_layout  = dttheme_option( 'specialty', '404-layout' );
	$page_layout  = !empty( $page_layout ) ? $page_layout : "content-full-width";

	$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
	$sidebar_class = "";
	$container_class = "";
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
			<section id="secondary" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;?>
			<section id="primary" class="<?php echo esc_attr($page_layout);?>">
				<div class="error-info"><?php
						echo stripcslashes(dttheme_option('specialty','404-message')); ?>
                    <div class="dt-sc-clear"></div>
                    <a data-delay="300" data-animation="fadeInRight" class="dt-sc-button small with-icon palebrown btn animate fadeInRight" href="<?php echo home_url();?>"> 
						<?php _e('Back to Home','dt_themes');?> <i class="fa fa-angle-right"></i> 
                    </a>
				</div>
			</section><!-- **Primary - End** --><?php
	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<section id="secondary" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;
get_footer();?>