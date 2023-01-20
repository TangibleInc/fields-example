<h3>Text</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_text_name]', [
    'label'       => 'Text field',
    'type'        => 'text',
    'value'       => $plugin->get_settings()['setting_text_name'] ?? '',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_text_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_text_name]';
    $value = $plugin->get_settings()['setting_text_name'] ?? '';

    echo $fields->render_field( $name, [
      'label'       => 'Text field',
      'type'        => 'text',
      'value'       => $value,
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>
