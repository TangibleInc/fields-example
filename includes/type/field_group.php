<h3>Field group</h3>

A field group can contain any other field, an the global value will be saved as a json object.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_field_group]', [
    'label'       => 'Field group',
    'type'        => 'field_group',
    'value'       => $plugin->get_settings()['setting_field_group'] ?? '',
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

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_field_group'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_field_group]';
    $value = $plugin->get_settings()['setting_field_group'] ?? '';

    echo $fields->render_field( $name, [
      'label'   => 'Text field',
      'type'    => 'field_group',
      'value'   => $value,
      'fields'  => [

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
