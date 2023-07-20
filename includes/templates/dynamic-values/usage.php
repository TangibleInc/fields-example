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

<h4>Render a dynamic value</h4>

<h5>General</h5>

<p>Dynamic values are stored as a string, that looks like this: <code>[[dynamic_value_name::setting=value::setting2=value2]]</code></p>

To render a string that contains a dynamic value, we use the <code>render_value</code> function:
<pre>
  <code>
    $fields = tangible_fields();
    $value = 'User ID: [[user_id]]'

    // Will output something like "User ID: 1"
    $output = $fields->render_value($value);
  </code>
</pre>

For registered fields, it needs to be applied manually after fetching the value:
<pre>
  <code>
    $fields = tangible_fields();
    
    $output = $fields->render_value(
      $fields->fetch_value('field_name')
    );
  </code>
</pre>

<h5>Advanced case</h5>

<p>
If you want to customize the rendering behavior of dynamic values, you can provide a custom <code>$config</code> array as a second parameter.
The <code>$config</code> array allows you to set context-specific data or additional options that can influence how dynamic values are rendered.
</p>

<pre>
  <code>
    // Assuming that current user id is 1, will returns "User ID: 1"
    $fields->render_value('User ID: [[user_id]]');

    // While this will return "User ID: 2"
    $fields->render_value('User ID: [[user_id]]', [
      'context' => [
        'current_user_id' => 2
      ]
    ]);
  </code>
</pre>

<p>
The <code>$config</code> parameter is available in dynamic value render callbacks. 
When a dynamic value is rendered, the callback function can access the <code>$config</code> array, which provides additional contextual information and customization options.
</p>

<p>
In your dynamic value render callback function, you can define the <code>$config</code> parameter to access the provided configuration. 
For example:
</p>

<pre>
  <code>
    $fields = tangible_fields();
    
    $fields->register_dynamic_value([
      'category' => 'user',
      'name'     => 'user_id',
      // ...etc
      'callback' => function($settings, $config) {
        return $config['context']['current_user_id'];
      }
    ]);
  </code>
</pre>

<i>Note: More info about dynamic value registration in the next section.</i>

