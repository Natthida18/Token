<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package token-v2
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( ! empty( $post->post_password ) ) {
	if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) {
		return;
	}
}
if ( $comments ) : ?>
	<h3 id="comments">
		<?php comments_number( 'コメントはありません', 'コメント１件', 'コメント%件' ); ?>
	</h3>
	<ul class="commentlist">
		<?php
		foreach ( $comments as $comment ) :
			?>
			<li id="comment-<?php comment_ID(); ?>">
				<p>
				<?php
					echo get_avatar( $comment, 32 );
					printf( '<cite>%s</cite> | ', get_comment_author_link() );
					if ( '0' === $comment->comment_approved  ) :
					?>
						<strong>あなたのコメントは認証待ちです。</strong>
						<?php
					endif;
					echo get_comment_time( 'Y.m.d G:i' );
					edit_comment_link( '編集する', ' | ', '' );
				?>
				</p>
				<?php comment_text(); ?>
			</li>
			<?php
		endforeach;
		?>
	</ul>
	<?php
endif;
if ( 'open' === $post->comment_status ) :
	?>
	<h3 id="respond">
		コメントを書く
	</h3>
	<?php
	if ( get_option( 'comment_registration' ) && ! $user_ID ) :
		?>
		<p>
			<?php printf( 'コメントを書くには<a href="%s">ログイン</a>が必要です', get_option( 'siteurl' ) . '/wp-login.php?redirect_to=' . urlencode( get_permalink() ) ); ?>
		</p>
		<?php
		else :
			comment_form();
		endif;
	endif;
?>
