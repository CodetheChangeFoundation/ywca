<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5c16b9d6dc9ec',
        'title' => 'Paragraph Field',
        'fields' => array(
            array(
                'key' => 'field_5c16b9e0e2f93',
                'label' => 'Enable Paragraph Field',
                'name' => 'enable_paragraph',
                'type' => 'true_false',
                'instructions' => 'Check this box if you want a paragraph field on your page.',
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
                'key' => 'field_5c16ba1de2f94',
                'label' => 'Paragraph - Large Text',
                'name' => 'paragraph_large_text',
                'type' => 'textarea',
                'instructions' => 'Enter text here to be displayed in the first half of your paragraph. This text will have a larger font size than the second half of the paragraph field.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c16b9e0e2f93',
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
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5c16ba60e2f95',
                'label' => 'Paragraph - Small Text',
                'name' => 'paragraph_small_text',
                'type' => 'textarea',
                'instructions' => 'Enter text here to be displayed in the second half of your paragraph. This text will have a smaller font size than the second half of the paragraph field.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5c16b9e0e2f93',
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
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
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
    
    endif;?>