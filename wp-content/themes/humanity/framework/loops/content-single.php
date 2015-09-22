<?php $tpl_default_settings = get_post_meta( $post->ID, '_dt_post_settings', TRUE );
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

	$hide_date_meta = isset( $tpl_default_settings['disable-date-info'] ) ? " hidden " : "";
	$hide_comment_meta = isset( $tpl_default_settings['disable-comment-info'] ) ? " hidden " : " comments ";
	$hide_author_meta = isset( $tpl_default_settings['disable-author-info'] ) ? " hidden " : "";
	$hide_author_bio = isset( $tpl_default_settings['disable-author-bio'] ) ? " hidden " : "";
	$hide_category_meta = isset( $tpl_default_settings['disable-category-info'] ) ? " hidden " : "";
	$hide_tag_meta = isset( $tpl_default_settings['disable-tag-info'] ) ? " hidden " : "tags";
	$featured_img = isset( $tpl_default_settings['disable-featured-image'] ) ? false : true; ?>

<div class="blog-single-entry">
  <article id="post-<?php the_ID();?>" <?php post_class(array('blog-entry','blog-single-entry'));?>>
	<div class="blog-entry-inner"><?php
    
  		if($featured_img): ?>
            <div class="entry-thumb">
                <a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
                     if( has_post_thumbnail() ): 
                        the_post_thumbnail('single-blog'); 
                     else:?>
                        <img src="http://placehold.it/1170x730&amp;text=Image" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" /><?php
                     endif;?></a>
            </div><?php
  		endif; ?>

		<div class="entry-details">
      		
            <div class="entry-metadata">
              <p class="date <?php echo esc_attr($hide_date_meta);?>"> <span> <?php _e('Posted on','dt_themes'); ?> </span><br />
              <?php 
			  	 echo get_the_date('d')." ";
                 echo strtoupper(get_the_date('M'))." ";
                 echo get_the_date('Y');?>
              </p>
          
              <p class="author <?php echo esc_attr($hide_author_meta);?>"> <span> <?php _e('Author','dt_themes'); ?> </span><br />
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
              </p>
              
              <p class="<?php echo esc_attr($hide_category_meta);?> category"> <span> <?php _e('Categories','dt_themes'); ?> </span> <br /><?php the_category(', '); ?></p>

              <?php the_tags("<p class='tags {$hide_tag_meta}'> <span> Tags </span> <br />",', ',"</p>");?>
              
              <p class="<?php echo esc_attr($hide_comment_meta);?>"> <span> <?php _e('Comments','dt_themes'); echo " </span> <br /> ";
              comments_popup_link( __('0','dt_themes'), __('1','dt_themes'), __('%','dt_themes'),'',__('<span class="fa fa-comments-o"> </span> <br />','dt_themes'));?>
              </p> 
            </div>
                                      
            <div class="entry-title"><?php 
				if(is_sticky()): ?>
					<div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div><?php 
				endif; ?>
			    <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s'), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
            </div>
                                
            <div class="entry-body"><?php
				the_content(); ?>
			</div>
            
		</div>
        <!-- Entery Details -->
	</div>
  </article>
 
<?php	wp_link_pages( array('before'=>'<div class="page-link">', 'after'=>'</div>', 'link_before'=>'<span>', 'link_after'=>'</span>', 'next_or_number'=>'number',	'pagelink' => '%', 'echo' => 1 ) );

				echo '<div class="social-bookmark">';
					show_fblike('post');
					show_googleplus('post');
					show_twitter('post');
					show_stumbleupon('post');
					show_linkedin('post');
					show_delicious('post');
					show_pintrest('post');
					show_digg('post');
				echo '</div>';

				echo '<div class="social-share">';
					dttheme_social_bookmarks('sb-post');
	            echo '</div>';
				
				if( empty($hide_author_bio) ):
					echo '<div class="about-author">';
					echo '<h2>'.__('About Author','dt_themes').'</h2>';
					echo '  <div class="author-details">';
					echo '		<div class="author-thumb">'.get_avatar( get_the_author_meta('user_email'), 450 ).'</div>';
								$name = get_the_author_meta('first_name');
								$name = $name.' '.get_the_author_meta('last_name');
								$name = !empty($name) ? $name : get_the_author();
								$role = get_the_author_meta('roles');
								foreach( $role as $author_role ){
									$author_role = '<span>'.$author_role.'</span>';
								}
					echo "		<div class='author-description'>";
					echo "			<h5>{$name}</h5>";
					echo 			$author_role;				
					echo 			get_the_author_meta('description');
					echo '		</div>';
					echo '  </div>';
					echo '</div>';
					echo '<div class="dt-sc-hr-invisible-small"></div>';
				 endif;
				
	            edit_post_link( __( ' Edit ','dt_themes' ) );?>
	        
</div>
<?php $dttheme_options = get_option(IAMD_THEME_SETTINGS);
	$dttheme_general = $dttheme_options['general'];

	$globally_disable_post_comment =  array_key_exists('global-post-comment',$dttheme_general) ? true : false; 

	if( ($globally_disable_post_comment) && (! isset($tpl_default_settings['disable-comment'])) ):?>
		<!-- **Comment Entries** -->   	
		<div class="commententries">
			<?php  comments_template('', true); ?>
        </div><!-- **Comment Entries - End** -->
<?php endif;?>