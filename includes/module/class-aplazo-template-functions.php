<?php

if ( ! function_exists( 'woocommerce_aplazo_checkout_payment' ) ) {

    /**
     * Output the Payment Methods on the checkout.
     */
    function woocommerce_aplazo_checkout_payment() {
        if ( WC()->cart->needs_payment() ) {
            $available_gateways = WC()->payment_gateways()->get_available_payment_gateways();
            WC()->payment_gateways()->set_current_gateway( $available_gateways );
        } else {
            $available_gateways = array();
        }

        wc_get_template(
            'checkout/payment.php',
            array(
                'checkout'           => WC()->checkout(),
                'available_gateways' => $available_gateways,
                'order_button_text'  => apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'aplazo-payment-gateway' ) ),
            ),
            '',
            plugin_dir_path( __FILE__ ) . '../../templates/'
        );
    }
}