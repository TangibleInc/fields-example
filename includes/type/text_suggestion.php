<h3>Dynamic text</h3>

I'm really not sure about how to name this one.</br >
Can contain both text and dynamic element from the dropdown.<br />

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_dynamic_text_name]', [
    'label'       => 'Test',
    'label'       => 'Label',
    'value'       => $plugin->get_settings()['setting_dynamic_text_name'] ?? '',
    'placeholder' => 'Example placeholder', 
    'description' => 'Example description',
    'type'        => 'text_suggestion',
    'options'     => [
      [ 'id' => 'test1', 'name' => 'Test1' ],
      [ 'id' => 'test2', 'name' => 'Test2' ],
      [ 'id' => 'test3', 'name' => 'Test3' ],
      [ 'id' => 'test4', 'name' => 'Test4' ]
    ]
  ]) ?>
</div>

<h4>Example with categories</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_dynamic_text_categories_name]', [
    'label'       => 'Test',
    'label'       => 'Label',
    'value'       => $plugin->get_settings()['setting_dynamic_text_categories_name'] ?? '',
    'placeholder' => 'Example placeholder', 
    'description' => 'Example description',
    'type'        => 'text_suggestion',
    'options'     => [
      [
        'name'     => 'Category',
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
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_dynamic_text_name'] ?? '',
  $plugin->get_settings()['setting_dynamic_text_categories_name'] ?? '',
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_dynamic_text_name]';
    $value = $plugin->get_settings()['setting_dynamic_text_name'] ?? '';

    // Option can be with or without categories

    $fields->render_field($name, [
      'label'       => 'Dynamic text',
      'placeholder' => 'Example placeholder', 
      'description' => 'Example description',
      'type'        => 'text_suggestion',
      'options'     => [ 
        [
          'name'     => 'Category',
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
    ])
  </code> 
</pre>
