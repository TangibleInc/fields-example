<?php

namespace Tangible\FieldsExample;

defined('ABSPATH') or die();

use tangible\framework;

require_once __DIR__ . '/ajax/index.php';
require_once __DIR__ . '/Documentation.php';
require_once __DIR__ . '/register/index.php';
require_once __DIR__ . '/enqueue.php';

framework\register_plugin_settings($plugin, [
  'css'  => $plugin->assets_url . '/build/settings.min.css',
  'js'   => $plugin->assets_url . '/build/settings.min.js',
  'tabs' => [
    'php' => [
      'title' => 'Documentation',
      'callback' => function() use ($fields, $plugin) {

        $documentation = Documentation::$instance;
        $plugin->enqueue();

        $page = $_GET['type'] ?? false;
        $section = $_GET['section'] ?? false;

        if( $page && $section ) {
          $documentation->register_page_fields($section, $page);
        }

        $current_context = $_GET['context'] ?? 'default';
        $current_page = admin_url( sprintf('admin.php?%s', http_build_query($_GET)) ); 
        
        $fields->set_context($current_context); 
        
        ?>
        <script>window.addEventListener('load', () => hljs.highlightAll())</script>
        <div class="tf-example-container">
          
          <!-- Sidebar -->
          <div class="tf-example-list">
            
            <!-- Change context select -->
            <strong>Context</strong>
            <div class="tf-context-select-container">
              <select id="tf-context-select">
                <?php foreach( $fields->contexts as $context ): ?>
                  <option value="<?= $context ?>" <?= $context === $current_context ? 'selected' : '' ?>>
                    <?= ucfirst($context) ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Links -->
            <?php foreach($documentation->sections as $section_slug => $section): ?>
              <strong><?= $section['title'] ?></strong>
              <ul>
                <?php foreach($section['pages'] as $slug => $page): ?>
                <li style="<?= ($_GET['type'] ?? '') === $slug ? 'font-weight: bold' : '' ?>">
                  <a href="<?= $current_page ?>&type=<?= $slug ?>&section=<?= $section_slug ?>">
                    <?= $page['title'] ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            <?php endforeach; ?>
          </div>

          <!-- Content -->
          <?php if( isset($_GET['type']) && isset($_GET['section']) ): ?>
            <div class="tf-example-field">
              <?php $documentation->require_template($_GET['section'], $_GET['type'])  ?>
            </div>
          <?php endif; ?>
        
        </div><?php
      }
    ]
  ]
]);
