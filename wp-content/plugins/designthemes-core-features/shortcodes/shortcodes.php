<?php
class DTCoreShortcodesDefination {
	
	function __construct() {
		
		/* Accordion Shortcode */
		add_shortcode ( "dt_sc_accordion_group", array (
				$this,
				"dt_sc_accordion_group" 
		) );

		/* Button Shortcode */
		add_shortcode ( "dt_sc_button", array (
				$this,
				"dt_sc_button" 
		) );

		/* BlockQuotes Shortcode */
		add_shortcode ( "dt_sc_blockquote", array (
				$this,
				"dt_sc_blockquote" 
		) );

		/* Callout Box Shortcode */
		add_shortcode ( "dt_sc_callout_box", array (
				$this,
				"dt_sc_callout_box"
		) );
		
		/* Callout Box With Icon Shortcode */
		add_shortcode ( "dt_sc_callout_box_with_icon", array (
				$this,
				"dt_sc_callout_box_with_icon"
		) );

		/* Columns Shortcode */
		add_shortcode ( "dt_sc_full_width_content", array ( 
				$this, 
				"dt_sc_columns" 
		) );
		
		add_shortcode ( "dt_sc_one_half", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_third", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fourth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_third", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fourth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_fifth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_five_sixth", array (
				$this,
				"dt_sc_columns" 
		) );

		/* Column with inner */
		add_shortcode ( "dt_sc_one_half_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_third_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fourth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_one_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_third_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fourth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_two_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_four_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_three_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_five_sixth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		add_shortcode ( "dt_sc_four_fifth_inner", array (
				$this,
				"dt_sc_columns" 
		) );

		/* Contact Information */

		#Email
		add_shortcode ( "dt_sc_email", array (
				$this,
				"dt_sc_email"
		) );

		add_shortcode( "dt_sc_contact", array (
				$this,
				"dt_sc_contact"
		) );

		add_shortcode( "dt_sc_address", array(
				$this,
				"dt_sc_address"
		) );
		/* Contact Information End */

		
		/* Clients Carousel Shortcode */
		add_shortcode ( "dt_sc_carousel", array (
				$this,
				"dt_sc_carousel"
		) );

		/* Donutchart Start */
		add_shortcode ( "dt_sc_donutchart_small", array ( 
				$this,
				"dt_sc_donutchart"
		) );
		
		add_shortcode ( "dt_sc_donutchart_medium", array ( 
				$this,
				"dt_sc_donutchart"
		) );

		add_shortcode ( "dt_sc_donutchart_large", array ( 
				$this,
				"dt_sc_donutchart"
		) );
		/* Donutchart End */
		
		/* Dividers */
		
		/* Clear Shortcode */
		add_shortcode ( "dt_sc_clear", array ( 
				$this,
				"dt_sc_clear"
		) );
		
		/* HR With Border */
		add_shortcode( "dt_sc_hr_border", array (
				$this,
				"dt_sc_hr_border"
		) );
		
		add_shortcode ( "dt_sc_hr_top", array (
				$this,
				"dt_sc_hr_top"
		) );

		add_shortcode ( "dt_sc_hr", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible", array (
				$this,
				"dt_sc_dividers" 
		) );
	
		add_shortcode ( "dt_sc_hr_invisible_very_small", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible_small", array (
				$this,
				"dt_sc_dividers" 
		) );

		add_shortcode ( "dt_sc_hr_invisible_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		add_shortcode ( "dt_sc_hr_invisible_very_large", array (		
				$this,		
				"dt_sc_dividers" 		
		) );
		
		/* Dividers End */
		
		/* Icon Boxes Shortcode */
		add_shortcode ( "dt_sc_icon_box", array (
				$this,
				"dt_sc_icon_box" 
		) );
		/* Icon Boxes Shortcode End*/

		/* Code Shortcode */
		add_shortcode ( "dt_sc_code", array (
				$this,
				"dt_sc_code" 
		) );

		/* Ordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ol", array (
				$this,
				"dt_sc_fancy_ol" 
		) );
		
		/* Unordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ul", array (
				$this,
				"dt_sc_fancy_ul" 
		) );

		/* Pricing Table */
		add_shortcode ( "dt_sc_pricing_table", array (
				$this,
				"dt_sc_pricing_table" 
		) );

		/* Pricing Table Item */
		add_shortcode ( "dt_sc_pricing_table_item", array (
				$this,
				"dt_sc_pricing_table_item" 
		) );


		/* Progress Bar Shortcode */
		add_shortcode ( "dt_sc_progressbar", array (
				$this,
				"dt_sc_progressbar" 
		) );

		/* Tabs */
		add_shortcode ( "dt_sc_tab", array (
				$this,
				"dt_sc_tab" 
		) );

		add_shortcode ( "dt_sc_tabs", array (
				$this,
				"dt_sc_tabs" 
		) );

		add_shortcode ( "dt_sc_tabs_framed", array (
				$this,
				"dt_sc_tabs_framed" 
		) );

		/* Team Shortcode */
		add_shortcode ( "dt_sc_team", array (
				$this,
				"dt_sc_team" 
		) );

		/* Testimonial Shortcode */
		add_shortcode ( "dt_sc_testimonial", array (
				$this,
				"dt_sc_testimonial" 
		) );
		
		/* Testimonial Carousel Shortcode */
		add_shortcode ( "dt_sc_testimonial_carousel", array (
				$this,
				"dt_sc_testimonial_carousel"
		) );

		/* Toggle Shortcode */
		add_shortcode ( "dt_sc_toggle", array (
				$this,
				"dt_sc_toggle" 
		) );

		/* Toogle Framed Shortcode */
		add_shortcode ( "dt_sc_toggle_framed", array (
				$this,
				"dt_sc_toggle_framed" 
		) );
		
		/* Titles Box Shortcode */
		add_shortcode ( "dt_sc_titled_box", array (
				$this,
				"dt_sc_titled_box" 
		) );
		
		/* Tooltip Shortcode */
		add_shortcode ( "dt_sc_tooltip", array (
				$this,
				"dt_sc_tooltip"
		) );
		
		/* PullQuotes Shortcode */
		add_shortcode ( "dt_sc_pullquote", array (
				$this,
				"dt_sc_pullquote" 
		) );

		/* Post & Recent Post Shortcode */
		add_shortcode("dt_sc_post", array ( 
			$this,
			"dt_sc_post"
		) );

		add_shortcode("dt_sc_recent_post", array ( 
			$this,
			"dt_sc_recent_post"
		) );

		/* Unordered List Short code */
		add_shortcode("dt_sc_ul", array(
			$this,
			"dt_sc_ul"
		) );

		add_shortcode("dt_sc_li", array(
			$this,
			"dt_sc_li"
		) );
		/* Unordered List Short code */

		/* Custom Post Type: Gallery */
		add_shortcode( "dt_sc_gallery_item", array(
			$this,
			"dt_sc_gallery_item"
		) );

		add_shortcode( "dt_sc_recent_gallery_items", array(
			$this,
			"dt_sc_recent_gallery_items"
		) );

		add_shortcode( "dt_sc_gallery_items_from_category", array(
			$this,
			"dt_sc_gallery_items_from_category"
		) );
		/* Custom Post Type: Gallery */

		add_shortcode( "dt_sc_goto", array(
			$this,
			"dt_sc_goto"
		) );
		
		/* h1- h6 tag  */
		add_shortcode ( "dt_sc_h1", array (
				$this,
				"tag" 
		) );
		
		add_shortcode ( "dt_sc_h2", array (
				$this,
				"tag" 
		) );
		
		add_shortcode ( "dt_sc_h3", array (
				$this,
				"tag" 
		) );
		
		add_shortcode ( "dt_sc_h4", array (
				$this,
				"tag" 
		) );
		
		add_shortcode ( "dt_sc_h5", array (
				$this,
				"tag" 
		) );
		
		add_shortcode ( "dt_sc_h6", array (
				$this,
				"tag" 
		) );
		
		/* Curved Title */
		add_shortcode ( "dt_sc_curved_title", array (
				$this,
				"dt_sc_curved_title" 
		) );

		
		/* h1- h6 fullwidth title  */
		add_shortcode ( "dt_sc_h1_title_with_icon", array (
				$this,
				"dt_sc_title_with_icon" 
		) );
		
		add_shortcode ( "dt_sc_h2_title_with_icon", array (
				$this,
				"dt_sc_title_with_icon" 
		) );
		
		add_shortcode ( "dt_sc_h3_title_with_icon", array (
				$this,
				"dt_sc_title_with_icon" 
		) );
		
		add_shortcode ( "dt_sc_h4_title_with_icon", array (
				$this,
				"dt_sc_title_with_icon" 
		) );
		
		add_shortcode ( "dt_sc_h5_title_with_icon", array (
				$this,
				"dt_sc_title_with_icon" 
		) );
		
		add_shortcode ( "dt_sc_h6_title_with_icon", array (
				$this,
				"dt_sc_title_with_icon" 
		) );
		
		/* Fullwidth Section Shortcode */
		add_shortcode ( "dt_sc_fullwidth_section", array (
				$this,
				"dt_sc_fullwidth_section" 
		) );
		
		/* Upcoming Events Carousel */
		add_shortcode("dt_sc_upcoming_events_carousel", array(
				$this,
				"dt_sc_upcoming_events_carousel"
		) );
		
		/* Page Builder Utils 
		
		/* Resizeable Column */
		add_shortcode ( "dt_sc_resizable", array( 
				$this,
				"dt_sc_resizable" 
		) );

		add_shortcode ( "dt_sc_resizable_inner", array( 
				$this, "dt_sc_resizable" 
		) ); 
		
		add_shortcode ( "dt_sc_widgets", array ( 
				$this, "dt_sc_widgets" 
		) );
		/* Page Builder Utils */
		
		/* Social icons */
		add_shortcode("dt_sc_social", array (
				$this, "dt_sc_social"
		) );
		
	}
	
	
	/**
	 *
	 * @param string $content        	
	 * @return string
	 */
	function dtShortcodeHelper($content = null) {
		$content = do_shortcode ( shortcode_unautop ( $content ) );
		$content = preg_replace ( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = preg_replace ( '#<br \/>#', '', $content );
		return trim ( $content );
	}
	
	
	/**
	 *
	 * @param string $dir        	
	 * @return multitype:
	 */
	function dtListImages($dir = null) {
		$images = array ();
		$icon_types = array (
				'jpg',
				'jpeg',
				'gif',
				'png' 
		);
		
		if (is_dir ( $dir )) {
			$handle = opendir ( $dir );
			while ( false !== ($dirname = readdir ( $handle )) ) {
				
				if ($dirname != "." && $dirname != "..") {
					$parts = explode ( '.', $dirname );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					
					if (in_array ( $ext, $icon_types )) {
						$option = $parts [count ( $parts ) - 2];
						$images [$dirname] = str_replace ( ' ', '', $option );
					}
				}
			}
			closedir ( $handle );
		}
		
		return $images;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_accordion_group($attrs, $content = null) {
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = str_replace ( "<h5 class='dt-sc-toggle", "<h5 class='dt-sc-toggle-accordion ", $out );
		$out = "<div class='dt-sc-toggle-set'>{$out}</div>";
		return $out;
	}
	

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_button($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'size' => '',
				'link' => '#',
				'type' => '',
				'icon' => '',
				'target' => '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '',
				'class' =>'',
				'data_animation_delay' => '',
				'data_animation' => ''
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = "$content";

		if( ($type == "with-icon") && !empty($icon)  ){
			$content = $content."<i class='fa {$icon}'> </i>"; 
		}
		
		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		
		$target = empty($target) ? "target='_blank'" : "target='{$target}' ";
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		if(preg_match('#^{{#', $link) === 1) {
			$link =  str_replace ( '{{', '[', $link );
			$link =  str_replace ( '}}', '/]', $link );
			$link = do_shortcode($link);
		}else{
			$link = esc_url ( $link );
		}
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$out = "<a href='{$link}' {$target} class='dt-sc-button {$size} {$variation} {$class} {$data_animation_class} {$type}' {$data_animation} {$data_animation_delay} {$style}>{$content}</a>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_blockquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",	
				'align' => '',
				'variation' => '',
				'textcolor' => '',
				'cite'=> ''		
		), $attrs ) );
		
		$class = array();
		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
		if( $variation)
			$class[] = ' ' . $variation;
		
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = ! empty ( $content ) ? "<q>{$content}</q>" : "";
		
		$cite = ! empty ( $cite ) ? '&ndash; ' .$cite : "";
		$cite = !empty( $cite ) ? "<cite>$cite</cite>" : "";
		
		$style = ( $textcolor ) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join( '', array_unique( $class ) );

		$out = "<blockquote class='{$type} {$class}' {$style}>{$content} {$cite}</blockquote>";
		return $out;
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_callout_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",
				'link' => '#',
				'button_text'=> __('Purchase Now','dt_themes'),
				'variation' => '',
				'class' => '',
				'target' => ''
		), $attrs ) );

		$attribute = " class='dt-sc-callout-box {$type} {$class}' ";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<div {$attribute}>";
		$out .= ( !empty( $title ) ) ? "<h2>{$title}</h2>" : "";
		
			$out .= '<div class="column dt-sc-four-fifth first">';
			$out .= $content;
			$out .= '</div>';
			
			$out .= '<div class="column dt-sc-one-fifth">';
			$out .= ( !empty($link) ) ? "<a href='{$link}' class='dt-sc-button medium {$variation}' target='{$target}'>{$button_text}</a>" : "";
			$out .= '</div>';			

		$out .= "</div>";
		
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_callout_box_with_icon($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => "type1",
				'icon' => '',
				'link' => '#',
				'button_text'=> __('Purchase Now','dt_themes'),
				'variation' => '',
				'class' => '',
				'target' => ''
		), $attrs ) );

		$attribute = " class='dt-sc-callout-box  with-icon {$type} {$class}' ";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<div {$attribute}>";
		$out .= ( !empty( $title ) ) ? "<h2>{$title}</h2>" : "";
		
			$out .= '<div class="column dt-sc-four-fifth first">';
			$out .= '	<div class="icon">';
			$out .= '		<span class="fa '.$icon.'"></span>';
			$out .= '	</div>';
			$out .= $content;
			$out .= '</div>';
			
			$out .= '<div class="column dt-sc-one-fifth">';
			$out .= ( !empty($link) ) ? "<a href='{$link}' class='dt-sc-button medium {$variation}' target='{$target}'>{$button_text}</a>" : "";
			$out .= '</div>';			
		
		$out .= "</div>";
		
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_columns($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'id' => '',
				'class' => '',
				'style' => '' ,
				'type' => '',
				'data_animation' => '',
				'data_animation_class' => '',
				'data_animation_delay' => ''
		), $attrs ) );
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$shortcodename = str_replace ( "-inner", "", $shortcodename );
		
		$id = ($id != '') ? " id = '{$id}'" : '';
		$style = !empty( $style ) ? " style='{$style}' ": "";

		if( trim($type) == 'type2' ):
			$type = "no-space";
		elseif( trim($type) == 'type1'):
			$type = "space";
		else:
			$type = "";
		endif;	
		
		$data_animation_class = !(empty ($data_animation)) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation_delay) && !empty($data_animation) ) ? "data-delay='{$data_animation_delay}'" : " " ;
		$data_animation = !(empty ($data_animation) ) ? "data-animation='{$data_animation}'" : " ";
		

		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<div {$id} class='column {$shortcodename} {$class} {$type} {$first} {$data_animation_class}' {$data_animation} {$data_animation_delay} {$style} >{$content}</div>";
		return $out;
	}

	/* Contact Information */
	/**
	 * Shortcode : Email id
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	 function dt_sc_email($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'icon' => '',
				'emailid' => ''
		), $attrs ) );

		$out = '<div class="dt-sc-contact-info">';
		$out .= !empty( $icon ) ? "<div class='icon'><i class='fa {$icon}'></i></div>" : "";
		$out .= "<span>{$title}</span>";
		$out .= ( !empty($emailid) ) ? "<a href='mailto:$emailid'>{$emailid}</a>" : "";
		$out .= '</div>';
		return $out;
	 }

	function dt_sc_contact( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'title' =>'',
			'detail' =>'',
			'icon'=>''
		), $attrs));

		$out  = '<div class="dt-sc-contact-info">';
		$out .= !empty( $icon ) ? "<div class='icon'><i class='fa {$icon}'></i></div>" : "";
		$out .= !empty( $title ) ? "<span>{$title}</span>" : "";
		$out .= !empty( $detail ) ? "<p>{$detail}</p>" : "";
		$out .= '</div>';
		return $out;
	} 

	function dt_sc_address( $attrs, $content = null ){
		extract( shortcode_atts( array(
			'icon'=>'',
			'title'=>'',
			'line1' => '',
			'line2' => '',
			'line3' => '',
			'line4' => ''
		), $attrs));

		$out  = '<div class="dt-sc-contact-info address">';
		$out .= !empty( $icon ) ? "<div class='icon'><i class='fa {$icon}'></i></div>" : "";
		$out .= !empty( $title ) ? "<span> {$title} </span>" : "";
		$out .= ( !empty($line1) ) ? $line1 : "";
		$out .= ( !empty($line2) ) ? "<br>$line2" : "";
		$out .= ( !empty($line3) ) ? "<br>$line3" : "";
		$out .= ( !empty($line4) ) ? "<br>$line4" : "";
		$out .= '</div>';
		return $out;
	} 
	/* Contact Information End*/


	/* Client Carousel */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_carousel($attrs, $content = null) {
			
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace( '<ul>', "<ul class='dt-sc-sponsor-carousel'>", $content );
		
		
		$out = '<div class="dt-sc-sponsor-carousel-wrapper">';
		$out .= ' <div class="dt-sc-partner-carousel-wrapper caroufredsel_wrapper">';
		$out .=     $content;
		$out .= '   <div class="carousel-arrows">';
		$out .= '	  <a href="" class="sponsor-prev-arrow"> <span class="fa fa-chevron-left"> </span> </a>';
		$out .= '	  <a href="" class="sponsor-next-arrow"> <span class="fa fa-chevron-right"> </span> </a>';
		$out .= '   </div>';
		$out .= ' </div>';
		$out .= '</div>';
		return $out;
		
	}
	/* Client Carousel End*/
	
	/* Dividers */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_clear($attrs, $content = null) {
		return '<div class="dt-sc-clear"></div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_hr_border($attrs, $content = null) {
		return '<div class="dt-sc-hr-border"></div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_donutchart($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'title' => '',
				'bgcolor' => '',
				'fgcolor' => '',
				'percent' =>'30'
		), $attrs ) );
		
		$size = "100";
		$size = ( "dt_sc_donutchart_medium" === $shortcodename ) ? "200" : $size;
		$size = ( "dt_sc_donutchart_large" === $shortcodename ) ? "300" : $size;
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$out = "<div class='{$shortcodename}'>";
		$out .= "<div class='dt-sc-donutchart' data-size='{$size}' data-percent='{$percent}' data-bgcolor='{$bgcolor}' data-fgcolor='$fgcolor'></div>";
		$out .= ( empty($title) ) ? $out : "<h5 class='dt-sc-donutchart-title'>{$title}</h5>";
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_dividers($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'class' => '',
				'top' => '' 
		), $attrs ) );
		
		if ("dt_sc_hr" === $shortcodename || "dt_sc_hr_medium" === $shortcodename || "dt_sc_hr_large" === $shortcodename) {
			
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			
			$out = "<div class='{$shortcodename} {$class}'>";
			
			if ((isset ( $attrs [0] ) && trim ( $attrs [0] == 'top' ))) {
				
				$out = "<div class='{$shortcodename} top {$class}'>";
				$out .= "<a href='#top' class='scrollTop'><span class='fa fa-angle-up'></span> " . __ ( "top", 'dt_themes' ) . "</a>";
			}
			
			$out .= "</div>";
		} else {
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			$out = "<div class='{$shortcodename}  {$class}'></div>";
		}
		return $out;
	}
	
	function dt_sc_hr_top($attrs, $content = null, $shortcodename="" ){
		$out = do_shortcode("[dt_sc_hr top]");
		return $out;
	}
	/* Dividers End*/
	
	/* Icon Boxes Shortcode */
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_icon_box($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'type' => '',
				'fontawesome_icon' => '',
				'custom_icon' => '',
				'inner_image'=>'',
				'title' => '',
				'link' => '',
				'button_type' => '',
				'button_link' => '',
				'button_size' => '',
				'button_target' => '',
				'button_text' => '',
				'data_animation' => '',
				'data_delay' => ''
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$data_animate_class = ( $data_animation != '' && $data_animation != 'None' ) ? "animate" : " ";
		
		$data_animation_delay = ( !empty($data_animation) && !empty($data_delay) && ( $data_animation != 'None') ) ? "data-delay='{$data_delay}'": " ";
		$data_animation = ( !empty($data_animation)  ) ? "data-animation='{$data_animation}'": " ";
		
		$out =  "<div class='dt-sc-ico-content {$type}'>";
		if( !empty($fontawesome_icon) && empty($custom_icon) ){
		   $out .= "<div class='icon {$data_animate_class}' {$data_animation} {$data_animation_delay}> <span class='fa fa-{$fontawesome_icon}'> </span> </div>";
		
		}elseif( !empty($custom_icon) ){
		   $out .= "<div class='icon {$data_animate_class}' {$data_animation}  {$data_delay}> <span> <img src='{$custom_icon}' alt=''/></span> </div>";	
		}
		
		if( !empty($link) ) :
			$out .= empty( $title ) ? $out : "<h4><a href='{$link}' target='_blank'> {$title} </a></h4>";
		else:
			$out .= empty( $title ) ? $out : "<h4>{$title}</h4>";
		endif;
		
		$out .= $content;
		if( $type == " type3" ):
		  $out .= do_shortcode('[dt_sc_button type="'.$button_type.'" link="'.$button_link.'" size="'.$button_size.'" target="'.$button_target.'"]'.$button_text.'[/dt_sc_button]');
		endif;	

		$out .= "</div>";
		return $out;
	}
	/* Icon Boxes Short code End*/

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_code($attrs, $content = null) {
		$array = array (
				'[' => '&#91;',
				']' => '&#93;',
				'/' => '&#47;',
				'<' => '&#60;',
				'>' => '&#62;',
				'<br />' => '&nbsp;' 
		);
		$content = strtr ( $content, $array );
		$out = "<pre>{$content}</pre>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ol($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ol>', "<ol class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		$content = str_replace ( '<li>', '<li><span>', $content );
		$content = str_replace ( '</li>', '</span></li>', $content );
		return $content;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ul($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', "<ul class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		return $content;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table($attrs, $content = null) {
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		return "<div class='dt-sc-pricing-table'>" . $content . '</div>';
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'variation' =>'',
				'heading' => __ ( "Gift", 'dt_themes' ),
				'currency' => '$',
				'price' => '',
				'per' =>'',
				"button_link" => "#",
				"button_text" => __ ( "Buy Now", 'dt_themes' ),
				"button_size" => "small",
				"button_color" => "",
				"title" =>'', 
				"donate_now_text" => '',
				"data_animation" => "",
				"data_animation_delay" => ""
		), $attrs ) );
		
		$selected = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'selected' )) ? 'selected' : '';

		$button_link= do_shortcode($button_link);
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '</ol>', '</ul>', $content );
		
		$data_animation_class = ( !empty($data_animation) && $data_animation !='None' ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) && $data_animation !='None' ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$out = "<div class='dt-sc-pr-tb-col {$variation} {$data_animation_class} $selected' {$data_animation} {$data_animation_delay}>";
		$out .= '	<div class="dt-sc-tb-header">';
		$out .=  		!empty($title) ? '<div class="dt-sc-tb-title"><h5>'.$title.'</h5></div>' : "";
		$out .=  		!empty($price) ? '<div class="dt-sc-price">'.$currency.$price.'<span>'.$per.'</span> </div>' : "";
		$out .=  		!empty($donate_now_text) ? '<div class="dt-sc-guarantee"> <p>'.$donate_now_text.'</p> </div>' : "";
		$out .= '	</div>';
		
		$out .= 	$content;
		$out .= '	<div class="dt-sc-buy-now">';

					if(preg_match('#^{{#', $button_link) === 1) {
						$button_link =  str_replace ( '{{', '[', $button_link );
						$button_link =  str_replace ( '}}', '/]', $button_link );
						$button_link = do_shortcode($button_link);
					}else{
						$button_link = esc_url ( $button_link );
					}
					$out .= do_shortcode ( "[dt_sc_button size='$button_size' link='$button_link' variation='$button_color']" . $button_text . "[/dt_sc_button]" );
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_progressbar($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'standard',
				'color' => '',
				'value' => '55'
		), $attrs ) );
		
		
		if( $type === 'standard' ){
			$type = "dt-sc-standard";
		}elseif( $type === 'progress-striped' ){
			$type = "dt-sc-progress-striped";
		}elseif( $type === 'progress-striped-active' ){
			$type = "dt-sc-progress-striped active";
		}

		$color = ! empty ( $color ) ? "style='background-color:$color;'" : "";

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = $content;
		$text_value = "<div class='dt-sc-bar-text'>{$content} <span> {$value} </span></div>";
		$value = "data-value='$value'";
		
		$out = "<div class='dt-sc-progress $type'>";
		$out .=  "<div class='dt-sc-bar' $color $value>";
		$out .= 	$text_value;
		$out .=  "</div>";
		$out .= '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tab($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' ,
				'number' => '',
		), $attrs ) );

		$number = !empty($number) ? "<span>{$number}</span>" : "";	
		$out = '<li class="tab_head"><a href="#">'.$number.$title. '</a></li><div class="tabs_content">' . DTCoreShortcodesDefination::dtShortcodeHelper ( $content ) . '</div>';
		return $out;
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'class' => '' 
		), $attrs ) );

		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);

		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}

		$out = '<ul class="dt-sc-tabs">';
			for($i = 0; $i < count($matches[0]); $i++) {
				$out .= '<li><a href="#">'.$matches[3][$i]['title'] . '</a></li>';
			}
		$out .= '</ul>';

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-content">' . DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
	return "<div class='dt-sc-tabs-container {$class}'>$out</div>";
	}


	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_framed($attrs, $content = null) {
		preg_match_all("/(.?)\[(dt_sc_tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/dt_sc_tab\])?(.?)/s", $content, $matches);
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts( $matches[3][$i] );
		}

		$out = "<ul class='dt-sc-tabs-frame'>";
		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<li><a href="#">'. $matches[3][$i]['title'] . '</a></li>';
		}
		$out .= "</ul>";

		for($i = 0; $i < count($matches[0]); $i++) {
			$out .= '<div class="dt-sc-tabs-frame-content">' . DTCoreShortcodesDefination::dtShortcodeHelper($matches[5][$i]) . '</div>';
		}		
		return "<div class='dt-sc-tabs-container'>$out</div>";		
	}

	/**
	 *
	 * @param unknown $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_team($attrs, $content = null) {
		$dir_path = plugin_dir_path ( __FILE__ ) . "images/sociables/";
		$sociables_icons = DTCoreShortcodesDefination::dtListImages ( $dir_path );
		
		$sociables = array_values ( $sociables_icons );
		$attributes = array (
				'name' => '',
				'image' => 'http://placehold.it/140',
				'role' => '',
				'alt' => __('Please specify image url','dt_themes'),
				'title' => __('Please specify image url','dt_themes'),
				'variation' => '',
				'custom_class' => ''
		);
		
		foreach ( $sociables as $sociable ) {
			$attributes [$sociable] = '';
		}
		
		extract ( shortcode_atts ( $attributes, $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$image = "<img src='{$image}' alt='{$alt}' title='{$title}' />";
		$name = empty ( $name ) ? "" : "<h4> {$name}</h4>";
		$role = empty ( $role ) ? "" : "<h6>{$role}</h6>";
		
		$s = "";
		$path = plugin_dir_url ( __FILE__ ) . "images/sociables/";
		foreach ( $sociables as $sociable ) {
			$img = array_search ( $sociable, $sociables_icons );
			$class = explode(".",$img);
			$class = $class[0];
			$s .= empty ( $$sociable ) ? "" : "<li class='{$class}'><a href='{$$sociable}' target='_blank'> <img src='{$path}{$img}' alt='{$sociable}'/> </a></li>";
		}
		
		$s = ! empty ( $s ) ? "<ul class='dt-sc-social-icons'>$s</ul>" : "";

		$out = "<div class='dt-sc-team-wrapper {$variation} {$custom_class}'>";
		$out .= " <div class='dt-sc-team'>";
		$out .= 	$name.$role;
		$out .= 		$image;
		$out .= 	$content . '</div>' . $s;
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_testimonial($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'name' => '',
				'role' => '',
				'image' => 'http://placehold.it/78',
				'custom_class' => '',
				'data_animation' => '',
				'data_animation_delay' => ''
		), $attrs ) );


		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = ! empty ( $content ) ? '<q> '.$content.' </q>' : "";
		$content = (! empty ( $content ) ) ? '<blockquote>'.$content.'</blockquote>' : "";

		$image = "<img src='{$image}' alt='{$name}' title='{$name}' />";
		$name = ! empty ( $name ) ? "<div class='author_details'> <p> - {$name} </p> <span> {$role} </span> </div>" : "";
		
		$data_animation_class = ( !empty($data_animation) ) ? "animate" : " ";
		$data_animation_delay = ( !empty($data_animation) && !empty($data_animation_delay) ) ? "data-delay='{$data_animation_delay}'" : " ";
		$data_animation = (!empty($data_animation)) ? "data-animation='{$data_animation}'" : " ";
		
		$image = "<div class='author {$data_animation_class} {$custom_class}' {$data_animation} {$data_animation_delay}>{$image}</div>";
		
		return "<div class='dt-sc-testimonial'>$image$content$name</div>";
	}
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_testimonial_carousel($attrs, $content = null) {

		extract ( shortcode_atts ( array ( 'class' => '' ), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace( '<ul>', "<ul class='dt-sc-testimonial-carousel'>", $content );
		
		
		$out = "<div class='dt-sc-testimonial-carousel-wrapper {$class}'>";
		$out .= $content;
		$out .= '<div class="carousel-arrows">';
		$out .= '	<a href="" class="testimonial-prev"> <span class="fa fa-chevron-left"> </span> </a>';
		$out .= '	<a href="" class="testimonial-next"> <span class="fa fa-chevron-right"> </span> </a>';
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = "<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '<div class="dt-sc-block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle_framed($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = ' <div class="dt-sc-toggle-frame">';
		$out .= "	<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '	<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '		<div class="block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= ' </div>';
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_titled_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '',
				'icon' => '',
				'type'	=> '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$type = (empty($type)) ? 'dt-sc-titled-box' :"dt-sc-$type";
		$variation = ( ( $variation ) && ( empty( $bgcolor ) ) ) ? ' ' . $variation : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		
		if($type == 'dt-sc-titled-box') :
			$icon = ( empty($icon) ) ? "" : "<span class='fa {$icon} '></span>";
			$title = "<h4 class='{$type}-title' {$style}> {$icon} {$title}</h4>";
			$out = "<div class='{$type} {$variation}'>";
			$out .= $title;
			$out .=	"<div class='{$type}-content'>{$content}</div>";
			$out .= "</div>";
		else :
			$out = "<div class='{$type}'>{$content}</div>";
		endif;
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tooltip($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type'	=> 'default',
				'tooltip' => '',
				'position' => 'top',
				'href' => '',
				'target' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$class  = "class=' ";
		$class .=  ( $type == "boxed" ) ? "dt-sc-boxed-tooltip" : "";
		$class .= " dt-sc-tooltip-{$position}'";
		
		$href = " href='{$href}' ";
		$title = " title = '{$tooltip}' ";
		$target = empty($target) ? 'target="_blank"' : "target='{$target}' ";
		
		$styles = array();
		if($bgcolor) $styles[] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if($textcolor) $styles[] = 'color:' . $textcolor . ';';
		$style = join('', array_unique( $styles ) );
		$style = !empty( $style ) ? ' style="' . $style . '"': '' ;
		$style = ( $type == "boxed" ) ? $style : "";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper( $content );
		$out = "<a {$href} {$title} {$class} {$style} {$target}>{$content}</a>";
		return $out;
	}

	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pullquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type'	=> 'pullquote1',
				'align' => '',
				'icon' => '',
				'textcolor' => '',
				'cite' => ''
		), $attrs ) );
		
		$class = array();
		if( isset($type) )
			$class[] = " dt-sc-{$type}";
			
		if( trim( $icon ) == 'yes' )
			$class[] = ' quotes';

		if( preg_match( '/left|right|center/', trim( $align ) ) )
			$class[] = ' align' . $align;
			
		$cite = ( $cite ) ? ' <cite>&ndash; ' . $cite .'</cite>' : '' ;
		
		$style = ( $textcolor ) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join( '', array_unique( $class ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<span class='{$class}' {$style}> {$content} {$cite}</span>";
		
		return $out;
	}

	function dt_sc_post( $attrs, $content="" ) {
		extract(shortcode_atts(array( 'id'=>'1', 'read_more_text'=>__('Read More','dt_themes'),'excerpt_length'=>10 , 'show_meta' =>'yes', 'featured_image' => '' ), $attrs));
		$p = get_post($id,'ARRAY_A');

		if( !is_null($p) ) {
			$link = get_permalink($id);
			$title = $p['post_title'];
			$author_id = $p['post_author'];
			$class = get_post_class("blog-entry no-border",$id);
			$class = implode(" ",$class);
			$class  = is_sticky($id) ? $class.' sticky': $class;
			$show_meta = strtolower($show_meta);
			$cats = "";
			$tags = "";
			
			if( $show_meta == 'yes'):
				$tags = "";
				$terms = wp_get_post_tags($id);

				$cats = "";
				$categories = get_the_category($id);
				if($categories){
					foreach($categories as $category) {
						$cats .= ' <a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>,';
					}
					
					$cats = trim($cats, ",");
					$cats = "<p><span>".__("Categories","dt_themes")."</span><br />".$cats."</p>";
				}
			endif;	


			$post_meta = get_post_meta($id ,'_dt_post_settings',TRUE);
			$post_meta = is_array($post_meta) ? $post_meta : array();

			if( !empty($terms) ){
				$tags .= '<p><span>'.__('Tags','dt_themes').'</span><br />';
				foreach( $terms as $term ) {
					$tags .= ' <a href="'.get_term_link($term->slug, 'post_tag').'"> '.$term->name.'</a>,';
				}
				$tags = substr($tags,0,-1).'</p>';
			}

			if((wp_count_comments($id)->approved) == 0)	$commtext = '0';
			else $commtext = wp_count_comments($id)->approved;


			$out  = "<article class='blog-entry {$class}'>";
			$out .= '	 <div class="entry-thumb">';
								$out .= "<a href='{$link}'>";
								if( has_post_thumbnail( $id )) {
									if($featured_image != '') { 
										$out .= get_the_post_thumbnail($id,$featured_image);	
									}else{
										$out .= get_the_post_thumbnail($id,"full");	
									}
								}else{
									$out .= '<img src="http://placehold.it/573x274&amp;text=Image" alt="'.$title.'"/>';
								}
								$out .= "</a>";
			$out .= '		</div>';
			
			$out .= '	  <div class="entry-details">';
			$out .= '		<div class="entry-metadata">';
		  if( $show_meta == 'yes'):
			$out .= '		    <p><span>'.__("Posted on","dt_themes").'</span><br />';
			$out .= 					get_the_date('d').' '.strtoupper(get_the_date('M')).' '.get_the_date('Y');
			$out .= '</p>';
			$out .= '			<p><span>'.__("Author","dt_themes").'</span><br />';
			$out .= "				<a href='".get_author_posts_url($author_id)."'>".get_the_author_meta('display_name',$author_id)."</a> </p>";
		  endif;
			$out .= 				$cats;
			$out .= 				$tags;
		  if( $show_meta == 'yes'):
			$out .= '			<p><span>'.__("Comments","dt_themes").'</span><br />';
			$out .="				<a href='{$link}/#respond'> {$commtext} </a></p>";
		  endif;
			$out .= '		</div>';
			$out .= "		<div class='entry-title'>";
		  if(is_sticky()): 
			$out .= "          <div class='featured-post'> 
			                       <span class='fa fa-trophy'> </span> 
			                       <span class='text'>".__('Featured','dt_themes')."</span>
							   </div>";
		  endif; 
			$out .= "		   <h2><a href='{$link}'>{$title}</a></h2>
			                </div>";
			$out .= '		<div class="entry-body">';

								$excerpt = explode(' ', do_shortcode($p['post_content']), $excerpt_length);
								$excerpt = array_filter($excerpt);
								
								if (!empty($excerpt)) {
									if (count($excerpt) >= $excerpt_length) {
										array_pop($excerpt);
										$excerpt = implode(" ", $excerpt).'...';
									} else {
										$excerpt = implode(" ", $excerpt);
									}
									$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
								$out .= "<p>{$excerpt}</p>";									
								}
			$out .= '		</div>';

			$out .= '		<div class="entry-footer">';
			$out .= "	 	 	<a href='{$link}' class='read-more'>{$read_more_text} <span class='fa fa-caret-right'></span> </a>";	
			$out .= "		</div>";		

			$out .= '	</div>';

			$out .= '</article>';

			return $out;
		}
	}

	function dt_sc_recent_post( $attrs, $content="" ) {
		extract( shortcode_atts( array( 'columns'=>'2','count'=>'3', 'read_more_text'=>__('Read More','dt_themes'),'excerpt_length'=>10, 'show_meta' =>'yes',
		'data_animation' => 'fadeInUp', 'data_animation_delay' => '300'), $attrs ));

		$out = "";
		$post_class = "";

		$show_meta = " show_meta ='{$show_meta}' ";

		switch( $columns ) :
			case '2':
				$post_class = "column dt-sc-one-half";
				$post_thumbnail = 'blog-twocolumn';
			break;

			default:
		endswitch;

		$rposts = new WP_Query( array( 'posts_per_page' => $count, 'orderby' => 'date', 'ignore_sticky_posts' => 1 ) );
		if ( $rposts->have_posts() ):
			$i = 1;
			while( $rposts->have_posts() ):
				$rposts->the_post();

				$the_id = get_the_ID();
				$permalink = get_permalink($the_id);
				$title = get_the_title($the_id);

				$temp_class = "";
				if($i == 1){ 
					$temp_class = $post_class." first";
				}else{
					$temp_class = $post_class;
				}

				if($i == $columns)
					$i = 1;
				else
					$i = $i + 1;

				$data_animate_class = !(empty($data_animation)) ? "animate" : " ";
				$data_animation = !(empty ($data_animation) ) ? $data_animation  : " ";
				$data_animation_delay = ( !empty($data_animation_delay) && !empty($data_animation) ) ? $data_animation_delay : " ";

				$out .= "<div class='{$temp_class} {$data_animate_class}' data-animation='{$data_animation}' data-delay='{$data_animation_delay}'>";
				$sc = "[dt_sc_post id='{$the_id}' read_more_text='{$read_more_text}' excerpt_length='{$excerpt_length}' show_meta='{$show_meta}' featured_image='{$post_thumbnail}' /]";
				$out .= do_shortcode($sc);
				$out .= '</div>';
				
			endwhile;
		endif;
		return $out;	
	}

	function dt_sc_ul( $attrs, $content="" ){
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		return "<ul>{$content}</ul>";
	}

	function dt_sc_li( $attrs, $content="" ){
		extract ( shortcode_atts ( array ( 'icon'=>'', 'text'=>'', 'link'=>''), $attrs ) );
		$icon = !empty( $icon ) ? "<i class='fa {$icon}'></i>" : "";
		$text = !empty( $link ) ? "<a href='{$link}'>{$text}</a>" : $text;
		return "<li>{$icon}{$text}</li>";
	}

	function dt_sc_gallery_item( $attrs, $content="" ){
		extract( shortcode_atts( array( 'id' => '', 'gallery_thumbnail' => ''), $attrs ));
		$out = "";
		if( !empty($id) ){
			$p = get_post( $id );
			if( $p->post_type === "dt_galleries" ):
				$permalink = get_permalink($id);
				$gallery_item_meta = get_post_meta($id,'_gallery_settings',TRUE);
				$gallery_item_meta = is_array($gallery_item_meta) ? $gallery_item_meta  : array();
				$post_thumbnail = $gallery_thumbnail;

				$out .= "<div id='dt_galleries-{$id}'>";
				$out .= '	<div class="gallery-thumb">';
							$popup = "http://placehold.it/576x432&text=DesignThemes";
							if( array_key_exists('items_name', $gallery_item_meta) ) {
								$item =  $gallery_item_meta['items_name'][0];
								$popup = $gallery_item_meta['items'][0];

								if( "video" === $item ) {
									$items = array_diff( $gallery_item_meta['items_name'] , array("video") );
									if( !empty($items) ) {
										$out .=  "<img src='".$gallery_item_meta['items'][key($items)]."' alt='' />";	
                        			} else {
                        				$out .= '<img src="http://placehold.it/576x432&text=DesignThemes" alt="">';
                        			}
                        		} else {
									$attachment_id = dt_get_attachment_id_from_url($gallery_item_meta['items'][0]);
									$img_attributes = wp_get_attachment_image_src($attachment_id, $post_thumbnail);
									$out .= "<img src='".$img_attributes[0]."' width='".$img_attributes[1]."' height='".$img_attributes[2]."' alt='".$item."' />";
                        		}
                        	} else {
                        		$out .= "<img src='{$popup}'/>";
                        	}				
				$out .= '		<div class="image-overlay">';				
				$out .= ' 			<a class="zoom" href="'.$popup.'" data-gal="prettyPhoto[gallery]" title=""> <span class="fa fa-eye"> </span> </a>';
				$out .= '			<a class="link" href="'.get_the_permalink().'" title="'. esc_attr( sprintf( esc_attr__('%s'), the_title_attribute('echo=0'))).'"> <span class="fa fa-mail-forward"></span>  </a>';
				$out .= '		</div>';
				$out .= '	</div>';
			
				$out .= '<div class="gallery-detail">';
				$out .= '	<div class="gallery-title">';
				$out .= "		<h5><a href='{$permalink}'>{$p->post_title}</a></h5>";
				$out .= "		<p>".get_the_term_list($p, 'dt_gallery_entries', ' ', ', ', ' ')."</p>";			
				$out .= '	</div>';
			  if(dttheme_is_plugin_active('roses-like-this/likethis.php')): 
				$out .=	"	<div class='views'>";
				$out .= '		<span><i class="fa fa-heart"></i>'.'<br/>'.generateLikeString($id, isset($_COOKIE["like_" . $id])).'</span> ';
				$out .= '	</div>';
			  endif;
				$out .= '</div>';
			
				$out .= "</div>";
			else:
				$out .="<p>".__("There is no gallery item with id :","dt_themes").$id."</p>";
			endif;	
		} else{
			$out .="<p>".__("Please give gallery post id","dt_themes")."</p>";
		}
		return $out;
	}

	function dt_sc_recent_gallery_items( $attrs, $content="" ){
		extract( shortcode_atts( array( 'columns'=>'','count'=>'', 'space' => '', 'data_animation' => 'fadeInUp', 'data_delay' => '300'), $attrs) );
		$out = "";
		$post_class =  ( $space =="yes" ) ? "column" :  "column no-space";
		switch ( $columns ) {
			case '2': 
				$post_class .= " dt-sc-one-half dt_sc_gallery gallery ";
				$post_thumbnail = 'gallery-twocolumns';
				break;
			
			case '3':
				$post_class .= " dt-sc-one-third dt_sc_gallery gallery ";
				$post_thumbnail = 'gallery-three-four-columns';
				break;

			case '4': 
				$post_class .= " dt-sc-one-fourth dt_sc_gallery gallery ";
				$post_thumbnail = 'gallery-three-four-columns';
				break;

		}
		if($columns == 2 && $space == "no" ) { $post_thumbnail = "gallery-two-columns-without-space"; }

		$rposts = new WP_Query( array( 'post_type'=>'dt_galleries','posts_per_page' => $count, 'orderby' => 'date', 'ignore_sticky_posts' => 1 ) );
		if ( $rposts->have_posts() ):
			$i = 1;
			while( $rposts->have_posts() ):
				$rposts->the_post();
				$the_id = get_the_ID();

				$temp_class = "";
				if($i == 1){ 
					$temp_class = $post_class." first";
				}
				else{
					$temp_class = $post_class;
				}

				if($i == $columns)
					$i = 1;
				else
					$i = $i + 1;

				$data_animate_class = !(empty($data_animation)) ? "animate" : " ";
				$data_animation = !(empty ($data_animation) ) ? $data_animation  : " ";
				$data_delay = ( !empty($data_delay) && !empty($data_animation) ) ? $data_delay : " ";
				
				$out .= "<div class='{$temp_class} {$data_animate_class}' data-animation='{$data_animation}' data-delay='{$data_delay}' >";
				$sc = "[dt_sc_gallery_item id='{$the_id}' space='{$space}' gallery_thumbnail='{$post_thumbnail}'/]";
				$out .= do_shortcode($sc);
				$out .= '</div>';
			endwhile;
		endif;
		return $out;
	}

	function dt_sc_gallery_items_from_category( $attrs, $content="" ){
		extract( shortcode_atts( array( 'category_id'=>'', 'columns'=>'', 'space'=>'', 'count'=>'', 'data_animation' => 'fadeInUp', 'data_delay' => '300'), $attrs) );
		$out = "";
		$post_class =  ( $space =="yes" ) ? "column" :  "column no-space";
		
		switch ( $columns ) {
			case '2': 
				$post_class .= " dt-sc-one-half dt_sc_gallery gallery ";
				$post_thumbnail = 'gallery-twocolumns';
				break;
			
			case '3':
				$post_class .= " dt-sc-one-third dt_sc_gallery gallery ";
				$post_thumbnail = 'gallery-three-four-columns';
				break;

			case '4': 
				$post_class .= " dt-sc-one-fourth dt_sc_gallery gallery ";
				$post_thumbnail = 'gallery-three-four-columns';
				break;

		}

		$category_id = explode(",", $category_id);
		if( is_array($category_id) && !empty($category_id) ){

			$args = array( 'orderby' => 'ID',
				'order' => 'ASC',
				'paged' => get_query_var( 'paged' ),
				'posts_per_page' => $count,
				'tax_query' => array( array( 'taxonomy'=>'dt_gallery_entries', 'field'=>'id', 'operator'=>'IN', 'terms'=>$category_id ) ) );

			$the_query = new WP_Query($args);
			if( $the_query->have_posts() ):
				$i = 1;
				while( $the_query->have_posts() ):
					$the_query->the_post();

					$the_id = get_the_ID();
					$permalink = get_permalink($the_id);
					$title = get_the_title($the_id);

					$gallery_item_meta = get_post_meta($the_id,'_gallery_settings',TRUE);
					$gallery_item_meta = is_array($gallery_item_meta) ? $gallery_item_meta  : array();

					$temp_class = "";
					if($i == 1) 
						$temp_class = $post_class." first";
					else
						$temp_class = $post_class;

					if($i == $columns)
						$i = 1;
					else
						$i = $i + 1;
						
					$data_animate_class = !(empty($data_animation)) ? "animate" : " ";
					$data_animation = !(empty ($data_animation) ) ? $data_animation  : " ";
					$data_delay = ( !empty($data_delay) && !empty($data_animation) ) ? $data_delay : " ";
					
					$out .= "<div class='{$temp_class} {$data_animate_class} gallery' data-animation='{$data_animation}' data-delay='{$data_delay}' >";
					$sc = "[dt_sc_gallery_item id='{$the_id}' space='{$space}' gallery_thumbnail='{$post_thumbnail}' /]";
					$out .= do_shortcode($sc);
					$out .= '</div>';
				endwhile;
			endif;	
		} else {
			$out = "<p>".__("No gallery items in given category","dt_themes")."</p>";
		}

		return $out;		
	}
	
	# H1 - H6 Tag 
	function tag($attrs, $content=null, $shortcodename =""){
		extract(shortcode_atts(array( 'title'=>'', 'class'=>''), $attrs));
		$tag = explode("_",$shortcodename);
		$tag = $tag[2];
				
		return "<$tag class='dt-sc-title ".$class."'>$title</$tag>";
	}
	
	# H1 - H6 Title with icon 
	function dt_sc_title_with_icon($attrs, $content=null, $shortcodename =""){
		extract(shortcode_atts(array( 'type' =>'type1', 'title'=>'', 'class'=>'', 'icon' =>''), $attrs));
		$tag = explode("_",$shortcodename);
		$tag = $tag[2];

		if($type == 'type1'){
			return "<$tag class='dt-sc-ico-border-title ".$class."'><span><i class='fa fa-".$icon."'></i> $title <i class='fa fa-".$icon."'></i></span> </$tag>";
		}else{
			return "<$tag class='dt-sc-ico-border-title type2".$class."'><i class='fa fa-".$icon."'></i> <span class='title'> $title </span> <i class='fa fa-".$icon."'></i> </$tag>";
		}
	}
	
	# Curved Title
	function dt_sc_curved_title($attrs, $content=null, $shortcodename =""){
		extract(shortcode_atts(array( 'class'=>''), $attrs));
		
			return "<h2 class='dt-sc-curved-title ".$class."'> </h2>";
		
	}
	
	# Fullwidth section
	function dt_sc_fullwidth_section($attrs, $content = null) {
		extract ( shortcode_atts ( array (
			'backgroundcolor' => '',
			'backgroundimage' => '',
			'backgroundrepeat' => '',
			'backgroundposition' => '',
			'paddingtop' => '',
			'paddingbottom' => '',
			'textcolor' =>'',
			'opacity' => '',
			'class' =>'',
			'parallax' => 'no'
		), $attrs ) );

		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );

		$styles = array ();
		$styles[] = !empty( $textcolor ) ? "color:{$textcolor};" : "";
		if( !empty( $opacity ) ) {
			$hex = str_replace ( "#", "", $backgroundcolor );
			if (strlen ( $hex ) == 3) :
				$r = hexdec ( substr ( $hex, 0, 1 ) . substr ( $hex, 0, 1 ) );
				$g = hexdec ( substr ( $hex, 1, 1 ) . substr ( $hex, 1, 1 ) );
				$b = hexdec ( substr ( $hex, 2, 1 ) . substr ( $hex, 2, 1 ) );
			else :
				$r = hexdec ( substr ( $hex, 0, 2 ) );
				$g = hexdec ( substr ( $hex, 2, 2 ) );
				$b = hexdec ( substr ( $hex, 4, 2 ) );
			endif;
			$rgb = array ( $r,$g,$b);
			$styles[] = "background-color:rgba($rgb[0],$rgb[1],$rgb[2],$opacity); ";
		} else {
			$styles[] = !empty( $backgroundcolor ) ? "background-color:{$backgroundcolor};" : "";
		}	

		$styles[] = !empty( $backgroundimage ) ? "background-image:url({$backgroundimage});" : "";
		$styles[] = !empty( $backgroundrepeat ) ? "background-repeat:{$backgroundrepeat};" : "";
		$styles[] = !empty( $backgroundposition ) ? "background-position:{$backgroundposition};" : "";
		$styles[] = !empty( $paddingtop ) ? "padding-top:{$paddingtop}px;" : "";
		$styles[] = !empty( $paddingbottom ) ? "padding-bottom:{$paddingbottom}px;" : "";

		$parallaxclass = '';
		if( $parallax === "yes") {
			$styles[] = "background-attachment:fixed; ";
			$parallaxclass = "dt-sc-parallax-section";
		}

		$styles = array_filter( $styles);
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		$out = 	"<div class='fullwidth-section {$class} {$parallaxclass}' {$style}>";
		$out .=	'	<div class="container">';
		$out .= 	$content;
		$out .= '   </div>';
		$out .= '</div>';
		return $out;
	}
	
	# Upcoming Events Carousel
	function dt_sc_upcoming_events_carousel( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'limit'  => '-1',
			'excerpt_length' => '30'
		), $atts));

		global $post; $out = ""; $i = 1;

	if(dttheme_is_plugin_active('the-events-calendar/the-events-calendar.php')):
						
	  $all_events = tribe_get_events(array( 'eventDisplay'=>'all', 'posts_per_page'=> $limit ));
	  if(!empty($all_events)){
		 
	   $fullwidth_bg_class = "";
	   $tpl_default_settings = get_post_meta($post->ID, '_tpl_default_settings', TRUE);
	   $tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings : array();

	   if (array_key_exists('show_slider', $tpl_default_settings) && array_key_exists('slider_type', $tpl_default_settings)) {
		 $fullwidth_bg_class = "content_top";
	   } 
                 
        $out .= '<div class="event-carousel-wrapper  '.$fullwidth_bg_class.'">';
		$out .= ' <div class="caroufredsel_wrapper">';
		$out .= '<h4>'.__("Upcoming Events","dt_themes").'</h4>';
		$out .= '   <ul class="event-carousel">';
		  foreach($all_events as $post) {
			setup_postdata($post);
			
			  $out .= '<li>';
				  
				  $out .= '<div class="dt-sc-two-third column first">';
					  $out .= '<div class="dt-sc-event-date">';
					  $out .=   '<p>'.tribe_get_start_date($post->ID, true, 'd')." ".tribe_get_start_date($post->ID, true, 'F').'<br><span>'. tribe_get_start_date($post->ID, true, 'Y').'</span></p>';
					  $out .= '</div>';
					  $out .= '<div class="dt-sc-event-title">';
					  $out .=   "<h5><a href='".get_permalink()."'>".get_the_title()."</a></h5>";
					  $out .= '</div>';
					  
					  $out .= '<div class="dt-sc-hr-invisible-very-small"></div>';
					  $out .= dttheme_excerpt($excerpt_length);
				  $out .= '</div>';
					  
				  $out .= '<div class="dt-sc-one-third column">';
					  $out .= '<div class="venue">';
					  $out .= '		<h5>'.__("Venue:","dt_themes").'</h5>';
					  $out .= '		<p>'.tribe_get_address($post->ID);
					  
									  if (tribe_get_city($post->ID)) {
										  $out .= ', '.tribe_get_city($post->ID).'.';
									  }
					  
					  $out .= '		</p>';
					  $out .= '</div>';
					  
					  $out .= '<div class="details">';
					  $out .= '		<h5>'.__("Time:","dt_themes").'</h5>';
					  $out .= '		<p>'.tribe_get_start_date($post->ID, true, 'm-d-Y').' | '.tribe_get_start_date($post->ID, true, 'h:i A').'</p>';
					  $out .= '</div>';
				  $out .= '</div>';
				  
				$out .= '</li>';
		  } 
		$out .= ' </ul>';
		$out .= '</div>';
		
		$out .= '<div class="carousel-arrows">';
		$out .= '	<a class="event-prev-arrow" title="prev" href=""> <span class="fa fa-angle-left"> </span> </a>';
		$out .= '	<a class="event-next-arrow" title="next" href=""> <span class="fa fa-angle-right"> </span> </a>';
		$out .= '</div>';
	  $out .= '</div>';
	  wp_reset_query();
	 }else{
		$out .= "<h2>".__('Nothing Found.', 'dt_themes')."</h2>";
		$out .= "<p>".__('Apologies, Please add few Events.', 'dt_themes')."</p>";
	 }
	endif;	
		return $out;
	}
	
	#Social Icons
	function dt_sc_social($attrs, $content=null,$shortcodename="") {
		$dttheme_options = get_option(IAMD_THEME_SETTINGS);
	
		if( isset($dttheme_options['general']['show-sociables']) && isset($dttheme_options['social']) ):
			$out = "<ul class='dt-sc-social-icons'>";
				foreach($dttheme_options['social'] as $social):
					$link = $social['link'];
					$custom_image = isset($social['custom-image']) && !empty($social['custom-image']) ? "<img src='{$custom_image}' />": '';
					$icon = $social['icon'];
					$class = explode(".",$icon);
					$class = $class[0];
					$out .= "<li class='{$class}'><a href='{$link}' target='_blank'>";
					if(!empty($custom_image)):
						$out .=	$custom_image;
					endif;
					
					$out .= "<img src='".plugin_dir_url ( __FILE__ )."images/sociables/{$icon}' alt='{$icon}' />";
					$out .="	</a>";
					$out .= "</li>"; 
				endforeach;
			$out .= "</ul>";
		return $out;	
		endif;	
	}

	# Resizable - Page builder
	function dt_sc_resizable($attrs, $content = null) {		
		extract ( shortcode_atts ( array (
				'width' => '',
				'class' => '',
				'animation' => '',
				'animation_delay' => ''
		), $attrs ) );

		$danimation = !empty( $animation ) ? " data-animation='{$animation}' ": "";
		$ddelay = (!empty( $animation ) && !empty( $animation_delay )) ? " data-delay='{$animation_delay}' " : "";
		$danimate = !empty( $animation ) ? "animate": "";

		$style = (!empty( $width ) ) ? ' style="width:'.$width.'%;" ' : "";
	
		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = do_shortcode(DTCoreShortcodesDefination::dtShortcodeHelper ( $content ));
		$out = "<div class='column {$class} {$danimate} {$first}' {$danimation} {$ddelay} {$style}>{$content}</div>";
		return $out;
	}

	# Page Widget -  Page builder 
	function dt_sc_widgets($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'widget_name' => '',
				'widget_wpname' => '',
				'widget_wpid' => ''
		), $attrs ) );
		
		if($widget_name != ''):	
			
			foreach($attrs as $key=>$value):
				$instance[$key] = $value;			
			endforeach;
			
			$instance = array_filter($instance);
			
			if(($widget_name == 'TribeEventsAdvancedListWidget' || $widget_name == 'TribeEventsMiniCalendarWidget') && isset($instance['selector'])) {
				$instance['filters'] = '{"tribe_events_cat":["'.$instance['selector'].'"]}';
			}
			
			if(substr($widget_name, 0, 2) == 'WC') $add_cls = 'woocommerce';
			else $add_cls = '';
			
			ob_start();
			the_widget($widget_name, $instance, 'before_widget=<aside id="'.$widget_wpid.'" class="widget '.$add_cls.' '.$widget_wpname.'">&after_widget=</aside>&before_title=<h3 class="widgettitle"><span>&after_title=</span></h3>');
			$output = ob_get_contents();
			ob_end_clean();
			
			return $output;
							
		endif;
	}

}

new DTCoreShortcodesDefination();?>