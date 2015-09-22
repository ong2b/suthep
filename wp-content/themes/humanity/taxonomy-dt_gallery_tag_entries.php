<?php get_header();
	$page_layout  = dttheme_option( 'specialty', 'gallery-archives-layout' );
	$page_layout  = !empty( $page_layout ) ? $page_layout : "content-full-width";
	$post_layout = dttheme_option( 'specialty', 'gallery-archives-post-layout' );
	$post_layout  = !empty( $post_layout ) ? $post_layout : "one-half-column";

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

	if ( $show_sidebar ):
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;?>
			<section id="primary" class="<?php echo esc_attr($page_layout);?>">
				<!-- Gallery Items Container Start-->
				<div class="gallery-container"><?php
					if( have_posts() ):
						$i = 1;
						while( have_posts() ):
							the_post();
							$the_id = get_the_ID();

							$temp_class = "";
							if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
							if($i == $columns) $i = 1; else $i = $i + 1;

							$gallery_item_meta = get_post_meta($the_id,'_gallery_settings',TRUE);
							$gallery_item_meta = is_array($gallery_item_meta) ? $gallery_item_meta  : array();?>
							<div id="<?php echo "dt_galleries-{$the_id}";?>" class="<?php echo "{$temp_class} with-space";?>">
								<div class="gallery-thumb"><?php
									$popup = "http://placehold.it/576x432&text=DesignThemes";
	
									if( array_key_exists('items_name', $gallery_item_meta) ) {
										$item =  $gallery_item_meta['items_name'][0];
										$popup = $gallery_item_meta['items'][0];
	
										if( "video" === $item ) {
											$items = array_diff( $gallery_item_meta['items_name'] , array("video") );
											if( !empty($items) ) {
												echo "<img src='".$gallery_item_meta['items'][key($items)]."' alt='' />";	
											} else {
												echo '<img src="http://placehold.it/576x432&text=DesignThemes" alt="">';
											}
										} else {
												$attachment_id = dt_get_attachment_id_from_url($gallery_item_meta['items'][0]);
												$img_attributes = wp_get_attachment_image_src($attachment_id, $post_thumbnail);
												echo "<img src='".$img_attributes[0]."' width='".$img_attributes[1]."' height='".$img_attributes[2]."' alt='".$item."' />";
										}
									} else {
										echo "<img src='{$popup}'/>";
									}?>
									<div class="image-overlay">
                                    		<a class="zoom" href="<?php echo esc_url($popup);?>" data-gal="prettyPhoto[gallery]" title=""> <span class="fa fa-eye"> </span> </a>
											<a class="link" href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"> 
												<span class="fa fa-mail-forward"></span>
											</a>
											<a class="close-overlay hidden">  </a>
									</div>
								</div>
								<?php	# Show Details ?>
								<div class="gallery-detail">
									<div class="gallery-title">
										<h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a>						</h5> <p><?php echo get_the_term_list($post->ID, 'dt_gallery_entries', ' ', ', ', ' '); ?></p>
									</div>
							<?php   if(dttheme_is_plugin_active('roses-like-this/likethis.php')): ?>
                                    <div class="views">
                                        <span><i class="fa fa-heart"></i><br /><?php printLikes($post->ID);?></span> 
                                    </div><?php 
                                endif;?>
								</div><?php #Show Details End?>
                            
							</div><?php
						endwhile;
					endif;?>
				</div><!-- Gallery Items Container End-->
                
                <!-- **Pagination** --><?php 
				$prev_link = get_previous_posts_link();
				$next_link = get_next_posts_link();
				if ($prev_link || $next_link) { ?>
                    <div class="pagination-wrapper">
                      <div class="pagination">
                        <div class="prev-post"><?php previous_posts_link(__('<span class="fa fa-angle-left"></span> Previous','dt_themes'));?></div>
                        <?php echo dttheme_pagination();?>
                        <div class="next-post"><?php next_posts_link( __('Next <span class="fa fa-angle-right"></span>','dt_themes') );?></div>
                      </div>
                    </div><?php } ?>
                <!-- **Pagination** -->
                
			</section><!-- **Primary - End** --><?php

			if ( $show_sidebar ):
				if ( $show_right_sidebar ): ?>
					<!-- Secondary Right -->
					<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
				endif;
			endif;
get_footer();?>