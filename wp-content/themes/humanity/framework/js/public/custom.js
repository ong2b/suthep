jQuery.noConflict();
jQuery(document).ready(function($){

	"use strict";
	
	var isMobile = (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/Blackberry/i)) || (navigator.userAgent.match(/Windows Phone/i)) ? true : false;

	$("select").each(function(){
		if($(this).css('display') != 'none') {
			$(this).wrap( '<div class="selection-box"></div>' );
		}
	});
	
	//Menu Start
	function megaMenu() {
		var $px;
		var screenWidth = $(document).width(),
		containerWidth = $(".container").width(),
		containerMinuScreen = (screenWidth - containerWidth)/2;
		if( containerWidth == screenWidth ){

			$px = mytheme_urls.scroll == "disable" ? 45 : 25;
			
			$("li.menu-item-megamenu-parent .megamenu-child-container").each(function(){

				var ParentLeftPosition = $(this).parent("li.menu-item-megamenu-parent").offset().left,
				MegaMenuChildContainerWidth = $(this).width();

				if( (ParentLeftPosition + MegaMenuChildContainerWidth) > screenWidth ){
					var SwMinuOffset = screenWidth - ParentLeftPosition;
					var marginFromLeft = MegaMenuChildContainerWidth - SwMinuOffset;
					var marginFromLeftActual = (marginFromLeft) + $px;
					var marginLeftFromScreen = "-"+marginFromLeftActual+"px";
					$(this).css('left',marginLeftFromScreen);
				}

			});
		} else { 
			$px = 20;

			$("li.menu-item-megamenu-parent .megamenu-child-container").each(function(){
				var ParentLeftPosition = $(this).parent("li.menu-item-megamenu-parent").offset().left,
				MegaMenuChildContainerWidth = $(this).width();

				if( (ParentLeftPosition + MegaMenuChildContainerWidth) > containerWidth ){
					var marginFromLeft = ( ParentLeftPosition + MegaMenuChildContainerWidth ) - screenWidth;
					var marginLeftFromContainer = containerMinuScreen + marginFromLeft + $px;

					if( MegaMenuChildContainerWidth > containerWidth ){
						var MegaMinuContainer	= ( (MegaMenuChildContainerWidth - containerWidth)/2 ) + 10;
						var marginLeftFromContainerVal = marginLeftFromContainer - MegaMinuContainer;
						marginLeftFromContainerVal = "-"+marginLeftFromContainerVal+"px";
						$(this).css('left',marginLeftFromContainerVal);
					} else {
						marginLeftFromContainer = "-"+marginLeftFromContainer+"px";
						$(this).css('left',marginLeftFromContainer);
					}
				}

			});
		}
	}	
	megaMenu();
	
	//Menu Hover Start
	function menuHover() {
		$("li.menu-item-depth-0,li.menu-item-simple-parent ul li" ).hover(function(){
			//mouseover 
			if( $(this).find(".megamenu-child-container").length  ){
				$(this).find(".megamenu-child-container").stop().fadeIn('normal');
			} else {
				$(this).find("> ul.sub-menu").stop().fadeIn('normal');
			}
			
		},function(){
			//mouseout
			if( $(this).find(".megamenu-child-container").length ){
				$(this).find(".megamenu-child-container").stop().fadeOut('fast');
			} else {
				$(this).find('> ul.sub-menu').stop().fadeOut('fast');
			}
		});
	}
	//Menu Hover End*/
	
	//sticky menu
	if( mytheme_urls.stickynav === "enable") {
		$("#menu-container").sticky({ topSpacing: 0 });
	}
	
	//Mobile Menu
	$("#dt-menu-toggle").click(function( event ){
		event.preventDefault();
		var $menu;
		$menu = $("nav#main-menu").find("ul.menu:first");
		$menu.slideToggle(function(){
			$menu.css('overflow' , 'visible');
			$menu.toggleClass('menu-toggle-open');
		});
	});

	$(".dt-menu-expand").click(function(){
		if( $(this).hasClass("dt-mean-clicked") ){
			$(this).text("+");
			if( $(this).prev('ul').length ) {
				$(this).prev('ul').slideUp(300);
			} else {
				$(this).prev('.megamenu-child-container').find('ul:first').slideUp(300);
			}
		} else {
			$(this).text("-");
			if( $(this).prev('ul').length ) {
				$(this).prev('ul').slideDown(300);
			} else{
				$(this).prev('.megamenu-child-container').find('ul:first').slideDown(300);
			}
		}
		
		$(this).toggleClass("dt-mean-clicked");
		return false;
	});
	
	if( !isMobile ){
		var currentWidth = window.innerWidth || document.documentElement.clientWidth;
		if( currentWidth > 767 ){
			menuHover();
		}
	}
	//Mobile Menu End
	
	//Smart Resize Start
	$(window).smartresize(function(){
		megaMenu();
		var currentWidth = window.innerWidth || document.documentElement.clientWidth;
		if( !isMobile && (currentWidth > 767)  ){
			menuHover();
		}
	});
	//Smart Resize End

	$().UItoTop({ easingType: 'easeOutQuart' });

	//Nice Scroll
	var isMacLike = navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i)?true:false;
	if( mytheme_urls.scroll === "enable" && !isMacLike ) {
		jQuery("html").niceScroll({zindex:99999,cursorborder:"1px solid #424242"});
	}
	//Nice Scroll End
	
	//search box stars
	var container_width = $(".container").width()
	if(container_width <= '420'){
		$('#btnsearch').hide();
	}else{
		$('#search-submit').hide();

		$('#btnsearch').click(function()  {
			$("#s").css({width: '140px',height:'40px', 'padding-top':'0px','padding-bottom':'0px','padding-left':'5px' });
			$("header .search_form").css({width: '180px', height:'40px', padding:'0px' });
			$("#s").focus();
			$('#search-submit').show();
			$('#btnsearch').hide();
		});
		
		$('#s').blur(function()  {
		  if( $.trim($('#s').val() ) == '' ){
			$("#s").css({width: '0px',height:'0px', padding:'0px' });
			$("header .search_form").css({width: '40px'});
			$('#btnsearch').show();
			$('#search-submit').hide();
		  }
		});
	}

	//EVENTS CAROUSEL...
	if($(".event-carousel-wrapper").length) {
		$('.event-carousel').carouFredSel({
		responsive: true,
		auto: false,
		width: '100%',
		prev: '.event-prev-arrow',
		next: '.event-next-arrow',
		scroll: 1,
		items: {
			width: 940,
			height : 'auto',
			visible: {
			min: 1,
			max: 1
			}
		}				
	  });			
	}

	// PORTFOLIO START
	//PRETTYPHOTO...
	if($(".gallery").length) {
		$(".gallery a[data-gal^='prettyPhoto']").prettyPhoto({hook:'data-gal',animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false,social_tools: false,deeplinking:false});		
	}
	
	//Gallery Single page Slider
	if( ($(".portfolio-slider").length) && ($(".portfolio-slider li").length > 1) ) {
		$('.portfolio-slider').bxSlider({ auto:false, video:true, useCSS:false, pagerCustom: '#portfolio-thumb', autoHover:true, adaptiveHeight:true });
	}//Gallery Single page Slider
	
	
	$(window).load(function() {

		//Portfolio isotope
		var $container = $('.gallery-container');
		
		if($('#primary').hasClass('page-with-sidebar')){
			var $width = 17;
		}else if( $(".gallery-container").next(".dt-sc-one-half") || $(".gallery-container").next(".dt-sc-one-fourth") ){
			var $width = 23;
		}else{
			var $width = 25;
		}

		if( $container.length) {
			
			$(window).smartresize(function(){
				$container.css({overflow:'hidden'}).isotope({itemSelector : '.column',masonry: { gutterWidth: $width } });
			});
			
			$container.isotope({
			  filter: '*',
			  masonry: { gutterWidth: $width },
			  animationOptions: { duration: 750, easing: 'linear', queue: false  }
			});
			
		}
		
		if($("div.sorting-container").length){
			$("div.sorting-container a").click(function(){
				$("div.sorting-container a").removeClass("active-sort");
				var selector = $(this).attr('data-filter');
				$(this).addClass("active-sort");
				$container.isotope({
					filter: selector,
					masonry: { gutterWidth: $width },
					animationOptions: { duration:750, easing: 'linear',  queue: false }
				});
			return false;	
			});
		}
		//Portfolio isotope End
	});
	// PORTFOLIO END
});

// animate css + jquery inview configuration
(function ($) {
    "use strict";
    $(".animate").each(function () {
        $(this).one('inview', function (event, visible) {
            var $delay = "";
            var $this = $(this),
                $animation = ($this.data("animation") !== undefined) ? $this.data("animation") : "slideUp";
            $delay = ($this.data("delay") !== undefined) ? $this.data("delay") : 300;

            if (visible === true) {
                setTimeout(function () {
                    $this.addClass($animation);
                }, $delay);
            } else {
                setTimeout(function () {
                    $this.removeClass($animation);
                }, $delay);
            }
        });
    });
})(jQuery);