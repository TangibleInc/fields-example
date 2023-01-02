<h3>Editor</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_editor_name]', [
    'label'       => 'Editor field',
    'type'        => 'wysiwyg',
    'value'       => $plugin->get_settings()['setting_editor_name'] ?? '',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_editor_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_editor_name]';
    $value = $plugin->get_settings()['setting_editor_name'] ?? '';

    $fields->render_field( $name, [
      'label'       => 'Editor field',
      'type'        => 'wysiwyg',
      'value'       => $value,
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>
