<h3>Select</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_select_name]', [
    'type'  => 'select',
    'value' => $plugin->get_settings()['setting_select_name'] ?? '',
    'label' => 'Select',
    'choices' => [
      'test1' => 'Test1',
      'test2' => 'Test2'
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
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_categories_select_name]', [
    'type'  => 'select',
    'value' => $plugin->get_settings()['setting_categories_select_name'] ?? '',
    'label' => 'Select',
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

<h4>Example with multiple values</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_multiple_select_name]', [
    'type'  => 'select',
    'value' => $plugin->get_settings()['setting_multiple_select_name'] ?? '',
    'label' => 'Select',
    'choices' => [
      'test1' => 'Test1',
      'test2' => 'Test2',
      'test3' => 'Test3',
      'test4' => 'Test4'
    ],
    'multiple'    => true,
    'placeholder' => 'Example placeholder',
    'description' => 'Example description' 
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with multiple values and categories</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_categories_multiple_select_name]', [
    'type'  => 'select',
    'value' => $plugin->get_settings()['setting_categories_multiple_select_name'] ?? '',
    'label' => 'Select',
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
    'multiple'    => true,
    'placeholder' => 'Example placeholder',
    'description' => 'Example description' 
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_select_name'] ?? '',
  $plugin->get_settings()['setting_categories_select_name'] ?? '',
  $plugin->get_settings()['setting_multiple_select_name'] ?? '',
  $plugin->get_settings()['setting_categories_multiple_select_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_select_name]';
    $value = $plugin->get_settings()['setting_select_name'] ?? '';

    echo $fields->render_field( $name, [
      'type'  => 'select',
      'value' => $value,
      'label' => 'Select',
      'choices' => [

        // Simple List
        'test1' => 'Test1',
        'test2' => 'Test2'

        // If categories
        [
          'name'    => 'Category 1',
          'choices' => [ 
            'test1' => 'Test1',
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
      'description' => 'Example description',

      // If multiple values allowed

      'multiple'    => true, 
    ]);
  </code> 
</pre>
