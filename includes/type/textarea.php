<h3>Text Area</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?=
    $fields->render_field( $plugin->get_settings_key(). '[setting_textarea_name]', [
      'label' => 'Text Area',
      'type' => 'textarea',
      'value' => $plugin->get_settings()['setting_textarea_name'] ?? '',
      'placeholder' => 'Example placeholder',
      'description' => 'Example description',
      'maxlength' => 150,
      'required' => false,
      'rows' => 8,
      'wrapper' => [
        'data-foo' => 'bar',
        'class' => 'foo-class'
      ]
    ] )
  ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_textarea_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_textarea_name]';
    $value = $plugin->get_settings()['setting_textarea_name'] ?? '';

    echo $fields->render_field( $plugin->get_settings_key(). '[setting_textarea_name]', [
      'label' => 'Text Area',
      'type' => 'textarea',
      'value' => $plugin->get_settings()['setting_textarea_name'] ?? '',
      'placeholder' => 'Example placeholder',
      'description' => 'Example description',
      'maxlength' => 150,
      'required' => false,
      'rows' => 8,
      'wrapper' => [
        'data-foo' => 'bar',
        'class' => 'foo-class'
      ]
    ] )
  </code>
</pre>

