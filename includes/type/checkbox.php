<h3>Checkbox</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_checkbox_name]', [
    'label'       => 'Checkbox field',
    'type'        => 'checkbox',
    'value'       => $plugin->get_settings()['setting_checkbox_name'] ?? '',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_checkbox_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_checkbox_name]';
    $value = $plugin->get_settings()['setting_checkbox_name'] ?? '';

    echo $fields->render_field( $name, [
      'label'       => 'Checkbox field',
      'type'        => 'checkbox',
      'value'       => $value,
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>
