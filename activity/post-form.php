<form action="<?php bp_activity_post_form_action() ?>" method="post" id="whats-new-form" name="whats-new-form">

	<?php do_action( 'bp_before_activity_post_form' ) ?>
	
	<?php if ( isset( $_GET['r'] ) ) : ?>
		<div id="message" class="info">
			<p><?php printf( __( 'You are mentioning %s in a new update, this user will be sent a notification of your message.', 'buddypress' ), bp_get_mentioned_user_display_name( $_GET['r'] ) ) ?></p>
		</div>
	<?php endif; ?>
	
	<div id="whats-new-avatar">
		<a href="<?php echo bp_loggedin_user_domain() ?>">
			<?php bp_loggedin_user_avatar( 'width=60&height=60' ) ?>
		</a>
	</div>

<h5>
<?php if ( bp_is_group() ) : ?>
<?php printf( __( "What's new in %s, %s?", 'buddypress' ), bp_get_group_name(), bp_get_user_firstname() ); ?>
<?php elseif(!bp_is_home()&&bp_is_member()): ?>
<?php printf( __( "Write something to %s?", 'buddypress' ), bp_get_displayed_user_fullname() ) ;?>
<?php else : ?>
<?php printf( __( "What's new %s?", 'buddypress' ), bp_get_user_firstname() ) ;?>
<?php endif; ?>

</h5>

<script language="javascript">
function limitChars(textarea, limit, infodiv)
{
	var text = textarea.value;	
	var textlength = text.length;
	var info = document.getElementById(infodiv);

	if(textlength > limit)
	{
		info.innerHTML = 'You cannot write more than '+limit+' characters!';
		textarea.value = text.substr(0,limit);
		return false;
	}
	else
	{
		info.innerHTML = 'You have '+ (limit - textlength) +' characters left.';
		return true;
	}
}
</script>

	<div id="whats-new-content">
	
		<div id="whats-new-textarea">
			<textarea name="whats-new" id="whats-new" onkeyup="limitChars(this, 200, 'charlimitinfo')" /><?php if ( isset( $_GET['r'] ) ) : ?>@<?php echo esc_attr( $_GET['r'] ) ?> <?php endif; ?></textarea>
		</div>
		<span id="charlimitinfo" style=" float:left; color:#88AF4A; font-size:11px;" >Maximum 200 characters.<br /></span> 

		<div id="whats-new-options">
			<div id="whats-new-submit">
				<span class="ajax-loader"></span> &nbsp;
				<input type="submit" name="aw-whats-new-submit" id="aw-whats-new-submit" value="<?php _e( 'Post Update', 'buddypress' ) ?>" />
			</div>

<?php if (  function_exists('bp_has_groups') &&!bp_is_member()  &&!bp_is_group() ) : ?>
				<div id="whats-new-post-in-box">
					<?php _e( 'Post in', 'buddypress' ) ?>:

					<select id="whats-new-post-in" name="whats-new-post-in">
						<option selected="selected" value="0"><?php _e( 'My Profile', 'buddypress' ) ?></option>

						<?php if ( bp_has_groups( 'user_id=' . bp_loggedin_user_id() . '&type=alphabetical&max=100&per_page=100&populate_extras=0' ) ) : while ( bp_groups() ) : bp_the_group(); ?>
							<option value="<?php bp_group_id() ?>"><?php bp_group_name() ?></option>
						<?php endwhile; endif; ?>
					</select>
				</div>
				<input type="hidden" id="whats-new-post-object" name="whats-new-post-object" value="groups" />
			<?php elseif ( bp_is_group_home() ) : ?>
				<input type="hidden" id="whats-new-post-object" name="whats-new-post-object" value="groups" />
				<input type="hidden" id="whats-new-post-in" name="whats-new-post-in" value="<?php bp_group_id() ?>" />
			<?php endif; ?>

			<?php do_action( 'bp_activity_post_form_options' ) ?>

		</div><!-- #whats-new-options -->
	</div><!-- #whats-new-content -->

	<?php wp_nonce_field( 'post_update', '_wpnonce_post_update' ); ?>
	<?php do_action( 'bp_after_activity_post_form' ) ?>

</form><!-- #whats-new-form -->

