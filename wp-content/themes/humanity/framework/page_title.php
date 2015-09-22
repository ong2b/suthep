<?php
	global $wp_query;
	$title = '';
	$date_format = apply_filters( 'tribe_events_pro_page_title_date_format', 'l, F jS Y' );

    if ( is_page() && !is_front_page() ):
        global $post;
        dttheme_title_section( $post->ID, 'page' );
    elseif( is_singular('post') ):    
        global $post;
        dttheme_title_section( $post->ID, 'post' );
    elseif( is_singular('dt_portfolios' )):
    	global $post;
        dttheme_title_section( $post->ID, 'dt_portfolios' );
    elseif( is_singular( 'product' ) ):  
        global $post;
        $title = get_the_title($post->ID);
		echo '<h1>';
		echo "	{$title}";
		echo '</h1>';
    elseif( is_attachment() ):
        global $post;
        $my_query = get_post($post->post_parent);            
        $subtitle =  get_the_title($my_query->ID);
        dttheme_custom_subtitle_section( __('Attachment','dt_themes') ,$subtitle);
    elseif( is_tax() ):
        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $title = $term->name;
        dttheme_custom_subtitle_section($title);
    elseif( is_post_type_archive('product') ):
        dttheme_title_section( get_option('woocommerce_shop_page_id'), 'page' );
	elseif( is_category( ) ):
        dttheme_custom_subtitle_section(single_cat_title('',FALSE) );
    elseif( is_tag( ) ):
        dttheme_custom_subtitle_section(single_tag_title('',FALSE) );
    elseif( is_author() ):
        $curauth = get_user_by('slug',get_query_var('author_name')) ;
        dttheme_custom_subtitle_section($curauth->nickname );
    elseif( is_year() ): 
        dttheme_custom_subtitle_section(get_the_time('Y'));   
    elseif( is_month() ): 
        dttheme_custom_subtitle_section(get_the_time('F'));   
    elseif( is_search() ):
        dttheme_custom_subtitle_section(__('Search','dt_themes'));
	#events starts
	elseif( class_exists('the-events-calendar') && tribe_is_month() && !is_tax()  ) :
		$title = sprintf( __( 'Events for %s', 'tribe-events-calendar' ), date_i18n( 'F Y', strtotime( tribe_get_month_view_date() ) ) );
		dttheme_custom_subtitle_section($title,'dt_themes');
	elseif( class_exists('TribeEventsPro') && tribe_is_week() ) :
		$title = sprintf( __('Events for week of %s', 'tribe-events-calendar-pro'), date_i18n( $date_format, strtotime( tribe_get_first_week_day($wp_query->get('start_date') ) ) ));
		dttheme_custom_subtitle_section($title,'dt_themes');
	elseif( class_exists('TribeEventsPro') && tribe_is_day() ) :
		$title = __( 'Events for', 'tribe-events-calendar-pro' ) . ' ' . date_i18n( $date_format, strtotime( $wp_query->get('start_date') ) );
		dttheme_custom_subtitle_section($title,'dt_themes');
	elseif( class_exists('TribeEventsPro') && (tribe_is_map() || tribe_is_photo()) ) :
		if( tribe_is_past() ) {
			$title = __( 'Past Events', 'tribe-events-calendar-pro' );
			dttheme_custom_subtitle_section($title,'dt_themes');
		} else {
			$title = __( 'Upcoming Events', 'tribe-events-calendar-pro' );
			dttheme_custom_subtitle_section($title,'dt_themes');
		}
	elseif( class_exists('the-events-calendar') && tribe_is_list_view() ) :
		$title = __('Upcoming Events', 'dt_themes');
		dttheme_custom_subtitle_section($title,'dt_themes');
	elseif( class_exists('the-events-calendar') && is_single() ) :
		$title = $wp_query->post->post_title;
		dttheme_custom_subtitle_section($title,'dt_themes');
	elseif( class_exists('the-events-calendar') && tribe_is_month() && is_tax() ) : 
		$term_slug = $wp_query->query_vars['tribe_events_cat'];
		$term = get_term_by('slug', $term_slug, 'tribe_events_cat');
		$name = $term->name;
		$title = $name;
		dttheme_custom_subtitle_section($title,'dt_themes');
	elseif( is_tag() ) : 
		$name = 'Tag Archives';
		$title = $name;
		dttheme_custom_subtitle_section($title,'dt_themes');
	#events end
	elseif( is_404() ):
	  	dttheme_custom_subtitle_section(__('LOST','dt_themes'));
	endif; ?>