<?php

namespace Tangible\FieldsExample;

defined('ABSPATH') or die();

$documentation = Documentation::$instance;

$documentation->register_section('introduction', [
  'title' => 'Introduction',
  'pages' => [
    'introduction' => [
      'title' => 'Field module',
      'path'  => 'introduction/introduction'
    ]
  ]
]);

$documentation->register_section('installation', [
  'title' => 'Installation',
  'pages' => [
    'composer' => [
      'title' => 'Composer',
      'path'  => 'installation/composer'
    ]
  ]
]);

$documentation->register_section('registration', [
  'title' => 'Registration',
  'pages' => [
    'composer' => [
      'title' => 'Basic example',
      'path'  => 'registration/index'
    ]
  ]
]);

$documentation->register_section('fields', [
  'title' => 'Field types',
  'pages' => [
    'accordion' => [
      'title' => 'Accordion',
      'path'  => 'fields/accordion',
      'fields'=> [
        'accordion'             => [ 'json' => true ],
        'accordion-with-switch' => [ 'json' => true ]
      ]
    ],
    'alignment_matrix' => [
      'title' => 'Alignment matrix',
      'path'  => 'fields/alignment-matrix',
      'fields'=> [
        'alignment_matrix' => []
      ]
    ],
    'angle_picker' => [
      'title' => 'Angle picker',
      'path'  => 'fields/angle-picker',
      'fields'=> [
        'angle_picker' => [],
      ]
    ],
    'border' => [
      'title' => 'Border',
      'path'  => 'fields/border',
      'fields'=> [
        'border'          => [ 'json' => true ],
        'border_unlinked' => [ 'json' => true ],
        'border_linked'   => [ 'json' => true ]
      ]
    ],
    'button_group' => [
      'title' => 'Button group',
      'path'  => 'fields/button-group',
      'fields'=> [
        'button_group_dashicon' => [],
        'button_group'          => []
      ]
    ],
    'checkbox' => [
      'title' => 'Checkbox',
      'path'  => 'fields/checkbox',
      'fields'=> [
        'checkbox' => []
      ]
    ],
    'color_picker' => [
      'title' => 'Color picker',
      'path'  => 'fields/color-picker',
      'fields'=> [
        'color'         => [],
        'color_opacity' => []
      ]
    ],
    'combo_box' => [
      'title' => 'ComboBox',
      'path'  => 'fields/combo-box',
      'fields'=> [
        'combobox'            => [],
        'combobox_multiple'   => [],
        'combobox_categories' => []
      ]
    ],
    'combo_box_async' => [
      'title' => 'ComboBox - Async mode',
      'path'  => 'fields/combo-box-async',
      'fields'=> [
        'combobox_async_rest'     => [ 'json' => true ],
        'combobox_async_ajax'     => [ 'json' => true ],
        'combobox_async_multiple' => [ 'json' => true ]
      ]
    ],
    'date_picker' => [
      'title' => 'Date picker',
      'path'  => 'fields/date-picker',
      'fields'=> [
        'date' => []
      ]
    ],
    'dimensions' => [
      'title' => 'Dimensions',
      'path'  => 'fields/dimensions',
      'fields'=> [
        'dimensions'            => [ 'json' => true ],
        'dimensions_linked'     => [ 'json' => true ],
        'dimensions_not_linked' => [ 'json' => true ]
      ]
    ],
    'field_group' => [
      'title' => 'Field group',
      'path'  => 'fields/field-group',
      'fields'=> [
        'field_group' => [ 'json' => true ],
      ]
    ],
    'file' => [
      'title' => 'File',
      'path'  => 'fields/file',
      'fields'=> [
        'file'          => [],
        'file_input'    => [],
        'file_wp_media' => [],
        'file_image'    => [],
        'file_limited'  => []
      ]
    ],
    'gallery' => [
      'title' => 'Gallery',
      'path'  => 'fields/gallery',
      'fields'=> [
        'gallery' => []
      ]
    ],
    'gradient' => [
      'title' => 'Gradient',
      'path'  => 'fields/gradient',
      'fields'=> [
        'gradient' => [ 'json' => true ]
      ]
    ],
    'hidden' => [
      'title' => 'Hidden input',
      'path'  => 'fields/hidden',
      'fields'=> [
        'hidden' => []
      ]
    ],
    'number' => [
      'title' => 'Number',
      'path'  => 'fields/number',
      'fields'=> [
        'number'     => [],
        'number_max' => []
      ]
    ],
    'radio' => [
      'title' => 'Radio',
      'path'  => 'fields/radio',
      'fields'=> [
        'radio' => []
      ]
    ],
    'select' => [
      'title' => 'Select',
      'path'  => 'fields/select',
      'fields'=> [
        'select'                     => [],
        'select_categories'          => [],
        'select_multiple'            => [],
        'select_multiple_categories' => [],
      ]
    ],
    'simple_dimension' => [
      'title' => 'Simple dimension',
      'path'  => 'fields/simple-dimension',
      'fields'=> [
        'simple_dimension' => [ 'json' => true ]
      ]
    ],
    'switch' => [
      'title' => 'Switch',
      'path'  => 'fields/switch',
      'fields'=> [
        'switch' => []
      ]
    ],
    'text' => [
      'title' => 'Text',
      'path'  => 'fields/text',
      'fields'=> [
        'text' => []
      ]
    ],
    'text_suggestion' => [
      'title' => 'Text suggestion',
      'path'  => 'fields/text-suggestion',
      'fields'=> [
        'dynamic_text'            => [],
        'dynamic_text_categories' => []
      ]
    ],
    'textarea' => [
      'title' => 'Textarea',
      'path'  => 'fields/textarea',
      'fields'=> [
        'textarea' => []
      ]
    ],
    'wysiwyg' => [
      'title' => 'WYSIWYG',
      'path'  => 'fields/wysiwyg',
      'fields'=> [
        'wysiwyg'         => [],
        'wysiwyg-tinymce' => []
      ]
    ]
  ]
]);

$documentation->register_section('repeater', [
  'title' => 'Repeater',
  'pages' => [
    'block' => [
      'title' => 'Block',
      'path'  => 'repeater/block',
      'fields'=> [
        'repeater_block'                    => [ 'json' => true ],
        'repeater_block_non_repeatable'     => [ 'json' => true ],
        'repeater_block_max'                => [ 'json' => true ],
        'repeater_block_bulk_switch_title'  => [ 'json' => true ]
      ]
    ],
    'table' => [
      'title' => 'Table',
      'path'  => 'repeater/table',
      'fields'=> [
        'repeater_table'                => [ 'json' => true ],
        'repeater_table_non_repeatable' => [ 'json' => true ],
        'repeater_table_max'            => [ 'json' => true ]
      ]
    ]
  ]
]);

$documentation->register_section('field-visibility', [
  'title' => 'Fields visibility conditions',
  'pages' => [
    'syntax' => [
      'title' => 'Syntax',
      'path'  => 'visibility/syntax'
    ],
    'operators' => [
      'title' => 'Operators',
      'path'  => 'visibility/operators',
    ],
    'example' => [
      'title' => 'Example',
      'path'  => 'visibility/example',
      'fields'=>[
        'visibility-text'     => [],
        'visibility-repeater' => [ 'json' => true ]
      ]
    ]
  ]
]);

$documentation->register_section('dependent-attributes', [
  'title' => 'Dependent attributes',
  'pages' => [
    'repeater' => [
      'title' => 'Repeater',
      'path'  => 'dependent-attributes/repeater',
      'fields'=> [
        'dynamic_attribute_repeater' => [ 'json' => true ]
      ]
    ],
    'fields_group' => [
      'title' => 'Field groups',
      'path'  => 'dependent-attributes/field-group',
      'fields'=> [
        'dynamic_attribute_field_group' => [ 'json' => true ]
      ]
    ]
  ]
]);

$documentation->register_section('dynamic-values', [
  'title' => 'Dynamic values',
  'pages' => [
    'usage' => [
      'title'  => 'Usage',
      'path'   => 'dynamic-values/usage',
    ],
    'registration' => [
      'title' => 'Registration',
      'path'  => 'dynamic-values/registration'
    ],
    'examples' => [
      'title'  => 'Examples',
      'path'   => 'dynamic-values/examples',
      'fields' => [
        'dynamic-text'   => [ 'json' => true ],
        'dynamic-color'  => [],
        'dynamic-date'   => [],
        'dynamic-number' => [],
      ]
    ]
  ]
]);
