<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5bdd3ecde94bf',
	'title' => 'Paragraph',
	'fields' => array(
		array(
			'key' => 'field_5bdd3f24e81f4',
			'label' => 'Enable Paragraph',
			'name' => 'paragraph_enabled',
			'type' => 'true_false',
			'instructions' => 'Check if you want a paragraph',
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
			'key' => 'field_5bdd3ed3e81f2',
			'label' => 'Paragraph',
			'name' => 'paragraph',
			'type' => 'text',
			'instructions' => 'Input the text you want the paragraph to have.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Input text here',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
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

endif;
 ?>
