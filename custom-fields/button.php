<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c31a629b62b6',
	'title' => 'Button',
	'fields' => array(
		array(
			'key' => 'field_5c31a78accd9f',
			'label' => 'Enable Button',
			'name' => 'enable_button',
			'type' => 'true_false',
			'instructions' => 'Select yes if you would like a button to appear at the bottom of the page.',
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
			'key' => 'field_5c31a62f7fd41',
			'label' => 'Button Colour',
			'name' => 'button_colour',
			'type' => 'button_group',
			'instructions' => 'Select the colour of the button',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c31a78accd9f',
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
				'button-black' => 'Black',
				'button-green' => 'Green',
				'button-pink' => 'Pink',
			),
			'allow_null' => 0,
			'default_value' => 'Black',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5c31a6e67fd42',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'instructions' => 'Enter text that will appear in the button.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c31a78accd9f',
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
			'placeholder' => 'Register Now',
			'prepend' => '',
			'append' => '',
			'maxlength' => 75,
		),
		array(
			'key' => 'field_5c31b2ae647a1',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'page_link',
			'instructions' => 'The link that this page goes to.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c31a78accd9f',
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
			'post_type' => array(
				0 => 'page',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'allow_archives' => 0,
			'multiple' => 0,
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
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;