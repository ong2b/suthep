<?php
/** My Recent Posts Widget
  * Objective:
  *		1.To list out posts
**/
class MY_Recent_Posts extends WP_Widget {
	#1.constructor
	function MY_Recent_Posts() {
		$widget_options = array("classname"=>'dt-widget_recent_entries', 'description'=>'To list out posts');
		parent::__construct(false,IAMD_THEME_NAME.__(' Posts','dt_themes'),$widget_options);
	}
	
	#2.widget input form in back-end
	function form($instance) {
		$instance = wp_parse_args( (array) $instance,array('title'=>'','_post_count'=>'','_post_categories'=>'','_enabled_image'=>'','_excerpt'=>'') );
		$title = strip_tags($instance['title']);
		$_post_count = !empty($instance['_post_count']) ? strip_tags($instance['_post_count']) : "-1";
	    $_post_categories = !empty($instance['_post_categories']) ? $instance['_post_categories']: array();?>
        
        <!-- Form -->
        <p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:','dt_themes');?> 
		   <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" 
            type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
           
	    <p><label for="<?php echo esc_attr($this->get_field_id('_post_categories')); ?>">
			<?php _e('Choose the categories you want to display (multiple selection possible)','dt_themes');?></label>
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('_post_categories').'[]');?>" 
            	name="<?php echo esc_attr($this->get_field_name('_post_categories').'[]');?>" multiple="multiple">
                <option value=""><?php _e("Select",'dt_themes');?></option>
           	<?php $cats = get_categories( 'orderby=name&hide_empty=0' );
			foreach ($cats as $cat):
				$id = esc_attr($cat->term_id);
				$selected = ( in_array($id,$_post_categories)) ? 'selected="selected"' : '';
				$title = esc_html($cat->name);
				echo "<option value='{$id}' {$selected}>{$title}</option>";
			endforeach;?>
            </select></p>

	    <p><label for="<?php echo esc_attr($this->get_field_id('_post_count')); ?>"><?php _e('No.of posts to show:','dt_themes');?></label>
		   <input id="<?php echo esc_attr($this->get_field_id('_post_count')); ?>" name="<?php echo esc_attr($this->get_field_name('_post_count')); ?>" value="<?php echo esc_attr($_post_count)?>" /></p>
        <!-- Form end-->
<?php
	}
	#3.processes & saves the twitter widget option
	function update( $new_instance,$old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['_post_count'] = strip_tags($new_instance['_post_count']);
		$instance['_post_categories'] = $new_instance['_post_categories'];
	return $instance;
	}
	
	#4.output in front-end
	function widget($args, $instance) {
		extract($args);
		global $post;
		$title = empty($instance['title']) ?	'' : strip_tags($instance['title']);
		$_post_count = (int) $instance['_post_count'];
		$_post_categories = "";
		if(!empty($instance['_post_categories']))
			$_post_categories = is_array($instance['_post_categories']) ? implode(",",$instance['_post_categories']) : $instance['_post_categories'];
		$arg = empty($_post_categories) ? "posts_per_page={$_post_count}":"cat={$_post_categories}&posts_per_page={$_post_count}";


		echo !empty( $before_widget ) ? $before_widget : '';
 	    echo !empty($title) ? $before_title.$title.$after_title : '';
		echo "<div class='recent-posts-widget'><ul>";		
			 $the_query = new WP_Query($arg);
			 if( $the_query->have_posts()) :
			 while($the_query->have_posts()):
			 	$the_query->the_post();
				$pid = get_the_ID();
				$link = get_permalink();
				$author_id = get_the_author_meta('ID');
				$title = ( strlen(get_the_title()) > 40 ) ? substr(get_the_title(),0,35)."..." :get_the_title();
				echo "<li>";
					  $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'recent-posts-widget',false);
					  $image = ( $image != false)? $image[0]:"http://placehold.it/60x60&amp;text=Image";
				  echo "<a href='".get_permalink()."' class='thumb'>";
				  echo "	<img src='$image' alt='{$title}'/>";
				  echo "</a>";
				  echo '	<div class="entry-title">';
				  
				  echo "		<h6><a href='".get_permalink()."'>{$title}</a></h6>";
				  echo '	</div>';
				  echo '	<div class="entry-meta">';
				  echo '		<div class="date">';
				  echo '			<span class="fa fa-calendar-o"></span> '.get_the_time('d',$pid)." ".get_the_time('M',$pid)." ".get_the_time('Y',$pid);
				  echo '		</div>';
				  echo '	</div>';
				echo "</li>";
			 endwhile;
			 else:
			 	echo "<li><h4>".__('No Posts found','dt_themes')."</h4></li>";
			 endif;
	 	echo "</ul></div>";			 
		echo !empty( $after_widget ) ? $after_widget : '';
	}
}?>