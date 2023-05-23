There is the possibility to set the attribute value of a field based of another field value.<br />
For now, it works only inside a repeater but we can imagine doing this in other context in the future (in a popup, or a from for example).<br />

In the current state, it works only on the following attributes:
<ul>
  <li>label</li>
  <li>description</li>
  <li>placeholder</li>
  <li>async_args (attribute from the combobox field)</li>
</ul>

<h4>Example</h4>

In this example:
<ul>
  <li>The first field set the label of the last field</li>
  <li>The second field set the description of the last field</li>
  <li>The third field set the post type of the ajax resutlt of the last field</li>
</ul>

<div class="tangible-settings-row">
  <?= $fields->render_field('dynamic_attribute_repeater', [
    'label'      => 'Repeater with dependent attributes',
    'type'       => 'repeater',
    'layout'     => 'block',
    'value'      => $fields->fetch_value('dynamic_attribute_repeater'),
    'sub_fields' => [    
      [
        'type'  => 'text',
        'label' => 'Label of the last field',
        'name'  => 'field-label',
      ],
      [
        'type'  => 'text',
        'label' => 'Description of the last field',
        'name'  => 'field-descrption',
      ],
      [
        'type'  => 'select',
        'label' => 'Post type of the ajax result of the last field',
        'name'  => 'field-post-type',
        'choices' => [
          'post' => 'Post',
          'page' => 'Page',
        ],
      ],
      [
        'label'      => '{{field-label}}',
        'description' => '{{field-descrption}}',
        'name'       => 'post-select',
        'type'       => 'combo_box',
        'is_async'   => true,
        'search_url' => get_rest_url() . 'wp/v2/search',
        'async_args' => [
          'subtype' => '{{field-post-type}}'
        ],
      ]
    ]
  ]); ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $fields->fetch_value('dynamic_attribute_repeater')
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();
    <?php $plugin->render_registation_message(); ?>

    echo $fields->render_field('name', [
      'label'      => 'Repeater with dynamic attributes',
      'type'       => 'repeater',
      'layout'     => 'block',
      'value'      => $fields->fetch_value('name'),
      'sub_fields' => [    
        [
          'type'  => 'text',
          'label' => 'Label of the last field',
          'name'  => 'field-label',
        ],
        [
          'type'  => 'text',
          'label' => 'Description of the last field',
          'name'  => 'field-descrption',
        ],
        [
          'type'    => 'select',
          'label'   => 'Post type of the ajax result of the last field',
          'name'    => 'field-post-type',
          'choices' => [
            'post' => 'Post',
            'page' => 'Page',
          ],
        ],
        [
          'label'       => '{{field-label}}',
          'description' => '{{field-descrption}}',
          'name'        => 'post-select',
          'type'        => 'combo_box',
          'is_async'    => true,
          'search_url'  => get_rest_url() . 'wp/v2/search',
          'async_args'  => [
            'subtype' => '{{field-post-type}}'
          ],
        ]
      ]
    ]); 
  </code> 
</pre>