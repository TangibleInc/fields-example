<h3>Radio</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_radio_name]', [
    'label'       => 'Radio field',
    'type'        => 'radio',
    'value'       => $plugin->get_settings()['setting_radio_name'] ?? '',
    'options'     => [
      [
        'value' => '1',
        'label' => 'Value 1'
      ],
      [
        'value' => '2',
        'label' => 'Value 2'
      ]
    ],
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_radio_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_radio_name]';
    $value = $plugin->get_settings()['setting_radio_name'] ?? '';

    $fields->render_field( $name, [
      'label'       => 'Text field',
      'type'        => 'radio',
      'options'     => [
        [
          'value' => '1',
          'label' => 'Value 1'
        ],
        [
          'value' => '2',
          'label' => 'Value 2'
        ]
      ],
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>
