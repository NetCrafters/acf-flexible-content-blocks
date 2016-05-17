<?php

  /*--------------------------------------------------------------------------------------
    *
    * Layout: Featured Content
    *
    * @author Michael W. Delaney
    * @since 1.0
    *
    * Content block with relationship field to feature other site content and optional Call to Action button
    *
    *-------------------------------------------------------------------------------------*/

$featured_content = 	
    array (
        'key' => '5739d9a42c502',
        'name' => 'featured_content',
        'label' => 'Featured Content',
        'display' => 'block',
        'sub_fields' => array (
            array (
                'key' => 'field_5739d9f32c503',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 50,
                    'class' => 'acf-title',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_5739da082c504',
                'label' => 'Navigation Title',
                'name' => 'navigation_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 50,
                    'class' => 'acf-title',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_57392265f9c6e',
                'label' => 'Content',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_57392274f9c6f',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
            ),
            array (
                'key' => 'field_5739227ef9c6g',
                'label' => 'Features',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_5739da2a2c506',
                'label' => 'Featured Content',
                'name' => 'featured_content',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array (
                ),
                'taxonomy' => array (
                ),
                'filters' => array (
                    0 => 'search',
                    1 => 'post_type',
                    2 => 'taxonomy',
                ),
                'elements' => '',
                'min' => 0,
                'max' => 3,
                'return_format' => 'object',
            ),
            array (
                'key' => 'field_5739cae32ed70',
                'label' => 'Background',
                'name' => 'background',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_5739caf52ed61',
                'label' => 'Background Image',
                'name' => 'background_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => 'acf-media',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'large',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_5739cb252ed6c',
                'label' => 'Background Color',
                'name' => 'background_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array (
                'key' => 'field_573922e8f9c75',
                'label' => '',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 1,
            ),
            array (
                'key' => 'field_573922faf9c76',
                'label' => 'Display Call to Action?',
                'name' => 'display_call_to_action',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => 20,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
            ),
           array (
                'key' => 'field_57392389f9c80',
                'label' => 'Placeholder',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c76',
                            'operator' => '!=',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 80,
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'No Call to Action will be displayed.',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ),
            array (
                'key' => 'field_5739230af9c77',
                'label' => 'Text',
                'name' => 'call_to_action_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c76',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 30,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_57392314f9c78',
                'label' => 'Link',
                'name' => 'call_to_action_link',
                'type' => 'page_link',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c76',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 30,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'post_type' => array (
                ),
                'taxonomy' => array (
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_57392349f9c79',
                'label' => 'Type',
                'name' => 'call_to_action_type',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_573922faf9c76',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => 20,
                    'class' => 'acf-cta',
                    'id' => '',
                ),
                'choices' => array (
                    'primary' => 'Primary',
                    'default' => 'Default',
                    'success' => 'Success',
                    'info' => 'Info',
                    'warning' => 'Warning',
                    'danger' => 'Danger',
                    'link' => 'Link Only',
                ),
                'default_value' => array (
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
                'disabled' => 0,
                'readonly' => 0,
            ),
        ),
    );