<h3>Border</h3>

<h4>Example with linked values and opacity</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_border_name]', [
    'label' => 'Border field',
    'type' => 'border',
    'description' => 'Description',
    'enable_opacity' => true,
    'format' => 'rgba',
    'units' => ['px', 'vh', '%', 'vw'],
    'value' => $plugin->get_settings()['setting_border_name'] ?? '',
  ]) ?>
</div>

<h4>Example without linked values and opacity</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_unlinked_border_name]', [
    'label' => 'Border field',
    'type' => 'border',
    'description' => 'Description',
    'enable_opacity' => false,
    'linked' => false,
    'format' => 'rgba',
    'units' => ['px', 'vh', '%', 'vw'],
    'value' => $plugin->get_settings()['setting_unlinked_border_name'] ?? '',
  ]) ?>
</div>

<h4>Example with forced linked values and opacity</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_linked_opacity_border_name]', [
    'label' => 'Border field',
    'type' => 'border',
    'description' => 'Description',
    'enable_opacity' => true,
    'linked' => false,
    'format' => 'hex',
    'units' => ['px', 'vh', '%', 'vw'],
    'value' => $plugin->get_settings()['setting_linked_opacity_border_name'] ?? '',
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_border_name'] ?? '',
  $plugin->get_settings()['setting_unlinked_border_name'] ?? '',
  $plugin->get_settings()['setting_linked_opacity_border_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
  $fields = tangible_fields();

  $name  = $plugin->get_settings_key() . '[setting_border_name]';
  $value = $plugin->get_settings()['setting_border_name'] ?? '';

  echo $fields->render_field( $name, [
    'type'            => 'border',
    'value'           => $value,
    'label'           => 'Border',
    'enable_opacity'  => true, // Optional, default true
    'linked'      => 'toggle', // Optional, default toggle (use true or false to force value)
    'format'          => 'rgba', // hex, rgb, hsl
    'units' => ['px', 'vh', '%', 'vw'], // Optional, default px
    'description'     => 'Example description' 
  ]);
  </code>
</pre>