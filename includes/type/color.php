
<h3>Color</h3>

Possible format:
<ul>
  <li>rgb</li>
  <li>rgba</li>
  <li>hex</li>
  <li>hsl</li>
</ul>

<h4>Example with opacity</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_color_opacity_name]', [
    'type'        => 'color',
    'value'       => $plugin->get_settings()['setting_color_opacity_name'] ?? '',
    'label'       => 'Color',
    'hasAlpha'    => true,
    'format'      => 'rgba',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description' 
  ]) ?>
</div>

<h4>Example without opacity</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_color_name]', [
    'type'        => 'color',
    'value'       => $plugin->get_settings()['setting_color_name'] ?? '',
    'label'       => 'Color',
    'hasAlpha'    => false,
    'format'      => 'hex',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description' 
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_color_opacity_name'] ?? '',
  $plugin->get_settings()['setting_color_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_color_name]';
    $value = $plugin->get_settings()['setting_color_name'] ?? '';

    $fields->render_field( $name, [
      'type'        => 'color',
      'value'       => $value,
      'label'       => 'Color',
      'hasAlpha'    => true, // Optional, default true
      'format'      => 'rgba', // hex, rgb, hsl
      'placeholder' => 'Example placeholder',
      'description' => 'Example description' 
    ]);
  </code> 
</pre>
