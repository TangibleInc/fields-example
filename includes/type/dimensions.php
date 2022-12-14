<h3>Dimensions</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_dimensions_name]', [
    'label'       => 'Dimensions field',
    'type'        => 'dimensions',
    'description' => 'Description',
    'units'       => [ 'vh','%', 'vw' ],
    'linked'      => false,
    'value'       => $plugin->get_settings()['setting_dimensions_name'] ?? '',
  ]) ?>
</div>

<h4>Example with linked values</h4>

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
  $plugin->get_settings()['setting_dimensions_linked_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_dimensions_name]';
    $value = $plugin->get_settings()['setting_dimensions_name'] ?? '';

    $fields->render_field($name, [
      'label'       => 'Dimensions field',
      'type'        => 'dimensions',
      'description' => 'Description',
      'units'       => [ 'px','vw' ], // Optional, default px
      'linked'      => true, // Optional, default false
      'value'       => $value,
    ]);
  </code> 
</pre>
