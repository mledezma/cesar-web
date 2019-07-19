<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php echo __( 'Post is password protected. Enter the password to view any comments.', 'coyote' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php echo __( 'Comments are closed here.', 'coyote' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
