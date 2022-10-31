<<?= $tag ?> id="comment-<?php comment_ID(); ?>" <?php comment_class('comment' . ($this->has_children ? 'parent' : ''), $comment ); ?>>
<?= get_avatar($comment, 120, $args['avatar_size'], '', '', ['class' => 'comment__avater'] ); ?>
						
      <div class="comment__body">
        <footer>
          <div class="comment__username"><?= get_comment_author( $comment ); ?></div>
          <?php
						printf(
							'<a class="comment_date" href="%s"><time datetime="%s">%s</time></a>',
							esc_url( get_comment_link( $comment, $args ) ),
							get_comment_time( 'c' ),
							sprintf(
								/* translators: 1: Comment date, 2: Comment time. */
								__( '%1$s at %2$s' ),
								get_comment_date( '', $comment ),
								get_comment_time()
							)
						);

						edit_comment_link( __( 'Edit' ), ' <span class="edit-link">', '</span>' );
						?>
                        <?php if ( '0' == $comment->comment_approved ) : ?>
					<em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
					<?php endif; ?>
                    <?php
				if ( '1' == $comment->comment_approved || $show_pending_links ) {
					comment_reply_link(
						array_merge(
							$args,
							array(
								'add_below' => 'div-comment',
								'depth'     => $depth,
								'max_depth' => $args['max_depth'],
								'before'    => '<span class="reply">',
								'after'     => '</span>',
							)
						)
					);
				}
				?>
        </footer>
        <div class="comment__content">
        <?php comment_text(); ?>
        </div>
      </div>
