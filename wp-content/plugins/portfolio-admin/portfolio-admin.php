<?php 

/*
 * Plugin Name:       Portfolio - Admin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Habilita o necessário para configurar o admin do site.
 * Version:           1.0.0
 * Author:            Mandelbrot
 * Author URI:        https://www.mandelbrot.com.br/pt/
 * License:           GPL v2 or later
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once __DIR__ . '/vendor/autoload.php';

function pfd_register_acf_windsor()
{
    \Windsor\Capsule\Manager::make()->register([
        'ui' => true
      ]);
}
add_action('acf/init', 'pfd_register_acf_windsor');

function pfd_modify_windsor_config($config) {
    return array_merge($config, [
      // Change the location of YAML files
      'path' => __DIR__ . '/acf-fields/',
      'ui' => [
        // {boolean} Same effect as `'ui' => true`
        'enabled' => true,
        // {boolean} Use this to inline Windsor's styles and scripts.
        // This is useful when working with WordPress environment which doesn't allow public url access to `vendor/` directory.
        'inline_assets' => true,
      ]
    ]);
}
add_filter('acf-windsor/config', 'pfd_modify_windsor_config');

 ?>