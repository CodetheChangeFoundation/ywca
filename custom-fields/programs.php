<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c16f57130655',
	'title' => 'Program Bubbles',
	'fields' => array(
		array(
			'key' => 'field_5c16f5a9b4f44',
			'label' => 'Program One Name',
			'name' => 'program_one_name',
			'type' => 'text',
			'instructions' => 'Name of Program One',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c16f9faeba2a',
			'label' => 'Program One Description',
			'name' => 'program_one_description',
			'type' => 'text',
			'instructions' => 'Description of Program One',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c16f5a9b4f44',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 300,
		),
		array(
			'key' => 'field_5c16f6d2ee9ad',
			'label' => 'Program One Image',
			'name' => 'program_one_image',
			'type' => 'image',
			'instructions' => 'Image for Program One',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c16f5a9b4f44',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => 175,
			'min_height' => 175,
			'min_size' => '',
			'max_width' => 2000,
			'max_height' => 2000,
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c16f956ee9ae',
			'label' => 'Program One Link',
			'name' => 'program_one_link',
			'type' => 'link',
			'instructions' => 'Link for Program One',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c16f5a9b4f44',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
		),
		array(
			'key' => 'field_5c170155c3cff',
			'label' => 'Program Two Name',
			'name' => 'program_two_name',
			'type' => 'text',
			'instructions' => 'Name of Program Two',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c1701eac3d02',
			'label' => 'Program Two Description',
			'name' => 'program_two_description',
			'type' => 'text',
			'instructions' => 'Description of Program Two',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170155c3cff',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 300,
		),
		array(
			'key' => 'field_5c17019fc3d00',
			'label' => 'Program Two Image',
			'name' => 'program_two_image',
			'type' => 'image',
			'instructions' => 'Image for Program Two',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170155c3cff',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => 175,
			'min_height' => 175,
			'min_size' => '',
			'max_width' => 2000,
			'max_height' => 2000,
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c1701cac3d01',
			'label' => 'Program Two Link',
			'name' => 'program_two_link',
			'type' => 'link',
			'instructions' => 'Link for Program Two',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170155c3cff',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
		),
		array(
			'key' => 'field_5c170154c3cfe',
			'label' => 'Program Three Name',
			'name' => 'program_three_name',
			'type' => 'text',
			'instructions' => 'Name of Program Three',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c17029ec3d07',
			'label' => 'Program Three Description',
			'name' => 'program_three_description',
			'type' => 'text',
			'instructions' => 'Description of Program Three',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170154c3cfe',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 300,
		),
		array(
			'key' => 'field_5c17025ec3d06',
			'label' => 'Program Three Image',
			'name' => 'program_three_image',
			'type' => 'image',
			'instructions' => 'Image for Program Three',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170154c3cfe',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => 175,
			'min_height' => 175,
			'min_size' => '',
			'max_width' => 2000,
			'max_height' => 2000,
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c170210c3d04',
			'label' => 'Program Three Link',
			'name' => 'program_three_link',
			'type' => 'link',
			'instructions' => 'Link for Program Three',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170154c3cfe',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
		),
		array(
			'key' => 'field_5c170154c3cfd',
			'label' => 'Program Four Name',
			'name' => 'program_four_name',
			'type' => 'text',
			'instructions' => 'Name of Program Four',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c1702b8c3d08',
			'label' => 'Program Four Description',
			'name' => 'program_four_description',
			'type' => 'text',
			'instructions' => 'Description of Program Four',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170154c3cfd',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 300,
		),
		array(
			'key' => 'field_5c17025cc3d05',
			'label' => 'Program Four Image',
			'name' => 'program_four_image',
			'type' => 'image',
			'instructions' => 'Image for Program Four',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170154c3cfd',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => 175,
			'min_height' => 175,
			'min_size' => '',
			'max_width' => 2000,
			'max_height' => 2000,
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5c17020fc3d03',
			'label' => 'Program Four Link',
			'name' => 'program_four_link',
			'type' => 'link',
			'instructions' => 'Link for Program Four',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c170154c3cfd',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
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
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
?>