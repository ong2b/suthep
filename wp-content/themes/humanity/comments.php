<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.','dt_themes'); ?></p>
<?php  return;
	endif;?>
    
    <h3><?php comments_number(__('NO COMMENTS','dt_themes'), __('COMMENT ( 1 )','dt_themes'), __('COMMENTS ( % )','dt_themes') );?></h3>
    <?php if ( have_comments() ) : ?>
    
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
                    <div class="navigation">
                        <div class="nav-previous"><?php previous_comments_link( __( 'Older Comments','dt_themes'  ) ); ?></div>
                        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments','dt_themes') ); ?></div>
                    </div> <!-- .navigation -->
        <?php endif; // check for comment navigation ?>
        
        <ul class="commentlist">
     		<?php wp_list_comments( array( 'callback' => 'dttheme_custom_comments' ) ); ?>
        </ul>
    
    <?php else: ?>
		<?php if ( ! comments_open() ) : ?>
            <p class="nocomments"><?php _e( 'Comments are closed.','dt_themes'); ?></p>
        <?php endif;?>    
    <?php endif; ?>
	
    <!-- Comment Form -->
     <?php if ('open' == $post->comment_status) : 
			$author = "<p class='dt-sc-one-half column first'><input id='author' name='author' type='text' placeholder='".__("Name","dt_themes")."' required /></p>";
			$email = "<p class='dt-sc-one-half column'> <input id='email' name='email' type='text' placeholder='".__("Email ID","dt_themes")."' required /> </p> <div class='dt-sc-hr-invisible-very-small'></div>";
			
			$comment = "<p><textarea id='comment' name='comment' cols='5' rows='3' placeholder='".__("Message","dt_themes")."' ></textarea></p>";
			$title_reply = "<h2 class='dt-sc-title'> <span>".__("Leave a Reply","dt_themes") ."</span></h2>";
				$comments_args = array(
					'title_reply' => $title_reply,
					'fields'=>array('author' => $author,'email' =>	$email),
					'comment_field'=> $comment,
					'comment_notes_before'=>'','comment_notes_after'=>'','label_submit'=>__('Comment','dt_themes'));		
            comment_form($comments_args);?>
	<?php endif; ?>