<?php
/**
 * Aplazo Woocommerce Module Gateway
 * Author - Aplazo
 * Developer
 * License - https://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 *
 * @package Aplazo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Aplazo frontend scripts
 */
class WC_Aplazo_Frontend_Scripts
{
    /**
     * Hook in methods.
     */
    public static function init()
    {
        add_action('wp_enqueue_scripts', array( __CLASS__, 'custom_wp_enqueue_scripts' ));
    }

    public static function custom_wp_enqueue_scripts()
    {
        wp_enqueue_script( 'aplazo-widget', plugins_url( '../assets/js/aplazo-widget/aplazo-widgets.min.js', plugin_dir_path( __FILE__ )));
        $images_path = plugins_url('/assets/images/', APLAZO_PLUGIN_FILE) ;
        wp_localize_script( 'aplazo-widget', 'images', array(
            'step1' => $images_path . 'step-1.png',
            'step2' => $images_path . 'step-2.png',
            'step3' => $images_path . 'step-3.png',
            'logoraw' => $images_path . 'logo-raw.png',
            'descmovil' => $images_path . 'aplazo-desc-movil',
            'aplazodescription' => $images_path . 'aplazo-description.png'
            ));
    }
}

WC_Aplazo_Frontend_Scripts::init();