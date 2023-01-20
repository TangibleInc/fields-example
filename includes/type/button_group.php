<h3>Button group</h3>

Buttons can contain both <a href='https://developer.wordpress.org/resource/dashicons/'>dashicon</a> or text.

<h4>Example with Dashicon</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_button_group_dashicon_name]', [
    'label'       => 'Button group field',
    'type'        => 'button_group',
    'description' => 'Description',
    'use_dashicon'=> true,
    'choices'     => [
      'left'   => 'editor-alignleft',
      'center' => 'editor-aligncenter',
      'right'  => 'editor-alignright',
    ],
    'value' => $plugin->get_settings()['setting_button_group_dashicon_name'] ?? '',
  ]) ?>
</div>

<h4>Example with text</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_button_group_name]', [
    'label'       => 'Button group field',
    'type'        => 'button_group',
    'description' => 'Description',
    'choices'     => [
      'one'   => 'One',
      'two'   => 'Two',
      'three' => 'Three',
    ],
    'value' => $plugin->get_settings()['setting_button_group_name'] ?? '',
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_button_group_dashicon_name'] ?? '',
  $plugin->get_settings()['setting_button_group_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_button_group_name]';
    $value = $plugin->get_settings()['setting_button_group_name'] ?? '';

    echo $fields->render_field( $name, [
      'label'       => 'Button group field',
      'type'        => 'button_group',
      'description' => 'Description',
      'value'       => $value

      // Dashicon

      'use_dashicon'=> true
      'choices'     => [
        'left'   => 'editor-alignleft',
        'center' => 'editor-aligncenter',
        'right'  => 'editor-alignright',
      ],
      
        // Text

      'choices' => [
        'one'   => 'One',
        'two'   => 'Two',
        'three' => 'Three',
      ],
    ]);
  </code> 
</pre>
