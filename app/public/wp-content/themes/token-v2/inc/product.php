<?php
$product_array = array(
	'skymaster'    => 'Skymaster',
	'truckcrane'   => 'Truck Crane',
	'boomlift'     => 'Boom Lift',
	'scissorslift' => 'Scissor Lift',
);

if ( function_exists( 'acf_add_options_page' ) ) {
	foreach ( $product_array as $key => $value ) {
		acf_add_options_sub_page(
			array(
				'page_title'  => $value,
				'menu_title'  => $value,
				'parent_slug' => 'web-setting',
				'menu_slug'   => 'web-setting-' . $key,
			)
		);
	}
}

if ( function_exists( 'acf_add_local_field_group' ) ) {
	foreach ( $product_array as $key => $value ) {
		acf_add_local_field_group(
			array(
				'key'                    => 'group_' . $key . '_settings',
				'title'                  => $value . ' Settings',
				'fields'                 => array(
					array(
						'key'                 => 'field_' . $key . '_product_table',
						'label'               => 'Product Table',
						'name'                => $key . '_product_table',
						'type'                => 'repeater',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'button_label'        => 'Add New Product Set',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_' . $key . '_product_table_title',
								'label'               => 'Title',
								'name'                => 'title',
								'type'                => 'text',
								'wrapper'             => array(
									'width' => '30',
								),
								'wpml_cf_preferences' => 3,
								'parent_repeater'     => 'field_' . $key . '_product_table',
							),
							array(
								'key'                 => 'field_' . $key . '_product_table_product',
								'label'               => 'Product',
								'name'                => 'product',
								'type'                => 'repeater',
								'wrapper'             => array(
									'width' => '70',
								),
								'wpml_cf_preferences' => 3,
								'layout'              => 'block',
								'button_label'        => 'Add New Product',
								'parent_repeater'     => 'field_' . $key . '_product_table',
								'sub_fields'          => array(
									array(
										'key'             => 'field_' . $key . '_product_table_product_image',
										'label'           => 'Image',
										'name'            => 'image',
										'type'            => 'image',
										'wrapper'         => array(
											'width' => '25',
										),
										'wpml_cf_preferences' => 3,
										'return_format'   => 'id',
										'library'         => 'all',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_' . $key . '_product_table_product',
									),
									array(
										'key'             => 'field_' . $key . '_product_table_product_logo',
										'label'           => 'Logo',
										'name'            => 'logo',
										'type'            => 'image',
										'wrapper'         => array(
											'width' => '25',
										),
										'wpml_cf_preferences' => 3,
										'return_format'   => 'id',
										'library'         => 'all',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_' . $key . '_product_table_product',
									),
									array(
										'key'             => 'field_' . $key . '_product_table_product_logo_title',
										'label'           => 'Title',
										'name'            => 'title',
										'type'            => 'text',
										'wrapper'         => array(
											'width' => '50',
										),
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_' . $key . '_product_table_product',
									),
									array(
										'key'             => 'field_' . $key . '_product_table_product_logo_link',
										'label'           => 'Link',
										'name'            => 'link',
										'type'            => 'repeater',
										'wrapper'         => array(
											'width' => '100',
										),
										'wpml_cf_preferences' => 3,
										'layout'          => 'block',
										'button_label'    => 'Add New Link',
										'parent_repeater' => 'field_' . $key . '_product_table_product',
										'sub_fields'      => array(
											array(
												'key'   => 'field_' . $key . '_product_table_product_logo_link_link_text',
												'label' => 'Link Text',
												'name'  => 'link_text',
												'type'  => 'text',
												'wpml_cf_preferences' => 3,
												'parent_repeater' => 'field_' . $key . '_product_table_product_logo_link',
											),
											array(
												'key'   => 'field_' . $key . '_product_table_product_logo_link_link',
												'label' => 'Link',
												'name'  => 'link',
												'type'  => 'text',
												'wpml_cf_preferences' => 3,
												'parent_repeater' => 'field_' . $key . '_product_table_product_logo_link',
											),
										),
									),
								),
							),
						),
					),
				),
				'location'               => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'web-setting-' . $key,
						),
					),
				),
				'acfml_field_group_mode' => 'advanced',
			)
		);
	}
}

function display_product_list( $atts ) {
	$atts = shortcode_atts(
		array(
			'key' => 'boomlift',
		),
		$atts
	);

	ob_start();
	if ( have_rows( $atts['key'] . '_product_table', 'option' ) ) {
		?>
		<div class="product-table">
			<?php
			while ( have_rows( $atts['key'] . '_product_table', 'option' ) ) {
				the_row();
				?>
				<div class="product-table-title">
					<?php the_sub_field( 'title' ); ?>
				</div>
				<div class="product-table-product-list">
					<?php
					if ( have_rows( 'product' ) ) {
						while ( have_rows( 'product' ) ) {
							the_row();
							?>
							<div class="product-item">
								<div class="thumb">
									<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'product_thumb' ); ?>
								</div>
								<div class="info">
									<div class="title-box">
										<?php
											echo wp_get_attachment_image( get_sub_field( 'logo' ), array( 100, 20 ) );
											the_sub_field( 'title' );
										?>
									</div>
									<?php
									if ( have_rows( 'link' ) ) {
										?>
										<div class="link-box">
											<?php
											while ( have_rows( 'link' ) ) {
												the_row();
												?>
												<a class="btn btn-primary btn-sm" href="<?php the_sub_field( 'link' ); ?>" target="_blank">
													<?php the_sub_field( 'link_text' ); ?>
												</a>
												<?php
											}
											?>
										</div>
										<?php
									}
									?>
								</div>
							</div>
							<?php
						}
					}
					?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
	return ob_get_clean();
}
add_shortcode( 'product_list', 'display_product_list' );
