<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package token-v2
 */

get_header();
?>

<div id="main">
	<?php
	if ( have_posts() ) :
		if ( is_category() ) {
			?>
			<h2 class="pagetitle">
				<?php printf( __( 'Archive for the &#8216;%s&#8217; Category', 'token-v2' ), single_cat_title( '', false ) ); ?>
			</h2>
			<?php
		} elseif ( is_tag() ) {
			?>
			<h2 class="pagetitle">
				<?php printf( __( 'Posts Tagged &#8216;%s&#8217;', 'token-v2' ), single_tag_title( '', false ) ); ?>
			</h2>
			<?php
		} elseif ( is_day() ) {
			?>
			<h2 class="pagetitle">
				<?php printf( _c( ' %s|Daily archive page', 'token-v2' ), get_the_time( __( 'F jS, Y', 'token-v2' ) ) ); ?>年
			</h2>
			<?php
		} elseif ( is_month() ) {
			?>
			<h2 class="pagetitle">
				<?php printf( _c( ' %s|Monthly archive page', 'token-v2' ), get_the_time( __( 'F, Y', 'token-v2' ) ) ); ?>年
			</h2>
			<?php
		} elseif ( is_year() ) {
			?>
			<h2 class="pagetitle">
				<?php printf( _c( 'Archive for %s|Yearly archive page', 'token-v2' ), get_the_time( __( 'Y', 'token-v2' ) ) ); ?>
			</h2>
			<?php
		} elseif ( is_author() ) {
			?>
			<h2 class="pagetitle">
				<?php _e( 'Author Archive', 'token-v2' ); ?>
			</h2>
			<?php
		} elseif ( isset( $_GET['paged'] ) && ! empty( $_GET['paged'] ) ) {
			?>
			<h2 class="pagetitle">
				<?php _e( 'Blog Archives', 'token-v2' ); ?>
			</h2>
			<?php
		}
		while ( have_posts() ) :
			the_post();
			?>
			<h3 id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h3>
			<div id="date"><?php the_time( __( 'Y-m-d' ) ); ?></div>
				<?php the_content(); ?>
			<?php
		endwhile;
		next_posts_link( __( '&laquo; Older Entries', 'token-v2' ) );
		previous_posts_link( __( 'Newer Entries &raquo;', 'token-v2' ) );

	else :
		if ( is_category() ) {
			printf( "<h2 class='center'>" . __( "Sorry, but there aren't any posts in the %s category yet.", 'token-v2' ) . '</h2>', single_cat_title( '', false ) );
		} elseif ( is_date() ) {
			echo( '<h2>' . __( "Sorry, but there aren't any posts with this date.", 'token-v2' ) . '</h2>' );
		} elseif ( is_author() ) {
			$myuserdata = get_userdatabylogin( get_query_var( 'author_name' ) );
			printf( "<h2 class='center'>" . __( "Sorry, but there aren't any posts by %s yet.", 'token-v2' ) . "</h2>", $myuserdata->display_name );
		} else {
			echo( "<h2 class='center'>".__( 'No posts found.', 'token-v2' ) . '</h2>' );
		}
		get_search_form();
	endif;
	?>
</div>



<!-- サイドバーを埋め込む -->
<?php get_sidebar(); ?>

<!-- フッターを埋め込む -->
<?php get_footer(); ?>
