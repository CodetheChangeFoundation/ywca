<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c20789187a89',
	'title' => 'List of Steps',
	'fields' => array(
		array(
			'key' => 'field_5c2079901d638',
			'label' => 'Introduction',
			'name' => 'introduction',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'You are about to complete the participant registration form for your child to attend YWCA after-school programs. The pieces include:',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5c207ab11d639',
			'label' => 'Step 1',
			'name' => 'step_1',
			'type' => 'text',
			'instructions' => 'First Step (The first form that needs to be filled out)',
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
			'key' => 'field_5c207aff1d63a',
			'label' => 'Step 1 Notes',
			'name' => 'step_1_notes',
			'type' => 'text',
			'instructions' => 'Optional extra notes/instructions related to step 1.',
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
			'key' => 'field_5c207b4e1d63d',
			'label' => 'Step 2',
			'name' => 'step_2',
			'type' => 'text',
			'instructions' => 'Second Step',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207ab11d639',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207b751d63e',
			'label' => 'Step 2 Notes',
			'name' => 'step_2_notes',
			'type' => 'text',
			'instructions' => 'Optional extra notes/instructions related to step 2.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207b4e1d63d',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207b9efa924',
			'label' => 'Step 3',
			'name' => 'step_3',
			'type' => 'text',
			'instructions' => 'Third Step',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207b4e1d63d',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207bb6fa925',
			'label' => 'Step 3 Notes',
			'name' => 'step_3_notes',
			'type' => 'text',
			'instructions' => 'Optional extra notes/instructions related to step 3.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207b9efa924',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207cdefa927',
			'label' => 'Step 4',
			'name' => 'step_4',
			'type' => 'text',
			'instructions' => 'Fourth Step',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207b9efa924',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207cf4fa928',
			'label' => 'Step 4 Notes',
			'name' => 'step_4_notes',
			'type' => 'text',
			'instructions' => 'Optional extra notes/instructions related to step 4.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207cdefa927',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207d12fa929',
			'label' => 'Step 5',
			'name' => 'step_5',
			'type' => 'text',
			'instructions' => 'Fifth Step',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207cdefa927',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207d74fa92a',
			'label' => 'Step 5 Notes',
			'name' => 'step_5_notes',
			'type' => 'text',
			'instructions' => 'Optional extra notes/instructions related to step 5.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207d12fa929',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207d8efa92b',
			'label' => 'Step 6',
			'name' => 'step_6',
			'type' => 'text',
			'instructions' => 'Sixth Step',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207d12fa929',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207d99fa92c',
			'label' => 'Step 6 Notes',
			'name' => 'step_6_notes',
			'type' => 'text',
			'instructions' => 'Optional extra notes/instructions related to step 6.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c207d8efa92b',
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
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c207e5cfa932',
			'label' => 'Ending Notes',
			'name' => 'ending_notes',
			'type' => 'text',
			'instructions' => 'The notes listed at the end of the list of steps.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Registration will take about 15 minutes.',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
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

endif; ?>