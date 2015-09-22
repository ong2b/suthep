scnShortcodeMeta = {
	attributes : [ {
		label : "Style",
		id : "type",
		help : "Select which type of iconbox you would like to use.",
		controlType : "select-control",
		selectValues : [ 'type1', 'type2', 'type3'],
		defaultValue : 'type1',
		defaultText : 'type1'
	}, {
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
		var a = b.data, type = b.type, ctype = type;

		type = ' type =" '+type+'"';
		var animation = b.data_animation;
		
		var icons = ["bell","cogs","leaf","trophy","flag","home","key"];

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
				}
				
			var current_icon = icons[Math.floor(Math.random() * icons.length)];
	
			if( ctype === "type3") {
				g += "[dt_sc_"
				+ e
				+ "] <br/>"
				+ "[dt_sc_icon_box " + type + " fontawesome_icon='"+current_icon +"' custom_icon='' title='Asit amet' link='#' button_type='without-icon' button_link='#' button_size='small' button_target='_blank' button_text='view & browse' data_animation='"+animation +"' data_delay='300' ]<br>"
				+ ' <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis placerat urna. Nulla nulla diam, adipiscing non ornare non, commodo </p>';
			g += " [/dt_sc_icon_box]"
				+" <br> [/dt_sc_" + z
				+ "] <br/>";
			}else {
			g += "[dt_sc_"
				+ e
				+ "] <br/>"
				+ "[dt_sc_icon_box " + type + " fontawesome_icon='"+current_icon +"' custom_icon='' title='Asit amet' link='#'  data_animation='"+animation +"' data_delay='300']<br>"
				+ ' <p> Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>';
			g += " [/dt_sc_icon_box]"
				+" <br> [/dt_sc_" + z
				+ "] <br/>";
			}
		  }
		}

		return g;
	}
};