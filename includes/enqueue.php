<?php

namespace Tangible\FieldsExample;

defined('ABSPATH') or die();

$plugin->enqueue = function() use($plugin, $fields) {

  add_action('admin_footer', function() use($fields) {
    $fields->enqueue([
      'context' => [
        'default', 
        'wp',
        'elementor',
        'beaver-builder'
      ]
    ]);
  });

  wp_enqueue_script( 
    'highlight', 
    'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js', 
  );

  wp_enqueue_style( 
    'highlight-theme', 
    'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark-dimmed.css',
    [] 
  );
};
