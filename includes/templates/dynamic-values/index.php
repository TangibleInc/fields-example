<h4>Activate on a field</h4>

To add support for dynamic values on a field, we need to add <code>'dynamic' => true</code> in the field definition.

It will only works with the supported field types (more to come):
<ul>
  <li>color_picker</li>
  <li>date_picker</li>
  <li>number</li>
  <li>text</li>
</ul>

<pre>
  <code>
    $fields = tangible_fields();
    
    $fields->render_field('text-with-dynamic-values', [
      'label'   => 'Text field with dynamic values',
      'type'    => 'text',
      'value'   => $fields->fetch_value('text-with-dynamic-values'),
      'dynamic' => true
    ]);
  </code>
</pre>

<h4>Examples</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('dynamic-text', [
    'label'       => 'Text field',
    'type'        => 'text',
    'value'       => $fields->fetch_value('dynamic-text'),
    'placeholder' => 'Example placeholder',
    'description' => 'Example description',
    'dynamic'     => true
  ]) ?>
</div>

<?php tangible()->see(
  'Raw value: ' . $fields->fetch_value('dynamic-text'),
  'Parsed value: ' . $fields->render_value(
    $fields->fetch_value('dynamic-text')
  ),
); ?>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<div class="tangible-settings-row">
  <?= $fields->render_field('dynamic-color', [
    'label'       => 'Color field',
    'type'        => 'color_picker',
    'value'       => $fields->fetch_value('dynamic-color'),
    'placeholder' => 'Example placeholder',
    'description' => 'Example description',
    'dynamic'     => true
  ]) ?>
</div>

<?php tangible()->see(
  'Raw value: ' . $fields->fetch_value('dynamic-color'),
  'Parsed value: ' . $fields->render_value(
    $fields->fetch_value('dynamic-color')
  ),
); ?>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<div class="tangible-settings-row">
  <?= $fields->render_field('dynamic-date', [
    'label'       => 'Date field',
    'type'        => 'date_picker',
    'value'       => $fields->fetch_value('dynamic-date'),
    'placeholder' => 'Example placeholder',
    'description' => 'Example description',
    'dynamic'     => true
  ]) ?>
</div>

<?php tangible()->see(
  'Raw value: ' . $fields->fetch_value('dynamic-date'),
  'Parsed value: ' . $fields->render_value(
    $fields->fetch_value('dynamic-date')
  ),
); ?>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<div class="tangible-settings-row">
  <?= $fields->render_field('dynamic-number', [
    'label'       => 'Number',
    'type'        => 'number',
    'value'       => $fields->fetch_value('dynamic-number'),
    'placeholder' => 'Example placeholder',
    'description' => 'Example description',
    'dynamic'     => true
  ]) ?>
</div>

<?php tangible()->see(
  'Raw value: ' . $fields->fetch_value('dynamic-number'),
  'Parsed value: ' . $fields->render_value(
    $fields->fetch_value('dynamic-number')
  ),
); ?>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>
