<?php
/**
 * Template Name: Recentwork
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
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
endif;
?>
<div class="container page">
	<div class="row">
		<div class="gallery">
			<ul class="box-thumbnail">
				<?php
				$args = array(
					'post_type'      => 'recentworks',
					'posts_per_page' => 999,
					'orderby'        => 'date',
					'order'          => 'DESC',
				);

				$recent_query = new WP_Query( $args );
				if ( $recent_query->have_posts() ) {
					while ( $recent_query->have_posts() ) {
						$recent_query->the_post();
						$ss_short_content = get_field( 'ss_short_content' );
						$img              = get_field( 'ss_picture' );
						?>
						<li class="col-xs-12 col-sm-4 col-md-3 box-img4v">
							<a href="<?php the_permalink(); ?>">
								<?php echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'img-responsive center-block box-img4v-crop image-recentwork' ) ); ?>
							</a>
							<h3>
								<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
								</a>
							</h3>
							<div class="_text">
								<p class="_caption"><?php the_time( 'F Y' ); ?></p>
								<div class="_content"><?php echo wp_kses_post( $ss_short_content ); ?></div>
							</div>
						</li>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</ul>
		</div>
	</div>
</div>

<?php
get_footer();
