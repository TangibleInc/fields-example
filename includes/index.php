<?php

$plugin->register_settings([
  'tabs' => [
    'php' => [
      'title' => 'Example - PHP',
      'callback' => function($plugin_config, $settings, $settings_key) use ($framework, $fields, $plugin) {

        ?><style>.tangible-settings-row { padding: 10px 0px; }</style>

        <h3>File upload</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_file_upload_name]', [
            'label'         => 'Dimensions field',
            'type'          => 'file-upload',
            'description'   => 'Description',
            'value'         => $plugin->get_settings()['setting_file_upload_name'] ?? '',
            'allowed_types' => [
              'image/jpeg', 
              'image/gif', 
              'image/png', 
              'image/bmp', 
              'image/tiff', 
              'image/webp', 
              'image/x-icon', 
              'image/heic'
            ]
          ]) ?>
        </div>
        
        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_file_upload_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_file_upload_name]';
            $value = $plugin->get_settings()['setting_file_upload_name'] ?? '';

            $fields->render_field($name, [
              'label'         => 'Upload field',
              'type'          => 'file-upload',
              'description'   => 'Description',
              'value'         => $value,
              'allowed_types' => [
                'image/jpeg', 
                'image/gif', 
                'image/png', 
                'image/bmp', 
                'image/tiff', 
                'image/webp', 
                'image/x-icon', 
                'image/heic'
              ]
            ]);
          </code> 
        </pre>

        <h3>Dimensions</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_dimensions_name]', [
            'label'       => 'Dimensions field',
            'type'        => 'dimensions',
            'description' => 'Description',
            'units'       => [ 'px','vw' ],
            'linked'      => false,
            'value'       => $plugin->get_settings()['setting_dimensions_name'] ?? '',
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_dimensions_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_button_group_name]';
            $value = $plugin->get_settings()['setting_button_group_name'] ?? '';

            $fields->render_field($name, [
              'label'       => 'Dimensions field',
              'type'        => 'dimensions',
              'description' => 'Description',
              'units'       => [ 'px','vw' ],
              'linked'      => false,
              'value'       => $value,
            ]);
          </code> 
        </pre>

        <h3>Button group</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_button_group_name]', [
            'label'       => 'Button group field',
            'type'        => 'button-group',
            'description' => 'Description',
            'options'     => [
              [
                'value'     => 'left',
                'dashicon'  => 'editor-alignleft'
              ],[
                'value'     => 'center',
                'dashicon'  => 'editor-aligncenter'
              ],[
                'value'     => 'right',
                'dashicon'  => 'editor-alignright'
              ]
            ],
            'value' => $plugin->get_settings()['setting_button_group_name'] ?? '',
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_button_group_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_button_group_name]';
            $value = $plugin->get_settings()['setting_button_group_name'] ?? '';

            $fields->render_field( $name, [
              'label'       => 'Button group field',
              'type'        => 'button-group',
              'description' => 'Description',
              'options'     => [
                [
                  'value'     => 'left',
                  'dashicon'  => 'editor-alignleft'
                ],[
                  'value'     => 'center',
                  'dashicon'  => 'editor-aligncenter'
                ],[
                  'value'     => 'right',
                  'dashicon'  => 'editor-alignright'
                ]
              ],
              'value' => $value
            ]);
          </code> 
        </pre>

        <h3>Switch</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_switch_name]', [
            'label'       => 'Switch field',
            'type'        => 'switch',
            'description' => 'Description',
            'activated'   => 'on',
            'desactivated'=> 'off',
            'value'       => $plugin->get_settings()['setting_switch_name'] ?? '',
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_switch_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_switch_name]';
            $value = $plugin->get_settings()['setting_switch_name'] ?? '';

            $fields->render_field( $name, [
              'label'       => 'Switch field',
              'type'        => 'switch',
              'value'       => $value,
              'description' => 'Description',
              'activated'   => 'on',
              'desactivated'=> 'off',
            ]);
          </code> 
        </pre>

        <h3>Date</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_date_name]', [
            'label'       => 'Date field',
            'type'        => 'date',
            'description' => 'Description',
            'value'       => $plugin->get_settings()['setting_date_name'] ?? '',
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_date_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_date_name]';
            $value = $plugin->get_settings()['setting_date_name'] ?? '';

            $fields->render_field( $name, [
              'label' => 'Date field',
              'type'  => 'date',
              'value' => $value,
            ]);
          </code> 
        </pre>

        <h3>Text</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field( $plugin->get_settings_key() . '[setting_text_name]', [
            'label'       => 'Text field',
            'type'        => 'text',
            'value'       => $plugin->get_settings()['setting_text_name'] ?? '',
            'placeholder' => 'Example placeholder',
            'description' => 'Example description'
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_text_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>

            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_text_name]';
            $value = $plugin->get_settings()['setting_text_name'] ?? '';

            $fields->render_field( $name, [
              'label'       => 'Text field',
              'type'        => 'text',
              'value'       => $value,
              'placeholder' => 'Example placeholder',
              'description' => 'Example description'
            ]);
          </code>
        </pre>

        <h3>Number</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field( $plugin->get_settings_key() . '[setting_number_name]', [
            'label'       => 'Number field',
            'type'        => 'number',
            'value'       => $plugin->get_settings()['setting_number_name'] ?? '11',
            'min'         => 10,
            'max'         => 100,
            'description' => 'Example description'
          ]) ?>
        </div>
        
        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_number_name'] ?? ''
        ); ?>
        
        <h4>Code</h4>

        <pre>
          <code>

            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_number_name]';
            $value = $plugin->get_settings()['setting_number_name'] ?? '';

            $fields->render_field( $name, [
              'label'       => 'Number field',
              'type'        => 'number',
              'value'       => $value,
              'min'         => 10,
              'max'         => 100,
              'description' => 'Example description'
            ]);
          </code>
        </pre>

        <h3>Select</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_select_name]', [
            'type'  => 'select',
            'value' => $plugin->get_settings()['setting_select_name'] ?? '',
            'label' => 'Select',
            'items' => [
              [ 'id' => 'test1', 'name' => 'Test1' ],
              [ 'id' => 'test2', 'name' => 'Test2' ],
            ],
            'placeholder' => 'Example placeholder',
            'description' => 'Example description' 
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_select_name'] ?? ''
        ); ?>
        
        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_select_name]';
            $value = $plugin->get_settings()['setting_select_name'] ?? '';

            $fields->render_field( $name, [
              'type'  => 'select',
              'value' => $value,
              'label' => 'Select',
              'items' => [
                [ 'id' => 'test1', 'name' => 'Test1' ],
                [ 'id' => 'test2', 'name' => 'Test2' ],
              ],
              'placeholder' => 'Example placeholder',
              'description' => 'Example description' 
            ]);
          </code> 
        </pre>

        <h3>ComboBox</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_1_name]', [
            'type'  => 'combo-box',
            'value' => $plugin->get_settings()['setting_combo_1_name'] ?? '',
            'label' => 'Simple list combobox',
            'items' => [
              [ 'id' => 'test1', 'name' => 'Test1' ],
              [ 'id' => 'test2', 'name' => 'Test2' ],
            ],
            'placeholder' => 'Example placeholder',
            'description' => 'Example description'
          ]) ?>
        </div>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_combo_2_name]', [
            'type'  => 'combo-box',
            'value' => $plugin->get_settings()['setting_combo_2_name'] ?? '',
            'label' => 'Categories list combobox',
            'items' => [
              [
                'name'     => 'Category 1',
                'children' => [ 
                  [ 'id' => 'test1', 'name' => 'Test1' ],
                  [ 'id' => 'test2', 'name' => 'Test2' ]
                ]
              ],
              [
                'name'     => 'Category 2',
                'children' => [ 
                  [ 'id' => 'test3', 'name' => 'Test3' ],
                  [ 'id' => 'test4', 'name' => 'Test4' ]
                ]
              ]
            ],
            'placeholder' => 'Example placeholder',
            'description' => 'Example description'
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_combo_1_name'] ?? ''
        ); ?>
        
        <?php tangible()->see(
          $plugin->get_settings()['setting_combo_2_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            // Simple list 

            $name  = $plugin->get_settings_key() . '[setting_combo_1_name]';
            $value = $plugin->get_settings()['setting_combo_1_name'] ?? '';

            $fields->render_field( $name, [
              'type'  => 'combo-box',
              'value' => $value,
              'label' => 'Simple list combobox',
              'items' => [
                [ 'id' => 'test1', 'name' => 'Test1' ],
                [ 'id' => 'test2', 'name' => 'Test2' ],
              ],
              'placeholder' => 'Example placeholder',
              'description' => 'Example description'
            ]);
            
            // Categories list

            $name  = $plugin->get_settings_key() . '[setting_combo_2_name]';
            $value = $plugin->get_settings()['setting_combo_2_name'] ?? '';

            $fields->render_field( $name, [
              'type'  => 'combo-box',
              'value' => $value,
              'label' => 'Categories list combobox',
              'items' => [
                [
                  'name'     => 'Category 1',
                  'children' => [ 
                    [ 'id' => 'test1', 'name' => 'Test1' ],
                    [ 'id' => 'test2', 'name' => 'Test2' ]
                  ]
                ],[
                  'name'     => 'Category 2',
                  'children' => [ 
                    [ 'id' => 'test3', 'name' => 'Test3' ],
                    [ 'id' => 'test4', 'name' => 'Test4' ]
                  ]
                ]
              ],
              'placeholder' => 'Example placeholder',
              'description' => 'Example description'
            ]);
          </code> 
        </pre>

        <h3>Dynamic text</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_dynamic_text_name]', [
            'label'       => 'Test',
            'label'       => 'Label',
            'value'       => $plugin->get_settings()['setting_dynamic_text_name'] ?? '',
            'placeholder' => 'Example placeholder', 
            'description' => 'Example description',
            'type'        => 'text-suggestion',
            'options'     => [
              [
                'name'     => 'Category',
                'children' => [ 
                  [ 'id' => 'test1', 'name' => 'Test1' ],
                  [ 'id' => 'test2', 'name' => 'Test2' ]
                ]
              ],[
                'name'     => 'Category 2',
                'children' => [ 
                  [ 'id' => 'test3', 'name' => 'Test3' ],
                  [ 'id' => 'test4', 'name' => 'Test4' ]
                ]
              ]
            ]
          ]) ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_dynamic_text_name'] ?? ''
        ); ?>

        <h4>Code</h4>

        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_dynamic_text_name]';
            $value = $plugin->get_settings()['setting_dynamic_text_name'] ?? '';

            // Option can be with or without categories

            $fields->render_field($name, [
              'label'       => 'Dynamic text',
              'placeholder' => 'Example placeholder', 
              'description' => 'Example description',
              'type'        => 'text-suggestion',
              'options'     => [ 
                [
                  'name'     => 'Category',
                  'children' => [ 
                    [ 'id' => 'test1', 'name' => 'Test1' ],
                    [ 'id' => 'test2', 'name' => 'Test2' ]
                  ]
                ],[
                  'name'     => 'Category 2',
                  'children' => [ 
                    [ 'id' => 'test3', 'name' => 'Test3' ],
                    [ 'id' => 'test4', 'name' => 'Test4' ]
                  ]
                ]
              ]
            ])
          </code> 
        </pre>

        <h3>Repeater</h3>

        <h4>Example</h4>

        <div class="tangible-settings-row">
          <?= $fields->render_field($plugin->get_settings_key() . '[setting_repeater_name]', [
            'label'   => 'Repeater field',
            'type'    => 'repeater-table',
            'value'   => $plugin->get_settings()['setting_repeater_name'] ?? false,
            'fields'  => [          
              [
                'label'   => 'Text',
                'type'    => 'text',
                'name'    => 'text_name',
              ],[
                'label'   => 'Dynamic text name',
                'type'    => 'text-suggestion',
                'name'    => 'dynamic_text_name',
                'options' => [
                  [
                    'name'     => 'Category 1',
                    'children' => [ 
                      [ 'id' => 'test1', 'name' => 'Test1' ],
                      [ 'id' => 'test2', 'name' => 'Test2' ]
                    ]
                  ],[
                    'name'     => 'Category 2',
                    'children' => [ 
                      [ 'id' => 'test3', 'name' => 'Test3' ],
                      [ 'id' => 'test4', 'name' => 'Test4' ]
                    ]
                  ]
                ]
              ],[
                'label' => 'Date field',
                'type'  => 'date',
                'name'  => 'date_picker_name',
              ]
            ]
          ]); ?>
        </div>

        <?php submit_button() ?>

        <h4>Value</h4>

        <?php tangible()->see(
          $plugin->get_settings()['setting_repeater_name'] ?? ''
        ); ?>

        <h4>Code</h4>
        
        <pre>
          <code>
            
            $fields = tangible_fields();

            $name  = $plugin->get_settings_key() . '[setting_repeater_name]';
            $value = $plugin->get_settings()['setting_repeater_name'] ?? '';

            // Option can be with or without categories

            $fields->render_field($name, [
              'label'   => 'Repeater field',
              'type'    => 'repeater-table',
              'value'   => $value,

              // Can be any type of field, just make sure to add a name

              'fields'  => [          
                [
                  'label'   => 'Text',
                  'type'    => 'text',
                  'name'    => 'text_name',
                ],[
                  'label'   => 'Dynamic text name',
                  'type'    => 'text-suggestion',
                  'name'    => 'dynamic_text_name',
                  'options' => [
                    [
                      'name'     => 'Category 1',
                      'children' => [ 
                        [ 'id' => 'test1', 'name' => 'Test1' ],
                        [ 'id' => 'test2', 'name' => 'Test2' ]
                      ]
                    ],[
                      'name'     => 'Category 2',
                      'children' => [ 
                        [ 'id' => 'test3', 'name' => 'Test3' ],
                        [ 'id' => 'test4', 'name' => 'Test4' ]
                      ]
                    ]
                  ]
                ],[
                  'label' => 'Date field',
                  'type'  => 'date',
                  'name'  => 'date_name',
                ]
              ]
            ]); 
          </code> 
        </pre><?php

      }
    ],
    'html' => [
      'title' => 'Example - HTML',
      'callback' => function($plugin_config, $settings, $settings_key) use ($framework, $fields, $plugin) {
        
        $controls = $fields->render_control_template(
          $plugin->get_settings()['html'] ?? ''
        );
        
        ?>

        <h3>Example - HTML</h3>
        
        <h3>Input</h3>
        
        <textarea 
          name="<?= $plugin->get_settings_key() . '[html]' ?>" 
          style="width: 100%; min-height: 100px;"
        ><?= $plugin->get_settings()['html'] ?? '' ?></textarea>

        <?php submit_button() ?>

        <h3>Output</h3>

        <?php foreach( $controls as $control ): ?> 
          <div class="tangible-settings-row">
            <?= $control ?>
          </div>
        <?php endforeach;
      }
    ]
  ]
]);
