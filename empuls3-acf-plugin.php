<?php
/**
 * Plugin Name:       Empuls3 ACF plugin
 * Description:       A WordPress plugin for custom ACF PRO Blocks, Post Types, Options Pages, Taxonomies  and more.
 * Requires at least: 6.3
 * Requires PHP:      7.4
 * Version:           0.1.0
 * Author:            Empuls3
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       empuls3-acf
 *
 * @package           empuls3-acf
 */

// Define our handy constants.
define( 'EMPULS3_ACF_VERSION', '0.1.2' );
define( 'EMPULS3_ACF_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'EMPULS3_ACF_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'EMPULS3_ACF_PLUGIN_BLOCKS', EMPULS3_ACF_PLUGIN_DIR . '/blocks/' );


// Set custom load & save JSON points for ACF sync.
require 'includes/acf-json.php';
// Register blocks and other handy ACF Block helpers.
require 'includes/acf-blocks.php';
// Register a default "Site Settings" Options Page.
require 'includes/acf-settings-page.php';
// Restrict access to ACF Admin screens.
require 'includes/acf-restrict-access.php';
// Display and template helpers.
require 'includes/template-tags.php';
