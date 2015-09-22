(function() {

	var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
				+ " adipiscing elit. Morbi hendrerit elit turpis,"
				+ " a porttitor tellus sollicitudin at."
				+ " Class aptent taciti sociosqu ad litora "
				+ " torquent per conubia nostra,"
				+ " per inceptos himenaeos.";

	var dummy_tabs = '<br>[dt_sc_tab title="Tab 1"]'
					+ "<br> <h5> Title </h5>" + "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 2"]' + "<br>"
					+ "<br> <h5> Title </h5>" + "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 3"]' + "<br>"
					+ "<br> <h5> Title </h5>" + "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]<br>';

	var testimonal = '[dt_sc_testimonial name="John Doe" role="Senior Officer" image="http://placehold.it/78" data_animation="rotateInDownLeft"]'+dummy_conent+'[/dt_sc_testimonial]';

	// add DTCoreShortcodePlugin plugin
	tinymce.PluginManager.add("DTCoreShortcodePlugin",function( editor , url ) {
		
		editor.on('init', function() {

			editor.addCommand("scnOpenDialog", function(obj) {
				scnSelectedShortcodeType = obj.identifier;
				jQuery.get(url + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=800"+ "&height=400&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text("Customize the " + obj.title + " Shortcode");
				});
			});
		});
	

		editor.addButton('designthemes_sc_button', {
			title : "DT Shortcodes",
			icon : "dt-icon",
			type: 'menubutton',
			menu: [

				{ text : 'Accordion',
					menu: [
						{ text: 'Default', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+"<br>[/dt_sc_accordion_group]";
								editor.insertContent(content);
							}
						},
						
						{ text: 'Framed', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle_framed title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+"<br>[/dt_sc_accordion_group]";
							editor.insertContent(content);
							}
						}
					]
						
				},


				{ text : 'Button',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "button"});
					}
				},

				{ text: 'Block Quote',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "blockquote"});
					}
				},

				{ text: 'Call Out Button', menu :[
					
					{ text: 'Without Icon', onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "callout"});
					}},
					
					{ text: 'With Icon', onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "calloutwithicon"});
					}},
				
				] },
				
				
				{ text: 'Column Layout', 
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "column"});
					}
				},

				{ text : 'Contact Info', menu :[

					{ text: 'Address', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_address icon="" title="Address" line1="No: 58 A, East Madison St" line2="Baltimore, MD" line3="USA"/]');
					}},

					{ text: 'Contact', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_contact icon="" title="" detail="" /]');
					}},

					{ text: 'Email', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_email title="Email" icon="" emailid="yourname@somemail.com" /]');
					}},
				] },

				{ text : 'Donut Chart', menu:[

					{ text: 'Small', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_small title="Lorem" bgcolor="#FFFFFF" fgcolor="#4bbcd7" percent="70"/]');
					} },


					{ text: 'Medium', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_medium title="Lorem" bgcolor="#FFFFFF" fgcolor="#7aa127" percent="65"/]');
					} },


					{ text: 'Large', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_large title="Lorem" bgcolor="#FFFFFF" fgcolor="#a23b6f" percent="50"/]');
					} },
				] },


				{ text : 'Dividers', menu:[

					{ text: 'Clear', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_clear]');
					}},

					{ text: 'Bordered Horizontal Rule', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_border]');
					}},

					{ text: 'Horizontal Rule', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr]');
					}},

					{ text: 'Horizontal Rule Medium', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_medium]');
					}},

					{ text: 'Horizontal Rule Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_large]');
					}},

					{ text: 'Horizontal Rule with top link', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr top]');
					}},

					{ text: 'Whitespace', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible]');
					}},

					{ text: 'Whitespace Very Small', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_very_small]');
					}},
					
					{ text: 'Whitespace Small', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_small]');
					}},

					{ text: 'Whitespace Medium', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_medium]');
					}},

					{ text: 'Whitespace Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_large]');
					}},
					
					{ text: 'Whitespace Very Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_very_large]');
					}},
				] },
				
				{
				  text: 'Events', 
				  menu: [
					  {
						  text: 'Upcoming Events Carousel',
						  onclick: function(){
							  editor.selection.setContent('[dt_sc_upcoming_events_carousel limit="4" excerpt_length="30"/]');
						  }
					  },
				  ]						
				},

				{ text: 'Gallery',
					menu:[
						{ text: 'Single',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_gallery_item id=""/]');								
							}
						},
						{ text: 'Recent',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_recent_gallery_items columns="2/3/4" space="yes/no" count="-1"/]');
							}
						},
						{ text: 'From Category',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_gallery_items_from_category category_id="9,10" columns="2/3/4" space="yes/no" count="-1"/]');
							}
						},
					]
				}, 

				{ text: 'Icon Boxes' , 
					onclick: function(e){
					  e.stopPropagation();
					  tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "iconbox"});
					}
				},
				
				{ text: 'Full Width Section', 
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "fullwidth"});
					}
				},

				{ text : 'Lists', menu:[

					{ text:'Ordered List',
						onclick: function(e){
							e.stopPropagation();
							tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "orderedlist"});
					}},
					
					{ text:'Unordered List',
						onclick: function(e){
							e.stopPropagation();
							tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "unorderedlist"});
					}},
					
				] },
				
				{ text: 'Post',
					menu:[
						{ text:'Recent Posts',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('<br>[dt_sc_recent_post count="2" read_more_text="Read More" excerpt_length="10" show_meta="yes/no"/]');
							}
						},
					]
				},

				{ text:'Pull Quote',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pullquote"});
					}
				},

				{ text:'Pricing Table',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pricingtable-simple"});
					}
				},

				{ text: 'Progress Bar',
					menu:[

						{ text:'Active', 
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="45" type="progress-striped-active" color="#7aa127"] consectetur [/dt_sc_progressbar]');
							}
						},

						{ text:'Standard',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="85" type="standard" color="#7aa127"] consectetur [/dt_sc_progressbar]');
							}
						},

						{ text:'Stripe',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="75" type="progress-striped" color="#7aa127"] consectetur[/dt_sc_progressbar]');
							}
						},
					]
				},

				{ text: 'Tabs',
					menu:[

						{ text: 'Default',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_tabs]' + dummy_tabs + "[/dt_sc_tabs]");
							}
						},

						{ text:'Framed',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent("[dt_sc_tabs_framed]" + dummy_tabs+ "[/dt_sc_tabs_framed]");
							}
						}
					]
				},
				
				{ text: 'Title',
					menu:[
						{
							text: 'Title - H1',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h1 class="" title="Enter H1 Title"]');
							}
						},

						{
							text: 'Title - H2',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h2 class="" title="Enter H2 Title"]');
							}
						},
						
						{
							text: 'Title - H3',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h3 class="" title="Enter H3 Title"]');
							}
						},
						
						{
							text: 'Title - H4',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h4 class="" title="Enter H4 Title"]');
							}
						},
						
						{
							text: 'Title - H5',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h5 class="" title="Enter H5 Title"]');
							}
						},
						
						{
							text: 'Title - H6',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h6 class="" title="Enter H6 Title"]');
							}
						},
					]
				},
				
				{ text: 'Title With Icon',
					menu:[
						{
							text: 'Title With Icon - H1',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h1_title_with_icon type="type1/type2" class="" title="Enter H1 Title" icon="star"]');
							}
						},

						{
							text: 'Title With Icon - H2',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h2_title_with_icon type="type1/type2" class="" title="Enter H2 Title" icon="star"]');
							}
						},
						
						{
							text: 'Title With Icon - H3',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h3_title_with_icon type="type1/type2" class="" title="Enter H3 Title" icon="star"]');
							}
						},
						
						{
							text: 'Title With Icon - H4',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h4_title_with_icon type="type1/type2" class="" title="Enter H4 Title" icon="star"]');
							}
						},
						
						{
							text: 'Title With Icon - H5',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h5_title_with_icon type="type1/type2" class="" title="Enter H5 Title" icon="star"]');
							}
						},
						
						{
							text: 'Title With Icon - H6',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h6_title_with_icon type="type1/type2" class="" title="Enter H6 Title" icon="star"]');
							}
						},
					]
				},

				{ text:'Title Box',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "box"});
					}
				},

				{ text: 'Toggle',
					menu: [
						{ 	text: 'Default', onclick: function(e){
							  e.stopPropagation();
							  editor.insertContent('[dt_sc_toggle title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
									  +'<br>[dt_sc_toggle title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
									  +'<br>[dt_sc_toggle title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]");
						  	}
						},
							{
							text: 'Framed',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_toggle_framed title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]");
							}
						},
					]
				},

				{ text:'Tool tip',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "tooltip"});
					}
				},

				{ text:'Others',
					menu:[

						{ text:'Team',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_team name="DesignThemes" role="Chief Programmer" image="http://placehold.it/140" twitter="#" facebook="#" google="#" linkedin="#" variation="ash"]<br><p>Saleem naijar kaasram eerie can be disbursed in the wofl.</p>[/dt_sc_team]');
							}
						},

						{ text:'Testimonial',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent(testimonal);
							}
						},

						{ text:'Testimonial Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_testimonial_carousel]<br>'
									+'<ul>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'</ul>'
									+'<br>[/dt_sc_testimonial_carousel]');
							}
						},
						
						{ text:'Social Icons',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_social/]');
							}
						},

						{ text:'Sponsor Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h2 title="Our Sponsors"] <br> [dt_sc_carousel]<br>'
								+'<ul>'
								+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 1" title="Client 1"/></a></li>'
								+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 2" title="Client 2"/></a></li>'
								+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 3" title="Client 3"/></a></li>'
								+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 4" title="Client 4"/></a></li>'
								+'<li><a href="#"><img src="http://placehold.it/182x54" alt="Client 5" title="Client 5"/></a></li>'
								+'</ul>'
								+'<br>[/dt_sc_carousel]<br>');
							}
						},
						{ text:'Curved Title',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_curved_title/]');
							}
						},
					]
				}
			]
		});
		
	});
})();