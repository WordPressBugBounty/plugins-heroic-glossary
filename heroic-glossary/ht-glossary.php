<?php
/*
*	Plugin Name: Heroic Glossary
*	Plugin URI:  https://herothemes.com/heroic-glossary
*	Description: Glossary plugin for WordPress - add a Glossary block to the WordPress editor
*	Author: HeroThemes
*	Version: 2.0.1
*	Build: 454
*   Build Date: 2026-01-05 12:25:53PM
*   Tested up to: 6.9.0
*	Author URI: https://www.herothemes.com/
*	Text Domain: ht-glossary
*/

// Exit if accessed directly.
if (! defined('ABSPATH')) {
	exit;
}

// ht glossary plugin version number.
if (! defined('HT_GLOSSARY_VERSION_NUMBER')) {
	define('HT_GLOSSARY_VERSION_NUMBER', '2.0.1');
}

// ht glossary build number.
if (! defined('HT_GLOSSARY_BUILD_NUMBER')) {
	define('HT_GLOSSARY_BUILD_NUMBER', 454 );
}

// ht glossary main file.
if (! defined('HT_GLOSSARY_MAIN_FILE')) {
	define('HT_GLOSSARY_MAIN_FILE', __FILE__);
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path(__FILE__) . 'dist/ht-glossary-init.php';

/**
 * Admin.
 */
require_once plugin_dir_path(__FILE__) . 'dist/ht-glossary-admin.php';

//nb: load_plugin_textdomain not required for Gutenberg only text calls
