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
<div class="page page-tips">
	<div class="container">
		<div class="row section">
			<div class="pagetitle">
				<div class="h1">
					<?php echo esc_html( $myposttype->description ); ?>
				</div>
			</div>
		</div>
	</div>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
				$ss_picture    = get_field( 'ss_picture' );
				$ss_machine    = get_field( 'ss_machine' );
				$ss_work_place = get_field( 'ss_work_place' );
				$ss_date       = get_field( 'ss_date' );
				$ss_comment    = get_field( 'ss_comment' );
				$ss_pdf        = get_field( 'ss_pdf' );
				$pdf_url       = $ss_pdf['url'];
		endwhile;
	endif;
	?>
<div name="tips01" id="tips01"></div>
<div class="tips_box">
	<h1 class="tips_stit h2">
		<?php the_title(); ?>
	</h1>
	<div class="tips_box_l">
		<?php the_content(); ?>
	</div>
	<div class="tips_box_r">
		<div class="tips_img">
			<div class="tips_img_point"></div>
				<a href="<?php echo esc_url( wp_get_attachment_image_url( $ss_picture, 'full' ) ); ?>">
					<?php echo wp_get_attachment_image( $ss_picture, 'full' ); ?>
				</a>
			</div>
			<div class="tips_btn_dl">
				<a href="<?php echo esc_url( $pdf_url ); ?>">
					<?php echo esc_html_e( 'DOWNLOAD PDF', 'token-v2' ); ?>
				</a>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="container">
	<div style="margin-top:40px">
		<?php
		$previous = "javascript:history.go(-1)";
		if ( isset( $_SERVER['HTTP_REFERER'] ) ) {
			$previous = $_SERVER['HTTP_REFERER'];
		}
		?>
		<a href="<?php echo $previous; ?>">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			<?php echo esc_html_e( ' TIPS กลับไปที่รายการ', 'token-v2' ); ?>
		</a>
	</div>
</div>
<?php
get_footer();
