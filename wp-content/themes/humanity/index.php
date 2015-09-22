<?php get_header();?>

<?php $pageid = get_option('page_for_posts');
		if($pageid > 0) {
			
			$tpl_default_settings = get_post_meta( $pageid, '_tpl_default_settings', TRUE );
			$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
			$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
		
		} else {
			
			$page_layout 	= dttheme_option('specialty','category-archives-layout');
			$page_layout 	= !empty($page_layout) ? $page_layout : "content-full-width";
		
		}

		$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
		$sidebar_class = "";

	#TO SET PAGE LAYOUT
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
	endif; ?>
    
<section id="primary" class="<?php echo esc_attr($page_layout);?>">
	<?php
		$post_class = $columns = "";
		
		if($pageid > 0) {
			
			$post_class = $show_sidebar ? " dt-sc-blog-full-width-content" : " dt-sc-blog-full-width-content";
			
		} else {
	
			$post_layout = dttheme_option('specialty','category-archives-post-layout'); 
			$post_layout = !empty($post_layout) ? $post_layout : "post-thumb";
				
			switch($post_layout):
			case 'post-thumb':
				$post_class = $show_sidebar ? " dt-sc-blog-full-width-content" : " dt-sc-blog-full-width-content";
			break;
			endswitch;
		
		}
		if( have_posts() ):
					$i = 1;
					while( have_posts() ):
						the_post();
						$temp_class = "";
						if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
						if($i == $columns) $i = 1; else $i = $i + 1;
						$format = get_post_format(  get_the_id() );?>
						<?php  get_template_part( 'framework/loops/content');?>
		<?php 		endwhile;
				endif; ?>   
                 
<?php if((get_next_posts_link()) || get_previous_posts_link()){ ?>
        <!-- **Pagination** -->
        <div class="pagination-wrapper">
          <div class="pagination">
            <div class="prev-post"><?php previous_posts_link( __( 'Prev', 'dt_themes' ) );?></div>
            <?php echo dttheme_pagination();?>
            <div class="next-post"><?php next_posts_link( __( 'Next', 'dt_themes' ) );?></div>
          </div>
        </div><!-- **Pagination** -->
<?php } ?>
	</section>
<?php if($show_sidebar): ?>
          <!-- **Secondary Section ** -->
          <section id="secondary" class="<?php echo esc_attr( $sidebar_class ); ?>">
    		<?php get_sidebar();?>      
          </section><!-- **Secondary Section - End** -->
<?php endif; ?>

<?php get_footer();?>