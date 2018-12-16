<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5bd7baf9a2cdb',
	'title' => 'Submit Button',
	'fields' => array(
		array(
			'key' => 'field_5bd7bb029b553',
			'label' => 'enable_submit_button',
			'name' => 'enable_submit_button',
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
			'key' => 'field_5bd7bb139b554',
			'label' => 'submit_button',
			'name' => 'submit_button',
			'type' => 'button_group',
			'instructions' => 'Choose a value below for your button.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bd7bb029b553',
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
				'Submit' => 'Submit',
			),
			'allow_null' => 0,
			'default_value' => '',
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