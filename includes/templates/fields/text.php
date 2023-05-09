<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('text', [
    'label'       => 'Text field',
    'type'        => 'text',
    'value'       => $fields->fetch_value('text'),
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $fields->fetch_value('text')
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();
    <?php $plugin->render_registation_message(); ?>

    echo $fields->render_field( 'name', [
      'label'       => 'Text field',
      'type'        => 'text',
      'value'       => $fields->fetch_value('name'),
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>
