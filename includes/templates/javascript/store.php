<p>The store object is designed to manage and store field values. It provides methods to interact with the stored data.</p>
<p>To use it, you can access it via the <code>tangibleFields.store</code> property. Here's how to use it:</p>

<pre>
  <code>
    const store = window.tangibleFields.store
  </code>
</pre>

<h4>Summary</h4>

<ul>
  <li><a href="#getAllValues">getAllValues()</a></li>
  <li><a href="#getValue">getValue()</a></li>
  <li><a href="#setValue">setValue()</a></li>
  <li><a href="#getRepeater">getRepeater()</a></li>
  <ul>
    <li><a href="#getRow">getRow()</a></li>
    <li><a href="#setRow">setRow()</a></li>
    <li><a href="#getRowValue">getRowValue()</a></li>
    <li><a href="#setRowValue">setRowValue()</a></li>
  </ul>
</ul>

<h4 id="getAllValues">getAllValues</h4>

<p>If you need to retrieve all values stored in the store, you can use the <code>getAllValues</code> method:</p>

<pre>
  <code>
    const store = tangibleFields.store
    const allValues = store.getAllValues()
  </code>
</pre>

<p>This method returns an object containing all the key-value pairs stored in the <code>store._values</code> object.</p>

<h4 id="getValue">getValue</h4>

<p>To retrieve the value of a specific field, you can use the getValue method:</p>

<pre>
  <code>
    const store = tangibleFields.store
    const storedValue = store.getValue('field-name')
  </code>
</pre>

<p>The <code>getValue</code> method takes a name as an argument and returns the corresponding value stored in the store. If the value does not exist, it returns an empty string by default.</p>

<h4 id="setValue">setValue</h4>

<p>You can change the value of an existing field using the <code>setValue</code> method:</p>

<pre>
  <code>
    const store = tangibleFields.store
    const storedValue = store.setValue('field-name', 'new-value')
  </code>
</pre>

<h4 id="getRepeater">getRepeater</h4>

<p>If you need to work with repeater controls, you can use the <code>getRepeater</code> method to obtain a repeater store object:</p>

<pre>
  <code>
    const store = tangibleFields.store
    const repeater = store.getRepeater('repeater-name')
  </code>
</pre>

<p>The <code>repeater</code> object obtained from <code>getRepeater</code> allows you to interact with repeater data using methods like <code>getRow</code>, <code>setRow</code>, <code>getRowValue</code>, and <code>setRowValue</code>.</p>

<i>Note: In the current implementation, changing the value of a given row/field will trigger a complete re-render of the asscoiated repeater. It can be optimized in the future if needed to only re-render the associated row/field.</i>
<ul>
  <li>
    <h5 id="getRow">getRow</h5>
    <pre><code>
      const rowNumber = 0
      const row = repeater.getRow(rowNumber)
    </code></pre>
  </li>
  <li>
    <h5 id="setRow">setRow</h5>
    <pre><code>
      const rowNumber = 0
      repeater.setRow(rowNumber, {,
        'repeaterè-field-1' : 'value-1',
        'repeaterè-field-2' : 'value-2'
      })
    </code></pre>
  </li>
  <li>
    <h5 id="getRowValue">getRowValue</h5>
    <pre><code>
      const rowNumber = 0
      const value = repeater.getRowValue(rowNumber, 'field-name')
    </code></pre>
  </li>
  <li>
    <h5 id="setRowValue">setRowValue</h5>
    <pre><code>
      const rowNumber = 0
      repeater.setRowValue(rowNumber, 'field-name', 'new-value')
    </code></pre>
  </li>
</ul>
