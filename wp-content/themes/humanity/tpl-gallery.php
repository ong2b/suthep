<?php /*Template Name: Gallery Template*/?>
<?php get_header();

	$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
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
	}

	if ( $show_sidebar ):
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;?>

	<!-- ** Primary Section ** -->
	<section id="primary" class="<?php echo esc_attr($page_layout);?>"><?php
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				get_template_part( 'framework/loops/content', 'page' );
			endwhile;
		endif;?>

		<div class="dt-sc-clear"></div>
		<!-- Start loop to show Gallery Items -->
		<?php $post_layout	=	isset( $tpl_default_settings['gallery-post-layout'] ) ? $tpl_default_settings['gallery-post-layout'] : "one-half-column";
			$post_per_page	=	$tpl_default_settings['gallery-post-per-page'];

			#TO SET POST LAYOUT
			switch($post_layout):

					case 'one-half-column';
						$post_class = $show_sidebar ? "gallery column dt-sc-one-half with-sidebar " : "gallery column dt-sc-one-half ";
						$columns = 2;
						$post_thumbnail = 'gallery-twocolumns';
					break;
					
					case 'one-third-column':
						$post_class = $show_sidebar ? "gallery column dt-sc-one-third with-sidebar " : "gallery column dt-sc-one-third ";
						$columns = 3;
						$post_thumbnail = 'gallery-three-four-columns';
					break;

					case 'one-fourth-column':
						$post_class = $show_sidebar ? "gallery column dt-sc-one-fourth with-sidebar " : "gallery column dt-sc-one-fourth";
						$columns = 4;
						$post_thumbnail = 'gallery-three-four-columns';
					break;
			endswitch;

			$categories =	isset($tpl_default_settings['gallery-categories']) ? array_filter($tpl_default_settings['gallery-categories']) : "";
			if(empty($categories)):
				$categories = get_categories('taxonomy=dt_gallery_entries&hide_empty=1');
			else:
				$args = array('taxonomy'=>'dt_gallery_entries','hide_empty'=>1,'include'=>$categories);
				$categories = get_categories($args);
			endif;

			if( sizeof($categories) > 1 ) :
				if( array_key_exists("filter",$tpl_default_settings) && (!empty($categories)) ):
					$post_class .= " all-sort ";?>
						<div class="sorting-container">
							<a href="#" class="active-sort" title="" data-filter=".all-sort"><?php _e('All','dt_themes');?></a><?php 
								foreach( $categories as $category ): ?>
									<a href='#' data-filter=".<?php echo esc_attr($category->category_nicename);?>-sort"><?php echo esc_attr($category->cat_name);?></a><?php
								endforeach;?>	
						</div><?php
				endif;
			endif;

			#Pagination
			if ( get_query_var('paged') ) { 
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) {
				$paged = get_query_var('page');
			} else { 
				$paged = 1;
			}?>
			<!-- Gallery Items Container Start-->
			<div class="gallery-container"><?php
				$args = array();
				$categories = array_filter($tpl_default_settings['gallery-categories']);

				if(is_array($categories) && !empty($categories)):
					$terms = $categories;
					$args = array( 
						'orderby' => 'ID',
						'order' => 'ASC',
						'paged' => $paged,
						'posts_per_page' => $post_per_page,
						'tax_query' => array( array( 'taxonomy'=>'dt_gallery_entries', 'field'=>'id', 'operator'=>'IN', 'terms'=>$terms ) ) );
				else:
					$args = array( 'paged' => $paged ,'posts_per_page' => $post_per_page,'post_type' => 'dt_galleries' );
				endif;

				$the_query = new WP_Query($args);
				if( $the_query->have_posts() ):
					$i = 1;
					while( $the_query->have_posts() ):
						$the_query->the_post();

						$the_id = get_the_ID();

						$temp_class = "";
						if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
						if($i == $columns) $i = 1; else $i = $i + 1;

                        $sort = " ";
                        if( array_key_exists("filter",$tpl_default_settings) ):
                        	$item_categories = get_the_terms( $the_id, 'dt_gallery_entries' );
                        	if(is_object($item_categories) || is_array($item_categories)):
                        		foreach ($item_categories as $category):
                        			$sort .= $category->slug.'-sort ';
                        		endforeach;
                            endif;
                         endif;						

						$gallery_item_meta = get_post_meta($the_id,'_gallery_settings',TRUE);
						$gallery_item_meta = is_array($gallery_item_meta) ? $gallery_item_meta  : array();?>

                        <div id="<?php echo "gallery-id-{$the_id}"; ?>" class="<?php echo esc_attr($temp_class.$sort);?>">
							<div class="gallery-thumb"><?php
								$popup = "http://placehold.it/576x432&text=DesignThemes";

								if( array_key_exists('items_name', $gallery_item_meta) ) {
									$item =  $gallery_item_meta['items_name'][0];
                        			$popup = $gallery_item_meta['items'][0];

                        			if( "video" === $item ) {
                        				$items = array_diff( $gallery_item_meta['items_name'] , array("video") );
                        				if( !empty($items) ) {
                        					echo "<img src='".$gallery_item_meta['items'][key($items)]."' alt='".$item."' />";	
                        				} else {
                        					echo '<img src="http://placehold.it/576x432&text=DesignThemes" alt="'.$item.'">';
                        				}
                        			} else {
											$attachment_id = dt_get_attachment_id_from_url($gallery_item_meta['items'][0]);
											$img_attributes = wp_get_attachment_image_src($attachment_id, $post_thumbnail);
											echo "<img src='".$img_attributes[0]."' width='".$img_attributes[1]."' height='".$img_attributes[2]."' alt='".$item."'/>";
                        			}
                        		} else {
                        			echo "<img src='{$popup}'/>";
                        		}?>
                        		<div class="image-overlay">
                                        <a class="zoom" href="<?php echo esc_url($popup);?>" data-gal="prettyPhoto[gallery]" title=""> <span class="fa fa-eye"> </span> </a>                                		
                        				<a class="link" href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"> <span class="fa fa-mail-forward"></span></a>
                        		</div>
							</div><?php	# Show Details ?>
									<div class="gallery-detail">
                                      <div class="gallery-title">
                                        <h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5>
                                        <p><?php echo get_the_term_list($post->ID, 'dt_gallery_entries', ' ', ', ', ' '); ?></p>
                                       </div> 
							   <?php   if(dttheme_is_plugin_active('roses-like-this/likethis.php')): ?>
                                  <div class="views">
                                      <span><i class="fa fa-heart"></i><br /><?php printLikes($post->ID);?></span> 
                                  </div><?php 
                              endif;?>    
                                    </div><?php #Show Details End?>
						</div><?php
					endwhile;
				endif;
				?>
			</div><!-- Gallery Items Container End-->
			<!-- End loop to show Gallery Items -->

	<?php 	if($post_per_page != '-1'): ?>
              <!-- **Pagination** -->
              <div class="pagination-wrapper">
                <div class="pagination">
                  <div class="prev-post"><?php previous_posts_link(__('<span class="fa fa-angle-left"></span> Previous','dt_themes'));?></div>
                  <?php echo dttheme_pagination();?>
                  <div class="next-post"><?php next_posts_link( __('Next <span class="fa fa-angle-right"></span>','dt_themes') );?></div>
                </div>
              </div><!-- **Pagination** -->
	<?php   endif; ?>
        
	</section><!-- ** Primary Section End ** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;?>
<?php get_footer(); ?>