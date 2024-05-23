<?php
/**
 * Template Name: Tips
 *
 * @package token-v2
 */

get_header();
$current_lang = apply_filters( 'wpml_current_language', null );
?>
<main>
	<?php
	if ( 'th' === $current_lang ) {
		?>
		<div>
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
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="d-flex d-xs-block tips_main">
						<div class="_r1">
							<h4>
								<?php echo esc_html( 'หมวดหมู่', 'token-v2' ); ?>
							</h4>
							<ul class="tips_sidemenu nav">
								<li>
									<a href="#" title="" class="box01 tips_filter_button _active" data-target=".tips_index_box" data-filter="">
										<span class="_img"></span><span class="_text"><?php echo esc_html_e( 'บทความทั้งหมด', 'token-v2' ) ?></span>
									</a>
								</li>
								<?php
								$this_cat = get_terms(
									array(
										'taxonomy'   => 'categories',
										'hide_empty' => false,
									)
								);
								foreach ( $this_cat as $i => $item ) {
									$name  = get_field( 'name_th', $item->taxonomy . '_' . $item->term_id );
									$image = get_field( 'image', $item->taxonomy . '_' . $item->term_id );
									?>
									<li>
										<a href="#" title="" class="box01 tips_filter_button" data-target=".tips_index_box" data-filter="._category_<?php echo $item->slug ?>">
											<span class="_img">
												<?php echo wp_get_attachment_image( $image, 'thumbnail' ); ?>
											</span>
											<span class="_text">
												<?php echo esc_html( $name , 'token-v2' ); ?>
												<span style="font-size:1.0rem">
													<br>
													<?php echo '(' . $item->name . ')'; ?>
												</span>
											</span>
										</a>
									</li>
									<?php
								}
								?>
							</ul>
						</div>

						<div class="_r2">
							<div class="row" id="tips_container">
								<?php
								$args = array(
									'post_type'      => 'tips',
									'posts_per_page' => -1,
								);

								$tips_query = new WP_Query( $args );
								if ( $tips_query->have_posts() ) {
									while ( $tips_query->have_posts() ) {
										$tips_query->the_post();
										$ss_picture = get_field( 'ss_picture' );
										$term_list  = wp_get_post_terms( get_the_ID(), 'categories' );
										?>
										<div class="col-sm-6 col-md-4 tips_index_box <?php foreach ( $term_list as $i => $item ) { echo esc_attr( '_category_' . $item->slug . ' ' ); } ?>">
											<div class="_tag">
												<?php
												foreach ( $term_list as $i => $item ) {
													echo esc_html( $item->name ) . ' ';
												}
												?>
											</div>
											<h3 class="_title h4">
												<?php the_title(); ?>
											</h3>
											<div class="_img">
												<a href="<?php the_permalink(); ?>">
													<?php echo wp_get_attachment_image( $ss_picture, array( '300', '212' ), false, array( 'class' => 'img-responsive' ) ); ?>
												</a>
											</div>
											<div class="_description">
												<?php the_excerpt(); ?>
											</div>
											<div class="_more">
												<a href="<?php the_permalink(); ?>">
													<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/tips_more.png' ) ); ?>" alt="more"  width="89" height="37" />
												</a>
											</div>
										</div>
										<?php
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	} else {
		the_content();
	}
	?>
</main>
<?php
get_footer();
