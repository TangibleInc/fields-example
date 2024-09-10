<h4>Example - Tooltip</h4>

<div class="tangible-settings-row">
  <?php $fields->register_element('tooltip', [
    'type'    => 'tooltip',
    'layout'  => 'default',
    'content' => 'Tooltip text'
  ]) ?>
  <?= $fields->render_element('tooltip') ?>
</div>

<h4>Code</h4>

<div class="tangible-settings-code-preview">

<?php $this->start_code('php') ?>

// Example - PHP

$fields->register_element('tooltip-name', [
  'type'    => 'tooltip',
  'layout'  => 'default', // Optional: 'default', 'primary'
  'content' => 'Tooltip text'
);

echo $fields->render_element('tooltip-name')

<?php $this->end_code() ?>
<?php $this->start_code('javascript') ?>

// Example - JS

const component = tangibleFields.render(
  {
    name    : 'tooltip-name',
    type    : 'tooltip',
    layout  : 'default'
    content : 'Tooltip text'
  }
  'element'
)
<?php $this->end_code() ?>
</div>
