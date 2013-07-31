<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<?php _e('This post is password protected. Enter the password to view comments.','tabinikki'); ?>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h2 id="comments" class="comments-title"><?php comments_number(__('No Responses'), __('One Response'), __('% Responses') );?></h2>

	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p><?php _e('Comments are closed.','tabinikki'); ?></p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<h2 class="comments-title"><?php comment_form_title( 'Leave a Reply', __('Leave a Reply to %s') ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p><?php _e('You must be','tabinikki'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('logged in','tabinikki'); ?></a> <?php _e('to post a comment.','tabinikki'); ?></p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p><?php _e('Logged in as','tabinikki'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e('Log out','tabinikki'); ?> &raquo;</a></p>

		<?php else : ?>

			<div>
				<input type="text" name="author" id="author" value="Your Name" onfocus="this.value = this.value=='Your Name'?'':this.value;" onblur="this.value = this.value==''?'Your Name':this.value;" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div>
				<input type="text" name="email" id="email" value="Your E-mail" onfocus="this.value = this.value=='Your E-mail'?'':this.value;" onblur="this.value = this.value==''?'Your E-mail':this.value;" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div>
				<input type="text" name="url" id="url" value="Your Website" onfocus="this.value = this.value=='Your Website'?'':this.value;" onblur="this.value = this.value==''?'Your Website':this.value;"" size="22" tabindex="3" />
			</div>

		<?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
		</div>

		<div>
			<input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment','tabinikki'); ?>" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>

<?php endif; ?>
