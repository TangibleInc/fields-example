<p>Tangible Fields include an event/trigger system that you can use from the <code>tangibleFields</code> object.</p>

<h4>Summary</h4>

<ul>
  <li><a href="#listen">Listen to en event</a></li>
  <li><a href="#remove">Stop listening to an event</a></li>
  <li><a href="#trigger">Trigger an event</a></li>
  <li><a href="#events">Event list</a></li>
  <ul>
    <li><a href="#init-field">initField</a></li>
    <li><a href="#value-change">valueChange</a></li>
  </ul>
</ul>

<h4 id="listen">Listen to en event</h4>

<p>To listen to a fields event, you can use the <code>event</code> method from <code>tangibleFields</code>.</p>
<p>It take two arguments:</p>
<ul>
  <li><code>eventName</code>: The name of the event</li>
  <li><code>eventCallback</code>: A callback function that will be executed when the specified event is triggered. It receives two parameters:</li>
  <ul>
    <li><code>eventData</code>: An object containing any additional data or arguments passed when triggering the event</li>
    <li><code>event</code>: The event object itself</li>
  </ul>
</ul>

<pre>
  <code>
    // The callback will be called each time any value change
    tangibleFields.event('valueChange', (field, event) => {
      
      if( field.name !== 'field-name' ) return;

      console.log('field-name value is now ' + field.value)
    })
  </code>
</pre>

<h4 id="remove">Stop listening to an event</h4>

<p>The event method returns a function that can be used to remove the event listener when it's no longer needed:</p>

<pre>
  <code>
    const deleteEvent = tangibleFields.event('eventName', callback)

    // Stop listening after 10 seconds
    setTimeout(() => {
      deleteEvent()
    }, 10000)
  </code>
</pre>

<h4 id="trigger">Trigger an event</h4>

<p>To trigger a fields event, you can use the <code>trigger</code> method from <code>tangibleFields</code>.</p>
<p>It take two arguments:</p>
<ul>
  <li><code>eventName</code>: The name of the event</li>
  <li><code>args</code>: (optional) Arguments to pass to the triggered event</li>
</ul>

<pre>
  <code>
    tangibleFields.trigger('myCustomEvent', args)
  </code>
</pre>

<h4 id="events">Event list</h4>
<ul>
  <li>
    <h5 id="init-field">initField</h4>
    <p>Triggered when a field is initialized</p>
    <pre><code>
      tangibleFields.event('initField', field => {
        field.name // Field name
        field.props // Configuration passed when creating the field (type, label ...etc)
      })
    </code></pre>
  </li>
  <li>
    <h5 id="value-change">valueChange</h4>
    <p>Triggered each time a field value change. Is also triggered for subfields from repeaters and field-groups.</p>
    <pre><code>
      tangibleFields.event('valueChange', field => {

        field.name // Field name, or false if no name (it will be the case for subfields)
        field.props // Configuration passed when creating the field (type, label ...etc)
        field.value // New field value

        // Note: You can check if the change happened in a subfield with this condition:
        const isSubfield = field.props?.controlType === 'subfield'
      })
    </code></pre>
  </li>
</ul>
