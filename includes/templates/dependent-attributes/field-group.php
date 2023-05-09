See repeater context to explanations.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('dynamic_attribute_field_group', [
    'label'   => 'Field group',
    'type'    => 'field_group',
    'value'   => $fields->fetch_value('dynamic_attribute_field_group'),
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
  $fields->fetch_value('dynamic_attribute_field_group')
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();
    <?php $plugin->render_registation_message(); ?>

    echo $fields->render_field('name', [
      'label'   => 'Field group',
      'type'    => 'field_group',
      'value'   => $fields->fetch_value('name'),
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
        // @see https://docs.tangible.one/modules/plugin-framework/ajax/
        'ajax_action'=> 'tangible_field_select_post', 
        'async_args' => [
          'post_type'     => 'post,page',
          'result_length' => '{{result-number}}',
          'result_order'  => '{{result-order}}'
        ],
      ]
    ]);
  </code>
</pre>
