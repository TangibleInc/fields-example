While the control looks the same regardless of if it uses static or async data, the returned value will be different.<br />
In the case of an async combobox, it will be a json object with both the value and the labe (instead of a string with the value).

<h4>Example with async loading (using a fetch url)</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('combobox_async_rest', [
    'type'       => 'combo_box',
    'value'      => $fields->fetch_value('combobox_async_rest'),
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
  <?= $fields->render_field('combobox_async_ajax', [
    'type'        => 'combo_box',
    'value'       => $fields->fetch_value('combobox_async_ajax'),
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
  <?= $fields->render_field('combobox_async_multiple', [
    'type'        => 'combo_box',
    'value'       => $fields->fetch_value('combobox_async_multiple'),
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
  $fields->fetch_value('combobox_async_rest'),
  $fields->fetch_value('combobox_async_ajax'),
  $fields->fetch_value('combobox_async_multiple')
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();
    <?php $plugin->render_registation_message(); ?>

    echo $fields->render_field('name', [
      'type'  => 'combo_box',
      'value' => $fields->fetch_value('name'),
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
