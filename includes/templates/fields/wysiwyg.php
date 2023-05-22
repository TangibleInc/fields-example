We support two options for the editor: ProseMirror and TinyMCE.

<ul>
  <li> ProseMirror: default editor </li>
  <li> TinyMce: to use TinyMce editor, set the parameter 'editor' to 'editor' => 'tinymce' </ul>
</ul>

<h4>Example</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field('wysiwyg', [
    'label'       => 'Editor field',
    'type'        => 'wysiwyg',
    'value'       => $fields->fetch_value('wysiwyg'),
    'editor'      => 'tinymce',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]) ?>
</div>

<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $fields->fetch_value('wysiwyg')
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();
    <?php $plugin->render_registation_message(); ?>

    echo $fields->render_field( 'name', [
      'label'       => 'Editor field',
      'type'        => 'wysiwyg',
      'value'       => $fields->fetch_value('name'),
      'editor'      => 'tinymce',
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>
