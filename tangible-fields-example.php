<?php
/**
 * Plugin Name: Tangible Field Example
 * Plugin URI: https://tangibleplugins.com/tangible-field-example
 * Description: 
 * Version: 0.0.4
 * Author: Team Tangible
 * Author URI: https://teamtangible.com
 * License: GPLv2 or later
 */

define( 'TANGIBLE_FIELD_EXAMPLE_VERSION', '0.0.4' );

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/tangible/plugin-framework/index.php';
require_once __DIR__ . '/vendor/tangible/fields/index.php';
require_once __DIR__ . '/vendor/tangible/fields-pro/index.php';

/**
 * Get plugin instance
 */
function tangible_field_example($instance = false) {
  static $plugin;
  return $plugin ? $plugin : ($plugin = $instance);
}

add_action('plugins_loaded', function() {

  $framework = tangible();
  $plugin    = $framework->register_plugin([
    'name'           => 'tangible-field-example',
    'title'          => 'Tangible Field Example',
    'setting_prefix' => 'tangible_field_example',

    'version'        => TANGIBLE_FIELD_EXAMPLE_VERSION,
    'file_path'      => __FILE__,
    'base_path'      => plugin_basename( __FILE__ ),
    'dir_path'       => plugin_dir_path( __FILE__ ),
    'url'            => plugins_url( '/', __FILE__ ),
    'assets_url'     => plugins_url( '/assets', __FILE__ ),
  ]);

  tangible_field_example( $plugin );

  $fields = tangible_fields();  

  require_once __DIR__ . '/includes/index.php';

}, 10);
