<h3>Hidden</h3>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?=
    $fields->render_field( $plugin->get_settings_key() . '[setting_hidden_name]', [
      'label' => 'Hidden field',
      'type' => 'hidden',
      'value' => $plugin->get_settings()['setting_hidden_name'] ?? '',
      'placeholder' => 'Example placeholder',
      'description' => 'Example description',
      'attributes' => [
        'data-foo' => 'bar',
        'class' => 'baz-class'
      ]
    ])
  ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_hidden_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_hidden_name]';
    $value = $plugin->get_settings()['setting_hidden_name'] ?? 'Hello, World!';

    $fields->render_field( $name, [
      'label' => 'Hidden field',
      'type' => 'hidden',
      'value' => $value
      'placeholder' => 'Example placeholder',
      'description' => 'Example description',
      'attributes' => [
        'data-foo' => 'bar',
        'class' => 'baz-class'
      ]
    ])
  </code>
</pre>
