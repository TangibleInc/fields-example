<h3>Dynamic attributes - Field group</h3>

See repeater context to explanations.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field( $plugin->get_settings_key() . '[setting_field_group_dynamic]', [
    'label'       => 'Field group',
    'type'        => 'field_group',
    'value'       => $plugin->get_settings()['setting_field_group_dynamic'] ?? '',
    'fields'  => [          
      [
        'type'  => 'number',
        'label' => 'Max result numbers in the ajax search select',
        'name'  => 'result-number',
      ],
      [
        'type'  => 'select',
        'label' => 'Result order in the ajax search select',
        'name'  => 'result-order',
        'choices' => [
          'ASC'  => 'ASC',
          'DESC' => 'DESC',
        ],
      ],
      [
        'label'      => 'Search result',
        'name'       => 'post-select',
        'type'       => 'combo_box',
        'is_async'   => true,
        'ajax_action'=> 'tangible_field_select_post',
        'async_args' => [
          'post_type'     => 'post,page',
          'result_length' => '{{result-number}}',
          'result_order'  => '{{result-order}}'
        ],
      ]
    ]
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_field_group_dynamic'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_field_group_dynamic]';
    $value = $plugin->get_settings()['setting_field_group_dynamic'] ?? '';

    echo $fields->render_field( $name, [
      'label'   => 'Field group',
      'type'    => 'field_group',
      'value'   => $value,
      'fields'  => [
        [
        'type'  => 'number',
        'label' => 'Max result numbers in the ajax search select',
        'name'  => 'result-number',
      ],
      [
        'type'    => 'select',
        'label'   => 'Result order in the ajax search select',
        'name'    => 'result-order',
        'choices' => [
          'ASC'  => 'ASC',
          'DESC' => 'DESC',
        ],
      ],
      [
        'label'      => 'Search result',
        'name'       => 'post-select',
        'type'       => 'combo-box',
        'is_async'   => true,
        'ajax_action'=> 'tangible_field_select_post', // @see https://docs.tangible.one/modules/plugin-framework/ajax/
        'async_args' => [
          'post_type'     => 'post,page',
          'result_length' => '{{result-number}}',
          'result_order'  => '{{result-order}}'
        ],
      ]
    ]);
  </code>
</pre>
