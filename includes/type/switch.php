<h3>Switch</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_switch_name]', [
    'label'       => 'Switch field',
    'type'        => 'switch',
    'description' => 'Description',
    'value_on'    => 'on',
    'value_off'   => 'off',
    'value'       => $plugin->get_settings()['setting_switch_name'] ?? 'on',
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_switch_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_switch_name]';
    $value = $plugin->get_settings()['setting_switch_name'] ?? '';

    echo $fields->render_field( $name, [
      'label'       => 'Switch field',
      'type'        => 'switch',
      'value'       => $value,
      'description' => 'Description',
      'value_on'    => 'on', // Optional, default on
      'value_off'   => 'off',  // Optional, default off
    ]);
  </code> 
</pre>
