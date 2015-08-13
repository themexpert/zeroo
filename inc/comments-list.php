<?php function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class( '', empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body media">
	<?php endif; ?>
		<div class="comment-author vcard media-left">
			<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 70 ); ?>			
		</div>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
			<br />
		<?php endif; ?>
		
		<div class="panel panel-default media-body">
			<div class="panel-heading"><h3 class="panel-title"><?php printf( __( '%s' /* .'<span class="says">says:</span>' . */ ), get_comment_author_link() ); ?></h3>
			<div class="comment-meta commentmetadata"><small><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a></small><small><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
				?></small>
			</div>
			</div>
			<div class="panel-body">
			<?php comment_text(); ?>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
			</div>
		</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
} ?>