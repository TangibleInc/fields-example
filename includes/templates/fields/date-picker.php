Currently this field as some issues with focus (the popup will stay open until we chose a value).

It's also not possible to set a time yet, only the date.

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('date', [
    'label'       => 'Date field',
    'type'        => 'date_picker',
    'description' => 'Description',
    'value'       => $fields->fetch_value('date'),
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</dib>

<h4>Example of Date Range</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('date_range', [
    'label'       => 'Date field',
    'type'        => 'date_picker',
    'description' => 'Description',
    'date_range'  => true,
    'value'       => $fields->fetch_value('date_range'),
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</dib>

<h4>Example of Date Range with Multiple Month View</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('multi_month', [
    'label'       => 'Date field',
    'type'        => 'date_picker',
    'description' => 'Description',
    'date_range'  => true,
    'multi_month' => 3,
    'value'       => $fields->fetch_value('multi_month'),
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</dib>

<h4>Value</h4>

<?php tangible()->see(
  $fields->fetch_value('date'),
  $fields->fetch_value('date_range'),
  $fields->fetch_value('multi_month')
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();
    <?php $plugin->render_registation_message(); ?>

    echo $fields->render_field('name', [
      'label' => 'Date field',
      'type'  => 'date_picker',
      'value' => $fields->fetch_value('name'),
    ]);
  </code> 
</pre>
