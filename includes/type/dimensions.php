<h3>Dimensions</h3>

<h4>Example linked values</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_dimensions_name]', [
    'label'       => 'Dimensions field',
    'type'        => 'dimensions',
    'description' => 'Description',
    'units'       => [ 'vh','%', 'vw' ],
    'value'       => $plugin->get_settings()['setting_dimensions_name'] ?? '',
  ]) ?>
</div>

<h4>Example without linked values</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_dimensions_name_not_linked_name]', [
    'label'       => 'Dimensions field',
    'type'        => 'dimensions',
    'description' => 'Description',
    'units'       => [ 'vh','%', 'vw' ],
    'linked'      => false,
    'value'       => $plugin->get_settings()['setting_dimensions_name_not_linked_name'] ?? '',
  ]) ?>
</div>

<h4>Example with forced linked values</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_dimensions_linked_name]', [
    'label'       => 'Dimensions field',
    'type'        => 'dimensions',
    'description' => 'Description',
    'units'       => [ 'px','vw' ],
    'linked'      => true,
    'value'       => $plugin->get_settings()['setting_dimensions_linked_name'] ?? '',
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_dimensions_name'] ?? '',
  $plugin->get_settings()['setting_dimensions_name_not_linked_name'] ?? '',
  $plugin->get_settings()['setting_dimensions_linked_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_dimensions_name]';
    $value = $plugin->get_settings()['setting_dimensions_name'] ?? '';

    echo $fields->render_field($name, [
      'label'       => 'Dimensions field',
      'type'        => 'dimensions',
      'description' => 'Description',
      'units'       => [ 'px','vw' ], // Optional, default px
      'linked'      => 'toggle', // Optional, default toggle (use true or false to force value)
      'value'       => $value,
    ]);
  </code> 
</pre>
