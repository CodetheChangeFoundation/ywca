<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5bd11d100da02',
	'title' => 'Primary Button',
	'fields' => array(
		array(
			'key' => 'field_5bd11d15ab3b4',
			'label' => 'enable_primary_button',
			'name' => 'enable_primary_button',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5bd120d74e32d',
			'label' => 'primary_button',
			'name' => 'primary_button',
			'type' => 'button_group',
			'instructions' => 'Choose from one of the available options.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bd11d15ab3b4',
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
			'choices' => array(
				'Continue' => 'Continue',
				'Register for Program' => 'Register for Program',
				'Return Home' => 'Return Home',
			),
			'allow_null' => 0,
			'default_value' => 'Continue',
			'layout' => 'horizontal',
			'return_format' => 'value',
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
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;?>