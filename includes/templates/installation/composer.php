<h4>Use in a plugin</h4>

Add module to your composer.json:
<?php $this->start_code('json') ?>
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
<?php $this->end_code() ?>

The module can then be installed in your project using:
<?php $this->start_code() ?>
composer install
<?php $this->end_code() ?>

The module needs to be manually required in your code:
<?php $this->start_code('php') ?>
require_once __DIR__ . '/vendor/tangible/fields/index.php';
<?php $this->end_code() ?>

You can then access the module from anywhere using this function:
<?php $this->start_code('php') ?>
$fields = tangible_fields();
<?php $this->end_code() ?>

