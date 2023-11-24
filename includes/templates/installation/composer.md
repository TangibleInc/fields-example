#### Use in a plugin

Add module to your composer.json:
```json
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
```

The module can then be installed in your project using:
```
composer install
```

The module needs to be manually required in your code:
```php
require_once __DIR__ . '/vendor/tangible/fields/index.php';
```

You can then access the module from anywhere using this function:
```php
$fields = tangible_fields();
```

