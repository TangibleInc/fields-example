<p>
  There is no documentation on how to register fields yet. <br /> 
  Here is a basic example instead with the different parameters:
</p>

<i>
  Note: For lisibility, this example use the spread opeator (...) on an assossiative array which is only compatible with PHP 8.1 and above.
</i>


<pre>
  <code>
   /**
    * Registration is not documented yet 
    * 
    * @see https://bitbucket.org/tangibleinc/tangible-fields-module/src/main/store.php
    */
    $fields->register_field('field-name', [
      ...$args

      // Determine where the data are stored - @see $fields->_store_callbacks()
      ...$fields->_store_callbacks['options']('prefix_')
      
      'permission_callback_store' => function() {
        // Evaluate if current user is allowed to store - @see $fields->_permission_callbacks()
        return true;
      },
      
      'permission_callback_store' => function() {
        // Evaluate if current user is allowed to store - @see $fields->_permission_callbacks()
        return true;
      },

      'validation_callbacks' = [
        function($name, $value) {
          // Evaluate if is valid before storing (all callbacks must return true) - @see $fields->_permission_callbacks()
          return true;
        }
        // ...etc  
      ]
      
    ]);
  </code>
</pre>
