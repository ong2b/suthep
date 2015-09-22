<?php /*Template Name: Blog Template*/
get_header();
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
			$post_thumbnail = 'blog-thumb-with-sidebar';
		break;

		case 'with-right-sidebar':
			$page_layout = "page-with-sidebar page-with-right-sidebar";
			$show_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-right-sidebar";
			$post_thumbnail = 'blog-thumb-with-sidebar';
		break;

		case 'content-full-width':
		default:
			$page_layout = "content-full-width";
			$post_thumbnail = 'blog-thumb';
		break;
	}
	if ( $show_sidebar ):
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;?>

	<section id="primary" class="<?php echo esc_attr($page_layout);?>"><?php
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				get_template_part( 'framework/loops/content', 'page' );
			endwhile;
		endif;?>

		<div class="dt-sc-clear"></div>

		<!-- Blog Template Loop Start -->
		<?php $post_layout = isset( $tpl_default_settings['blog-post-layout'] ) ? $tpl_default_settings['blog-post-layout'] : "post-thumb";
		$post_per_page = isset($tpl_default_settings['blog-post-per-page']) ? $tpl_default_settings['blog-post-per-page'] : -1;
		$categories = isset($tpl_default_settings['blog-post-exclude-categories']) ? array_filter($tpl_default_settings['blog-post-exclude-categories']) : NULL;

		$hide_date_meta = isset( $tpl_default_settings['disable-date-info'] ) ? " hidden " : "";
		$hide_comment_meta = isset( $tpl_default_settings['disable-comment-info'] ) ? " hidden " : " comments ";
		$hide_author_meta = isset( $tpl_default_settings['disable-author-info'] ) ? " hidden " : "";
		$hide_category_meta = isset( $tpl_default_settings['disable-category-info'] ) ? " hidden " : "";
		$hide_tag_meta = isset( $tpl_default_settings['disable-tag-info'] ) ? " hidden " : "tags";

		$container_class = "";
		$columns = "";

		switch($post_layout):
			case 'post-thumb':
				$post_class = $show_sidebar ? " dt-sc-blog-full-width-content" : " dt-sc-blog-full-width-content";
			break;
		endswitch;

		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) { 
			$paged = get_query_var('page');
		} else { 
			$paged = 1;
		}

		if ( empty( $categories ) ):
			$args = array( 'paged'=>$paged, 'posts_per_page'=>$post_per_page, 'post_type'=> 'post' );
		else:
			$exclude_cats = array_unique( $categories );
			$args = array( 'paged'=>$paged, 'posts_per_page'=>$post_per_page, 'category__not_in'=>$exclude_cats, 'post_type'=>'post' );
		endif;

		#Blog Holder Start
		echo "<div class='tpl-blog-holder {$container_class} '>";
		$the_query = new WP_Query($args);
		if( $the_query->have_posts() ):
			while( $the_query->have_posts() ):
				$the_query->the_post();

				$post_meta = get_post_meta(get_the_id() ,'_dt_post_settings',TRUE);
				$post_meta = is_array($post_meta) ? $post_meta : array();?>

				<div class="<?php echo esc_attr($post_class);?>">
					<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry'); ?>>
                        	
                     	<div class="entry-thumb">
							<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
								if( has_post_thumbnail() ): 
									the_post_thumbnail($post_thumbnail);
								else:?>
									<img src="http://placehold.it/420x420&amp;text=Image" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" /><?php
								endif;?>
							</a>
                     	</div>
                                
                     	<div class="entry-details">
                        	<div class="entry-metadata">
                                <p class="date <?php echo esc_attr($hide_date_meta);?>"> <span> <?php _e('Posted on','dt_themes'); ?> </span> <br />
                                <?php echo get_the_date('d')." ";
                                	  echo strtoupper(get_the_date('M'))." ";
                                	  echo get_the_date('Y'); ?>
                                </p>
                                
                                <p class="author <?php echo esc_attr($hide_author_meta);?>"> <span> <?php _e('Author','dt_themes'); ?> </span> <br />
									<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
								</p>
                                    
                                <p class="<?php echo esc_attr($hide_category_meta);?> category"> <span> <?php _e('Categories','dt_themes'); ?> </span> <br />  <?php the_category(', '); ?></p>

								<?php the_tags("<p class='tags {$hide_tag_meta}'> <span> Tags </span> <br />",', ',"</p>");?>
                                    
                                <p class="<?php echo esc_attr($hide_comment_meta);?>"> <span> <?php _e('Comments','dt_themes'); echo " </span> <br /> ";
									comments_popup_link( __('0','dt_themes'), __('1','dt_themes'), __('%','dt_themes'),'',__('<span class="fa fa-comments-o"> </span>','dt_themes'));?></p> 
                        	</div>
							
                        	<div class="entry-title"><?php 
								if(is_sticky()): ?>
                                	<div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div><?php 
								endif; ?>
								<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s'), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
							</div>
                                
                            <div class="entry-body"><?php
								if( array_key_exists('blog-post-excerpt-length',$tpl_default_settings) ):?>
									<?php echo dttheme_excerpt($tpl_default_settings['blog-post-excerpt-length']);?><?php
								endif;?>
                            </div>
								
                            <div class="entry-footer">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>" class="read-more"> 
									<?php _e('More','dt_themes');?> <span class="fa fa-caret-right"></span> </a>
                            </div>
                     	</div>
                            
					</article>
				</div><?php 
			endwhile;
		endif;	
		echo '</div>'; #Blog Holder End ?>

		<?php if($post_per_page != '-1'): ?>
        <?php if((get_next_posts_link()) || get_previous_posts_link()){ ?>
                <!-- **Pagination** -->
                <div class="pagination-wrapper">
                  <div class="pagination">
                    <div class="prev-post"><?php previous_posts_link(__('<span class="fa fa-angle-left"></span> Previous','dt_themes'));?></div>
                    <?php echo dttheme_pagination();?>
                    <div class="next-post"><?php next_posts_link( __('Next <span class="fa fa-angle-right"></span>','dt_themes') );?></div>
                  </div>
                </div><!-- **Pagination** -->
        <?php } ?>
		<?php endif; ?>

		<!-- Blog Template Loop End -->
	</section><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( );?></section><?php
		endif;
	endif;
 get_footer(); ?>