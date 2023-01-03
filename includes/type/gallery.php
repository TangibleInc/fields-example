<h3>Gallery</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_gallery_name]', [
    'label'       => 'Gallery field',
    'type'        => 'gallery',
    'value'       => $plugin->get_settings()['setting_gallery_name'] ?? '',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_gallery_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_gallery_name]';
    $value = $plugin->get_settings()['setting_gallery_name'] ?? '';

    $fields->render_field( $name, [
      'label'       => 'Gallery field',
      'type'        => 'gallery',
      'value'       => $value,
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>
