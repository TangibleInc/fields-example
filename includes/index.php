<?php

defined('ABSPATH') or die();

require_once __DIR__ . '/ajax/index.php';

$plugin->register_settings([
  'tabs' => [
    'php' => [
      'title' => 'Example - PHP',
      'callback' => function($plugin_config, $settings, $settings_key) use ($framework, $fields, $plugin) {

        $current_context = $_GET['context'] ?? 'default';
        $current_page = admin_url( sprintf('admin.php?%s', http_build_query($_GET)) ); 
        
        $fields->set_context($current_context); ?>
        
        <style>
          .tangible-plugin-settings-tab { max-width: 100% !important; }
          .tangible-settings-row { padding: 10px 0px; }
          .tf-example-container { display: flex; }
          .tf-example-field > ul { list-style: circle; padding: 10px; }
          .tf-example-list { width: 20%; padding-top: 20px; }
          .tf-example-field { width: 80%; }
        </style>

        <!-- Change context on select change -->
        <script>
          window.addEventListener('load', function() {
            
            const select = document.getElementById('tf-context-select')
            
            select.addEventListener('change', function() {

              const url = new URL(location.href);
              const params = new URLSearchParams(url.search)
              params.set('context', select.value)

              location.replace(location.protocol + '//' + location.host + location.pathname + '?' + params.toString())
            })
          })
        </script>

        <div class="tf-example-container">
          <div class="tf-example-list">
            <strong>Context</strong>
            <div style="padding: 20px 0px">
              <select id="tf-context-select">
                <?php foreach( $fields->contexts as $context ): ?>
                  <option value="<?= $context ?>" <?= $context === $current_context ? 'selected' : '' ?>>
                    <?= ucfirst($context) ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <strong>Introduction</strong>
            <ul>
              <?php foreach([
                'introduction/introduction',
              ] as $type): ?>
              <li style="<?= ($_GET['type'] ?? '') === $type ? 'font-weight: bold' : '' ?>">
                <a href="<?= $current_page ?>&type=<?= $type ?>" ><?= str_replace( 'introduction/', '', $type) ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
            <strong>Installation</strong>
            <ul>
              <?php foreach([
                'installation/composer'
              ] as $type): ?>
              <li style="<?= ($_GET['type'] ?? '') === $type ? 'font-weight: bold' : '' ?>">
                <a href="<?= $current_page ?>&type=<?= $type ?>" ><?= str_replace( 'installation/', '', $type) ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
            <strong>Fields</strong>
            <ul>
              <?php foreach([
                'accordion',
                'alignment_matrix',
                'border',
                'button_group',
                'checkbox',
                'color_picker',
                'combo_box',
                'combo_box_async',
                'date_picker',
                'dimensions',
                'field_group',
                'file',
                'gradient',
                'gallery',
                'hidden',
                'number',
                'radio',
                'select',
                'simple_dimension',
                'switch',
                'text',
                'text_suggestion',
                'textarea',
                'wysiwyg'
              ] as $type): ?>
              <li style="<?= ($_GET['type'] ?? '') === $type ? 'font-weight: bold' : '' ?>">
                <a href="<?= $current_page ?>&type=<?= $type ?>" ><?= $type ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
            <strong>Repeaters</strong>
            <ul>
              <?php foreach([
                'repeater/block',
                'repeater/table',
              ] as $type): ?>
              <li style="<?= ($_GET['type'] ?? '') === $type ? 'font-weight: bold' : '' ?>">
                <a href="<?= $current_page ?>&type=<?= $type ?>" ><?= str_replace( 'repeater/', '', $type) ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
            <strong>Dependent attributes</strong>
            <ul>
              <?php foreach([
                'context/repeater',
                'context/field-group'
              ] as $type): ?>
              <li style="<?= ($_GET['type'] ?? '') === $type ? 'font-weight: bold' : '' ?>">
                <a href="<?= $current_page ?>&type=<?= $type ?>" ><?= str_replace( 'context/', '', $type) ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php if( isset($_GET['type']) ): ?>
            <div class="tf-example-field">
              <?php require_once __DIR__ . '/type/' . $_GET['type'] . '.php'; ?>
            </div>
          <?php endif; ?>
        </div><?php
      }
    ]
  ]
]);
