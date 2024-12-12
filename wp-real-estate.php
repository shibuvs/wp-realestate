<?php
/*
 * Plugin Name:       My Real Estate Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Sample real estate plugins.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shibu VS
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Autoload classes using Composer
require_once __DIR__ . '/vendor/autoload.php';

use WPRealProperty\WP_Real_Property;

WP_Real_Property::getInstance();