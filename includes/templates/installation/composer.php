<h4>Use in a plugin</h4>

Add module to your composer.json:
<pre>
  <code>
    {
      "repositories": [{
        "type": "vcs",
        "url": "git@bitbucket.org:/tangibleinc/tangible-fields-module.git"
      }],
      "require": {
        "tangible/fields": "dev-main"
      },
      "minimum-stability": "dev"
    }
  </code>
</pre>

The module can then be installed in your project using:
<pre>
  <code>
    composer install
  </code>
</pre>

The module needs to be manually required in your code:
<pre>
  <code>
    require_once __DIR__ . '/vendor/tangible/fields/index.php';
  </code>
</pre>

You can then access the module from anywhere using this function:
<pre>
  <code>
    $fields = tangible_fields();
  </code>
</pre>
