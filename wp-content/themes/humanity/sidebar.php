<?php
wp_reset_postdata();
global $post;

if( is_page() ):
	dttheme_show_sidebar('page',$post->ID);

elseif( is_singular('post') ):
	dttheme_show_sidebar('page',$post->ID);

elseif( is_singular('dt_galleries')):
	dttheme_show_sidebar('dt_galleries',$post->ID);
	
elseif( is_post_type_archive('product') ):
	dttheme_show_sidebar('page',get_option('woocommerce_shop_page_id'));

elseif( is_singular('product') ):

	$disable = dttheme_option('woo',"disable-shop-everywhere-sidebar-in-product-detail");
	if( is_null($disable) )
		if( is_active_sidebar('shop-everywhere-sidebar') ) : dynamic_sidebar('shop-everywhere-sidebar'); endif;

	if( is_active_sidebar('product-detail-sidebar') ) : dynamic_sidebar('product-detail-sidebar'); endif;

elseif( is_tax('dt_gallery_entries') || is_tax('dt_gallery_tag_entries') ):	
	$disable = dttheme_option('specialty',"disable-everywhere-sidebar-for-gallery-archives");
	if( is_null($disable) )
		if( is_active_sidebar('display-everywhere-sidebar') ): dynamic_sidebar(('display-everywhere-sidebar')); endif;

	if( is_active_sidebar('custom-post-gallery-archives') ): dynamic_sidebar('custom-post-gallery-archives'); endif;

elseif( is_author() ):
	$disable = dttheme_option('specialty',"disable-everywhere-sidebar-for-author-archives");
	if( is_null($disable) )
		if( is_active_sidebar('display-everywhere-sidebar') ): dynamic_sidebar('display-everywhere-sidebar'); endif;

	if( is_active_sidebar('author-archive-sidebar') ): dynamic_sidebar('author-archive-sidebar'); endif;

elseif( is_search() ):
	$disable = dttheme_option('specialty',"disable-everywhere-sidebar-for-search");
	if( is_null($disable) )
		if( is_active_sidebar('display-everywhere-sidebar') ): dynamic_sidebar('display-everywhere-sidebar'); endif;

	if( is_active_sidebar('search-sidebar') ) : dynamic_sidebar('search-sidebar'); endif;

elseif( is_404() ):
	$disable = dttheme_option('specialty',"disable-everywhere-sidebar-for-404");
	if( is_null($disable) )
		if( is_active_sidebar('display-everywhere-sidebar') ): dynamic_sidebar('display-everywhere-sidebar'); endif;

	if( is_active_sidebar('not-found-404-sidebar') ): dynamic_sidebar('not-found-404-sidebar'); endif;

elseif( class_exists('woocommerce') && is_product_category() ):
	$disable = dttheme_option('woo',"disable-shop-everywhere-sidebar-in-product-category-archive");
	if( is_null($disable) )
		if( is_active_sidebar('shop-everywhere-sidebar') ): dynamic_sidebar('shop-everywhere-sidebar'); endif;

	if( is_active_sidebar('product-category-archive-sidebar') ) : dynamic_sidebar('product-category-archive-sidebar'); endif;

elseif( class_exists('woocommerce') && is_product_tag() ):
	$disable = dttheme_option('woo',"disable-shop-everywhere-sidebar-in-product-tag-archive");
	if( is_null($disable) )
		if( is_active_sidebar('shop-everywhere-sidebar') ): dynamic_sidebar('shop-everywhere-sidebar'); endif;

	if( is_active_sidebar('product-tag-archive-sidebar') ) : dynamic_sidebar('product-tag-archive-sidebar'); endif;
	
elseif( is_tag() ):
	$disable = dttheme_option('specialty',"disable-everywhere-sidebar-for-tag-archives");
	if( is_null($disable) )
		if( is_active_sidebar('display-everywhere-sidebar') ) : dynamic_sidebar('display-everywhere-sidebar'); endif;

	if( is_active_sidebar('post-tags-archive-sidebar') ) : dynamic_sidebar('post-tags-archive-sidebar'); endif;

elseif( is_archive() ):
	$disable = dttheme_option('specialty',"disable-everywhere-sidebar-for-category-archives");
	if( is_null($disable) )
		if( is_active_sidebar('display-everywhere-sidebar') ) : dynamic_sidebar('display-everywhere-sidebar'); endif;

	if( is_active_sidebar('post-category-archive-sidebar') ) : dynamic_sidebar('post-category-archive-sidebar'); endif;

elseif( ('tribe_events'== get_post_type() || is_singular('tribe_events') || is_singular('tribe_venue') || is_singular('tribe_organizer') || in_array('tribe-filter-live', get_body_class())) and !is_search() ):
		if( is_active_sidebar('events-everywhere-sidebar') ) : dynamic_sidebar('events-everywhere-sidebar');
		else:
			if( is_active_sidebar('display-everywhere-sidebar') ) : dynamic_sidebar('display-everywhere-sidebar'); endif;
		endif;

else:
	if( is_active_sidebar('display-everywhere-sidebar') ) : dynamic_sidebar('display-everywhere-sidebar'); endif;
endif;?>