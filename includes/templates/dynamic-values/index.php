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
  $fields->fetch_value('dynamic-text'),
  $fields->render_value(
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
  $fields->fetch_value('dynamic-color'),
  $fields->render_value(
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
  $fields->fetch_value('dynamic-date'),
  $fields->render_value(
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
  $fields->fetch_value('dynamic-number'),
  $fields->render_value(
    $fields->fetch_value('dynamic-number')
  ),
); ?>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>
