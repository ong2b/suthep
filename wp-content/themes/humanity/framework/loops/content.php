<?php
$pageid = get_option('page_for_posts');
		if($pageid > 0) {
			
			$tpl_default_settings = get_post_meta( $pageid, '_tpl_default_settings', TRUE );
			$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
			$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
		
		} else {
			
			$page_layout 	= dttheme_option('specialty','category-archives-layout');
			$page_layout 	= !empty($page_layout) ? $page_layout : "content-full-width";
		
		}

	if( $page_layout == '' || $page_layout = ''){
		$post_thumbnail = 'blog-thumb-with-sidebar';
	}else{
		$post_thumbnail = 'blog-thumb';
	}
?>
<div class="dt-sc-blog-full-width-content">
	<article id="post-<?php the_ID();?>" <?php post_class(array('blog-entry','blog-single-entry'));?>><?php 
	$tpl_default_settings = get_post_meta( $post->ID, '_dt_post_settings', TRUE );
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array(); ?>

		<div class="entry-thumb">										  
			<a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
				if( has_post_thumbnail() ): 
					the_post_thumbnail($post_thumbnail); 
			  	else:?>
					<img src="http://placehold.it/420x420&amp;text=Image" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" /><?php
				endif;?></a>
		</div>
                                    
		<div class="entry-details">
			<div class="entry-metadata">
            	<p class="date"> <span> <?php _e('Posted on','dt_themes'); ?> </span> <br />
					<?php echo get_the_date('d')." ";
                     echo strtoupper(get_the_date('M'))." ";
                     echo get_the_date('Y');?>
            	</p>
                                        
                <p class="author"> <span> <?php _e('Author','dt_themes'); ?> </span> <br />
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
                </p>
                                            
                <p class="category"> <span> <?php _e('Categories','dt_themes'); ?> </span> <br /> <?php the_category(', '); ?></p>

                <?php the_tags("<p class='tags'> <span> Tags </span> <br />",', ',"</p>");?>
                
                <p> <span> <?php _e('Comments','dt_themes'); echo " </span> <br /> ";
                comments_popup_link( __('0','dt_themes'), __('1','dt_themes'), __('%','dt_themes'),'',__('<span class="fa fa-comments-o"> </span>','dt_themes'));?>
                </p> 
			</div>
                                
			<div class="entry-title"><?php 
				if(is_sticky()): ?>
					<div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div><?php 
				endif; ?>
                <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s'), the_title_attribute( 'echo=0' ) ); ?>">
                    <?php the_title(); ?></a>
                </h2>
            </div>
        
            <div class="entry-body">
                <div class="entry-body"><?php echo dttheme_excerpt(15); ?></div>
            </div>
        
            <div class="entry-footer">
                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>" class="read-more"> 
                    <?php _e('More','dt_themes');?> <span class="fa fa-caret-right"></span> </a>
            </div>
		</div>
	</article>
</div>