<h3>Simple Dimension</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_simple_dimension_name]', [
    'label'       => 'Simple Dimension field',
    'type'        => 'simple_dimension',
    'description' => 'Description',
    'units'       => [ 'px','vh','%','vw' ],
    'value'       => $plugin->get_settings()['setting_simple_dimension_name'] ?? '',
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_simple_dimension_name'] ?? '',
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_simple_dimension_name]';
    $value = $plugin->get_settings()['setting_simple_dimension_name'] ?? '';

    $fields->render_field($name, [
      'label'       => 'Simple Dimension field',
      'type'        => 'simple_dimension',
      'description' => 'Description',
      'units'       => [ 'px','vh','%','vw' ], // Optional, default px
      'linked'      => true, // Optional, can be true, false or 'toggle', default 'toggle'
      'value'       => $value,
    ]);
  </code>
</pre>
