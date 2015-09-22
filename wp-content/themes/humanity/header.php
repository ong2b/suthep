<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<?php dttheme_is_mobile_view(); ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--><?php
	global $dt_allowed_html_tags;
    if( dttheme_option('integration', 'enable-header-code') ):
		 echo "<script type='text/javascript'>".stripslashes(dttheme_option('integration', 'header-code'))."</script>";
    endif;
    wp_head();?>
</head>
<?php //$body_class_arg  = ( dttheme_option("appearance","layout") === "boxed" ) ? array("boxed") : array(); ?>
<body <?php if(is_page_template('tpl-donation.php') ): body_class('doodle-image'); else: body_class(); endif; ?>>
<?php $picker = dttheme_option("general","disable-picker");
    if(!isset($picker) && !is_user_logged_in() ):   dttheme_color_picker(); endif;?>
    
    <?php if ( get_header_image() ) : ?>
            <div id="customize-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
                </a>
            </div>
	<?php endif; ?>
    
<!--wrapper starts-->
    <div class="wrapper">
    	<!--header starts-->
		 <div class="inner-wrapper">
           <header>
             <!--header_top starts-->
               <div class="header_top">
            	<!--container starts-->
                <div class="container">
                    <div class="logo">	<?php
						if( dttheme_option('general', 'logo') ):
							$url = dttheme_option('general', 'logo-url');
							$url = !empty( $url ) ? $url : IAMD_BASE_URL."images/logo.png";
							
							$retina_url = dttheme_option('general','retina-logo-url');
							$retina_url = !empty($retina_url) ? $retina_url : IAMD_BASE_URL."images/logo@2x.png";
							
							$width = dttheme_option('general','retina-logo-width');
							$width = !empty($width) ? $width."px;" : "189px";
							
							$height = dttheme_option('general','retina-logo-height');
							$height = !empty($height) ? $height."px;" : "50px";?>
							<a href="<?php echo home_url();?>" title="<?php echo dttheme_blog_title();?>">
                                <img class="normal_logo" src="<?php echo esc_url($url);?>" alt="<?php echo dttheme_blog_title(); ?>" title="<?php echo dttheme_blog_title(); ?>" />
                                <img class="retina_logo" src="<?php echo esc_url($retina_url);?>" alt="<?php echo dttheme_blog_title();?>"
                                     title="<?php echo dttheme_blog_title(); ?>" style="width:<?php echo esc_attr($width);?>; height:<?php echo esc_attr($height);?>;"/>
                            </a><?php
						else:?>
							<h2><a href="<?php echo home_url();?>" title="<?php echo dttheme_blog_title();?>"><?php echo do_shortcode(get_option('blogname')); ?></a></h2><?php
						endif;?>
                    </div>
                    <div class="alignright">
                    <?php echo '<p>'.get_bloginfo ( 'description' ).'</p>'; ?>
                    <?php $donate_now_button_link = dttheme_option('appearance','donate-button-link'); ?>
                    	<a href="<?php if($donate_now_button_link != '' ): echo esc_url($donate_now_button_link); else: echo home_url(); endif;?>"><?php _e('Donate Now','dt_themes');?></a>
                        <?php get_search_form(); ?>
                    </div>
                 </div>
                 <!--container ends-->
               </div>
               <!--header_top ends-->
                    
        <!--menu-container starts-->
        <div id="menu-container">
          <!--menu starts-->
          <div class="container">
            <nav class="menu" id="main-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">
                        <?php _e('Menu','dt_themes');?>
                        <span class="dt-menu-toggle-icon"></span>
                </div>
            <?php
					$primaryMenu = NULL;
					if (function_exists('wp_nav_menu')) :
						  $primaryMenu = wp_nav_menu(array('menu_id'=>'','menu_class'=>'menu','fallback_cb'=>'dttheme_default_navigation','echo'=>false,'container'=>false,'walker' => new DTFrontEndMenuWalker()));
					endif;

					echo !empty($primaryMenu) ?	$primaryMenu: ''; ?>
            </nav>
          </div>
            <!--menu ends-->
         </div>
         <!--menu-container ends-->
      </header>
      <!--header ends-->
     
        <!--main starts-->
        <div class="main">
        
            <!--slider starts-->
			<?php  #Slider Section
                    if( is_page() ):
                        global $post;
                        dttheme_slider_section( $post->ID); 
                    endif;  ?>     
            <!--slider ends-->  

            <?php if(is_front_page()) {  
                     if( dttheme_option('general', 'disable-welcome-text') ){
             
                        if( (strlen(trim(do_shortcode(stripslashes_deep(dttheme_option('general', 'welcome-text')))))) > 0) {?>
                            
                            <!--full-width-background starts-->
                            <div class="full-width-background"> 
                              <!--container starts-->
                              <div class="container">
                                <?php 
                                $welcome_txt_code = '';
                                $welcome_txt_code = do_shortcode(stripslashes_deep(dttheme_option('general', 'welcome-text'))); 
                                echo !empty($welcome_txt_code) ? $welcome_txt_code : ''; ?>
                              </div>
                               <!--container ends-->
                            </div>
                            <!--full-width-background ends-->
                        
            <?php  } } } ?>

            <!--container starts-->
            <?php if( !is_page_template( 'tpl-fullwidth.php' ) ):?>
                    <!-- ** Container ** -->
                    <div class="container">
            <?php endif;  
             			$disable_breadcrumb = dttheme_option('general','disable-breadcrumb');
						
							if( empty($disable_breadcrumb) and ( !is_front_page() ) ):
								global $post;
								$show_slider = '';
								if( !(is_null($post)) ) {
									$tpl_default_settings = get_post_meta($post->ID, '_tpl_default_settings', TRUE);
									$show_slider = isset($tpl_default_settings['show_slider']) ? TRUE : FALSE;
								}
							
								if(!is_page_template('tpl-home.php') && ($show_slider != TRUE ) ):
									echo '<!-- **Breadcrumb** -->';
									echo '<section class="breadcrumb-section">';	
											if( is_page_template( 'tpl-fullwidth.php' ) ):
												echo '<!-- ** Container ** -->';
												echo '<div class="container">';
											endif;							
															new dttheme_breadcrumb;
											if( is_page_template( 'tpl-fullwidth.php' ) ):
												echo '</div>';
											endif;	
									echo '</section><!-- **Breadcrumb Section Ends** -->';									
								endif;
							endif; ?>