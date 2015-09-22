<?php
global $dt_modules, $dt_animation_types, $woothemes_sensei, $dtthemes_columns;
$dt_animation_types = array();

$dt_animation_types = array("flash" => "flash", "shake" => "shake", "bounce" => "bounce", "tada" => "tada", "swing" => "swing", "wobble" => "wobble", "pulse" => "pulse", "flip" => "flip", "flipInX" => "flipInX", "flipOutX" => "flipOutX", "flipInY" => "flipInY", "flipOutY" => "flipOutY", "fadeIn" => "fadeIn", "fadeInUp" => "fadeInUp", "fadeInDown" => "fadeInDown", "fadeInLeft" => "fadeInLeft", "fadeInRight" => "fadeInRight", "fadeInUpBig" => "fadeInUpBig", "fadeInDownBig" => "fadeInDownBig", "fadeInLeftBig" => "fadeInLeftBig", "fadeInRightBig" => "fadeInRightBig", "fadeOut" => "fadeOut", "fadeOutUp" => "fadeOutUp","fadeOutDown" => "fadeOutDown", "fadeOutLeft" => "fadeOutLeft", "fadeOutRight" => "fadeOutRight", "fadeOutUpBig" => "fadeOutUpBig", "fadeOutDownBig" => "fadeOutDownBig", "fadeOutLeftBig" => "fadeOutLeftBig","fadeOutRightBig" => "fadeOutRightBig", "bounceIn" => "bounceIn", "bounceInUp" => "bounceInUp", "bounceInDown" => "bounceInDown", "bounceInLeft" => "bounceInLeft", "bounceInRight" => "bounceInRight", "bounceOut" => "bounceOut", "bounceOutUp" => "bounceOutUp", "bounceOutDown" => "bounceOutDown", "bounceOutLeft" => "bounceOutLeft", "bounceOutRight" => "bounceOutRight", "rotateIn" => "rotateIn", "rotateInUpLeft" => "rotateInUpLeft", "rotateInDownLeft" => "rotateInDownLeft", "rotateInUpRight" => "rotateInUpRight", "rotateInDownRight" => "rotateInDownRight", "rotateOut" => "rotateOut", "rotateOutUpLeft" => "rotateOutUpLeft","rotateOutDownLeft" => "rotateOutDownLeft", "rotateOutUpRight" => "rotateOutUpRight", "rotateOutDownRight" => "rotateOutDownRight", "hinge" => "hinge", "rollIn" => "rollIn", "rollOut" => "rollOut", "lightSpeedIn" => "lightSpeedIn", "lightSpeedOut" => "lightSpeedOut");

$variations = array('green' => 'Green', 'brown' => 'Brown', 'cyan' => 'Cyan', 'ferngreen' => 'Ferngreen', 'blue' => 'Blue', 'ocean' => 'Ocean', 'purple' => 'Purple', 'pink' => 'Pink', 'red' => 'Red', 'grey' => 'Grey', 'steel-blue' => 'Steel Blue', 'orange' => 'Orange', 'yellow' => 'Yellow', 'aqua' => 'Aqua', 'turquoise' => 'Turquoise', 'ruby'=>'Ruby', 'pearl' => 'Pearl', 'mustard' => 'Mustard', 'violet' => 'Violet', 'teal' => 'Teal', 'crimsonred' => 'Crimsonred', 'sandal' => 'Sandal', 'cream' => 'Cream', 'lavender' => 'Lavender', 'palebrown' => 'Palebrown');

$button_type = array('with-icon' => 'With Icon', 'without-icon' => 'Without Icon' );

$button_size = array('small' => 'Small', 'medium' => 'Medium', 'large' => 'Large', 'xlarge' => 'Xlarge');

$page_targets = array('_blank' => 'Blank', '_new' => 'New', '_parent' => 'Parent', '_self' => 'Self', '_top' => 'Top');

$box_types = array('titled-box' => 'Titled Box', 'error-box' => 'Error Box', 'warning-box' => 'Warning Box', 'success-box' => 'Success Box', 'info-box' => 'Info Box');

$blocquote_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3');

$pullquote_types = array('pullquote1' => 'Pullquote 1', 'pullquote2' => 'Pullquote 2', 'pullquote3' => 'Pullquote 3' );

$callout_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4');

$pricingtable_types = $testimonial_types = $colored_icon_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2');

$align = array('left' => 'Left', 'right' => 'Right', 'center' => 'Center');

$yesorno = array('yes' => 'Yes', 'no' => 'No');

$trueorfalse = array('true' => 'True', 'false' => 'False');

$tooltip_positions = array('top' => 'Top', 'right' => 'Right', 'bottom' => 'Bottom', 'left' => 'Left');

$tooltip_types = array('default' => 'Default', 'boxed' => 'Boxed');

$dropcap_types = array('Default' => 'Default', 'Circle' => 'Circle', 'Bordered Circle' => 'Bordered Circle', 'Square' => 'Square', 'Bordered Square' => 'Bordered Square');

$bacground_repeat = array('no-repeat' => 'No Repeat', 'repeat' => 'Repeat', 'repeat-x' => 'Repeat X', 'repeat-y' => 'Repeat Y');

$bacground_position = array('left top' => 'Left Top', 'left center' => 'Left Center', 'left bottom' => 'Left Bottom', 'right top' => 'Right Top', 'right center' => 'Right Center', 'right bottom' => 'Right Bottom', 'center top' => 'Center Top', 'center center' => 'Center Center', 'center bottom' => 'Center Bottom');

$lengths = array(5 => 5, 10 => 10, 15 => 15, 20 => 20, 25 => 25, 30 => 30, 35 => 35, 40 => 40, 45 => 45, 50 => 50, 55 => 55, 60 => 60, 65 => 65, 70 => 70, 75 => 75, 80 => 80, 85 => 85, 90 => 90, 95 => 95, 100 => 100);

$post_columns = array(2 => 2 );

$portfolio_columns = array(2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);

$teacher_columns = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5);

$icon_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4', 'type5' => 'Type 5');

$progressbar_types = array('progress-striped' => 'Striped', 'progress-striped-active' => 'Striped Active', 'standard' => 'Standard');

$oltypes = array('decimal' => 'Decimal', 'decimal-leading-zero' => 'Decimal With Leading Zero', 'lower-alpha' => 'Lower Alpha', 'lower-roman' => 'Lower Roman', 'upper-alpha' => 'Upper Alpha', 'upper-roman' => 'Upper Roman');

$ultypes = array('arrow' => 'Arrow', 'rounded-arrow' => 'Rounded Arrow', 'double-arrow' => 'Double Arrow', 'heart' => 'Heart', 'trash' => 'Trash', 'star' => 'Star', 'tick' => 'Tick', 'rounded-tick' => 'Rounded Tick', 'cross' => 'Cross', 'rounded-cross' => 'Rounded Cross', 'rounded-question' => 'Rounded Question', 'rounded-info' => 'Rounded Info', 'delete' => 'Delete', 'warning' => 'Warning', 'comment' => 'Comment', 'edit' => 'Edit', 'share' => 'Share', 'plus' => 'Plus', 'rounded-plus' => 'Rounded Plus', 'minus' => 'Minus', 'rounded-minus' => 'Rounded Minus', 'asterisk' => 'Asterisk', 'cart' => 'Cart', 'folder' => 'Folder', 'folder-open' => 'Folder Open', 'desktop' => 'Desktop', 'tablet' => 'Tablet', 'mobile' => 'Mobile', 'reply' => 'Reply', 'quote' => 'Quote', 'mail' => 'Mail', 'external-link' => 'External Link', 'adjust' => 'Adjust', 'pencil' => 'Pencil', 'print' => 'Print', 'tag' => 'Tag', 'thumbs-up' => 'Thumbs Up', 'thumbs-down' => 'Thumbs Down', 'time' => 'Time', 'globe' => 'Globe', 'pushpin' => 'Pushpin', 'map-marker' => 'Map Marker', 'link' => 'Link', 'paper-clip' => 'Paper Clip', 'download' => 'Download', 'key' => 'Key', 'search' => 'Search', 'rss' => 'Rss', 'twitter' => 'Twitter', 'facebook' => 'Facebook', 'linkedin' => 'Linkedin', 'google' => 'Google', 'book' => 'Book', 'check' => 'Check', 'hand' => 'Hand', 'cog' => 'Cog', 'play' => 'Play', 'gift' => 'Gift', 'tree' => 'Tree', 'star' => 'Star', 'smile' => 'Smile', 'music' => 'Music', 'moon' => 'Moon','car' => 'Car','graduation-cap' => 'Graduation Cap','reddit' => 'Reddit');

$slider_types = array('LayerSlider' => 'Layer Slider', 'RevolutionSlider' => 'Revolution Slider');

$title_with_icon_types = array('type1' => 'Type 1', 'type2' => 'Type 2');

/*  Start of Columns Definition */

$dtthemes_columns['full_width_content'] = array( 
		'name' => __('1 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_half'] = array( 
		'name' => __('1/2 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_third'] = array( 
		'name' => __('1/3 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_fourth'] = array( 
		'name' => __('1/4 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_fifth'] = array( 
		'name' => __('1/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['one_sixth'] = array( 
		'name' => __('1/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['two_third'] = array( 
		'name' => __('2/3 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['two_fifth'] = array( 
		'name' => __('2/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['two_sixth'] = array( 
		'name' => __('2/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['three_fourth'] = array( 
		'name' => __('3/4 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['three_fifth'] = array( 
		'name' => __('3/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['three_sixth'] = array( 
		'name' => __('3/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['four_fifth'] = array( 
		'name' => __('4/5 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['four_sixth'] = array( 
		'name' => __('4/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['five_sixth'] = array( 
		'name' => __('5/6 Column', 'dt_themes'),
		'type' => 'column',
	);
$dtthemes_columns['fullwidth_section'] = array( 
		'name' => __('Fullwidth Section', 'dt_themes'),
		'type' => 'section',
		'options' => array(
			'backgroundcolor' => array(
				'title' => __('Background Color', 'dt_themes'),
				'type' => 'colorpicker',
				'default_value' => ''
			),
			'backgroundimage' => array(
				'title' => __('Background Image', 'dt_themes'),
				'type' => 'upload',
				'default_value' => ''
			),
			'opacity' => array(
				'title' => __('Background Opacity', 'dt_themes'),
				'type' => 'text',
				'default_value' => ''
			),
			'parallax' => array(
				'title' => __('Parallax Effect', 'dt_themes'),
				'type' => 'select',
				'options' => $yesorno,
				'default_value' => array('no')
			),
			'backgroundrepeat' => array(
				'title' => __('Background Repeat', 'dt_themes'),
				'type' => 'select',
				'options' => $bacground_repeat,
				'default_value' => array('no-repeat')
			),
			'backgroundposition' => array(
				'title' => __('Background Position', 'dt_themes'),
				'type' => 'select',
				'options' => $bacground_position,
				'default_value' => array('left top')
			),
			'paddingtop' => array(
				'title' => __('Padding Top', 'dt_themes'),
				'type' => 'text',
				'default_value' => ''
			),
			'paddingbottom' => array(
				'title' => __('Padding Bottom', 'dt_themes'),
				'type' => 'text',
				'default_value' => ''
			),
			'textcolor' => array(
				'title' => __('Text Color', 'dt_themes'),
				'type' => 'colorpicker',
				'default_value' => ''
			),
			'class' => array(
				'title' => __('CSS Class', 'dt_themes'),
				'type' => 'text',
				'default_value' => ''
			)
		)
);

/*  End of Columns definition */


/*  Start of General Modules */

$dt_modules['general']['doshortcode_anycontent'] = array(
	'name' => __('Add Any Content Here', 'dt_themes'),
	'tooltip' => 'Add any content using this module',
	'icon_class' => 'ico-anycontent',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true
		)
	)
);
											 
$dt_modules['general']['doshortcode_accordion'] = array(
	'name' => __('Accordion Default', 'dt_themes'),
	'tooltip' => 'Add Accordion Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group]<br>
								  [dt_sc_toggle title="Accordion 1"]<br>
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								  [/dt_sc_toggle]<br>
								  [dt_sc_toggle title="Accordion 2"]<br>
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								  [/dt_sc_toggle]<br>
								  [dt_sc_toggle title="Accordion 3"]<br>
								  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								  [/dt_sc_toggle]<br>
								[/dt_sc_accordion_group]'
		)
	)
);

$dt_modules['general']['doshortcode_accordion_framed'] = array(
	'name' => __('Accordion Framed', 'dt_themes'),
	'tooltip' => 'Add Accordion frmaed Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group]<br>
									[dt_sc_toggle_framed title="Accordion 1"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_toggle_framed]<br>
									[dt_sc_toggle_framed title="Accordion 2"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_toggle_framed]<br>
									[dt_sc_toggle_framed title="Accordion 3"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_toggle_framed]<br>
								[/dt_sc_accordion_group]'
		)
	)
);


$dt_modules['general']['titled_box'] = array(
	'name' => __('Titled Box', 'dt_themes'),
	'tooltip' => 'Add titled box and different types of messgae box',
	'icon_class' => 'ico-box',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $box_types,
			'default_value' => array('titled-box')
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-cogs'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'box_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);


$dt_modules['general']['button'] = array(
	'name' => __('Button', 'dt_themes'),
	'tooltip' => 'Add Button',
	'icon_class' => 'ico-button',
	'options' => array(
	
		'type' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $button_type,
			'default_value' => array('with-icon')
		),
		
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-home'
		),
		
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		
		'size' => array(
			'title' => __('Size', 'dt_themes'),
			'type' => 'select',
			'options' => $button_size,
			'default_value' => array('medium')
		),
		
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		
		'data_animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('fadeInUp')
		),
		
		'data_delay' => array(
			'title' => __('Animation Delay', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => ''
		),
		
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => ''
		),
		
		'content' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Sample Button'
		),
	));

$dt_modules['general']['blockquote'] = array(
	'name' => __('Blockquote', 'dt_themes'),
	'tooltip' => 'Add Blockquote',
	'icon_class' => 'ico-blockquote',
	'options' => array(
	
		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array('left')
		),

		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		
		'cite' => array(
			'title' => __('Cite', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		
		'blockquote_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	) );

$dt_modules['general']['pullquote'] = array(
	'name' => __('Pullquote', 'dt_themes'),
	'tooltip' => 'Add different types of pullquotes',
	'icon_class' => 'ico-quote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $pullquote_types,
			'default_value' => array('pullquote1')
		),
		'icon' => array(
			'title' => __('Quote Icon', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('yes')
		),
		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array('left')
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'cite' => array(
			'title' => __('Cite Name', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Dolor sit amet'
		),
		'pq_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	) );

$dt_modules['general']['tooltip'] = array(
	'name' => __('Tooltip', 'dt_themes'),
	'tooltip' => 'Add tooltip with different positions',
	'icon_class' => 'ico-pullquote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $tooltip_types,
			'default_value' => array('default')
		),
		'position' => array(
			'title' => __('Position', 'dt_themes'),
			'type' => 'select',
			'options' => $tooltip_positions,
			'default_value' => array('top')
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'tooltip' => array(
			'title' => __('Tooltip Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Consectetur adipisicing elit'
		),
		'href' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'tp_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum'
		)
	) );
	
$dt_modules['general']['callout_box'] = array(
	'name' => __('Callout Box without Icon', 'dt_themes'),
	'tooltip' => 'Add the callout box here',
	'icon_class' => 'ico-callout',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $callout_box_types,
			'default_value' => array('type1')
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'button_text' => array(
			'title' => __('Button Label', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Purchase Now'
		),
		
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'variation' => array(
			'title' => __('Button Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'cb_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "<h4>Humanity- An Ultimate Theme for Education and Charity Trust</h4><h5>Come lets stand out of crowd and be unique in our style</h5>"
		)
	)
);

$dt_modules['general']['callout_box_with_icon'] = array(
	'name' => __('Callout Box With Icon', 'dt_themes'),
	'tooltip' => 'Add the callout box here',
	'icon_class' => 'ico-callout',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $callout_box_types,
			'default_value' => array('type1')
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-github-alt'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'button_text' => array(
			'title' => __('Button Label', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Purchase Now'
		),
		
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'cb_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "<h4>Humanity- An Ultimate Theme for Education and Charity Trust</h4><h5>Come lets stand out of crowd and be unique in our style</h5>"
		)
	)
);


$dt_modules['general']['fancy_ol'] = array(
	'name' => __('Ordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in ordered list',
	'icon_class' => 'ico-orderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $oltypes,
			'default_value' => array('decimal')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'ol_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ol>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ol>'
		)
	)
);

$dt_modules['general']['fancy_ul'] = array(
	'name' => __('Unordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in unordered lists',
	'icon_class' => 'ico-unorderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $ultypes,
			'default_value' => array('arrow')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'ul_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ul>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ul>'
		)
	));

$dt_modules['general']['pricing_table'] = array(
	'name' => __('Pricing Table', 'dt_themes'),
	'tooltip' => 'Add pricing table',
	'icon_class' => 'ico-pricingtable',
	'options' => array(

		'pt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_one_third first]<br>
[dt_sc_pricing_table_item title="Title" currency="$" price="15" per="month" donate_now_text="Donate Now" variation="ocean" heading="gift" button_text="Buy Now" button_link="#" button_color="grey" data_animation="fadeInUp" data_animation_delay="300"]<br>
<ul>
	<li>Text</li>
	<li>Text</li>
	<li>Text</li>
</ul>
[/dt_sc_pricing_table_item]<br>
[/dt_sc_one_third]<br>

[dt_sc_one_third]<br>
[dt_sc_pricing_table_item title="Title" currency="$" price="15" per="month" donate_now_text="Donate Now" variation="coral" heading="gift" button_text="Buy Now" button_link="#" button_color="grey" data_animation="fadeInUp" data_animation_delay="300" selected]<br>
<ul>
	<li>Text</li>
	<li>Text</li>
	<li>Text</li>
</ul>
[/dt_sc_pricing_table_item]<br>
[/dt_sc_one_third]<br>

[dt_sc_one_third]<br>
[dt_sc_pricing_table_item title="Title" currency="$" price="15" per="month" donate_now_text="Donate Now" variation="palebrown" heading="gift" button_text="Buy Now" button_link="#" button_color="grey" data_animation="fadeInUp" data_animation_delay="300" ]<br>
<ul>
	<li>Text</li>
	<li>Text</li>
	<li>Text</li>
</ul>
[/dt_sc_pricing_table_item]<br>
[/dt_sc_one_third]'
		)
	));
	
$dt_modules['general']['progressbar'] = array(
	'name' => __('Progress Bar', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $progressbar_types,
			'default_value' => array('standard')
		),
		'color' => array(
			'title' => __('Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'value' => array(
			'title' => __('Value', 'dt_themes'),
			'type' => 'text',
			'default_value' => 55
		),
		'content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Consectetur'
		)
	));

$dt_modules['general']['tabs'] = array(
	'name' => __('Tabs - Default', 'dt_themes'),
	'tooltip' => 'Add Default tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(

		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_tab title="Tab 1"]
									<h5>Title</h5>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
									[/dt_sc_tab]
									[dt_sc_tab title="Tab 2"]
									<h5>Title</h5>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
									[/dt_sc_tab]
									[dt_sc_tab title="Tab 3"]
									<h5>Title</h5>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
								[/dt_sc_tab]'
		)
	)
);

$dt_modules['general']['tabs_framed'] = array(
	'name' => __('Tabs - Framed', 'dt_themes'),
	'tooltip' => 'Add framed tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'tv_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_tab title="Tab 1"]
									<h5>Title</h5>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
									[/dt_sc_tab]
									[dt_sc_tab title="Tab 2"]
									<h5>Title</h5>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad conubia nostra litora torquent per, per inceptos himenaeos.
									[/dt_sc_tab]
									[dt_sc_tab title="Tab 3"]
									<h5>Title</h5>
									Lorem ipsum dolor sit amet, elit consectetur adipiscing. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
								[/dt_sc_tab]'
		)
	)
);

$dt_modules['general']['doshortcode_toggle'] = array(
	'name' => __('Toggle Default', 'dt_themes'),
	'tooltip' => 'Add default toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'td_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle title="Toggle 1"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_toggle]<br>
									[dt_sc_toggle title="Toggle 2"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_toggle]<br>
									[dt_sc_toggle title="Toggle 3"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_toggle]'
		)
	)
);

$dt_modules['general']['doshortcode_toggleframed'] = array(
	'name' => __('Toggle Framed', 'dt_themes'),
	'tooltip' => 'Add framed toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle_framed title="Toggle 1"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_toggle_framed]<br>
									[dt_sc_toggle_framed title="Toggle 2"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
									[/dt_sc_toggle_framed]<br>
									[dt_sc_toggle_framed title="Toggle 3"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_toggle_framed]'
		)
	)
);

$dt_modules['general']['doshortcode_team'] = array(
	'name' => __('Team', 'dt_themes'),
	'tooltip' => __('Use this module to add member', 'dt_themes'),
	'icon_class' => 'ico-team',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_team name="DesignThemes" role="Chief Programmer" image="http://placehold.it/140" twitter="#" facebook="#" google="#" linkedin="#" variation="ash"]<br>
<p> Saleem naijar kaasram eerie can be disbursed in the wofl.</p><br>
[/dt_sc_team]'
		)
	)
);

$dt_modules['general']['doshortcode_testimonial'] = array(
	'name' => __('Testimonial', 'dt_themes'),
	'tooltip' => __('Use this module to add testimonial', 'dt_themes'),
	'icon_class' => 'ico-testimonial',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_testimonial name="John Doe" role="Senior Officer" image="http://placehold.it/78" data_animation="rotateInDownLeft"]<br>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_testimonial]'
		)
	)
);

$dt_modules['general']['testimonial_carousel'] = array(
	'name' => __('Testimonial Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add testimonial carousel', 'dt_themes'),
	'icon_class' => 'ico-testimonial',
	'options' => array(
	
		'tmc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ul>
									<li>[dt_sc_testimonial name="John Doe" role="Cambridge Telcecom" image="http://placehold.it/78&text=Item 1"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
									<li>[dt_sc_testimonial name="John Doe" role="Cambridge Telcecom" image="http://placehold.it/780&text=Item 2"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
									<li>[dt_sc_testimonial name="John Doe" role="Cambridge Telcecom" image="http://placehold.it/78&text=Item 3"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
									<li>[dt_sc_testimonial name="John Doe" role="Cambridge Telcecom" image="http://placehold.it/78&text=Item 3"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
								</ul>'
		)
	)
);



$dt_modules['general']['doshortcode_icon_box_type1'] = array(
	'name' => __('Icon Box Type1', 'dt_themes'),
	'tooltip' => __('Use this module to add icon box type1', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_icon_box type =" type1" fontawesome_icon="flag" custom_icon="" title="Asit amet" link="#" data_animation="fadeInUp" data_delay="300"]<br>
			<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p><br>
[/dt_sc_icon_box]'
		)
	)
);

$dt_modules['general']['doshortcode_icon_box_type2'] = array(
	'name' => __('Icon Box Type2', 'dt_themes'),
	'tooltip' => __('Use this module to add icon box type2', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_icon_box type =" type2" fontawesome_icon="cogs" custom_icon="" title="Asit amet" link="#" data_animation="fadeInUp" data_delay="300"]<br>
	<p>Lpsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old this is a bi one yes mean bilateral. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p><br>
	[/dt_sc_icon_box]'
		)
	)
);


$dt_modules['general']['doshortcode_icon_box_type3'] = array(
	'name' => __('Icon Box Type3', 'dt_themes'),
	'tooltip' => __('Use this module to add icon box type3', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_icon_box type =" type3" fontawesome_icon="cogs" custom_icon="" title="Asit amet" link="#" button_type="without-icon" button_link="#" button_size="small" button_target="_blank" button_text="view &amp; browse" data_animation="fadeInUp" data_delay="300" ]<br>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis placerat urna. Nulla nulla diam, adipiscing non ornare non, commodo</p><br>
	[/dt_sc_icon_box]'
		)
	)
);

/*  End of General Modules */


/*  Start of Unique Modules */

$dt_modules['unique']['donutchart_small'] = array(
	'name' => __('Donut Chart - Small', 'dt_themes'),
	'tooltip' => __('Use this module to add small donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#FFFFFF'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#4bbcd7'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '50'
		),
	)
);

$dt_modules['unique']['donutchart_medium'] = array(
	'name' => __('Donut Chart - Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#FFFFFF'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#4bbcd7'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '65'
		),
	)
);

$dt_modules['unique']['donutchart_large'] = array(
	'name' => __('Donut Chart - Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large donutchart', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#FFFFFF'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#4bbcd7'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => '75'
		),
	)
);

$dt_modules['unique']['recent_post'] = array(
	'name' => __('Recent Posts', 'dt_themes'),
	'tooltip' => __('Use this module to display recent posts', 'dt_themes'),
	'icon_class' => 'ico-recentposts',
	'options' => array(
		'columns' => array(
			'title' => __('Columns', 'dt_themes'),
			'type' => 'select',
			'options' => $post_columns,
			'default_value' => array(3)
		),
		'count' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => '2'
		),
		'read_more_text' => array(
			'title' => __('Read More Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Read More'
		),
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '10'
		),
		'show_meta' => array(
			'title' => __('Show Meta', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('yes')
		),
	)
);


$dt_modules['unique']['doshortcode_gallery_item'] = array(
	'name' => __('Individual Gallery', 'dt_themes'),
	'tooltip' => __('Use this module to add gallery single', 'dt_themes'),
	'icon_class' => 'ico-portfolio',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_gallery_item id=""/]'
		)
	)
);


$dt_modules['unique']['doshortcode_recent_gallery_items'] = array(
	'name' => __('Recent Gallery', 'dt_themes'),
	'tooltip' => __('Use this module to add recent gallery', 'dt_themes'),
	'icon_class' => 'ico-portfolio',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_recent_gallery_items columns="2/3/4" space="yes/no" count="-1"/]'
		)
	)
);

$dt_modules['unique']['doshortcode_gallery_items_from_category'] = array(
	'name' => __('Gallery Items From Category', 'dt_themes'),
	'tooltip' => __('Use this module to add gallery item from categories', 'dt_themes'),
	'icon_class' => 'ico-portfolio',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_gallery_items_from_category category_id="9,10" columns="2/3/4" space="yes/no" count="-1"/]'
		)
	)
);

$dt_modules['unique']['upcoming_events_carousel'] = array(
	'name' => __('Upcoming Events Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add upcoming events carousel', 'dt_themes'),
	'icon_class' => 'ico-upcomingeventscarousel',
	'options' => array(
		
		'limit' => array(
			'title' => 'Limit',
			'type' => 'text',
			'default_value' => '4'
		),
		'excerpt_length' => array(
			'title' => 'Excerpt Length',
			'type' => 'text',
			'default_value' => '30'
		),		
	)
);

$dt_modules['unique']['doshortcode_social'] = array(
	'name' => __('Social Icons', 'dt_themes'),
	'tooltip' => __('Use this module to add social icons', 'dt_themes'),
	'icon_class' => 'ico-portfolio',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_social/]'
		)
	)
);

$dt_modules['unique']['doshortcode_curved'] = array(
	'name' => __('Curved Title', 'dt_themes'),
	'tooltip' => __('Use this module to add Curved Title', 'dt_themes'),
	'icon_class' => 'ico-portfolio',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_curved_title/]'
		)
	)
);


$dt_modules['unique']['doshortcode_sponsorscarousel'] = array(
	'name' => __('Sponsors Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add Sponsors Carousel section', 'dt_themes'),
	'icon_class' => 'ico-sponsorcarousel',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => ' [dt_sc_h2 title="Our Sponsors"]<br>
								 [dt_sc_carousel]
										<ul>
											<li><a href="#"><img title="Client 1" src="http://placehold.it/182x54" alt="Client 1" /></a></li>
											<li><a href="#"><img title="Client 2" src="http://placehold.it/182x54" alt="Client 2" /></a></li>
											<li><a href="#"><img title="Client 3" src="http://placehold.it/182x54" alt="Client 3" /></a></li>
											<li><a href="#"><img title="Client 4" src="http://placehold.it/182x54" alt="Client 4" /></a></li>
											<li><a href="#"><img title="Client 5" src="http://placehold.it/182x54" alt="Client 5" /></a></li>
										</ul>
								 [/dt_sc_carousel]'
		)
	)
);

/*  End of Unique Modules */

/*  Start of Others Modules */

$dt_modules['others']['h1'] = array(
	'name' => __('Heading 1', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 1', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
	)
);

$dt_modules['others']['h2'] = array(
	'name' => __('Heading 2', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 2', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
	)
);

$dt_modules['others']['h3'] = array(
	'name' => __('Heading 3', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 3', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
	)
);

$dt_modules['others']['h4'] = array(
	'name' => __('Heading 4', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 4', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
	)
);

$dt_modules['others']['h5'] = array(
	'name' => __('Heading 5', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 5', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
	)
);

$dt_modules['others']['h6'] = array(
	'name' => __('Heading 6', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 6', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
	)
);

$dt_modules['others']['h1_title_with_icon'] = array(
	'name' => __('Heading 1 With Icon', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 1', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
				'title' => __('Type', 'dt_themes'),
				'type' => 'select',
				'options' => $title_with_icon_types,
				'default_value' => array('type1')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'star'
		),
	)
);

$dt_modules['others']['h2_title_with_icon'] = array(
	'name' => __('Heading 2 With Icon', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 2', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
				'title' => __('Type', 'dt_themes'),
				'type' => 'select',
				'options' => $title_with_icon_types,
				'default_value' => array('type1')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'star'
		),
	)
);

$dt_modules['others']['h3_title_with_icon'] = array(
	'name' => __('Heading 3 With Icon', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 3', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
				'title' => __('Type', 'dt_themes'),
				'type' => 'select',
				'options' => $title_with_icon_types,
				'default_value' => array('type1')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'star'
		),
	)
);

$dt_modules['others']['h4_title_with_icon'] = array(
	'name' => __('Heading 4 With Icon', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 4', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
				'title' => __('Type', 'dt_themes'),
				'type' => 'select',
				'options' => $title_with_icon_types,
				'default_value' => array('type1')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'star'
		),
	)
);

$dt_modules['others']['h5_title_with_icon'] = array(
	'name' => __('Heading 5 With Icon', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 5', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
				'title' => __('Type', 'dt_themes'),
				'type' => 'select',
				'options' => $title_with_icon_types,
				'default_value' => array('type1')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'star'
		),
	)
);

$dt_modules['others']['h6_title_with_icon'] = array(
	'name' => __('Heading 6 With Icon', 'dt_themes'),
	'tooltip' => __('Use this module to add heading 6', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'type' => array(
				'title' => __('Type', 'dt_themes'),
				'type' => 'select',
				'options' => $title_with_icon_types,
				'default_value' => array('type1')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'star'
		),
	)
);

$dt_modules['others']['address'] = array(
	'name' => __('Address', 'dt_themes'),
	'tooltip' => __('Use this module to add address', 'dt_themes'),
	'icon_class' => 'ico-address',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-home'
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Address'
		),
		'line1' => array(
			'title' => __('Line 1', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'No: 58 A, East Madison St'
		),
		'line2' => array(
			'title' => __('Line 2', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Baltimore, MD'
		),
		'line3' => array(
			'title' => __('Line 3', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'USA'
		),
		'line4' => array(
			'title' => __('Line 4', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['contact'] = array(
	'name' => __('Contact', 'dt_themes'),
	'tooltip' => __('Use this module to add contact', 'dt_themes'),
	'icon_class' => 'ico-contact',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'detail' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
	)
);

$dt_modules['others']['email'] = array(
	'name' => __('Email', 'dt_themes'),
	'tooltip' => __('Use this module to add email', 'dt_themes'),
	'icon_class' => 'ico-email',
	'options' => array(
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Email'
		),
		'emailid' => array(
			'title' => __('Email ID', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'yourname@somemail.com'
		),
	)
);

$dt_modules['others']['clear'] = array(
	'name' => __('Clear', 'dt_themes'),
	'tooltip' => __('Add this module to add space between contents', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_border'] = array(
	'name' => __('Bordered Horizontal Rule', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr'] = array(
	'name' => __('Horizontal Rule', 'dt_themes'),
	'tooltip' => __('Use this module to add horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_medium'] = array(
	'name' => __('Horizontal Rule Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_large'] = array(
	'name' => __('Horizontal Rule Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_top'] = array(
	'name' => __('Horizontal Rule With Top Link', 'dt_themes'),
	'tooltip' => __('Use this module to add horizontal rule with top link', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible'] = array(
	'name' => __('Whitespace', 'dt_themes'),
	'tooltip' => __('Use this module to add whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_very_small'] = array(
	'name' => __('Whitespace Very Small', 'dt_themes'),
	'tooltip' => __('Use this module to add very small whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_small'] = array(
	'name' => __('Whitespace Small', 'dt_themes'),
	'tooltip' => __('Use this module to add small whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_medium'] = array(
	'name' => __('Whitespace Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_large'] = array(
	'name' => __('Whitespace Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_very_large'] = array(		
	'name' => __('Whitespace Very Large', 'dt_themes'),		
	'tooltip' => __('Use this module to add very large whitespace', 'dt_themes'),		
	'icon_class' => 'ico-divider',		
	'disable_resize' => true,		
);
/*  End of Others Modules */?>