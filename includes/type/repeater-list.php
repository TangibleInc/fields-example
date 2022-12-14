
<h3>Repeater - List</h3>

A repeater row can contain any field.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_repeater_list_name]', [
    'label'   => 'Repeater field',
    'type'    => 'repeater-list',
    'value'   => $plugin->get_settings()['setting_repeater_list_name'] ?? false,
    'fields'  => [          
      [
        'label'   => 'Text',
        'type'    => 'text',
        'name'    => 'text_name',
      ],[
        'label'   => 'Dynamic text name',
        'type'    => 'text-suggestion',
        'name'    => 'dynamic_text_name',
        'options' => [
          [
            'name'     => 'Category 1',
            'children' => [ 
              [ 'id' => 'test1', 'name' => 'Test1' ],
              [ 'id' => 'test2', 'name' => 'Test2' ]
            ]
          ],[
            'name'     => 'Category 2',
            'children' => [ 
              [ 'id' => 'test3', 'name' => 'Test3' ],
              [ 'id' => 'test4', 'name' => 'Test4' ]
            ]
          ]
        ]
      ],[
        'label' => 'Date field',
        'type'  => 'date',
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
  $plugin->get_settings()['setting_repeater_list_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_repeater_list_name]';
    $value = $plugin->get_settings()['setting_repeater_list_name'] ?? '';

    // Option can be with or without categories

    $fields->render_field($name, [
      'label'   => 'Repeater field',
      'type'    => 'repeater-list',
      'value'   => $value,

      // Can be any type of field, just make sure to add a name

      'fields'  => [          
        [
          'label'   => 'Text',
          'type'    => 'text',
          'name'    => 'text_name',
        ],[
          'label'   => 'Dynamic text name',
          'type'    => 'text-suggestion',
          'name'    => 'dynamic_text_name',
          'options' => [
            [
              'name'     => 'Category 1',
              'children' => [ 
                [ 'id' => 'test1', 'name' => 'Test1' ],
                [ 'id' => 'test2', 'name' => 'Test2' ]
              ]
            ],[
              'name'     => 'Category 2',
              'children' => [ 
                [ 'id' => 'test3', 'name' => 'Test3' ],
                [ 'id' => 'test4', 'name' => 'Test4' ]
              ]
            ]
          ]
        ],[
          'label' => 'Date field',
          'type'  => 'date',
          'name'  => 'date_name',
        ]
      ]
    ]); 
  </code> 
</pre>
