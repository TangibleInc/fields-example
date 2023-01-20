<h3>Number</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_number_name]', [
    'label'       => 'Number field',
    'type'        => 'number',
    'value'       => $plugin->get_settings()['setting_number_name'] ?? '0',
    'description' => 'Example description'
  ]) ?>
</div>

<h4>Example for a value between 10 and 20</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_number_max_name]', [
    'label'       => 'Number field',
    'type'        => 'number',
    'value'       => $plugin->get_settings()['setting_number_max_name'] ?? '15',
    'min'         => 10,
    'max'         => 20,
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_number_name'] ?? '',
  $plugin->get_settings()['setting_number_max_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_number_name]';
    $value = $plugin->get_settings()['setting_number_name'] ?? '';

    echo $fields->render_field( $name, [
      'label'       => 'Number field',
      'type'        => 'number',
      'value'       => $value,
      'min'         => 10, // Optional
      'max'         => 20, // Optional
      'description' => 'Example description'
    ]);
  </code>
</pre>
