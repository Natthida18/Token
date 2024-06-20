<?php
/**
 * Template Name: Scissors Lift Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package token-v2
 */

get_header(); ?>

<main class="page-scissorslift1">
	<section class="pagetitle container">
		<h1>
			<?php the_field( 'machine_page_title_th' ); ?>
			<span class="_sub">
				<?php the_field( 'machine_page_title_en' ); ?>
			</span>
		</h1>
	</section>
	<section class="page container section-1">
		<?php the_field( 'machine_section1_content1' ); ?>
		<div class="contents">
			<div class="content">
				<div class="sub-content">
					<?php
					$section1_img1 = get_field( 'machine_section1_image1' );

					echo wp_get_attachment_image(
						$section1_img1,
						'full',
					);
					?>
					<div style="padding: 0 8px;">
						<?php the_field( 'machine_section1_content2' ); ?>
					</div>
				</div>
				<div class="sub-content">
					<div class="col-xs-3">
						<?php
						$section1_img3 = get_field( 'machine_section1_image3' );

						echo wp_get_attachment_image(
							$section1_img3,
							'full',
							false,
							array(
								'class' => 'img-responsive center-block',
							)
						);
						?>
					</div>
					<div class="col-xs-3">
						<?php
						$section1_img4 = get_field( 'machine_section1_image4' );

						echo wp_get_attachment_image(
							$section1_img4,
							'full',
							false,
							array(
								'class' => 'img-responsive center-block',
							)
						);
						?>
					</div>
					<div class="col-xs-3">
						<?php
						$section1_img5 = get_field( 'machine_section1_image5' );

						echo wp_get_attachment_image(
							$section1_img5,
							'full',
							false,
							array(
								'class' => 'img-responsive center-block',
							)
						);
						?>
					</div>
					<div class="col-xs-3">
						<?php
						$section1_img6 = get_field( 'machine_section1_image6' );

						echo wp_get_attachment_image(
							$section1_img6,
							'full',
							false,
							array(
								'class' => 'img-responsive center-block',
							)
						);
						?>
					</div>
				</div>
			</div>
			<div class="content">
				<?php
				$section1_img2 = get_field( 'machine_section1_image2' );

				echo wp_get_attachment_image(
					$section1_img2,
					'full',
					false,
				);
				?>
			</div>
		</div>
	</section>
	<section class="section-2">
		<div class="page container">
			<div class="tab-headline">
				<h2 class="headline">
					<?php the_field( 'machine_section2_headline' ); ?>
				</h2>
			</div>
		</div>
		<div class="section-bg">
			<div class="container">
				<h3>
					<?php the_field( 'machine_section2_title' ); ?>
				</h3>
				<?php the_field( 'machine_section2_content1' ); ?>
				<div class="block-contents">
					<div class="">
						<div style="width: 100%; overflow-x: auto;">
							<table class="table spec_table">
								<thead>
									<tr>
										<th class="col-sm-2 cell-fixed"></th>
										<th class="col-sm-1">X-Lift 6m</th>
										<th class="col-sm-1">X-Lift 8m</th>
										<th class="col-sm-1">X-Lift 10m</th>
										<th class="col-sm-1">X-Lift 12m</th>
										<th class="col-sm-1">X-Lift 14m</th>
									</tr>
								</thead>
								<tbody>
								<?php
								if ( have_rows( 'repeater_compare_table' ) ) {
									while ( have_rows( 'repeater_compare_table' ) ) {
										the_row();

										$title_compare_table = get_sub_field( 'compare_table_title' );
										?>
									<tr>
										<th class="col-sm-2 cell-fixed"><?php echo esc_html( $title_compare_table ); ?></th>
										<?php
										while ( have_rows( 'compare_table_value_list' ) ) {
											the_row();

											$value_compare_table = get_sub_field( 'compare_table_value' );
											?>
										<td class="col-sm-1"><?php echo esc_html( $value_compare_table ); ?></td>
										<?php } ?>
									</tr>
										<?php
									}
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="contents">
						<div class="description">
							<?php
							the_field( 'machine_section2_content3' );

							$section2_img1 = get_field( 'machine_section2_image1' );

							echo wp_get_attachment_image(
								$section2_img1,
								'full',
								false,
								array(
									'class' => 'img-responsive',
								)
							);
							?>
						</div>
						<div>
							<?php
							the_field( 'machine_section2_content4' );

							$section2_img2 = get_field( 'machine_section2_image2' );

							echo wp_get_attachment_image(
								$section2_img2,
								'full',
								false,
								array(
									'class' => 'img-responsive',
									'style' => 'width: 100%',
								)
							);
							?>
							<table class="table spec_table" style="max-width: 100%;">
								<thead>
									<tr>
										<th class="th-1 cell-fixed" style="text-align: center; vertical-align: middle;" rowspan="2">
											รุ่น
										</th>
										<th class="th-2" style="text-align: center; vertical-align: middle;" rowspan="2">
											ก่อนยืดกระเช้า
											<img src="/wp-content/themes/token-v2/images/ref-a.png" width="15%" />
										</th>
										<th class="th-3" style="text-align: center; vertical-align: middle;" colspan="2">
											ยืดกระเช้าออกแล้ว
										</th>
									</tr>
									<tr>
										<th class="th-4" style="text-align: center; vertical-align: middle;">
											เฉพาะส่วนที่ยึด
											<img src="/wp-content/themes/token-v2/images/ref-b.png" width="15%" />
										</th>
										<th class="th-5" style="text-align: center; vertical-align: middle;">
											เฉพาะกระเช้า
											<img src="/wp-content/themes/token-v2/images/ref-c.png" width="15%" />
										</th>
									</tr>
								</thead>
								<tbody>
								<?php
								if ( have_rows( 'repeater_stretch_detail' ) ) {
									while ( have_rows( 'repeater_stretch_detail' ) ) {
										the_row();

										$title_stretch = get_sub_field( 'stretch_detail_title' );
										?>
									<tr>
										<th class="th-1 cell-fixed"><?php echo esc_html( $title_stretch ); ?></th>
										<?php
										while ( have_rows( 'stretch_detail_value_list' ) ) {
											the_row();

											$value_stretch = get_sub_field( 'stretch_detail_value' );
											?>
										<td class="td-2"><?php echo esc_html( $value_stretch ); ?></td>
										<?php } ?>
									</tr>
										<?php
									}
								}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<?php echo do_shortcode( '[product_list key="scissorslift"]' ); ?>
					<div class="block-column">
						<div class="box-tips">
							<div class="block-caution">
								<div class="image-caution">
								<?php
									$section2_img3 = get_field( 'machine_section2_image3' );

									echo wp_get_attachment_image(
										$section2_img3,
										'full',
										false,
										array(
											'class' => 'icon',
										)
									);
									?>
								</div>
								<div class="content-caution">
									<?php the_field( 'machine_section2_content5' ); ?>
								</div>
							</div>
							<div class="cmn_btn_tips">
								<a href="<?php the_field( 'tips_link' ); ?>">
									<?php the_field( 'tips_title' ); ?>
								</a>
							</div>
						</div>
						<div class="box-dic">
							<div class="cmn_box_dict">
								<div class="_header">
									<?php the_field( 'machine_section2_dictionary' ); ?>
								</div>
								<div class="_content">
									<?php
									if ( have_rows( 'repeater_dictionary' ) ) {
										while ( have_rows( 'repeater_dictionary' ) ) {
											the_row();

											$dictionary_link = get_sub_field( 'repeater_dictionary_link' );
											$dictionary_word = get_sub_field( 'repeater_dictionary_word' );
											?>
											<span class="_word">
												<a href="<?php echo esc_url( $dictionary_link ); ?>">
													<?php echo esc_html( $dictionary_word ); ?>
												</a>
											</span>
											<?php
										}
									}
									?>
									<div class="text-right">
										<span class="_word">
											<a href="<?php esc_url( home_url() ) . '/dict'; ?>">
											...more
											</a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-recentworks">
						<a href="<?php the_field( 'machine_section2_recentwork_link' ); ?>">
							<?php
							$recentwork_img = get_field( 'machine_section2_recentwork_image' );

							echo wp_get_attachment_image(
								$recentwork_img,
								'full',
								false,
								array(
									'class' => 'img-responsive center-block',
								)
							);
							?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="page container section-3">
		<div class="tab-headline">
			<h2 class="headline">
				<?php the_field( 'machine_section3_headline' ); ?>
			</h2>
		</div>
		<div class="contents">
			<div class="content">
				<h4>
					<?php the_field( 'machine_section3_title1' ); ?>
				</h4>
				<div class="sub-content">
					<div class="content-image">
						<?php
						$section3_img1 = get_field( 'machine_section3_image1' );

						echo wp_get_attachment_image(
							$section3_img1,
							'full',
							false,
							array(
								'class' => 'img-responsive center-block',
							)
						);
						?>
					</div>
					<div class="content-image">
						<?php
						$section3_img2 = get_field( 'machine_section3_image2' );

						echo wp_get_attachment_image(
							$section3_img2,
							'full',
							false,
							array(
								'class' => 'img-responsive center-block',
							)
						);
						?>
					</div>
				</div>
				<?php the_field( 'machine_section3_content1' ); ?>
			</div>
			<div class="content">
				<h4>
					<?php the_field( 'machine_section3_title2' ); ?>
				</h4>
				<?php
				$section3_img3 = get_field( 'machine_section3_image3' );

				echo wp_get_attachment_image(
					$section3_img3,
					'full',
					false,
					array(
						'class' => 'img-responsive center-block',
					)
				);
				?>
				<?php the_field( 'machine_section3_content2' ); ?>
				<div class="cmn_btn_tips">
					<a href="<?php the_field( 'machine_section3_tips_link' ); ?>">
						<?php the_field( 'machine_section3_tips_title' ); ?>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="page container section-4">
		<div class="tab-headline">
			<h2 class="headline">
				<?php the_field( 'machine_section4_headline' ); ?>
			</h2>
		</div>
		<?php
		if ( have_rows( 'repeater_machine_usage_detail' ) ) {
			?>
			<ul id="usage-thumbnail" class="box-thumbnail">
			<?php
			while ( have_rows( 'repeater_machine_usage_detail' ) ) {
				the_row();

				$usage_img     = get_sub_field( 'machine_usage_detail_image' );
				$usage_title   = get_sub_field( 'machine_usage_detail_title' );
				$usage_content = get_sub_field( 'machine_usage_detail_content' );
				?>
				<li>
					<?php
					echo wp_get_attachment_image(
						$usage_img,
						'full',
						false,
						array(
							'class' => 'alignnone size-full wp-image-5828',
						)
					);
					?>
					<h3>
						<?php echo esc_html( $usage_title ); ?>
					</h3>
					<?php echo esc_html( $usage_content ); ?>
				</li>
					<?php
			}
			?>
			</ul>
			<?php
		}
		?>
	</section>
	<section class="page container section-5">
		<div class="tab-headline">
			<h2 class="headline">
				<?php the_field( 'machine_section5_headline' ); ?>
			</h2>
		</div>
		<div style="margin-top: 20px;">
			<?php the_field( 'machine_section5_content' ); ?>
		</div>
	</section>
	<section class="page container section-6">
		<div class="tab-headline">
			<h2 class="headline">
				<?php the_field( 'machine_section6_headline' ); ?>
			</h2>
		</div>
		<div class="video-iframe">
			<?php the_field( 'machine_section6_video' ); ?>
		</div>
		<div>
			<?php the_field( 'machine_section6_video_desc' ); ?>
	</section>
</main>
<?php
get_footer();
