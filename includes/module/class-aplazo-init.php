<?php
/**
 * Aplazo Woocommerce Module Init
 * Author - Aplazo
 * Developer
 * License - https://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 *
 * @package Aplazo
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Aplazo Init class
 */
class Aplazo_Init
{

    /**
     * Init the plugin
     */
    public static function init_aplazo_gateway_class()
    {
        if (!class_exists('WC_Payment_Gateway')) return;

        include_once('class-aplazo-gateway.php');
        include_once('class-aplazo-module.php');

        Aplazo_Module::get_instance();
    }
}