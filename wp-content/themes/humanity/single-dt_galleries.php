<?php get_header();
	  global $dt_allowed_html_tags;
	  $portfolio_settings = get_post_meta ( $post->ID, '_gallery_settings', TRUE );
	  $portfolio_settings = is_array ( $portfolio_settings ) ? $portfolio_settings : array ();
	  
	  $layout = isset( $portfolio_settings['layout'] ) ? $portfolio_settings['layout'] : 'single-portfloio-layout-one';
	  $container_start =  $container_middle =  $container_end = "";
	  if( $layout === "single-portfloio-layout-two" ) {
		  $container_start	 =	'<div class="column dt-sc-two-third first gallery-slider-container">';
		  $container_middle	 =	'</div>';
		  $container_middle  .=	'<div class="column dt-sc-one-third last">'; 
		  $container_end	 =	'</div>';
		  
	  }elseif( $layout === "single-portfloio-layout-three" ){
		  $container_start	 =	'<div class="column dt-sc-two-third right-gallery first gallery-slider-container">';
		  $container_middle	 =	'</div>';
		  $container_middle  .=	'<div class="column dt-sc-one-third last">'; 
		  $container_end	 =	'</div>';
	  }?>
      <!-- **Primary Section** -->
      <section id="primary" class="content-full-width"><?php
	  	if( have_posts() ):
			while( have_posts() ):
				the_post();?>
                <!-- #post-<?php the_ID()?> starts -->
                <article id="post-<?php the_ID(); ?>" <?php post_class('gallery-single'); ?>><?php 
				echo !empty($container_start) ? $container_start : ''; ?>
                	<ul class="portfolio-slider"><?php
						if( array_key_exists("items_name",$portfolio_settings) ) {
							foreach( $portfolio_settings["items_name"] as $key => $item ){
								$current_item = $portfolio_settings["items"][$key];
								
								if( "video" === $item ) {
									$width = 940;
									$height = 500; 	
									
									if ( strpos($current_item,"vimeo") ) : #For Vimeo
										$url = substr( strrchr($current_item,"/"),1);
										echo "<li><iframe src='http://player.vimeo.com/video/{$url}' width='{$width}' height='{$height}' frameborder='0'></iframe></li>";
										
									elseif( strpos($current_item,"?v=") ): #For Youtube
										$url = substr( strrchr($current_item,"="),1);
										echo "<li><iframe src='http://www.youtube.com/embed/{$url}?wmode=opaque' width='{$width}' height='{$height}' frameborder='0'></iframe></li>";
									endif;
								} else {
									echo "<li> <img src='{$current_item}' alt='' title='' /></li>";
								}
							}
						} else {
							echo "<li> <img src='http://placehold.it/1170x878&text=Portfolio' alt='' title=''/></li>";
						}?></ul>
                        
				  <?php if (array_key_exists ( "items", $portfolio_settings ) && ( count($portfolio_settings["items"]) > 1) ) {

                              echo '<div id="portfolio-thumb">';
                              foreach( $portfolio_settings["items_name"] as $k => $v ){
                                  $current_item = $portfolio_settings["items_thumbnail"][$k];
                                  if( $v === "video" ) {
                                      $url = IAMD_BASE_URL."images/property-video-placeholder.png";
                                      echo "<a data-slide-index='{$k}'><img src='{$url}' alt='' title=''/></a>";
                                  } else {
                                      echo "<a data-slide-index='{$k}'> <img src='{$current_item}' alt='' title='' /></a>";
                                  }	
                              }
                              echo '</div>';
                          }?>
          <?php echo !empty($container_middle) ? $container_middle : '';
		  
		  		  echo '<div class="project-details">';				
					/*echo "<p><span>";
					_e("Categories","dt_themes");
					echo "</span>";
					
					the_terms($post->ID,'dt_gallery_entries',' ',', ','');
					echo '</p>';
					
					if(has_term('','dt_gallery_tag_entries','')){
						echo "<p><span>";
						_e("Tags","dt_themes");
						echo "</span>";
					
						the_terms($post->ID,'dt_gallery_tag_entries',' ',', ','');
						echo '</p>';
					}*/
					
					if( array_key_exists("location-info",$portfolio_settings) ):
						echo "<p><span>".__("Location Info","dt_themes")."</span>";
						echo do_shortcode($portfolio_settings['location-info']);
						echo '</p>';


					endif;
					
					echo "<span>";
					_e("Description","dt_themes");
					echo "</span>";
					the_content();
					
					if(array_key_exists("show-social-share",$portfolio_settings)):
						echo '<div class="portfolio-share">';
						dttheme_social_bookmarks('sb-portfolio');
						echo '</div>';
					endif;
					
					edit_post_link( __( 'Edit','dt_themes'));
				  echo '</div>';
				echo !empty($container_end) ? $container_end : ''; ?>
				
				<!-- **Post Nav** -->
                <div class="bx-controls-direction">
                	<div class="bx-prev"><?php previous_post_link('%link',__('Prev','dt_themes'));?> </div>
                    <div class="bx-next"><?php next_post_link('%link',__('Next','dt_themes'));?></div>
                </div><!-- **Post Nav - End** -->
                <div class="dt-sc-hr-invisible-small"></div>
				
          </article><!-- #post-<?php the_ID()?> Ends -->
     <?php  endwhile;
		endif;?>
     <?php if(array_key_exists("show-related-items",$portfolio_settings)): ?>
     <!-- Related Posts Start-->
     	<div class="clear"> </div>
	    <div class="dt-sc-hr-invisible"> </div>
    	<h2 class="dt-sc-title"><span><?php _e('Related Galleries','dt_themes');?></span></h2><?php 
			$category_ids = array();
			
			$input  = wp_get_object_terms( $post->ID, 'dt_gallery_entries');
			
			foreach($input as $category) $category_ids[] = $category->term_id;
			
			$args = array(	'orderby' => 'rand',
					'showposts' => '3' ,
					'post__not_in' => array($post->ID),
					'tax_query' => array( array( 'taxonomy'=>'dt_gallery_entries', 'field'=>'id', 'operator'=>'IN', 'terms'=>$category_ids )));
					
			$the_query = new WP_Query($args);
			if( $the_query->have_posts() ):
				$count = 1;
				while( $the_query->have_posts() ):
					$the_query->the_post();
					$the_id = get_the_ID();
					
					$portfolio_item_meta = get_post_meta($the_id,'_gallery_settings',TRUE);
					$portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();
					
					$first = ( $count === 1 ) ? " first" : "";?>
                    <div class="gallery column dt-sc-one-third animate <?php echo esc_attr($first);?>" data-animation="fadeInUp" data-delay="300">
						<div class="gallery-thumb"><?php

						$popup = '';
						if( array_key_exists("items_name",$portfolio_item_meta) ):
							$item =  $portfolio_item_meta['items_name'][0];
							$image = $popup = "";	
							
							if( "video" === $item ):
								$image = "http://placehold.it/1170x878&text=Video%20Portfolio";
								$popup = $portfolio_item_meta['items'][0];
							else:
								$image = $popup = $portfolio_item_meta['items'][0];
							endif;
							
						else:
							$image = "http://placehold.it/1170x878/999999/&text=Add%20Image%20/%20Video%20%20to%20Portfolio";
						endif;?>
                        
                        	<img src="<?php echo esc_attr( $image ); ?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>" alt="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"/>
                            
                            <div class="image-overlay">
                        				<a class="zoom" href="<?php echo esc_url($popup);?>" data-gal="prettyPhoto[gallery]" title=""> <span class="fa fa-eye"> </span> </a>
                                        <a class="link" href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"> 
                                        	<span class="fa fa-mail-forward"></span>
                                        </a>
                        				<a class="close-overlay hidden">  </a>
                        		</div>
                       </div> <!-- . gallery Thumb -->
                       <?php	# Show Details ?>
									<div class="gallery-detail">
										<div class="gallery-title">
											<h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a>						</h5> <p><?php echo get_the_term_list($post->ID, 'dt_gallery_entries', ' ', ', ', ' '); ?></p>
                                        </div>
								<?php   if(dttheme_is_plugin_active('roses-like-this/likethis.php')): ?>
                                <div class="views">
                                    <span><i class="fa fa-heart"></i><br /> <?php printLikes($post->ID);?></span> 
                                </div><?php 
                            endif;?>
                                    </div><?php #Show Details End?>
                       
                    </div>   
<?php 			$count++;
				endwhile;
			endif;
			?>
     <!-- Related Posts End-->
     <?php endif; ?>   
        </section><!-- **Primary Section** -->
<?php get_footer();?>