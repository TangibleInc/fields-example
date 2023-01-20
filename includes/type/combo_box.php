<h3>ComboBox</h3>

Might be renamed to "search" in the future.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_name]', [
    'type'  => 'combo_box',
    'value' => $plugin->get_settings()['setting_combo_name'] ?? '',
    'label' => 'Categories list combobox',
    'choices' => [
      'test1' => 'Test1',
      'test2' => 'Test2',
      'test3' => 'Test3',
      'test4' => 'Test4'
    ],
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with multiple values</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_multiple_name]', [
    'type'     => 'combo_box',
    'value'    => $plugin->get_settings()['setting_combo_multiple_name'] ?? '',
    'label'    => 'Categories list combobox',
    'multiple' => true,
    'choices' => [
      'test1' => 'Test1',
      'test2' => 'Test2',
      'test3' => 'Test3',
      'test4' => 'Test4'
    ],
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with categories</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_categories_name]', [
    'type'  => 'combo_box',
    'value' => $plugin->get_settings()['setting_combo_categories_name'] ?? '',
    'label' => 'Categories list combobox',
    'choices' => [
      [
        'name'     => 'Category 1',
        'choices' => [ 
          'test1' => 'Test1',
          'test2'=> 'Test2'
        ]
      ],
      [
        'name'     => 'Category 2',
        'choices' => [ 
          'test3' => 'Test3',
          'test4' => 'Test4'
        ]
      ]
    ],
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_combo_name'] ?? '',
  $plugin->get_settings()['setting_combo_multiple_name'] ?? '',
  $plugin->get_settings()['setting_combo_categories_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_combo_name]';
    $value = $plugin->get_settings()['setting_combo_name'] ?? '';

    echo $fields->render_field( $name, [
      'type'  => 'combo_box',
      'value' => $value,
      'label' => 'Categories list combobox',

      // Simple list
      'choices' => [
        'test1' => 'Test1'
        'test2' => 'Test2'
        'test3' => 'Test3'
        'test4' => 'Test4'
      ],
      
      // If multiple
      'multiple' => true,

      // List with categories
      'choices' => [
        [
          'name'    => 'Category 1',
          'choices' => [ 
            'test1' => 'Test1'
            'test2' => 'Test2'
          ]
        ],
        [
          'name'    => 'Category 2',
          'choices' => [
            'test3' => 'Test3',
            'test4' => 'Test4'
          ]
        ]
      ],

      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code> 
</pre>
