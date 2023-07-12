<h4>Register category</h4>

<p>Each category represents a group of dynamic values.</p>
<p>Use the <code>register_dynamic_value_category</code> function to define a new category:</p>

<pre>
  <code>
    $fields = tangible_fields();
    
    $fields->register_dynamic_value_category('post', [
      'label' => 'Post',
    ]);
  </code>
</pre>

<h4>Register dynamic values</h4>

<p>Use the <code>register_dynamic_value</code> function to register each dynamic value under the desired category.</p>

<pre>
  <code>
    $fields = tangible_fields();
    
    $fields->register_dynamic_value([
      'category' => 'post',
      'name'     => 'post_id',
      'label'    => 'Post ID',
      'type'     => 'text',
      'callback' => function() {
        return get_the_ID();
      },
      'permission_callback' => '__return_true'
    ]);
  </code>
</pre>

<p>The function takes an array of options as a parameter. Here are all the possible values:</p>
<ul>
  <li>category (required): Slug of the associated category</li>
  <li>name (required): Slug of the dynamic value</li>
  <li>label: If not defined, name will be use as the label</li>
  <li>type: The type of data returned by the callback, possible values:
    <ul>
      <li>color</li>
      <li>date</li>
      <li>number</li>
      <li>text</li>
    </ul>
  </li>
  <li>callback: Function used to render the dynamic value</li>
  <li>permission_callback: Used to evaluate if the current user can save/parse the dynamic value (see permission section below)</li>
  <li>fields: Used to define settings associated to the dynamic value (see fields section below)</li>
</ul>

<h4>Register dynamic values - Permissions</h4>

<p>There are two types of permissions that needs to be set:</p>
<ul>
  <li>permission_callback_store: Callback to evaluate if the current user is alowed to save the dynamic value</li>
  <li>permission_callback_parse: Callback to evaluate if the current user is alowed to parse the dynamic value</li>
</ul>

<pre>
  <code>
    $fields = tangible_fields();
    
    $fields->register_dynamic_value([
      // ...etc
      'permission_callback_store' => function() {
        return in_array('administrator', wp_get_current_user()->roles ?? []);
      },
      'permission_callback_parse' => '__return_true'
    ]);
  </code>
</pre>

<p>If the permission callback is the same for both the store and parse action, 
we can pass only one callback by using <code>permission_callback</code> instead:</p>

<pre>
  <code>
    $fields = tangible_fields();
    
    $fields->register_dynamic_value([
      // ...etc
      'permission_callback' => function() {
        return is_user_logged_in();
      }
    ]);
  </code>
</pre>

<h4>Register dynamic values - Fields</h4>

<p>It's possible to add settings on a dynamic value by passing an array of fields. 
The user will be able to set the value for each setting on the dynamic value insertion.</p>

<p>The values are then passed as parameter of the callback function (as an array), and can be used to modify the render.</p>

<p>The syntax to define the fields is the same than for regular fields (any exising field type can be used and visibility conditions are supported).</p>

<pre>
  <code>
    $fields = tangible_fields();
    
    $fields->register_dynamic_value([
      'category' => 'post',
      'name'     => 'post_title',
      'label'    => 'Post title',
      'type'     => 'text',
      'fields'   => [
        [
          'type'    => 'select',
          'name'    => 'format',
          'label'   => 'Format',
          'choices' => [
            'none'      => 'None',
            'lowercase' => 'Lowercase',
            'uppercase' => 'Uppercase'
          ]
        ]
      ],
      'callback' => function($settings) {

        $format = $settings['format'] ?? 'none';
        $post_title = get_the_title();

        if( $format === 'lowercase' ) return strtolower($post_title);
        if( $format === 'uppercase' ) return strtoupper($post_title);

        return $post_title; 
      },
      'permission_callback' => '__return_true'
    ]);
  </code>
</pre>
