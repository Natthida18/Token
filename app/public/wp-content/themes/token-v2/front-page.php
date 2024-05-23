<?php
/**
 * Template Name: Home
 *
 * @package token-v2
 */

$sec1         = get_field( 'section_1' );
$sec2         = get_field( 'section_2' );
$sec3         = get_field( 'section_3' );
$sec4         = get_field( 'section_4' );
$sec5         = get_field( 'section_5' );
$sec6         = get_field( 'section_6' );
$current_lang = apply_filters( 'wpml_current_language', null );
get_header();
?>
<main>
	<section class="box-carousel">
		<div class="container">
			<!-- SLIDE -->
			<div class="row center-block">
				<div id="carousel_main" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php
						foreach ( $sec1['slider'] as $i => $item ) {
							?>
							<li data-target="#carousel_main" data-slide-to="<?php echo esc_html( $i ); ?>" class="<?php if ( 0 === $i ) { echo 'active'; } ?>"></li>
							<?php
						}
						?>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					<?php
					foreach ( $sec1['slider'] as $i => $item ) {
						?>
						<div class="carousel-item
						<?php
						if ( 0 === $i ) {
							echo 'active';
						}
						?>
						">
							<a href="<?php echo esc_html( $item['link'] ); ?>" >
								<?php
								echo wp_get_attachment_image( $item['image'], 'full', false, array( 'class' => 'attachment-featured-slide size-featured-slide wp-post-image d-block w-100' ) );
								?>
							</a>
						</div>
						<?php
					}
					?>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel_main" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only"><?php echo esc_html_e( 'Previous', 'token-v2' ); ?></span>
					</a>
					<a class="right carousel-control" href="#carousel_main" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only"><?php echo esc_html_e( 'Next', 'token-v2' ); ?></span>
					</a>
				</div>
			</div>
			<!-- / SLIDE -->
	</section>

	<section class="box-point4">
		<div class="container">
			<div class="_inner">
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-12 col">
						<?php
						if ( ! empty( $sec2['heading'] ) ) {
							?>
							<h1 class="title-top-page">
								<?php echo esc_html( $sec2['heading'] ); ?>
							</h1>
							<?php
						}
						if ( ! empty( $sec2['content'] ) ) {
							?>
							<div><?php echo esc_html( $sec2['content'] ); ?></div>
							<?php
						}
						?>
					</div>
				</div>
				<?php
				if ( ! empty( $sec2['item'] ) ) {
					?>
					<div class="row">
						<?php
						foreach ( $sec2['item'] as $i => $item ) {
							?>
							<div class="col-12 col-xs-12 col-md-6 col-lg-3 col">
								<div class="item">
									<h2 class="item-title">
										<a href="<?php echo esc_url( get_permalink( $item['page'] ) ); ?>">
											<?php echo esc_html( $item['title'] ); ?>
										</a>
									</h2>
									<?php
									if ( ! empty( $item['image'] ) ) {
										?>
										<div class="_r0">
											<div class="row">
												<?php
												foreach ( $item['image'] as $i => $items ) {
													?>
													<div class="col-xs-6 col">
														<?php echo wp_get_attachment_image( $items['image'], 'full' ); ?>
													</div>
													<?php
												}
												?>
											</div>
										</div>
										<?php
									}
									?>
									<?php
									if ( ! empty( $item['content'] ) ) {
										?>
										<div class="_r1">
											<?php echo wp_kses_post( $item['content'] ); ?>
										</div>
										<?php
									}
									if ( ! empty( $item['image_footer'] ) ) {
										?>
										<div class="_r2">
											<a href="<?php echo esc_url( get_permalink( $item['page'] ) ); ?>">
												<?php echo wp_get_attachment_image( $item['image_footer'], 'full' ); ?>
											</a>
										</div>
										<?php
									}
									?>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>

	<section class="container">
		<div class="token-service section">
			<?php
			if ( ! empty( $sec3['heading'] ) ) {
				?>
				<div class="row">
					<h2 class="heading"><?php echo esc_html( $sec3['heading'] ); ?></h2>
				</div>
				<?php
			}
			if ( ! empty( $sec3['service'] ) ) {
				?>
				<div class="row">
					<?php
					foreach ( $sec3['service'] as $i => $item ) {
						?>
						<div class="col-md-6 col-lg-4">
							<div class="box box-icon" style="background: url(<?php echo esc_url( $item['image'] ); ?>) no-repeat left center #FFF;">
								<h3>
									<a href="<?php echo esc_html( $item['link'] ); ?>">
										<?php echo esc_html( $item['title'] ); ?>
									</a>
								</h3>
								<p><?php echo esc_html( $item['content'] ); ?></p>
							</div>
						</div>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>
		</div>
	</section>

	<section class="container">
		<div class="box-recentworks">
			<a href="<?php echo esc_url( get_permalink( $sec4['link'] ) ); ?>">
			<?php
			if ( ! empty( $sec4['image_title_md'] ) ) {
				?>
				<div class="hidden-xs d-flex align-items-center group-image-title-md">
					<div class="image-title">
						<?php echo wp_get_attachment_image( $sec4['image_title_md'], 'full' ); ?>
					</div>
					<div class="button">
						<a class="btn button_viewall" href="<?php echo esc_url( get_permalink( $sec4['link'] ) ); ?>">
							<?php esc_html_e( 'VIEW ALL ', 'token-v2' ); ?><i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<?php
			}
			if ( ! empty( $sec4['image_title_xs'] ) ) {
				?>
				<div class="visible-xs group-image-title-xs">
					<div class="image-title">
						<?php echo wp_get_attachment_image( $sec4['image_title_xs'], 'full' ); ?>
					</div>
					<div class="button">
						<a class="btn button_viewall" href="<?php echo esc_url( get_permalink( $sec4['link'] ) ); ?>">
							<?php esc_html_e( 'VIEW ALL ', 'token-v2' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<?php
			}
			?>
			</a>
			<div class="recentwork-container">
				<div class="row">
					<?php
					$args = array(
						'post_type'      => 'recentworks',
						'posts_per_page' => 3,
						'orderby'        => 'date',
						'order'          => 'DESC',
						'no_found_rows'  => true,
					);

					$recent_query = new WP_Query( $args );
					if ( $recent_query->have_posts() ) {
						while ( $recent_query->have_posts() ) {
							$recent_query->the_post();
							$ss_short_content = get_field( 'ss_short_content' );
							$img              = get_field( 'ss_picture' );
							?>
							<div class="col-sm-4">
								<div class="recentworks_index_box">
									<div class="_r1">
										<div class="_img">
											<?php
											if ( ! empty( $img ) ) {
												?>
												<a href="<?php the_permalink(); ?>">
													<?php echo wp_get_attachment_image( $img, 'full' ); ?>
												</a>
												<?php
											}
											?>
											<div class="_date">
												<?php the_time( 'F Y' ); ?>
											</div>
										</div>
									</div>
									<div class="_r2">
										<div class="_title">
											<a href="<<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</div>
										<div class="_comment"></div>
										<?php
										if ( ! empty( $ss_short_content ) ) {
											?>
											<div class="_description">
												<?php echo esc_html( $ss_short_content ); ?>
											</div>
											<?php
										}
										?>
										<div class="_more">
											<a href="<?php the_permalink(); ?>">
											<img class="button-more" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/recentworks_more.png' ) ); ?>" alt="more">
											</a>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						wp_reset_postdata();
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<?php
	if ( ! empty( $sec5['image_banner'] ) ) {
		?>
		<section class="container">
			<div class="box-at400cg">
				<a href="<?php echo esc_html( $sec5['image_link'] ); ?>">
					<?php echo wp_get_attachment_image( $sec5['image_banner'], 'full' ); ?>
				</a>
			</div>
		</section>
		<?php
	}

	if ( ! empty( $sec5['youtube'] ) ) {
		?>
		<section class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="token-youtube section">
						<?php echo $sec5['youtube']; ?>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
	?>

	<section class="container">
		<div class="row">
			<?php
			if ( ! empty( $sec6['iframe_facebook'] ) ) {
				?>
				<div class="col-sm-12 col-md-6 section token-facebook" id="_facebook">
					<?php echo $sec6['iframe_facebook']; ?>
				</div>
				<?php
			}
			if ( 'th' === $current_lang ) {
				?>
				<div class="col-sm-12 col-md-6">
					<div class="d-flex">
						<div class="w-50">
							<h2 class="title-top-page">
								<?php echo esc_html( $sec6['heading_tips'] ); ?>
							</h2>
						</div>
						<div class="w-50 text-right">
							<a class="btn button_viewall" href="<?php echo esc_url( get_permalink( $sec6['page_tips'] ) ); ?>">
								<?php echo esc_html_e( 'VIEW ALL ', 'token-v2' ); ?>
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="container-tips">
						<?php
						$args = array(
							'post_type'      => 'tips',
							'posts_per_page' => 3,
							'orderby'        => 'date',
							'order'          => 'DESC',
							'no_found_rows'  => true,
						);

						$tips_query = new WP_Query( $args );
						if ( $tips_query->have_posts() ) {
							while ( $tips_query->have_posts() ) {
								$tips_query->the_post();
								$ss_picture = get_field( 'ss_picture' );
								?>
								<div class="tips_summary_box">
									<h3 class="_title h4">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="card-tips d-flex">
										<?php
										if ( ! empty( $ss_picture ) ) {
											?>
											<div class="group-title">
												<div class="_img">
													<a href="<?php the_permalink(); ?>">
														<?php echo wp_get_attachment_image( $ss_picture, array( '300', '212' ), false, array( 'class' => 'img-responsive' ) ); ?>
													</a>
												</div>
											</div>
											<?php
										}
										?>
										<div  class="group-description">
											<div class="_description">
												<?php the_excerpt(); ?>
											</div>
											<div class="_more">
												<a href="<?php the_permalink(); ?>">
												<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/tips_more.png' ) ); ?>" alt="more"  width="89" height="37" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
							wp_reset_postdata();
						}
						?>
					</div>
				</div>
				<?php
			} else {
				?>
				<div class="col-sm-12 col-md-6">
					<?php
					if ( ! empty( $sec6['banner'] ) ) {
						?>
						<div class="col-12 section box-illust">
							<?php echo wp_get_attachment_image( $sec6['banner'], 'full', false, array( 'class' => 'img-responsive' ) ); ?>
						</div>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
		if ( 'th' === $current_lang ) {
			?>
			<div class="row">
				<div class="col-sm-12 col-md-7 token-logo">
					<?php
					if ( ! empty( $sec6['logo_footer'] ) ) {
						echo wp_get_attachment_image( $sec6['logo_footer'], array( '400', '100' ) );
					}
					if ( ! empty( $sec6['content'] ) ) {
						?>
						<div class="sec6-content">
							<?php echo wp_kses_post( $sec6['content'] ); ?>
						</div>
						<?php
					}
					?>
				</div>
				<?php
				if ( ! empty( $sec6['banner'] ) ) {
					?>
					<div class="col-sm-12 col-md-5 section box-illust">
						<?php echo wp_get_attachment_image( $sec6['banner'], 'full', false, array( 'class' => 'img-responsive' ) ); ?>
					</div>
					<?php
				}
				?>
			</div>
			<?php
		} else {
			if ( ! empty( $sec6['content'] ) ) {
				?>
				<div>
					<?php echo wp_kses_post( $sec6['content'] ); ?>
				</div>
				<?php
			}
		}
		?>
	</section>
</main>

<?php
get_footer();
