<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/komentify/integration-libs
 * @since             1.0.0
 * @package           komentify
 *
 * @wordpress-plugin
 * Plugin Name:       komentify
 * Plugin URI:        https://github.com/komentify/integration-libs
 * Description:       This plugin allows you to easily integrate komentify into your wordpress website.
 * Version:           1.0.0
 * Author:            Matteo De Micheli
 * Author URI:        https://www.komentify.io/
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       komentify
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-komentify-activator.php
 */
function activate_komentify()
{
    require_once plugin_dir_path(__FILE__).'includes/class-komentify-activator.php';
    Komentify_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-komentify-deactivator.php
 */
function deactivate_komentify()
{
    require_once plugin_dir_path(__FILE__).'includes/class-komentify-deactivator.php';
    Komentify_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_komentify');
register_deactivation_hook(__FILE__, 'deactivate_komentify');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__).'includes/class-komentify.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_komentify()
{
    $plugin = new Komentify_Plugin();
    $plugin->run();
}

run_komentify();
