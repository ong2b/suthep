(function() {
	tinymce.create("tinymce.plugins.DTCoreShortcodePlugin", {

		init : function(d, e) {

			d.addCommand("scnOpenDialog", function(a, c) {
				scnSelectedShortcodeType = c.identifier;
				jQuery.get(e + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=" + f
							+ "&height=" + b + "&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text(
							"Customize the " + c.title + " Shortcode");
				});

			});

		},

		getInfo : function() {
			return {
				longname : 'DesignThemes Core Shortcodes',
				author : 'DesignThemes',
				authorurl : 'http://themeforest.net/user/designthemes',
				infourl : '',
				version : "1.0"
			};

		},

		createControl : function(btn, e) {

			var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
					+ " adipiscing elit. Morbi hendrerit elit turpis,"
					+ " a porttitor tellus sollicitudin at."
					+ " Class aptent taciti sociosqu ad litora "
					+ " torquent per conubia nostra,"
					+ " per inceptos himenaeos.",
					
			dummy_tabs = '<br>[dt_sc_tab title="Tab 1"]'
					+ "<br> <h5> Title </h5>" + "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 2"]' + "<br>"
					+ "<br> <h5> Title </h5>" + "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 3"]' + "<br>"
					+ "<br> <h5> Title </h5>" + "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]<br>';

			if ("designthemes_sc_button" === btn) {

				var a = this;
				var btn = e.createSplitButton("designthemes_sc_buttons",
						{
							title : "Insert Shortcode",
							image : DTCorePlugin.tinymce_folder
									+ "/images/dt-icon.png",
							icons : false
						});

				btn.onRenderMenu
						.add(function(c, b) {

							/* Accordion */
							c = b.addMenu({
								title : "Accordion"
							});
							a.addImmediate(c, "Default",
								"[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+"<br>[/dt_sc_accordion_group]");
							 									
							a.addImmediate(c, "Framed",
								"[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle_framed title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+"<br>[/dt_sc_accordion_group]");

							a.addWithDialog(b, "Button", "button");
							a.addWithDialog(b, "Blockquote", "blockquote");
							
							/* Callout Button */
							a.addWithDialog(b, "Callout Button", "callout");
							a.addWithDialog(b, "Callout Button With Icon", "calloutwithicon");
							
							a.addWithDialog(b, "Column Layout", "column");
							
							/* Contact Info */
							c = b.addMenu({
								title: "Contact Info"
							});
							a.addImmediate(c, "Address",'<br>[dt_sc_address icon="" title="Address" line1="No: 58 A, East Madison St" line2="Baltimore, MD" line3="USA"/]<br>');
							a.addImmediate(c, "Contact",'<br>[dt_sc_contact phone="+1 200 258 2145" /]<br>');
							a.addImmediate(c, "Email",'<br>[dt_sc_email emailid="yourname@somemail.com" /]<br>');
							
							/* Donutchart */
							c = b.addMenu({
								title: "Donut Chart"
							});
							a.addImmediate(c, "Small",'<br>[dt_sc_donutchart_small title="Lorem" bgcolor="#FFFFFF" fgcolor="#4bbcd7" percent="70" /]<br>');
							a.addImmediate(c, "Medium",'<br>[dt_sc_donutchart_medium title="Lorem" bgcolor="#FFFFFF" fgcolor="#7aa127" percent="65" /]<br>');
							a.addImmediate(c, "Large",'<br>[dt_sc_donutchart_large title="Lorem" bgcolor="#FFFFFF" fgcolor="#a23b6f" percent="50" /]<br>');
							
							

							/* Dividers Shortcodes */
							c = b.addMenu({
								title : "Dividers"
							});
							a.addImmediate(c,"Clear","<br>[dt_sc_clear]<br>");
							a.addImmediate(c, "Bordered Horizontal Rule","<br>[dt_sc_hr_border] <br>");
							a.addImmediate(c, "Horizontal Rule","<br>[dt_sc_hr] <br>");
							a.addImmediate(c, "Horizontal Rule Medium","<br>[dt_sc_hr_medium] <br>");
							a.addImmediate(c, "Horizontal Rule Large","<br>[dt_sc_hr_large] <br>");
							a.addImmediate(c, "Horizontal Rule with top link","<br>[dt_sc_hr top] <br>");
							a.addImmediate(c, "Whitespace","<br>[dt_sc_hr_invisible] <br>");
							a.addImmediate(c, "Whitespace Very Small","<br>[dt_sc_hr_invisible_very_small] <br>");
							a.addImmediate(c, "Whitespace Small","<br>[dt_sc_hr_invisible_small] <br>");
							a.addImmediate(c, "Whitespace Medium","<br>[dt_sc_hr_invisible_medium] <br>");
							a.addImmediate(c, "Whitespace Large","<br>[dt_sc_hr_invisible_large] <br>");
							a.addImmediate(c, "Whitespace Very Large","<br>[dt_sc_hr_invisible_very_large] <br>");

							/* Events */
							c = b.addMenu({
								title : "Events"
							});
							
							a.addImmediate(c, "Upcoming Events", '[dt_sc_upcoming_program_events limit="1" excerpt_length="18"/]');
		
							/* Gallery */
							c = b.addMenu({title : "Gallery"});
							a.addImmediate(c,"Single",'<br>[dt_sc_gallery_item id=""/]<br>');
							a.addImmediate(c,"Recent",'<br>[dt_sc_recent_gallery_items columns="2/3/4" space="yes/no" count="-1"/]<br>');
							a.addImmediate(c,"From Category",'<br>[dt_sc_gallery_items_from_category category_id="9,10" columns="2/3/4" space="yes/no" count="-1"/]<br>');

							/* Icon Box */
							a.addWithDialog(b, "Icon Boxes", "iconbox");
							
							/* Fullwidth section */
							a.addWithDialog(b, "Icon Boxes", "fullwidth");


							/* List Shortcodes */
							c = b.addMenu({
								title : "Lists"
							});
							a.addWithDialog(c, "Ordered List", "orderedlist");
							a.addWithDialog(c, "Unordered List","unorderedlist");
							
							/* Recent Post */
							a.addImmediate(c, "Recent Posts","<br>[dt_sc_recent_post count='2' columns='2' read_more_text='Read More' excerpt_length='10' show_meta='yes/no'/]<br>");
							
							/*Pullquotes*/							
							a.addWithDialog(b, "Pullquote", "pullquote");
							

							/*Pricing Table*/
							a.addWithDialog(b, "Pricing Table", "pricingtable-simple");
							
							/* Progressbar*/
							c = b.addMenu({ title:"Progress Bar"});
							a.addImmediate(c, "Standard","<br>[dt_sc_progressbar value='85' type='standard' color='#9c59b6'] consectetur[/dt_sc_progressbar]<br>");
							a.addImmediate(c, "Stripe","<br>[dt_sc_progressbar value='75' type='progress-striped' color=''] consectetur[/dt_sc_progressbar]<br>");
							a.addImmediate(c, "Active","<br>[dt_sc_progressbar value='45' type='progress-striped-active'] consectetur[/dt_sc_progressbar]<br>");
							
							/* Tab */
							c = b.addMenu({
								title : "Tabs"
							});
							a.addImmediate(c, "Default",
									"[dt_sc_tabs]" + dummy_tabs
											+ "[/dt_sc_tabs]");

							a.addImmediate(c, "Framed",
									"[dt_sc_tabs_framed]" + dummy_tabs
											+ "[/dt_sc_tabs_framed]");

							/* Title */
							c = b.addMenu({
								title : "Title"
							});
							a.addImmediate(c,"H1","[dt_sc_h1 class='' title='Enter H1 Title']");
							a.addImmediate(c,"H2","[dt_sc_h2 class='' title='Enter H2 Title']");
							a.addImmediate(c,"H3","[dt_sc_h3 class='' title='Enter H3 Title']");
							a.addImmediate(c,"H4","[dt_sc_h4 class='' title='Enter H4 Title']");
							a.addImmediate(c,"H5","[dt_sc_h5 class='' title='Enter H5 Title']");
							a.addImmediate(c,"H6","[dt_sc_h6 class='' title='Enter H6 Title']");
							
							/* Title With icon */
							c = b.addMenu({
								title : "Title With Icon"
							});
							a.addImmediate(c,"H1","[dt_sc_title_with_icon type='type1/type2' class='' title='Enter H1 Title' icon='']");
							a.addImmediate(c,"H2","[dt_sc_title_with_icon type='type1/type2' class='' title='Enter H2 Title' icon='']");
							a.addImmediate(c,"H3","[dt_sc_title_with_icon type='type1/type2' class='' title='Enter H3 Title' icon='']");
							a.addImmediate(c,"H4","[dt_sc_title_with_icon type='type1/type2' class='' title='Enter H4 Title' icon='']");
							a.addImmediate(c,"H5","[dt_sc_title_with_icon type='type1/type2' class='' title='Enter H5 Title' icon='']");
							a.addImmediate(c,"H6","[dt_sc_title_with_icon type='type1/type2' class='' title='Enter H6 Title' icon='']");

							
							a.addWithDialog(b, "Titled Box", "box");				

							/* Toggle */
							a.addImmediate(c, "Toggle",
								'[dt_sc_toggle title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]");
							
							/* Tooltip Shortcodes */
							a.addWithDialog(b, "Tooltip", "tooltip");							

							c = b.addMenu({
								title : "Others"
							});
							
						
							a.addImmediate(c, "Team",'<br>[dt_sc_team name="DesignThemes" role="Team Organizer" image="http://placehold.it/140" twitter="#" facebook="#" google="#" linkedin="#" variation="ash"]<br><p>Saleem naijar kaasram eerie can be disbursed in the wofl like of a fox that is her thing smaoasa lase lemedds laasd pamade eleifend sapien.</p>[/dt_sc_team]<br>');
							
							var testimonal = '[dt_sc_testimonial name="John Doe" role="Senior Officer" role="Cambridge Telcecom" data_animation="rotateInDownLeft"]'+dummy_conent+'[/dt_sc_testimonial]';
							a.addImmediate(c, "Testimonial",'<br>'+testimonal+'<br>');
							a.addImmediate(c, "Testimonial Carousel",'<br>[dt_sc_testimonial_carousel]<br>'
										+'<ul>'
										+'<li>'+testimonal+'</li>'
										+'<li>'+testimonal+'</li>'
										+'<li>'+testimonal+'</li>'
										+'<li>'+testimonal+'</li>'
										+'</ul>'
										+'<br>[/dt_sc_testimonial_carousel]<br>');

							a.addImmediate(c, "Social Icons",'<br>[dt_sc_social/]<br>');
							a.addImmediate(c, "Sponsor Carousel",'<br>[dt_sc_h2 title="Our Sponsors"] <br> [dt_sc_carousel]<br>'
										+'<ul>'
										+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 1" title="Client 1"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 2" title="Client 2"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 3" title="Client 3"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 4" title="Client 4"/></a></li>'
										+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 5" title="Client 5"/></a></li>'
										+'</ul>'
										+'<br>[/dt_sc_carousel] <br>');
							a.addImmediate(c, "Curved Title",'<br>[dt_sc_curved_title/]<br>');
						});

				return btn;

			}

		},

		addImmediate : function(d, e, a) {
			d.add({
				title : e,
				onclick : function() {
					tinyMCE.activeEditor.execCommand("mceInsertContent", false,
							a);
				}
			});
		},

		addWithDialog : function(d, e, a) {
			d.add({
				title : e,
				onclick : function() {
					tinyMCE.activeEditor.execCommand("scnOpenDialog", false, {
						title : e,
						identifier : a
					});
				}
			});

		}

	});

	// add DTCoreShortcodePlugin plugin
	tinymce.PluginManager.add("DTCoreShortcodePlugin",
			tinymce.plugins.DTCoreShortcodePlugin);
})();