
<h3>Repeater - Table</h3>

A repeater row can contain any field.

<h4>Example</h4>

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

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_repeater_table_name'] ?? ''
); ?>

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
