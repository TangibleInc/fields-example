
<h4>Summary</h4>

<ul>
  <li><a href="#render">Render</a></li>
  <li><a href="#on-change">onChange event</a></li>
  <li><a href="#style-context">Style context</a></li>
  <li><a href="#attribute-names">Attribute names</a></li>
</ul>

<h4 id="render">Render method</h4>

<p>To interact with fields from the JavaScript side, we rely on the <code>tangibleFields</code> object, which is available globally when fields is enqueue.</p>
<p>To render fields from the JavaScript directly, we can use the <code>render</code> method of the <code>tangibleFields</code> object:</p>

<pre>
  <code>
    tangibleFields.render({
      type  : 'text',
      label : 'Text'
      name  : 'field-name'
    })
  </code>
</pre>

<p>As the returned value of <code>render</code> is React component, it has to be rendered inside a React app or inside an existing React component.</p>

<p>Example inside a react app:</p>
<pre>
  <code>
    import { createRoot } from 'react-dom'

    const component = tangibleFields.render({
      type  : 'text',
      label : 'Text'
      name  : 'field-name'
    })

    const container = document.getElementById('container-id')
    createRoot(container).render(component)
  </code>
</pre>

<h4 id="on-change">onChange event</h4>

<p>It's possible to add an <code>onChange</code> callback on a created field and get the new value each time it's updated:</p>
<pre>
  <code>
    tangibleFields.render({
      ...attributes,
      onChange: newValue => {
        console.log('Field value is now ' + newValue)
      }
    })
  </code>
</pre>

<h4 id="style-context">Style context</h4>

<i>Note: This feature exists in PHP as well but is currently undocumented.</i>

<p>You can chose the style context of the curent field by setting a <code>context</code> prop, however you will have to make sure that the associated stylesheet has been enqueued on the page:</p>
<pre>
  <code>
    tangibleFields.render({
      ...attributes,
      context: 'wp'
    })
  </code>
</pre>

<h4 id="attribute-names">Attribute names</h4>

<p>Every field type is supported, and will support the same arguments that fields rendered from PHP.</p> 
<p>The only difference is that in PHP attributes will use <code>snake_case</code>, while in JS it will use <code>camelCase</code>.</p>

<p>Example of a color field rendered from PHP</p>
<pre>
  <code>
    $fields = tangible_fields();
    $color_picker = $fields->render_field('color', [
      'type'            => 'color_picker',
      'enable_opacity'  => true
      'value'           => $value,
      'label'           => 'Color'
    ]);
  </code>
</pre>

<p>Same field rendered in JS</p>
<pre>
  <code>
    const colorPicker = tangibleFields.render({
      name          : 'color',
      type          : 'colorPicker',
      enableOpacity : true,
      label         : 'Color'
    })
  </code>
</pre>




