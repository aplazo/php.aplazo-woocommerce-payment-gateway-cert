<?php
/*
Plugin Name: Aplazo Payment Gateway
Description: Aplazo BNPL Payment Gateway plugin
Version: 1.0.18
Author: Aplaz S.A. de C.V.
Text Domain: aplazo-payment-gateway
Domain Path: /i18n/languages
License: MIT
*/

if (!defined('ABSPATH')) {
    exit;
}

if ( ! defined( 'APLAZO_PLUGIN_FILE' ) ) {
    define( 'APLAZO_PLUGIN_FILE', __FILE__ );
}

if (!class_exists('Aplazo_Init')) {
    include_once dirname(__FILE__) . '/includes/module/class-aplazo-init.php';
    add_action('plugins_loaded', array('Aplazo_Init', 'init_aplazo_gateway_class'));
}