<?php
/**
 * Template Name: Scissors Lift Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package token-v2
 */

get_header(); ?>

<div class="page page-scissorslift1">
	<div class="container">
		<div class="section">
			<div class="pagetitle">
				<h1>
					<?php the_field( 'machine_page_title_th' ); ?>
					<span class="_sub">
						<?php the_field( 'machine_page_title_en' ); ?>
					</span>
				</h1>
			</div>
		</div>
	</div>
	<div class="box-scissorslift">
		<section class="_r1">
			<div class="container">
				<?php the_field( 'machine_section1_content1' ); ?>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-lg-6">
							<?php
								$section1_img1 = get_field( 'machine_section1_image1' );

								echo wp_get_attachment_image(
									$section1_img1,
									'full',
								);
								?>
						</div>
						<div class="col-lg-6">
							<p class="_i1">
								<?php the_field( 'machine_section1_content2' ); ?>
							</p>
						</div>
					</div>
					<div class="row _image4">
						<div class="row">
							<div class="col-xs-3 col">
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
							<div class="col-xs-3 col">
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
							<div class="col-xs-3 col">
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
							<div class="col-xs-3 col">
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
				</div>
				<div class="col-sm-6">
				<?php
					$section1_img2 = get_field( 'machine_section1_image2' );

					echo wp_get_attachment_image(
						$section1_img2,
						'full',
						false,
						array(
							'class' => 'img-responsive center-block',
						)
					);
					?>
				</div>
			</div>
		</section>
		<section>
			<div class="_r2 container">
				<div class="_inner">
					<h2>
						<?php the_field( 'machine_section2_headline' ); ?>
					</h2>
				</div>
			</div>
			<div class="_r3">
				<div class="container">
					<h3>
						<?php the_field( 'machine_section2_title' ); ?>
					</h3>
						<?php the_field( 'machine_section2_content1' ); ?>

						<!-- <ul>
							<li>SL2646・SL3246 สามารถดาวน์โหลดรายละเอียดสเปคได้ที่นี่
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-5 center-block">
										<div style="margin: 3px;">
											<img class="img-responsive" style="display: inline-block;" src="/wp-content/themes/token-v2/images/logo_genie_s.png" alt="Genie" /> 
											<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/pdf_gs3246spec.pdf">
												<i class="fa fa-file-pdf-o"></i> PDF
											</a> 
											<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/pdf_gs3246spec.jpg">
												<i class="fa fa-file-picture-o"></i> JPEG
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-5 center-block">
										<div style="margin: 3px;">
											<img class="img-responsive" style="display: inline-block;" src="/wp-content/themes/token-v2/images/logo_jlg_s.png" alt="JLG" /> 
											<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/JLG_3246.pdf">
												<i class="fa fa-file-pdf-o"></i> PDF
											</a> 
											<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/JLG_3246.jpg">
												<i class="fa fa-file-picture-o"></i> JPEG
											</a>
										</div>
									</div>
								</div>
							</li>
							<li>SL4047 สามารถดาวน์โหลดรายละเอียดสเปคได้ที่นี่
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-5 center-block">
										<div style="margin: 3px;">
										<img class="img-responsive" style="display: inline-block;" src="/wp-content/themes/token-v2/images/logo_genie_s.png" alt="Genie" /> 
										<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/pdf_gs4047spec.pdf">
											<i class="fa fa-file-pdf-o"></i> PDF
										</a> 
										<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/pdf_gs4047spec.jpg">
											<i class="fa fa-file-picture-o"></i> JPEG
										</a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 center-block">
									<div style="margin: 3px;">
										<img class="img-responsive" style="display: inline-block;" src="/wp-content/themes/token-v2/images/logo_jlg_s.png" alt="JLG" /> 
										<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/JLG_4045R.pdf">
											<i class="fa fa-file-pdf-o"></i> PDF
										</a> 
										<a class="btn btn-primary btn-sm" href="/wp-content/themes/token-v2/images/JLG_4045R.jpg">
											<i class="fa fa-file-picture-o"></i> JPEG
										</a>
									</div>
								</div>
							</li>
						</ul> -->

						<div class="row">
							<div class="col-sm-12">
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
						<div class="row">
							<div class="col-xl-6">
								<div class="description">
									<?php the_field( 'machine_section2_content3' ); ?>
								</div>
								<?php
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
							<div class="col-xl-6"><?php the_field( 'machine_section2_content4' ); ?>
								<?php
									$section2_img2 = get_field( 'machine_section2_image2' );

									echo wp_get_attachment_image(
										$section2_img2,
										'full',
										false,
										array(
											'class' => 'img-responsive',
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
					<div style="margin-top: 20px;"></div>
					<div class="row">
						<div class="col-12">
							<?php echo do_shortcode( '[product_list key="scissorslift"]' ); ?>
						</div>
					</div>
					<div class="block-column">
						<div class="box-tips">
							<div class="block-caution">
								<div class="image-caution">
								<?php
									$section2_img3 = get_field( 'machine_section2_image3' );

									echo wp_get_attachment_image(
										$section2_img3,
										'full',
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
									<div class="text-right"><span class="_word"><a href="/dict">...more</a></span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-12">
							<div class="box-recentworks" style="margin-bottom: 20px;">
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
			</div>
		</section>
	</div>
	<div class="box-option">
		<section>
			<div class="_r2 container">
				<div class="_inner">
					<h2>
						<?php the_field( 'machine_section3_headline' ); ?>
					</h2>
				</div>
			</div>
			<div class="_r5">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h4><?php the_field( 'machine_section3_title1' ); ?></h4>
							<div class="row">
								<div class="col-xs-6 col">
								<?php
									$section3_img1 = get_field( 'machine_section3_image1' );

									echo wp_get_attachment_image(
										$section3_img1,
										'full',
										false,
										array(
											'class' => 'img-responsive center-block',
											'style' => 'margin: 12px 0px;',
										)
									);
									?>
								</div>
								<div class="col-xs-6 col">
								<?php
									$section3_img2 = get_field( 'machine_section3_image2' );

									echo wp_get_attachment_image(
										$section3_img2,
										'full',
										false,
										array(
											'class' => 'img-responsive center-block',
											'style' => 'margin: 12px 0px;',
										)
									);
									?>
								</div>
							</div>
							<?php the_field( 'machine_section3_content1' ); ?>

						</div>
						<div class="col-sm-6">
							<h4>
								<?php the_field( 'machine_section3_title2' ); ?>
							</h4>
							<div class="row">
								<div class="col-xs-12 col">
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
								</div>
							</div>
							<?php the_field( 'machine_section3_content2' ); ?>
							<div class="cmn_btn_tips">
								<a href="<?php the_field( 'machine_section3_tips_link' ); ?>">
									<?php the_field( 'machine_section3_tips_title' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container page-aerial">
			<h2 class="token-sectiontitle">
				<?php the_field( 'machine_section4_headline' ); ?>
			</h2>
			<?php
			if ( have_rows( 'repeater_machine_usage_detail' ) ) {
				?>
				<ul id="usage-thumbnail" class="box-thumbnail row">
				<?php
				while ( have_rows( 'repeater_machine_usage_detail' ) ) {
					the_row();

					$usage_img     = get_sub_field( 'machine_usage_detail_image' );
					$usage_title   = get_sub_field( 'machine_usage_detail_title' );
					$usage_content = get_sub_field( 'machine_usage_detail_content' );
					?>
					<li class="col-xs-6 col-sm-4 col-md-3 box-img3p">
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
		
		<section class="container page-aerial">
			<h2>
				<?php the_field( 'machine_section5_headline' ); ?>
			</h2>
			<div style="margin-top: 20px;">
				<?php the_field( 'machine_section5_content' ); ?>
			</div>
		</section>
		
		<section class="container page-aerial">
			<h2>
				<?php the_field( 'machine_section6_headline' ); ?>
			</h2>
			<div style="aspect-ratio: 16 / 9;">
				<?php the_field( 'machine_section6_video' ); ?>
			</div>
			<div>
				<?php the_field( 'machine_section6_video_desc' ); ?>
			</div>
		</section>
	</div>
</div>
<?php
get_footer();
