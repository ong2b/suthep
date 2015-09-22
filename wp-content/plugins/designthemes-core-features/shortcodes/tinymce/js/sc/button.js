scnShortcodeMeta = {
	attributes : [
			{
				label : "Style",
				id : "type",
				help : "Select which type of button you would like to use.",
				controlType : "select-control",
				selectValues : [ 'with-icon', 'without-icon'],
				defaultValue : 'with-icon',
				defaultText : 'with-icon'
			},

			{
				label : "Icon",
				id : "icon",
				help : "Add Font Awesome Icon to button ( fa-home) ",
			},

			{
				label : "Title",
				id : "content",
				help : "The button title.",
			},
			{
				label : "Link",
				id : "link",
				help : "Optional link (e.g. http://google.com).",
			},
			{
				label : "Size",
				id : "size",
				help : "Values: &lt;empty&gt; for normal size, small, large, xl.",
				controlType : "select-control",
				selectValues : [ 'small', 'medium', 'large', 'xlarge' ],
				defaultValue : 'medium',
				defaultText : 'medium (Default)'
			},
			{
				label : 'Variation',
				id : 'variation',
				help : 'Choose one of our predefined color skins to use with your list.',
				controlType : "select-control",
				selectValues : [ '','green','brown','cyan','ferngreen','blue','ocean','purple','pink','red','grey','steel-blue','orange','yellow','aqua','turquoise','ruby','pearl','mustard','violet','teal','crimsonred','sandal','cream','lavender','palebrown'],
				defaultValue : '',
				defaultText : 'Select'
			},
			{
				label : "Text Color",
				id : "textcolor",
				help : 'You can change the color of the text that appears on your button.',
				controlType : "color-control"
			},
			{
				label : 'Animation',
				id : 'data_animation',
				help : 'Choose one of animation effects.',
				controlType : "select-control",
				selectValues : [ '','flash','shake','bounce','tada','swing','wobble','pulse','flip','flipInX','flipOutX','flipInY','flipOutY','fadeIn','fadeInUp','fadeInDown','fadeInLeft','fadeInRight','fadeInUpBig','fadeInDownBig','fadeInLeftBig','fadeInRightBig','fadeOut','fadeOutUp','fadeOutDown','fadeOutLeft','fadeOutRight','fadeOutUpBig','fadeOutDownBig','fadeOutLeftBig','fadeOutRightBig','bounceIn','bounceInUp','bounceInDown','bounceInLeft','bounceInRight','bounceOut','bounceOutUp','bounceOutDown','bounceOutLeft','bounceOutRight','rotateIn','rotateInUpLeft','rotateInDownLeft','rotateInUpRight','rotateInDownRight','rotateOut','rotateOutUpLeft','rotateOutDownLeft','rotateOutUpRight','rotateOutDownRight','hinge','rollIn','rollOut','lightSpeedIn','lightSpeedOut'],
				defaultValue : '',
				defaultText : 'Select'
			},
			{
				label : "Animation Delay",
				id : "data_delay",
				help : "Enter animation delay duration ex: 300.",
			},
			{
				label : "Target",
				id : 'target',
				help : 'Setting the target to _blank will open your page in a new tab when the reader clicks on the button.',
				controlType : "select-control",
				selectValues : [ '_blank', '_new', '_parent', '_self', '_top' ],
				defaultValue : '_blank',
				defaultText : '_blank (Default)'
			},
			{
				label : "Custom Class",
				id : "class",
				help : "Add Custom Class name.",
			}, ],
	defaultContent : "Click me!",
	shortcode : "dt_sc_button"

};