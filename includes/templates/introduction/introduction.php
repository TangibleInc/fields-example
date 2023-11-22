<h4>Concept</h4>

<p>Tangible Fields is a composer module designed to easily generate form fields that utilize a unified styling across multiple code bases. This module can be used from both PHP and JavaScript (although this documentation only covers the PHP part at the moment).</p>
<p>It's important to note that currently, this module is purely front-end focused and does not handle getting or saving data by itself.</p>

<h4>How it Works</h4>

<p>To generate a field, we pass a field name and a configuration array to the <code>render_field()</code> method, which return an empty <code><?= htmlentities('<div>') ?></code> element with a unique ID:</p>

<?php $this->start_code('php') ?>
$fields = tangible_fields();

$field_html = $fields->render_field('field_name', 
  [
    'label'       => 'Text field',
    'type'        => 'text',
    'value'       => '',
    'placeholder' => 'Example placeholder',
    'description' => 'Example description'
  ]
);
<?php $this->end_code() ?>

<p>In this example, the value of <code>$field_html</code> will be something like this:</p> 

<?php $this->start_code('php') ?>
<div id="field_name-63f4729c357e4"></div>
<?php $this->end_code() ?>

<p>The module keeps track of which field name/configuration is associated to which <code><?= htmlentities('<div>') ?></code> thanks to the id and passes all data (div id + field configuration) to the frontend. The appropriate React component is then initialized inside the correct <code><?= htmlentities('<div>') ?></code> based on this.</p>
<p>Each field type is linked to a react component. You can see which field type is associated with which component in the <a href="https://bitbucket.org/tangibleinc/tangible-fields-module/src/main/assets/src/types.js">types.js file</a>.</p> 
<p>When a field is initialized, the associated config is passed to the component as react props.</p>
<p>To generate the JS/CSS build file, we use an internal tool called Tangible Roller (the documentation can be found <a href="https://develop.tangible.one/tools/roller">here</a>).</p>

<h4>Getting started</h4>

<p>An easy way to work on the Tangible Fields module is to work from the <a href="https://bitbucket.org/tangibleinc/tangible-fields-example/src/main/">documentation repository</a>, which is a wordpress plugin that uses the Tangible Fields as a composer dependency.</p>
<p>One advantage of working from this plugin is that all the possible fields are already included in the documentation as example, an can be used for testing.</p>
<p>As long as Tangible Fields is used as a composer module, so the repository will be available in /vendor/tangible/fields. You can work in this folder directy (it should already be a git repository if the dependencies has been installed by running composer install).</p>
<p>The module can also be used in any plugin as a composer module by following the documenation on <a href="<?= admin_url( sprintf('admin.php?%s', http_build_query($_GET)) ) ?>&type=installation/composer">this page</a>.</p>
