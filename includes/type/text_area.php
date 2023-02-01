<h3>Text Area</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?=
    $fields->render_field( $plugin->get_settings_key(). '[setting_text_name]', [
      'label' => 'Text Area',
      'type' => 'text_area',
      'value' => $plugin->get_settings()['setting_text_name'] ?? '',
      'placeholder' => 'Example placeholder',
      'description' => 'Example description',
      'attributes' => [
        'rows' => 10,
        'cols' => 75,
        'style' => [
          'resize' => 'horizontal'
        ],
        'data-foo' => 'bar'
      ]
    ] )
  ?>
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
      'label' => 'Text Area',
      'type' => 'text_area',
      'value' => $plugin->get_settings()['setting_text_name'] ?? '',
      'placeholder' => 'Example placeholder',
      'description' => 'Example description',
      'attributes' => [
        'rows' => 10,
        'cols' => 75,
        'style' => [
          'resize' => 'horizontal'
        ],
        'data-foo' => 'bar'
      ]
    ] )
  </code>
</pre>

