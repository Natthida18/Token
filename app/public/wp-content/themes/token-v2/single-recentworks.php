<?php
/**
 * The template for displaying recentworks single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package token-v2
 */

get_header();
$mypost     = get_queried_object();
$myposttype = get_post_type_object( get_post_type( $post ) );
?>

<div class="container">
	<div class="breadcrumbs">
		<div class="inner">
			<?php
			if ( function_exists( 'bcn_display' ) ) {
				bcn_display();
			}
			?>
		</div>
		<?php get_template_part( 'fb_share' ); ?>
	</div>
</div>
<!-- p content-->

<div class="container page page-recentworks">
	<div class="pagetitle">
		<h1>
			<?php echo esc_html( $myposttype->label ); ?><span class="_sub">/ <?php echo esc_html_e( 'RECENT WORKS', 'token-v2' ); ?></span>
		</h1>
	</div>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
				$img           = get_field( 'ss_picture' );
				$ss_machine    = get_field( 'ss_machine' );
				$ss_work_place = get_field( 'ss_work_place' );
				$ss_date       = get_field( 'ss_date' );
				$ss_purpose    = get_field( 'ss_purpose' );
				$ss_feedback   = get_field( 'ss_feedback' );
				$ss_comment    = get_field( 'ss_comment' );
				$ss_url        = get_field( 'ss_url' );
				$yy            = substr( $ss_date,0,4 ) . '<br/>';
				$mm            = substr( $ss_date,4,2 ) . '<br/>';
				$dd            = substr( $ss_date,6,2 ) . '<br/>';
				$date_yymm     = date( 'M Y', mktime( 0, 0, 0, intval( $mm ), intval( $dd ), intval( $yy ) ) );
		endwhile;
	endif;
	?>
	<div id="main" class="pp">
		<h2><?php the_title(); ?></h2>
		<div class="main-img">
			<div class="img">
				<?php echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'art-img' ) ); ?>
			</div>
		</div>
		<div class="products_container">
			<div class="products-table">
				<table class="table">
					<?php
					if ( ! empty( $ss_machine ) ) {
						?>
						<tr>
							<th><?php echo esc_html_e( 'Machine:', 'token-v2' ); ?></th>
							<td><?php echo esc_html( $ss_machine ); ?></td>
						</tr>
						<?php
					}
					if ( ! empty( $ss_work_place ) ) {
						?>
						<tr>
							<th><?php echo esc_html_e( 'Work Place:', 'token-v2' ); ?></th>
							<td><?php echo esc_html( $ss_work_place ); ?></td>
						</tr>
						<?php
					}
					if ( ! empty( $date_yymm ) ) {
						?>
						<tr>
							<th><?php echo esc_html_e( 'Date:', 'token-v2' ); ?></th>
							<td><?php echo esc_html( $date_yymm ); ?></td>
						</tr>
						<?php
					}
					if ( ! empty( $ss_purpose ) ) {
						?>
						<tr>
							<th><?php echo esc_html_e( 'Purpose:', 'token-v2' ); ?></th>
							<td><?php echo esc_html( $ss_purpose ); ?></td>
						</tr>
						<?php
					}
					if ( ! empty( $ss_feedback ) ) {
						?>
						<tr>
							<th><?php echo esc_html_e( 'Feedback:', 'token-v2' ); ?></th>
							<td><?php echo esc_html( $ss_feedback ); ?></td>
						</tr>
						<?php
					}
					if ( ! empty( $ss_comment ) ) {
						?>
						<tr>
							<th><?php echo esc_html_e( 'Comment:', 'token-v2' ); ?></th>
							<td><?php echo esc_html( $ss_comment );?></td>
						</tr>
						<?php
					}
					if ( ! empty( $ss_url ) ) {
						?>
						<tr>
							<th><?php echo esc_html_e( 'URL:', 'token-v2' ); ?></th>
							<td>
								<?php
								if ( $ss_url ) {
									?>
									<a href="<?php echo esc_url( $ss_url ); ?>">
										<?php echo esc_url( $ss_url ); ?>
									</a>
									<?php
								}
								?>
								</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>

			<div class="page_detail">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
