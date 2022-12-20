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

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_select_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_select_name]';
    $value = $plugin->get_settings()['setting_select_name'] ?? '';

    $fields->render_field( $name, [
      'type'  => 'select',
      'value' => $value,
      'label' => 'Select',
      'choices' => [
        'test1' => 'Test1',
        'test2' => 'Test2'
      ],
      'placeholder' => 'Example placeholder',
      'description' => 'Example description' 
    ]);
  </code> 
</pre>
