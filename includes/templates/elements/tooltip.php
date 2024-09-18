<h4>Example - Tooltip start</h4>

<div class="tangible-settings-row">
  <?php $fields->register_element('tooltip-start', [
    'type'      => 'tooltip',
    'label'     => 'Hover Start',
    'placement' => 'start',
    'content'   => 'Tooltip content, placement on start'
  ]) ?>
  <?= $fields->render_element('tooltip-start') ?>
</div>

<h4>Example - Tooltip top</h4>

<div class="tangible-settings-row">
  <?php $fields->register_element('tooltip-top', [
    'type'      => 'tooltip',
    'label'     => 'Hover Top',
    'placement' => 'top',
    'content'   => 'Tooltip, placement on top'
  ]) ?>
  <?= $fields->render_element('tooltip-top') ?>
</div>

<h4>Example - Tooltip bottom</h4>

<div class="tangible-settings-row">
  <?php $fields->register_element('tooltip-bottom', [
    'type'      => 'tooltip',
    'label'     => 'Hover Bottom',
    'placement' => 'bottom',
    'content'   => 'Tooltip content, placement on bottom'
  ]) ?>
  <?= $fields->render_element('tooltip-bottom') ?>
</div>

<h4>Example - Tooltip end</h4>

<div class="tangible-settings-row">
  <?php $fields->register_element('tooltip-end', [
    'type'      => 'tooltip',
    'label'     => 'Hover End',
    'placement' => 'end',
    'content'   => 'Tooltip, placement on end'
  ]) ?>
  <?= $fields->render_element('tooltip-end') ?>
</div>

<h4>Code</h4>

<div class="tangible-settings-code-preview">

  <?php $this->start_code('php') ?>

  // Example - PHP

  $fields->register_element('tooltip-name', [
    'type'       => 'tooltip',
    'label'      => 'Top'
    'placement'  => 'top', // Optional: 'start', 'top', 'bottom', 'end' 
    'content'    => 'Tooltip content, placement on top'
  );

  echo $fields->render_element('tooltip-name')

  <?php $this->end_code() ?>
  <?php $this->start_code('javascript') ?>

  // Example - JS

  const component = tangibleFields.render(
    {
      name       : 'tooltip-name',
      type       : 'tooltip',
      label      : 'Top',
      placement  : 'top',
      content    : 'Tooltip content, placement on top'
    }
    'element'
  )
  <?php $this->end_code() ?>
</div>
