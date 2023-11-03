<h4>What is "Context" in Tangible Fields?</h4>

<p>"Context" in Tangible Fields is a way to define a specific styling context for your fields. You can switch between different styling contexts to adapt the appearance of your form fields to the specific needs of your project or platform. The library provides a list of predefined contexts, and you can select the one that best fits your requirements.</p>

<p>Multiple contextes can be used on the same page without conflicts.</p>

<h4>Predefined Contexts</h4>

<p>Tangible Fields comes with the following predefined contexts:</p>

<ul>
  <li>default - The default styling context, with minimal styling</li>
  <li>wp - Styling for the WordPress admin environments</li>
  <li>elementor - Styling for use with the Elementor page builder</li>
  <li>beaver-builder - Styling for use with the Beaver Builder page builder</li>
</ul>

<h4>Usage - PHP</h4>

<p>If no context is set, the default context will be used.</p>

<p>However it's recommanded to always explicitly set the context even if it uses the default, as if a context is set somewhere else and you don't set it the defined context will be used for you fields as well.</p>

<p>You can set the desired context for your fields by calling the <code>set_context</code> function before rendering your fields. Here's how you can use it:</p>

<pre>
  <code>
    $fields->set_context('context_name');

    echo $fields->render_field( 'name-1', [
      'label'       => 'Text field',
      'type'        => 'text',
      'value'       => $fields->fetch_value('name-1'),
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);

    echo $fields->render_field( 'name-2', [
      'label'       => 'Text field',
      'type'        => 'text',
      'value'       => $fields->fetch_value('name-2'),
      'placeholder' => 'Example placeholder',
      'description' => 'Example description'
    ]);
  </code>
</pre>

<p>Replace <code>context_name</code> with the name of the context you want to use ('wp', 'elementor', 'beaver-builder', or 'default').</p>

<h4>Usage - JavaScript</h4>

<p>When creating fields dynamically using JavaScript, you need to manually enqueue the stylesheet for the associated context since it won't be automatically added to the page.</p>

<pre>
  <code>
    // If not specified, will load default context
    $fields->enqueue();

    // Will load default and WP context
    $fields->enqueue([
      'context' => ['default', 'wp']
    ]);
  </code>
</pre>

<p>Here's how you can set the context on a field created from JavaScript:</p>

<pre>
  <code>
    tangibleFields.render({
      type    : 'text',
      label   : 'Text',
      name    : 'field-name',
      context : 'wp'
    });
  </code>
</pre>
