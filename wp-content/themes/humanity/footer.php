   <?php if( !is_page_template( 'tpl-fullwidth.php' ) ): ?>
            </div><!-- **Container - End** -->
   <?php endif;?>

		</div><!-- **Main - End** -->

	    <!-- **Footer** -->
        <footer id="footer"><?php
        	$show_footer = dttheme_option('general','show-footer');
        	if( !empty($show_footer) ):?>
        			<div class="container"><?php
        				$columns = dttheme_option ('general','footer-columns');
        				dttheme_show_footer_widgetarea($columns);
        			?></div>
        		<?php
        	endif;

        	$show_copyright = dttheme_option('general','show-copyrighttext');
        	$copyright_text = dttheme_option('general','copyright-text');
        	$copyright_text = stripcslashes($copyright_text);
			global $dt_allowed_html_tags;
			
        	if( !empty($show_copyright) && !empty( $copyright_text) ):?>
        		<div class="copyright">
        			<div class="container">
        				<p><?php echo !empty( $copyright_text ) ? $copyright_text : '';?></p>
        			</div>
        		</div><?php
        	endif;?>	
        </footer><!-- **Footer - End** -->
   </div><!-- **Inner Wrapper - End** --> 
</div><!-- **Wrapper - End** -->

<?php
	if (is_singular() AND comments_open())
		wp_enqueue_script( 'comment-reply');

	if(dttheme_option('integration', 'enable-body-code') != '') 
		echo "<script type='text/javascript'>".stripslashes(dttheme_option('integration', 'body-code'))."</script>";
	wp_footer(); ?>
</body>
</html>