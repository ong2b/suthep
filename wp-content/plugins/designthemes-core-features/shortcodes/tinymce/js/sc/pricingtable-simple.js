scnShortcodeMeta = {
	attributes : [ 
	 {
		label : "Columns",
		id : "content",
		controlType : "column-control"
	},
	{
		label : 'Animation',
		id : 'data_animation',
		help : 'Choose one of animation effects.',
		controlType : "select-control",
		selectValues : [ 'None','flash','shake','bounce','tada','swing','wobble','pulse','flip','flipInX','flipOutX','flipInY','flipOutY','fadeIn','fadeInUp','fadeInDown','fadeInLeft','fadeInRight','fadeInUpBig','fadeInDownBig','fadeInLeftBig','fadeInRightBig','fadeOut','fadeOutUp','fadeOutDown','fadeOutLeft','fadeOutRight','fadeOutUpBig','fadeOutDownBig','fadeOutLeftBig','fadeOutRightBig','bounceIn','bounceInUp','bounceInDown','bounceInLeft','bounceInRight','bounceOut','bounceOutUp','bounceOutDown','bounceOutLeft','bounceOutRight','rotateIn','rotateInUpLeft','rotateInDownLeft','rotateInUpRight','rotateInDownRight','rotateOut','rotateOutUpLeft','rotateOutDownLeft','rotateOutUpRight','rotateOutDownRight','hinge','rollIn','rollOut','lightSpeedIn','lightSpeedOut'],
		defaultValue : 'None',
		defaultText : 'None'
	} ],
	customMakeShortcode : function(b) {
		var a = b.data;
		var animation = b.data_animation;

		var colors = ['green','brown','cyan','ferngreen','blue','ocean','purple','pink','red','grey','steel-blue','orange','yellow','aqua','turquoise','ruby','pearl','mustard','violet','teal','crimsonred','sandal','cream','lavender','palebrown'];

		if (!a)
			return "";
		b = a.numColumns;
		var c = a.content;
		a = [ "0", "one", "two", "three", "four", "five", 'six' ];
		var x = [ "0", "0", "half", "third", "fourth", "fifth", 'sixth' ];
		var f = x[b];
		c = c.split("|");
		var g = "";
		for ( var h in c) {
			var d = jQuery.trim(c[h]);
			if (d.length > 0) {
				var e = a[d.length] + '_' + f;
				if (b == 4 && d.length == 2)
					e = "one_half";

				var z = e;
				var selected = "";
				if (h == 0) {
					e += " first";
					selected = "selected";
				}

				var variation = colors[Math.floor(Math.random() * colors.length)];

				g += "<br>[dt_sc_"
						+ e
						+ "] "
						+ "<br>[dt_sc_pricing_table_item title='Title' currency='$' price='15' per='month' donate_now_text='Donate Now' variation='"+variation+"' heading='gift'  button_text='Buy Now' button_link='#' button_color='grey' data_animation='"+animation +"' data_animation_delay='300' "
						+ selected + "]<br>" + "<ul>" + "<li>Text</li>"
						+ "<li>Text</li>" + "<li>Text</li>" + "</ul>"
						+ "[/dt_sc_pricing_table_item]<br>" + " [/dt_sc_" + z
						+ "] <br/>";
			}
		}

		return "[dt_sc_pricing_table ]<br>" + g + "<br>[/dt_sc_pricing_table]";
	}
};