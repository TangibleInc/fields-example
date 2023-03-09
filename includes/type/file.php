<h3>File</h3>

The saved value is an attachment ID.<br />
An important note is that all files uploaded will stay, regardless of if the field value is saved or not.<br />
By default, all the mime types from this function are allowed: <a href="https://developer.wordpress.org/reference/functions/get_allowed_mime_types/">get_allowed_mime_types()</a>.

<h4>Example of wp_media enabled and shortcut for mimetypes</h4>

<div class="tangible-settings-row">
  <?= $fields->render_field($plugin->get_settings_key() . '[setting_file_upload_name]', [
    'label'         => 'File',
    'type'          => 'file',
    'description'   => 'Description',
    'value'         => $plugin->get_settings()['setting_file_upload_name'] ?? '',
    'wp_media'      => true,
    'mime_types'    => [
        'video',
        'image', 
    ]
  ]) ?>
</div>

<h4>Example with image only</h4>

<?= $fields->render_field($plugin->get_settings_key() . '[setting_image_upload_namee]', [
  'label'       => 'File',
  'type'        => 'file',
  'description' => 'Description',
  'value'       => $plugin->get_settings()['setting_image_upload_namee'] ?? '',
  'mime_types'  => [
    'image/jpeg', 
    'image/gif', 
    'image/png', 
    'image/bmp', 
    'image/tiff', 
    'image/webp', 
    'image/x-icon', 
    'image/heic'
  ]
]) ?>

<h4>Example with a limit of 2 uploads</h4>

<?= $fields->render_field($plugin->get_settings_key() . '[setting_limited_file_upload_name]', [
  'label'         => 'File',
  'type'          => 'file',
  'description'   => 'Description',
  'value'         => $plugin->get_settings()['setting_limited_file_upload_name'] ?? '',
  'max_upload'    => 2
]) ?>


<div class="tangible-settings-row">
  <?php submit_button() ?>
</div>

<h4>Value</h4>

<?php tangible()->see(
  $plugin->get_settings()['setting_file_upload_name'] ?? '',
  $plugin->get_settings()['setting_image_upload_namee'] ?? '',
  $plugin->get_settings()['setting_limited_file_upload_name'] ?? ''
); ?>

<h4>Code</h4>

<pre>
  <code>
    $fields = tangible_fields();

    $name  = $plugin->get_settings_key() . '[setting_file_upload_name]';
    $value = $plugin->get_settings()['setting_file_upload_name'] ?? '';

    
    echo $fields->render_field($name, [
      'label'       => 'Upload field',
      'type'        => 'file',
      'description' => 'Description',
      'value'       => $value,
      'max_upload'  => 5,
      'wp_media'  => true,
      'mime_types'  => [
        // you can include them by shortcut or by specific mime type
        'video',
        'image',
        'text',
        'application',
        'audio',
        'image/jpeg', 
        'image/gif', 
        'image/png', 
        'image/bmp', 
        'image/tiff', 
        'image/webp', 
        'image/x-icon', 
        'image/heic'
      ]
    ]);
  </code> 
</pre>