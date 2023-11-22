<?php

namespace Tangible\FieldsExample;

defined('ABSPATH') or die();

class Documentation {

  public static $instance, $plugin, $fields;
  public array $sections = [];

  function register_section(string $slug, array $args) {
    $this->sections[ $slug ] = $args;
  }

  function register_page_fields(string $section, string $page) {

    if( ! $page = ($this->sections[$section]['pages'][$page] ?? false) ) {
      return;
    }

    foreach($page['fields'] ?? [] as $field => $args) {
      self::$plugin->register_options($field, $args);
      $this->maybe_save_fields($field);
    }
  }

  function maybe_save_fields(string $field) {
    
    if( ! isset($_POST[$field]) ) return;

    Documentation::$fields->store_value($field, $_POST[$field]);
  }

  function require_template(string $section, string $page) {
    
    if( ! $section = ($this->sections[$section] ?? false) ) return;
    if( ! $page = ($section['pages'][$page] ?? false) ) return;

    ?><h3><?= $section['title'] ?> - <?= $page['title'] ?></h3><?php

    // Needs to be in scope
    $fields = tangible_fields();
    $plugin = tangible_field_example();

    require_once __DIR__ . '/templates/' . $page['path'] . '.php';
  }

  function start_code($language = 'php') {
    ?><pre><code class="language-<?= esc_attr($language) ?>"><?php
    ob_start();    
  }

  function end_code() {
    $code_sample = ob_get_clean();
    echo htmlentities($code_sample);
    ?></code></pre><?php
  }

}

Documentation::$instance = new Documentation();
Documentation::$plugin = $plugin;
Documentation::$fields = $fields;
