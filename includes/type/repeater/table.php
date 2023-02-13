
<h3>Repeater - Table</h3>

A repeater row can contain any field.

<h4>Example with Base Repeater Table</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_repeater_table_name]', [
    'label'      => 'Repeater Table',
    'type'       => 'repeater',
    'layout'     => 'table',
    'value'      => $plugin->get_settings()['setting_repeater_table_name'] ?? false,
    'sub_fields' => [          
      [
        'label'   => 'Text',
        'type'    => 'text',
        'name'    => 'text_name',
      ],[
        'label'   => 'Dynamic text name',
        'type'    => 'text-suggestion',
        'name'    => 'dynamic_text_name',
        'choices' => [
          [
            'name'    => 'Category 1',
            'choices' => [ 
              'test1' => 'Test1',
              'test2' => 'Test2'
            ]
          ],[
            'name'    => 'Category 2',
            'choices' => [ 
              'test3' => 'Test3',
              'test4' => 'Test4'
            ]
          ]
        ]
      ],[
        'label' => 'Date field',
        'type'  => 'date_picker',
        'name'  => 'date_picker_name',
      ]
    ]
  ]); ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with `'repeatable' => false` property</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_repeater_repeatable_table_name]', [
    'label' => 'Repeater Repeatable Field',
    'type' => 'repeater',
    'layout' => 'table',
    'repeatable' => false,
    'value' => $plugin->get_settings()['setting_repeater_repeatable_table_name'] ?? false,
    'sub_fields' => [
      [
        'label'   => 'Text',
        'type'    => 'text',
        'name'    => 'text_name',
      ], [
        'label'   => 'Dynamic text name',
        'type'    => 'text_suggestion',
        'name'    => 'dynamic_text_name',
        'choices' => [
          [
            'name'    => 'Category 1',
            'choices' => [
              'test1' => 'Test1',
              'test2' => 'Test2'
            ]
          ], [
            'name'    => 'Category 2',
            'choices' => [
              'test3' => 'Test3',
              'test4' => 'Test4'
            ]
          ]
        ]
      ], [
        'label' => 'Date field',
        'type'  => 'date_picker',
        'name'  => 'date_picker_name',
      ]
    ]
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with `'maxlength' => 3` property</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_repeater_maxlength_table_name]', [
    'label' => 'Repeater Maxlength Field',
    'type' => 'repeater',
    'layout' => 'table',
    'maxlength' => 3,
    'value' => $plugin->get_settings()['setting_repeater_maxlength_table_name'] ?? false,
    'sub_fields' => [
      [
        'label'   => 'Text',
        'type'    => 'text',
        'name'    => 'text_name',
      ], [
        'label'   => 'Dynamic text name',
        'type'    => 'text_suggestion',
        'name'    => 'dynamic_text_name',
        'choices' => [
          [
            'name'    => 'Category 1',
            'choices' => [
              'test1' => 'Test1',
              'test2' => 'Test2'
            ]
          ], [
            'name'    => 'Category 2',
            'choices' => [
              'test3' => 'Test3',
              'test4' => 'Test4'
            ]
          ]
        ]
      ], [
        'label' => 'Date field',
        'type'  => 'date_picker',
        'name'  => 'date_picker_name',
      ]
    ]
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<div><?php tangible()->see($plugin->get_settings()['setting_repeater_table_name'] ?? '') ?></div>
<div><?php tangible()->see($plugin->get_settings()['setting_repeater_repeatable_table_name'] ?? '') ?></div>
<div><?php tangible()->see($plugin->get_settings()['setting_repeater_maxlength_table_name'] ?? '') ?></div>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_repeater_table_name]';
    $value = $plugin->get_settings()['setting_repeater_table_name'] ?? '';

    // Option can be with or without categories

    echo $fields->render_field($name, [
      'label'   => 'Repeater field',
      'type'    => 'repeater',
      'layout'  => 'table',
      'value'   => $value,

      // repeatable has higher priority than maxlength
      'repeatable' => false, // If false, Disallows adding and removing of a single item
      'maxlength' => 3, // Limits the number of items that can be added on the repeater

      // Can be any type of field, just make sure to add a name

      'sub_fields' => [          
        [
          'label'   => 'Text',
          'type'    => 'text',
          'name'    => 'text_name',
        ],[
          'label'   => 'Dynamic text name',
          'type'    => 'text-suggestion',
          'name'    => 'dynamic_text_name',
          'choices' => [
            [
              'name'    => 'Category 1',
              'choices' => [ 
                'test1' => 'Test1',
                'test2' => 'Test2'
              ]
            ],[
              'name'    => 'Category 2',
              'choices' => [ 
                'test3' => 'Test3',
                'test4' => 'Test4'
              ]
            ]
          ]
        ],[
          'label' => 'Date field',
          'type'  => 'date_picker',
          'name'  => 'date_name',
        ]
      ]
    ]); 
  </code> 
</pre>
