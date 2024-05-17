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

<?php tangible\see(
  $fields->fetch_value('text')
); ?>

<h4>Example with readOnly</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('text-read-only', [
    'label'       => 'Text field',
    'type'        => 'text',
    'value'       => $fields->fetch_value('text-read-only'),
    'placeholder' => 'Example placeholder',
    'description' => 'Example description',
    'read_only'   => true
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible\see(
  $fields->fetch_value('text-read-only')
); ?>

<h4>Example with inputMask</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('text-mask', [
    'label'       => 'Text field',
    'type'        => 'text',
    'value'       => $fields->fetch_value('text-mask'),
    'placeholder' => '',
    'description' => 'Mask: "aa-99/a9a"',
    'input_mask'  => 'aa-99/a9a'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible\see(
  $fields->fetch_value('text-mask')
); ?>

<h4>Example with prefix and suffix</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('text-prefix-suffix', [
    'label'       => 'Text field',
    'type'        => 'text',
    'value'       => $fields->fetch_value('text-prefix-suffix'),
    'placeholder' => '',
    'description' => 'description',
    'prefix'      => 'PRE-',
    'suffix'      => '-SUF'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible\see(
  $fields->fetch_value('text-prefix-suffix')
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
      'read-only' => true,
      'prefix' => 'PRE',
      'suffix' => 'SUF',
      /**
       * Instructions:
       * - '9' = numerical character.
       * - 'a' = alphabetical character.
       * - '*' = any alphanumeric character.
       * - All other characters are literal values and will be displayed automatically.
      */
      'mask'      => 'aaa-99'
    ]);
  </code>
</pre>
