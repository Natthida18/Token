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
<div class="container page page-recentworks">
	<div class="row section">
		<div class="pagetitle">
			<h1><?php the_archive_title(); ?><span class="_sub">/ <?php echo esc_html_e( 'RECENT WORKS', 'token-v2' ); ?></span></h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="gallery">
		<ul class="box-thumbnail recentworks-list">
			<?php
			while ( have_posts() ) {
				the_post();
				$ss_short_content = get_field( 'ss_short_content' );
				$img              = get_field( 'ss_picture' );
				?>
				<li class="box-img4v">
					<a href="<?php the_permalink(); ?>" class="block-thumbnail">
						<?php echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'img-responsive center-block box-img4v-crop image-recentwork' ) ); ?>
					</a>
					<h3 class="title">
						<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						</a>
					</h3>
					<div class="_text">
						<?php $format = __( 'F Y', 'token-v2' ); ?>
						<p class="_caption"><?php echo get_the_date( $format ); ?></p>
						<div class="_content"><?php echo wp_kses_post( $ss_short_content ); ?></div>
					</div>
				</li>
				<?php
			}
			?>
		</ul>
		<?php echo get_the_posts_pagination(); ?>
	</div>
</div>

<?php
get_footer();
