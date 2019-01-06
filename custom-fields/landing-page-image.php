<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c230c39f110c',
	'title' => 'Landing Page Image',
	'fields' => array(
		array(
			'key' => 'field_5c230cde92ac2',
			'label' => 'Landing Page Image',
			'name' => 'landing_page_image',
			'type' => 'image',
			'instructions' => 'This is the large image that appears at the top of the homepage. Please make sure that the image is high resolution.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium_large',
			'library' => 'all',
			'min_width' => 1000,
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif; ?>