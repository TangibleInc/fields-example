<?php

defined('ABSPATH') or die();

require_once __DIR__ . '/ajax/index.php';

$plugin->register_settings([
  'tabs' => [
    'php' => [
      'title' => 'Example - PHP',
      'callback' => function($plugin_config, $settings, $settings_key) use ($framework, $fields, $plugin) {

        $current_page = admin_url( sprintf('admin.php?%s', http_build_query($_GET)) ); ?>
        
        <style>
          .tangible-plugin-settings-tab { max-width: 100% !important; }
          .tangible-settings-row { padding: 10px 0px; }
          .tf-example-container { display: flex; }
          .tf-example-field > ul { list-style: circle; padding: 10px; }
          .tf-example-list { width: 20%; padding-top: 20px; }
          .tf-example-field { width: 80%; }
        </style>

        <div class="tf-example-container">
          <div class="tf-example-list">
            <strong>Fields</strong>
            <ul>
              <?php foreach([
                'button-group',
                'checkbox',
                'color',
                'combo-box',
                'date',
                'dimensions',
                'field-group',
                'file',
                'gradient',
                'number',
                'radio',
                'select',
                'switch',
                'text',
                'text-suggestion'
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
            <strong>Dynamic attributes</strong>
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
