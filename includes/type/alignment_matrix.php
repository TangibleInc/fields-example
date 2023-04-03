<h3>Alignment Matrix</h3>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_alignment_matrix_dashicon_name]', [
    'label'       => 'Alignment matrix field',
    'type'        => 'alignment_matrix',
    'description' => 'Description',
    'value' => $plugin->get_settings()['setting_alignment_matrix_dashicon_name'] ?? '',
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_alignment_matrix_dashicon_name'] ?? '',
); ?>
