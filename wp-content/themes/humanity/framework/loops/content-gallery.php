<?php $gallery_settings = get_post_meta( $post->ID, '_gallery_settings', TRUE );
$gallery_settings = is_array( $gallery_settings) ? $gallery_settings : array();?>

<!-- #dt-galleries-<?php the_ID(); ?> -->
<article id="dt_galleries-<?php the_ID(); ?>" <?php post_class('dt-gallery-single'); ?>>
	<div class="dt-gallery-single-inner">
		<div class="dt-gallery-single-slider-wrapper">

			<!-- Slider -->
			<ul class="dt-gallery-single-slider"><?php
				if( array_key_exists("items_name",$gallery_settings) ) {
					foreach( $gallery_settings["items_name"] as $key => $item ) {
						$current_item = $gallery_settings["items"][$key];

						if( "video" === $item ) {
							echo "<li>".wp_oembed_get( $current_item )."</li>";
						} else {
							echo "<li> <img src='{$current_item}' alt='' title='' /></li>";
						}
					}
				}
			?></ul><!-- Slider Ends -->

			<!-- Pager -->
			<div id="bx-pager"><?php
				if( array_key_exists("items_name",$gallery_settings) ) {
					foreach( $gallery_settings["items_name"] as $key => $item ) {
						$current_item = $gallery_settings["items"][$key];
						echo "<a data-slide-index='{$key}' href=''>";
						if( "video" === $item ) {
							echo "<img src='".get_template_directory_uri()."/images/video-thumbnail.jpg' alt='' title='' />";
						} else {
							echo "<img src='{$current_item}' alt='' title='' />";
						}
						echo "</a>";
					}
				}
			?></div><!-- Pager Ends -->
		</div>

		<div class="dt-gallery-single-details"><?php 
			the_content();

			if(array_key_exists("show-social-share",$gallery_settings)):
				echo '<div class="dt-gallery-share">';
				dttheme_social_bookmarks('sb-portfolio');
				echo '</div>';
			endif; ?>
		</div>
	</div>
</article>

<div class="post-nav-container">
	<div class="post-prev-link"><?php previous_post_link('%link','<i class="fa fa-caret-left"> </i> '.__('Prev','dt_themes'));?></div>
    <div class="post-next-link"><?php next_post_link('%link', __('Next','dt_themes').'<i class="fa fa-caret-right"> </i>');?></div>
</div>

<?php edit_post_link( __( 'Edit','dt_themes')); ?>
<div class="clear"></div>