<h3>Gradient</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_gradient_name]', [
    'type'        => 'gradient',
    'value'       => $plugin->get_settings()['setting_gradient_name'] ?? '',
    'label'       => 'Gradient',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description' 
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_gradient_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_file_upload_name]';
    $value = $plugin->get_settings()['setting_file_upload_name'] ?? '';

    echo $fields->render_field($name, [
      'type'        => 'gradient',
      'value'       => $value,
      'label'       => 'Gradient',
      'placeholder' => 'Example placeholder',
      'description' => 'Example description' 
    ]);
  </code> 
</pre>
