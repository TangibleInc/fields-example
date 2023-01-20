<h3>Date</h3>

Currently this field as some issues with focus (the popup will stay open until we chose a value).

It's also not possible to set a time yet, only the date.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_date_name]', [
    'label'       => 'Date field',
    'type'        => 'date_picker',
    'description' => 'Description',
    'value'       => $plugin->get_settings()['setting_date_name'] ?? '',
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</dib>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_date_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_date_name]';
    $value = $plugin->get_settings()['setting_date_name'] ?? '';

    echo $fields->render_field( $name, [
      'label' => 'Date field',
      'type'  => 'date_picker',
      'value' => $value,
    ]);
  </code> 
</pre>
