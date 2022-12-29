<h3>ComboBox - Async</h3>

While the control looks the same regardless of if it uses static or async data, the returned value will be different.<br />
In the case of an async combobox, it will be a json object with both the value and the labe (instead of a string with the value).

<h4>Example with async loading (using a fetch url)</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_async_name]', [
    'type'       => 'combo_box',
    'value'      => $plugin->get_settings()['setting_combo_async_name'] ?? '',
    'label'      => 'Categories list combobox',
    'is_async'   => true,
    'search_url' => get_rest_url() . 'wp/v2/search',
    'async_args' => [
      'subtype' => 'post'
    ],
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with async loading (using ajax module from the framework)</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_ajax_module_name]', [
    'type'        => 'combo_box',
    'value'       => $plugin->get_settings()['setting_combo_ajax_module_name'] ?? '',
    'label'       => 'Categories list combobox',
    'is_async'    => true,
    'ajax_action' => 'tangible_field_select_post', // @see ../ajax/index.php
    'async_args'  => [
      'post_type' => 'post,page'
    ],
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Example with async loading and multiple values</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_multiple_ajax_module_name]', [
    'type'        => 'combo_box',
    'value'       => $plugin->get_settings()['setting_combo_multiple_ajax_module_name'] ?? '',
    'label'       => 'Categories list combobox',
    'is_async'    => true,
    'multiple'    => true,
    'ajax_action' => 'tangible_field_select_post', // @see ../ajax/index.php
    'async_args'  => [
      'post_type' => 'post,page'
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
  $plugin->get_settings()['setting_combo_async_name'] ?? '',
  $plugin->get_settings()['setting_combo_ajax_module_name'] ?? '',
  $plugin->get_settings()['setting_combo_multiple_ajax_module_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_combo_name]';
    $value = $plugin->get_settings()['setting_combo_name'] ?? '';

    $fields->render_field( $name, [
      'type'  => 'combo_box',
      'value' => $value,
      'label' => 'Categories list combobox',

      // Async list (fetch url)
      'is_async'   => true,
      'search_url' => get_rest_url() . 'wp/v2/search',
      'async_args' => [
        'subtype' => 'post'
      ],

      // Async list (framework ajax module, @see https://docs.tangible.one/modules/plugin-framework/ajax/)
      'is_async'   => true,
      'ajax_action'=> 'ajax_action_name',
      'async_args' => [
        'post_type' => 'post'
      ],

      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code> 
</pre>
