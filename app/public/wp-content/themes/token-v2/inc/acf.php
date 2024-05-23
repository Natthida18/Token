<?php
/**
 * ACF
 *
 * @package Token
 */
function register_all_acf_fields() {
	$args = array(
		'public'   => true,
		'_builtin' => false,
	);

	$all_custom_post_type = get_post_types( $args );

	unset( $all_custom_post_type['wpdmpro'] );

	foreach ( $all_custom_post_type as $value ) {
		$this_post_type = get_post_type_object( $value );

		$custom_fields_custom_post_type_array[] = array(
			'key'                 => 'field_web_settings_background_image_' . $value,
			'label'               => $this_post_type->label . ' Background Image',
			'name'                => $value . '_background_image',
			'type'                => 'image',
			'wpml_cf_preferences' => 3,
			'return_format'       => 'id',
			'library'             => 'all',
			'preview_size'        => 'large',
		);
	}

	if ( function_exists( 'acf_add_local_field_group' ) ) {
		acf_add_local_field_group(
			array(
				'key'                   => 'group_635d4aab5901f',
				'title'                 => 'HOME',
				'fields'                => array(
					array(
						'key'                 => 'field_635d4aac45961',
						'label'               => 'Section 1',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635d4ac645962',
						'label'               => 'Section 1',
						'name'                => 'section_1',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635d4ad545963',
								'label'               => 'Slider',
								'name'                => 'slider',
								'type'                => 'repeater',
								'wpml_cf_preferences' => 3,
								'layout'              => 'table',
								'button_label'        => 'Add Row',
								'rows_per_page'       => 20,
								'sub_fields'          => array(
									array(
										'key'             => 'field_635d4aeb45964',
										'label'           => 'Image',
										'name'            => 'image',
										'type'            => 'image',
										'wpml_cf_preferences' => 3,
										'return_format'   => 'id',
										'library'         => 'all',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_635d4ad545963',
									),
									array(
										'key'             => 'field_635d4afc45965',
										'label'           => 'Link',
										'name'            => 'link',
										'type'            => 'text',
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635d4ad545963',
									),
								),
							),
						),
					),
					array(
						'key'                 => 'field_635d4b5f45966',
						'label'               => 'Section 2',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635d4b6b45967',
						'label'               => 'Section 2',
						'name'                => 'section_2',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635d4d0345975',
								'label'               => 'Heading',
								'name'                => 'heading',
								'type'                => 'text',
								'wpml_cf_preferences' => 3,
							),
							array(
								'key'                 => 'field_635d4d0c45976',
								'label'               => 'Content',
								'name'                => 'content',
								'type'                => 'textarea',
								'wpml_cf_preferences' => 3,
								'new_lines'           => 'br',
							),
							array(
								'key'                 => 'field_635d4c434596f',
								'label'               => 'Item',
								'name'                => 'item',
								'type'                => 'repeater',
								'wpml_cf_preferences' => 3,
								'layout'              => 'row',
								'button_label'        => 'Add Row',
								'rows_per_page'       => 20,
								'sub_fields'          => array(
									array(
										'key'             => 'field_635d4c8e45972',
										'label'           => 'Title',
										'name'            => 'title',
										'type'            => 'text',
										'required'        => 1,
										'conditional_logic' => 0,
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635d4c434596f',
									),
									array(
										'key'             => 'field_635f4fd29cdee',
										'label'           => 'Page',
										'name'            => 'page',
										'type'            => 'post_object',
										'required'        => 1,
										'conditional_logic' => 0,
										'wpml_cf_preferences' => 3,
										'post_type'       => array(
											0 => 'page',
										),
										'return_format'   => 'object',
										'multiple'        => 0,
										'allow_null'      => 0,
										'ui'              => 1,
										'parent_repeater' => 'field_635d4c434596f',
									),
									array(
										'key'             => 'field_635d4c5e45970',
										'label'           => 'Image',
										'name'            => 'image',
										'type'            => 'repeater',
										'wpml_cf_preferences' => 3,
										'layout'          => 'table',
										'min'             => 0,
										'max'             => 2,
										'button_label'    => 'Add Row',
										'rows_per_page'   => 20,
										'sub_fields'      => array(
											array(
												'key'     => 'field_635d4c7145971',
												'label'   => 'Image',
												'name'    => 'image',
												'type'    => 'image',
												'wpml_cf_preferences' => 3,
												'return_format' => 'id',
												'library' => 'all',
												'preview_size' => 'medium',
												'parent_repeater' => 'field_635d4c5e45970',
											),
										),
										'parent_repeater' => 'field_635d4c434596f',
									),
									array(
										'key'             => 'field_635d4c9745973',
										'label'           => 'Content',
										'name'            => 'content',
										'type'            => 'textarea',
										'wpml_cf_preferences' => 3,
										'new_lines'       => 'br',
										'parent_repeater' => 'field_635d4c434596f',
									),
									array(
										'key'             => 'field_635d4cd245974',
										'label'           => 'Image footer',
										'name'            => 'image_footer',
										'type'            => 'image',
										'wpml_cf_preferences' => 3,
										'return_format'   => 'id',
										'library'         => 'all',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_635d4c434596f',
									),
								),
							),
						),
					),
					array(
						'key'                 => 'field_635d4b8a45968',
						'label'               => 'Section 3',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635d4b9745969',
						'label'               => 'Section 3',
						'name'                => 'section_3',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635d4c2e4596e',
								'label'               => 'Heading',
								'name'                => 'heading',
								'type'                => 'text',
								'wpml_cf_preferences' => 3,
							),
							array(
								'key'                 => 'field_635d4ba84596a',
								'label'               => 'Service',
								'name'                => 'service',
								'type'                => 'repeater',
								'wpml_cf_preferences' => 3,
								'layout'              => 'table',
								'min'                 => 0,
								'max'                 => 6,
								'button_label'        => 'Add Row',
								'rows_per_page'       => 20,
								'sub_fields'          => array(
									array(
										'key'             => 'field_635d4bba4596b',
										'label'           => 'Image',
										'name'            => 'image',
										'type'            => 'image',
										'required'        => 1,
										'conditional_logic' => 0,
										'wpml_cf_preferences' => 3,
										'return_format'   => 'url',
										'library'         => 'all',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_635d4ba84596a',
									),
									array(
										'key'             => 'field_635d4c014596c',
										'label'           => 'Title',
										'name'            => 'title',
										'type'            => 'text',
										'required'        => 1,
										'conditional_logic' => 0,
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635d4ba84596a',
									),
									array(
										'key'             => 'field_635d4c074596d',
										'label'           => 'Content',
										'name'            => 'content',
										'type'            => 'textarea',
										'required'        => 1,
										'conditional_logic' => 0,
										'wpml_cf_preferences' => 3,
										'new_lines'       => 'br',
										'parent_repeater' => 'field_635d4ba84596a',
									),
									array(
										'key'             => 'field_635f5788ef759',
										'label'           => 'Link',
										'name'            => 'link',
										'type'            => 'text',
										'required'        => 1,
										'conditional_logic' => 0,
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635d4ba84596a',
									),
								),
							),
						),
					),
					array(
						'key'                 => 'field_635d4d4045977',
						'label'               => 'Section 4',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635d4d4445978',
						'label'               => 'Section 4',
						'name'                => 'section_4',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635d4d9e4597a',
								'label'               => 'Image title md',
								'name'                => 'image_title_md',
								'type'                => 'image',
								'wpml_cf_preferences' => 3,
								'return_format'       => 'id',
								'library'             => 'all',
								'preview_size'        => 'medium',
							),
							array(
								'key'                 => 'field_635d4dc44597b',
								'label'               => 'Image title xs',
								'name'                => 'image_title_xs',
								'type'                => 'image',
								'wpml_cf_preferences' => 3,
								'return_format'       => 'id',
								'library'             => 'all',
								'preview_size'        => 'medium',
							),
							array(
								'key'                 => 'field_635d4d6745979',
								'label'               => 'Link',
								'name'                => 'link',
								'type'                => 'post_object',
								'wpml_cf_preferences' => 3,
								'post_type'           => array(
									0 => 'page',
								),
								'return_format'       => 'id',
								'multiple'            => 0,
								'allow_null'          => 0,
								'ui'                  => 1,
							),
						),
					),
					array(
						'key'                 => 'field_635d4df74597c',
						'label'               => 'Section 5',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635d4dfa4597d',
						'label'               => 'Section 5',
						'name'                => 'section_5',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635d4e0e4597e',
								'label'               => 'Image Banner',
								'name'                => 'image_banner',
								'type'                => 'image',
								'wpml_cf_preferences' => 3,
								'return_format'       => 'id',
								'library'             => 'all',
								'preview_size'        => 'medium',
							),
							array(
								'key'                 => 'field_635d4e1e4597f',
								'label'               => 'Image Link',
								'name'                => 'image_link',
								'type'                => 'text',
								'wpml_cf_preferences' => 3,
							),
							array(
								'key'                 => 'field_635d4e3f45980',
								'label'               => 'Youtube',
								'name'                => 'youtube',
								'type'                => 'textarea',
								'wpml_cf_preferences' => 3,
							),
						),
					),
					array(
						'key'                 => 'field_635d4e6a45982',
						'label'               => 'Section 6',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635d4e6f45983',
						'label'               => 'Section 6',
						'name'                => 'section_6',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_6360b6847338d',
								'label'               => 'Heading Tips',
								'name'                => 'heading_tips',
								'type'                => 'text',
								'wrapper'             => array(
									'width' => '50',
								),
								'wpml_cf_preferences' => 3,
							),
							array(
								'key'                 => 'field_6360b78a7338e',
								'label'               => 'Page Tips',
								'name'                => 'page_tips',
								'type'                => 'post_object',
								'wrapper'             => array(
									'width' => '50',
								),
								'wpml_cf_preferences' => 3,
								'post_type'           => array(
									0 => 'page',
								),
								'taxonomy'            => '',
								'return_format'       => 'id',
								'multiple'            => 0,
								'allow_null'          => 0,
								'ui'                  => 1,
							),
							array(
								'key'                 => 'field_635d4e7745984',
								'label'               => 'Iframe Facebook',
								'name'                => 'iframe_facebook',
								'type'                => 'textarea',
								'wpml_cf_preferences' => 3,
								'new_lines'           => '',
							),
							array(
								'key'                 => 'field_635d4eae45985',
								'label'               => 'Banner',
								'name'                => 'banner',
								'type'                => 'image',
								'wpml_cf_preferences' => 3,
								'return_format'       => 'id',
								'library'             => 'all',
								'preview_size'        => 'medium',
							),
							array(
								'key'                 => 'field_635d4f2845986',
								'label'               => 'Logo footer',
								'name'                => 'logo_footer',
								'type'                => 'image',
								'wpml_cf_preferences' => 3,
								'return_format'       => 'id',
								'library'             => 'all',
								'preview_size'        => 'medium',
							),
							array(
								'key'                 => 'field_635d4f3f45987',
								'label'               => 'Content',
								'name'                => 'content',
								'type'                => 'textarea',
								'wpml_cf_preferences' => 3,
							),
						),
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'front-page.php',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'active'                => true,
			)
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_5bc942117f695',
				'title'                 => 'Specs',
				'fields'                => array(
					array(
						'key'                 => 'field_5bc9421dfecae',
						'label'               => 'Machine Picture',
						'name'                => 'ss_picture',
						'type'                => 'image',
						'wpml_cf_preferences' => 3,
						'return_format'       => 'id',
						'library'             => 'all',
						'preview_size'        => 'thumbnail',
					),
					array(
						'key'                 => 'field_5bc9426efecaf',
						'label'               => 'Machine',
						'name'                => 'ss_machine',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
					),
					array(
						'key'                 => 'field_5bc94279fecb0',
						'label'               => 'Work Place',
						'name'                => 'ss_work_place',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
					),
					array(
						'key'                 => 'field_5bc9428dfecb1',
						'label'               => 'Date',
						'name'                => 'ss_date',
						'type'                => 'date_picker',
						'wpml_cf_preferences' => 3,
						'display_format'      => 'Y-m-d',
						'return_format'       => 'Ymd',
						'first_day'           => 1,
					),
					array(
						'key'                 => 'field_5bc942bafecb2',
						'label'               => 'Purpose',
						'name'                => 'ss_purpose',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
					),
					array(
						'key'                 => 'field_5bc942d0fecb3',
						'label'               => 'Feedback',
						'name'                => 'ss_feedback',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
					),
					array(
						'key'                 => 'field_5bc942e6fecb4',
						'label'               => 'Comment',
						'name'                => 'ss_comment',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
					),
					array(
						'key'                 => 'field_5bc942fffecb5',
						'label'               => 'Short Content',
						'name'                => 'ss_short_content',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
					),
					array(
						'key'                 => 'field_5e9585ceeba10',
						'label'               => 'URL',
						'name'                => 'ss_url',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
						'placeholder'         => 'https:// ...',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'recentworks',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => array(
					0 => 'categories',
				),
				'active'                => true,
			)
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_606beb34131d7',
				'title'                 => 'Tips',
				'fields'                => array(
					array(
						'key'                 => 'field_606bf4a842b5a',
						'label'               => 'Picture',
						'name'                => 'ss_picture',
						'type'                => 'image',
						'required'            => 1,
						'conditional_logic'   => 0,
						'wpml_cf_preferences' => 3,
						'return_format'       => 'id',
						'library'             => 'all',
						'preview_size'        => 'thumbnail',
					),
					array(
						'key'                 => 'field_606bfbe33274f',
						'label'               => 'PDF File',
						'name'                => 'ss_pdf',
						'type'                => 'file',
						'wpml_cf_preferences' => 3,
						'return_format'       => 'array',
						'library'             => 'all',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'tips',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'active'                => true,
			)
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_635b961e62dc5',
				'title'                 => 'Web setting',
				'fields'                => array(
					array(
						'key'                 => 'field_635b961f7429c',
						'label'               => 'Contact',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635b97f540c24',
						'label'               => 'Contact',
						'name'                => 'contact',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635b982a40c25',
								'label'               => 'Tel',
								'name'                => 'tel',
								'type'                => 'repeater',
								'wpml_cf_preferences' => 3,
								'layout'              => 'table',
								'button_label'        => 'Add Row',
								'rows_per_page'       => 20,
								'sub_fields'          => array(
									array(
										'key'             => 'field_635b98bec836b',
										'label'           => 'Name',
										'name'            => 'name',
										'type'            => 'text',
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635b982a40c25',
									),
									array(
										'key'             => 'field_635b983b40c26',
										'label'           => 'Number',
										'name'            => 'number',
										'type'            => 'text',
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635b982a40c25',
									),
								),
							),
						),
					),
					array(
						'key'                 => 'field_635b9b7dbfcf1',
						'label'               => 'Social',
						'name'                => 'social',
						'type'                => 'repeater',
						'wpml_cf_preferences' => 3,
						'layout'              => 'table',
						'min'                 => 0,
						'max'                 => 3,
						'button_label'        => 'Add Row',
						'rows_per_page'       => 20,
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635b9b8fbfcf2',
								'label'               => 'Image',
								'name'                => 'image',
								'type'                => 'image',
								'wpml_cf_preferences' => 3,
								'return_format'       => 'id',
								'library'             => 'all',
								'preview_size'        => 'medium',
								'parent_repeater'     => 'field_635b9b7dbfcf1',
							),
							array(
								'key'                 => 'field_6360e5e15699f',
								'label'               => 'Name',
								'name'                => 'name',
								'type'                => 'text',
								'wpml_cf_preferences' => 3,
								'parent_repeater'     => 'field_635b9b7dbfcf1',
							),
							array(
								'key'                 => 'field_635b9b9fbfcf3',
								'label'               => 'Link',
								'name'                => 'link',
								'type'                => 'url',
								'wpml_cf_preferences' => 3,
								'parent_repeater'     => 'field_635b9b7dbfcf1',
							),
						),
					),
					array(
						'key'                 => 'field_635d44b9e745e',
						'label'               => 'Header sub title',
						'name'                => 'header_sub_title',
						'type'                => 'text',
						'wpml_cf_preferences' => 3,
					),
					array(
						'key'                 => 'field_635ba9776d3a7',
						'label'               => 'Menu',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635badd03fe91',
						'label'               => 'Menu',
						'name'                => 'menu',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635ba8593ba33',
								'label'               => 'Menu',
								'name'                => 'menu',
								'type'                => 'repeater',
								'wpml_cf_preferences' => 3,
								'layout'              => 'table',
								'min'                 => 0,
								'max'                 => 5,
								'button_label'        => 'Add Row',
								'rows_per_page'       => 20,
								'sub_fields'          => array(
									array(
										'key'             => 'field_635ba8683ba34',
										'label'           => 'Image md',
										'name'            => 'image_md',
										'type'            => 'image',
										'wpml_cf_preferences' => 3,
										'return_format'   => 'id',
										'library'         => 'all',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_635ba8593ba33',
									),
									array(
										'key'             => 'field_635ba9e483e0e',
										'label'           => 'Image xs',
										'name'            => 'image_xs',
										'type'            => 'image',
										'wpml_cf_preferences' => 3,
										'return_format'   => 'id',
										'library'         => 'all',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_635ba8593ba33',
									),
									array(
										'key'             => 'field_635bafca0c9c2',
										'label'           => 'Name',
										'name'            => 'name',
										'type'            => 'text',
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635ba8593ba33',
									),
									array(
										'key'             => 'field_6384517cae70c',
										'label'           => 'Name Footer',
										'name'            => 'name_footer',
										'type'            => 'text',
										'wpml_cf_preferences' => '',
										'parent_repeater' => 'field_635ba8593ba33',
									),
									array(
										'key'             => 'field_635ba8a23ba35',
										'label'           => 'Link',
										'name'            => 'link',
										'type'            => 'text',
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635ba8593ba33',
									),
								),
							),
						),
					),
					array(
						'key'                 => 'field_635fa467bb82c',
						'label'               => 'Footer',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_635fa470bb82d',
						'label'               => 'Footer',
						'name'                => 'footer',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => array(
							array(
								'key'                 => 'field_635fa47bbb82e',
								'label'               => 'Content top',
								'name'                => 'content_top',
								'type'                => 'textarea',
								'wpml_cf_preferences' => 3,
								'new_lines'           => 'br',
							),
							array(
								'key'                 => 'field_635fa4abbb82f',
								'label'               => 'Office',
								'name'                => 'office',
								'type'                => 'repeater',
								'wpml_cf_preferences' => 3,
								'layout'              => 'row',
								'button_label'        => 'Add Row',
								'rows_per_page'       => 20,
								'sub_fields'          => array(
									array(
										'key'             => 'field_635fa58bbb830',
										'label'           => 'Title',
										'name'            => 'title',
										'type'            => 'text',
										'wpml_cf_preferences' => 3,
										'parent_repeater' => 'field_635fa4abbb82f',
									),
									array(
										'key'             => 'field_635fa594bb831',
										'label'           => 'Address',
										'name'            => 'address',
										'type'            => 'textarea',
										'wpml_cf_preferences' => 3,
										'new_lines'       => 'br',
										'parent_repeater' => 'field_635fa4abbb82f',
									),
								),
							),
							array(
								'key'                 => 'field_6360e9b224f74',
								'label'               => 'Copyright',
								'name'                => 'copyright',
								'type'                => 'text',
								'wpml_cf_preferences' => 3,
							),
							array(
								'key'                 => 'field_6361e809537b3',
								'label'               => 'Line add friend',
								'name'                => 'line_add_friend',
								'type'                => 'group',
								'wpml_cf_preferences' => 3,
								'layout'              => 'block',
								'sub_fields'          => array(
									array(
										'key'     => 'field_6361e832537b4',
										'label'   => 'Title',
										'name'    => 'title',
										'type'    => 'text',
										'wrapper' => array(
											'width' => '50',
										),
										'wpml_cf_preferences' => 3,
									),
									array(
										'key'     => 'field_6361ec32fe321',
										'label'   => 'Alt',
										'name'    => 'alt',
										'type'    => 'text',
										'wrapper' => array(
											'width' => '50',
										),
										'wpml_cf_preferences' => 3,
									),
									array(
										'key'   => 'field_6361e83c537b5',
										'label' => 'Link',
										'name'  => 'link',
										'type'  => 'url',
										'wpml_cf_preferences' => 3,
									),
									array(
										'key'   => 'field_6361eaab339fd',
										'label' => 'Image Link',
										'name'  => 'image_link',
										'type'  => 'url',
										'wpml_cf_preferences' => 3,
									),
								),
							),
						),
					),
					array(
						'key'                 => 'field_tab_custom_post_type',
						'label'               => 'Custom Post Type',
						'type'                => 'tab',
						'wpml_cf_preferences' => 3,
						'placement'           => 'top',
					),
					array(
						'key'                 => 'field_group_background_image_custom_post_type',
						'label'               => 'Background for custom post type',
						'name'                => 'background_custom_post_type',
						'type'                => 'group',
						'wpml_cf_preferences' => 3,
						'layout'              => 'block',
						'sub_fields'          => $custom_fields_custom_post_type_array,
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => 'web-setting',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'active'                => true,
			)
		);

		$field_group = array(
			'key'                   => 'group_product_page',
			'title'                 => 'Product Page Settings',
			'fields'                => array(),
			'location'              => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'template-product.php',
					),
				),
			),
			'menu_order'            => 1,
			'position'              => 'acf_after_title',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'active'                => true,
		);

		array_push(
			$field_group['fields'],
			array(
				'key'        => 'field_product_page_settings',
				'label'      => 'Product Page Settings',
				'name'       => 'product_page_settings',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_product_page_main_logo',
						'label'         => 'Logo',
						'name'          => 'main_logo',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_product_page_gallery',
						'label'         => 'Gallery',
						'name'          => 'gallery',
						'type'          => 'gallery',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_product_page_side_product_image',
						'label'         => 'Side Image',
						'name'          => 'side_image',
						'type'          => 'gallery',
						'return_format' => 'id',
					),
					array(
						'key'   => 'field_product_page_details_main_title',
						'label' => 'Detail Title',
						'name'  => 'details_main_title',
						'type'  => 'text',
					),
					array(
						'key'          => 'field_product_page_details',
						'label'        => 'Details',
						'name'         => 'details',
						'type'         => 'repeater',
						'button_label' => 'Add new detail',
						'layout'       => 'block',
						'sub_fields'   => array(
							array(
								'key'     => 'field_product_page_details_title',
								'label'   => 'Title',
								'name'    => 'title',
								'type'    => 'text',
								'wrapper' => array(
									'width' => '30',
								),
							),
							array(
								'key'     => 'field_product_page_details_content',
								'label'   => 'Content',
								'name'    => 'content',
								'type'    => 'wysiwyg',
								'wrapper' => array(
									'width' => '70',
								),
							),
						),
					),
					array(
						'key'          => 'field_product_page_downloads',
						'label'        => 'Files',
						'name'         => 'files',
						'type'         => 'repeater',
						'button_label' => 'Add new file',
						'layout'       => 'block',
						'wrapper'      => array(
							'width' => '50',
						),
						'sub_fields'   => array(
							array(
								'key'     => 'field_product_page_downloads_title',
								'label'   => 'Title',
								'name'    => 'title',
								'type'    => 'text',
								'wrapper' => array(
									'width' => '30',
								),
							),
							array(
								'key'           => 'field_product_page_details_file',
								'label'         => 'File',
								'name'          => 'file',
								'type'          => 'file',
								'return_format' => 'id',
								'wrapper'       => array(
									'width' => '70',
								),
							),
						),
					),
					array(
						'key'     => 'field_product_page_downloads_notice',
						'label'   => 'Download File Notice',
						'type'    => 'text',
						'name'    => 'download_file_notice',
						'wrapper' => array(
							'width' => '50',
						),
					),
				),
			)
		);

		acf_add_local_field_group( $field_group );

		acf_add_local_field_group(
			array(
				'key'      => 'scissors_lift_section_1',
				'title'    => 'Section 1',
				'fields'   => array(
					array(
						'key'   => 'field_page_title_th',
						'label' => 'Page Title TH',
						'name'  => 'page_title_th',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_page_title_en',
						'label' => 'Page Title EN',
						'name'  => 'page_title_en',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_tab_content1_section1',
						'label' => 'Content 1',
						'name'  => 'tab_content1_section1',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_content1_section1',
						'label' => 'Content 1',
						'name'  => 'content1_section1',
						'type'  => 'textarea',
					),
					array(
						'key'   => 'field_tab_content2_section1',
						'label' => 'Content 2',
						'name'  => 'tab_content2_section1',
						'type'  => 'tab',
					),
					array(
						'key'           => 'field_image1_content2_section1',
						'label'         => 'Image 1',
						'name'          => 'image1_content2_section1',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_image2_content2_section1',
						'label'         => 'Image 2',
						'name'          => 'image2_content2_section1',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'   => 'field_content2_section1',
						'label' => 'Content 2',
						'name'  => 'content2_section1',
						'type'  => 'textarea',
					),
					array(
						'key'   => 'field_tab_content3_section1',
						'label' => 'Content 3',
						'name'  => 'tab_content3_section1',
						'type'  => 'tab',
					),
					array(
						'key'           => 'field_image1_content3_section1',
						'label'         => 'Image 1',
						'name'          => 'image1_content3_section1',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_image2_content3_section1',
						'label'         => 'Image 2',
						'name'          => 'image2_content3_section1',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_image3_content3_section1',
						'label'         => 'Image 3',
						'name'          => 'image3_content3_section1',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_image4_content3_section1',
						'label'         => 'Image 4',
						'name'          => 'image4_content3_section1',
						'type'          => 'image',
						'return_format' => 'id',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'template-scissors-lift.php',
						),
					),
				),
			),
		);

		acf_add_local_field_group(
			array(
				'key'      => 'scissors_lift_section2',
				'title'    => 'Section 2',
				'fields'   => array(
					array(
						'key'   => 'field_tab_section2',
						'label' => 'Content 1',
						'name'  => 'tab_content1_section2',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_headline_content1_section2',
						'label' => 'Headline',
						'name'  => 'headline_content1_section2',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_title_content1_section2',
						'label' => 'Title',
						'name'  => 'title_content1_section2',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_text1_content1_section2',
						'label' => 'Content 1',
						'name'  => 'text1_content1_section2',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_tab_content2_section2',
						'label' => 'Content 2',
						'name'  => 'tab_content2_section2',
						'type'  => 'tab',
					),
					array(
						'key'        => 'repeater_compare_table',
						'label'      => 'Scissors Lift',
						'name'       => 'compare_table',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'   => 'field_title_compare_table',
								'label' => 'Title Scissors Lift',
								'name'  => 'title_compare_table',
								'type'  => 'text',
							),
							array(
								'key'        => 'repeater_value_compare_table',
								'label'      => 'Value Scissors Lift',
								'name'       => 'value_compare_table',
								'type'       => 'repeater',
								'sub_fields' => array(
									array(
										'key'  => 'field_value_scissors_lift',
										'name' => 'value_scissors_lift',
										'type' => 'text',
									),
								),
							),
						),
					),
					array(
						'key'   => 'field_tab_content3_section2',
						'label' => 'Content 3',
						'name'  => 'tab_content3_section2',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_text1_content3_section2',
						'label' => 'Content 1',
						'name'  => 'text1_content3_section2',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_image1_content3_section2',
						'label'         => 'Image 1',
						'name'          => 'image1_content3_section2',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'   => 'field_text2_content3_section2',
						'label' => 'Content 2',
						'name'  => 'text2_content3_section2',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_image2_content3_section2',
						'label'         => 'Image 2',
						'name'          => 'image2_content3_section2',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'        => 'repeater_stretch_detail',
						'label'      => 'Stretch Detail',
						'name'       => 'stretch_detail',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'   => 'field_title_stretch_detail',
								'label' => 'Title Stretch Detail',
								'name'  => 'title_stretch_detail',
								'type'  => 'text',
							),
							array(
								'key'        => 'repeater_value_stretch_detail',
								'label'      => 'Value Stretch Detai',
								'name'       => 'value_stretch_detail',
								'type'       => 'repeater',
								'sub_fields' => array(
									array(
										'key'  => 'field_value_stretch_detail',
										'name' => 'value_stretch_detail',
										'type' => 'text',
									),
								),
							),
						),
					),
					array(
						'key'   => 'field_tab_content4_section2',
						'label' => 'Content 4',
						'name'  => 'tab_content4_section2',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_shortcode_section2',
						'label' => 'Shortcode',
						'name'  => 'shortcode_section2',
						'type'  => 'wysiwyg',
					),
					array(
						'key'   => 'field_tab_content5_section2',
						'label' => 'Content 5',
						'name'  => 'tab_content5_section2',
						'type'  => 'tab',
					),
					array(
						'key'           => 'field_image1_content5_section2',
						'label'         => 'Image 1',
						'name'          => 'image1_content5_section2',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'   => 'field_text1_content5_section2',
						'label' => 'Content 1',
						'name'  => 'text1_content5_section2',
						'type'  => 'textarea',
					),
					array(
						'key'   => 'field_text_content5_section2',
						'label' => 'Text',
						'name'  => 'text_content5_section2',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_link_content5_section2',
						'label' => 'Link',
						'name'  => 'link_content5_section2',
						'type'  => 'url',
					),
					array(
						'key'   => 'field_text2_content5_section2',
						'label' => 'Content 2',
						'name'  => 'text2_content5_section2',
						'type'  => 'text',
					),
					array(
						'key'        => 'repeater_words_content5_section2',
						'label'      => 'Words',
						'name'       => 'words_content5_section2',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'   => 'field_link_word_content5_section2',
								'label' => 'Link',
								'name'  => 'link_word_content5',
								'type'  => 'url',
							),
							array(
								'key'   => 'field_text_word_content5_section2',
								'label' => 'Word',
								'name'  => 'text_word_content5',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'   => 'field_tab_content6_section2',
						'label' => 'Content 6',
						'name'  => 'tab_content6_section2',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_link_content6_section2',
						'label' => 'Link',
						'name'  => 'link_content6_section2',
						'type'  => 'url',
					),
					array(
						'key'           => 'field_image1_content6_section2',
						'label'         => 'Image 1',
						'name'          => 'image1_content6_section2',
						'type'          => 'image',
						'return_format' => 'id',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'template-scissors-lift.php',
						),
					),
				),
			),
		);

		acf_add_local_field_group(
			array(
				'key'      => 'scissors_lift_section_3',
				'title'    => 'Section 3',
				'fields'   => array(
					array(
						'key'   => 'field_tab_content1_section3',
						'label' => 'Content 1',
						'name'  => 'tab_content1_section3',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_headline_section3',
						'label' => 'Headline',
						'name'  => 'headline_section3',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_content1_section3',
						'label' => 'Content 1',
						'name'  => 'content1_section3',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_content3_section3',
						'label' => 'Sub Content 1',
						'name'  => 'sub_content1_section3',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_content2_section3',
						'label' => 'Content 2',
						'name'  => 'content2_section3',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_content4_section3',
						'label' => 'Sub Content 2',
						'name'  => 'sub_content2_section3',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_tab_content2_section3',
						'label' => 'Content 2',
						'name'  => 'tab_content2_section3',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_text_content2_section3',
						'label' => 'Text',
						'name'  => 'text_content2_section3',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_link_content2_section3',
						'label' => 'Link',
						'name'  => 'link_content2_section3',
						'type'  => 'url',
					),
					array(
						'key'   => 'field_tab_image_section3',
						'label' => 'Image',
						'name'  => 'image_section3',
						'type'  => 'tab',
					),
					array(
						'key'           => 'field_image1_section3',
						'label'         => 'Image 1',
						'name'          => 'image1_section3',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_image2_section3',
						'label'         => 'Image 2',
						'name'          => 'image2_section3',
						'type'          => 'image',
						'return_format' => 'id',
					),
					array(
						'key'           => 'field_image3_section3',
						'label'         => 'Image 3',
						'name'          => 'image3_section3',
						'type'          => 'image',
						'return_format' => 'id',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'template-scissors-lift.php',
						),
					),
				),
			),
		);

		acf_add_local_field_group(
			array(
				'key'      => 'scissors_lift_section_4',
				'title'    => 'Section 4',
				'fields'   => array(
					array(
						'key'   => 'field_headline',
						'label' => 'Headline',
						'name'  => 'headline',
						'type'  => 'text',
					),
					array(
						'key'        => 'repeater_usage_scissors_lift',
						'label'      => 'Usage Scissors Lift',
						'name'       => 'usage_scissors_lift',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'           => 'field_usage_scissors_lift_img',
								'label'         => 'Image',
								'name'          => 'usage_scissors_lift_image',
								'type'          => 'image',
								'return_format' => 'id',
							),
							array(
								'key'   => 'field_usage_scissors_lift_title',
								'label' => 'Title',
								'name'  => 'usage_scissors_lift_title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_usage_scissors_lift_content',
								'label' => 'Content',
								'name'  => 'usage_scissors_lift_content',
								'type'  => 'textarea',
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'template-scissors-lift.php',
						),
					),
				),
			),
		);

		acf_add_local_field_group(
			array(
				'key'      => 'scissors_lift_section_5_6',
				'title'    => 'Section 5 & Section 6',
				'fields'   => array(
					array(
						'key'   => 'field_tab_section_5',
						'label' => 'Section 5',
						'name'  => 'tab_content_5',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_headline_section_5',
						'label' => 'Headline',
						'name'  => 'headline_section_5',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_content_section_5',
						'label' => 'Content',
						'name'  => 'content_section_5',
						'type'  => 'wysiwyg',
					),
					array(
						'key'   => 'field_tab_section_6',
						'label' => 'Section 6',
						'name'  => 'tab_content_6',
						'type'  => 'tab',
					),
					array(
						'key'   => 'field_headline_section_6',
						'label' => 'Headline',
						'name'  => 'headline_section_6',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_video_section_6',
						'label' => 'Video',
						'name'  => 'video_section_6',
						'type'  => 'oembed',
					),
					array(
						'key'   => 'field_content_section_6',
						'label' => 'content',
						'name'  => 'content_section_6',
						'type'  => 'wysiwyg',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'template-scissors-lift.php',
						),
					),
				),
			),
		);
	}
}
add_action( 'init', 'register_all_acf_fields' );
