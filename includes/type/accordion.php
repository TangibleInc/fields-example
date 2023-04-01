<h3>Accordions</h3>

An accordions can contain any other field (it works like a field group), an the global value will be saved as a json object.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_accordion]', [
    'label'   => 'Accordion',
    'type'    => 'accordion',
    'value'   => $plugin->get_settings()['setting_accordion'] ?? '',
    'fields'  => [          
      [
        'label'   => 'Text',
        'type'    => 'text',
        'name'    => 'text_name',
      ],[
        'label'   => 'Text',
        'type'    => 'dimensions',
        'name'    => 'dimension_name',
      ]
    ]
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with activation toggle</h4>

The value of the toggle will be saved in the JSON object, using the name "enabled".

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[ssetting_accordion_toggle]', [
    'label'      => 'Accordion',
    'type'       => 'accordion',
    'value'      => $plugin->get_settings()['ssetting_accordion_toggle'] ?? '',
    'use_switch' => true,
    'fields'     => [          
      [
        'label'   => 'Text',
        'type'    => 'text',
        'name'    => 'text_name',
      ],[
        'label'   => 'Text',
        'type'    => 'dimensions',
        'name'    => 'dimension_name',
      ]
    ]
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_accordion'] ?? '',
  $plugin->get_settings()['ssetting_accordion_toggle'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_accordion]';
    $value = $plugin->get_settings()['setting_accordion'] ?? '';

    echo $fields->render_field( $name, [
      'label'      => 'Accordion',
      'type'       => 'accordion',
      'value'      => $value, 
      'use_switch' => true, // Optional, default false
      'fields'     => [

        // Can be any type of field, just make sure to add a name

        [
          'label'   => 'Text',
          'type'    => 'text',
          'name'    => 'text_name',
        ],[
          'label'   => 'Text',
          'type'    => 'dimensions',
          'name'    => 'dimension_name',
        ]
      ]
    ]);
  </code>
</pre>
