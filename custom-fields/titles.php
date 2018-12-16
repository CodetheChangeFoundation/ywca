<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c169ddc8ac3b',
	'title' => 'Title Fields',
	'fields' => array(
		array(
			'key' => 'field_5c16b7df6d044',
			'label' => 'Enable First Title',
			'name' => 'enable_first_title',
			'type' => 'true_false',
			'instructions' => 'Check if you would like a title at the top of your page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5c16b82e5a1a7',
			'label' => 'First Title',
			'name' => 'first_title',
			'type' => 'text',
			'instructions' => 'First Title On Page',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c16b7df6d044',
						'operator' => '==',
						'value' => '1',
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
			'maxlength' => 100,
		),
		array(
			'key' => 'field_5c16a11d653d4',
			'label' => 'Enable Second Title',
			'name' => 'enable_second_title',
			'type' => 'true_false',
			'instructions' => 'Check if you would like a second title on your page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5c169ec242d76',
			'label' => 'Second Title',
			'name' => 'second_title',
			'type' => 'text',
			'instructions' => 'Second Title On Page',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c16a11d653d4',
						'operator' => '==',
						'value' => '1',
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
			'maxlength' => 100,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
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

endif;
?>