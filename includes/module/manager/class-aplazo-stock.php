<?php
/**
 * Aplazo Woocommerce Stock
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
 * Class Aplazo_Stock
 */
class Aplazo_Stock {

    /**
     * Aplazo_Stock constructor.
     */
    public function __construct() {
        add_action( 'woocommerce_order_status_pending_to_cancelled', array( 'Aplazo_Stock', 'restore_stock_item' ), 10, 1 );
        add_action( 'woocommerce_order_status_pending_to_failed', array( 'Aplazo_Stock', 'restore_stock_item' ), 10, 1 );
        add_action( 'woocommerce_order_status_processing_to_refunded', array( 'Aplazo_Stock', 'restore_stock_item' ), 10, 1 );
        add_action( 'woocommerce_order_status_on-hold_to_refunded', array( 'Aplazo_Stock', 'restore_stock_item' ), 10, 1 );
    }

    /**
     * Restore Stock Item
     *
     * @param int $order_id Order ID.
     */
    public static function restore_stock_item( $order_id ) {
        $order = wc_get_order( $order_id );

        if ( ! $order || 'yes' !== get_option( 'woocommerce_manage_stock' ) || ! apply_filters( 'woocommerce_can_reduce_order_stock', true, $order ) ) {
            return;
        }

        if ( $order->get_payment_method() !== 'aplazo' ) {
            return;
        }

        foreach ( $order->get_items() as $item ) {
            if ( $item['product_id'] > 0 ) {
                $_product = wc_get_product( $item['product_id'] );
                if ( $_product && $_product->exists() && $_product->managing_stock() ) {
                    $qty = apply_filters( 'woocommerce_order_item_quantity', $item['qty'], $order, $item );
                    wc_update_product_stock( $_product, $qty, 'increase' );
                    do_action( 'woocommerce_auto_stock_restored', $_product, $item );
                }
            }
        }
    }
}

new Aplazo_Stock();
