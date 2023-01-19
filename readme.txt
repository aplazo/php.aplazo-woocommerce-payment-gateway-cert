=== Aplazo Payment Gateway ===
Contributors: aplazopayment
Tags: e-commerce, store, checkout, payments, aplazo, woocommerce, pagos
Requires at least: 5.8
Tested up to: 6.1
Requires PHP: 7.2
Stable tag: 1.0.18
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Aplazo Payment plugin allows users to finalize their purchase buying now and paying later.


== Description ==
Buy now. Pay in installments. No credit card.

Now you can have what you want, when you want. Buy now and pay in 5 fortnightly installments.

== Installation ==
1. Upload \"php.aplazo-woocommerce-payment-gateway\" folder to the \"/wp-content/plugins/\" directory.
2. Activate the plugin through the \"Plugins\" menu in WordPress and click in configure.
3. Add the keys given by your Aplazo dashboard.

== Frequently Asked Questions ==
= What is Aplazo? =
Aplazo is a financing platform for online purchases that allows you to divide the payment of your purchases into 5 fortnightly installments. Best of all, you don\'t need a credit card. You can receive your purchase immediately without having to pay all at once.

= How much does it cost to pay for my purchase through Aplazo? =
Aplazo does not charge a fixed interest rate, it only charges a single service fee that we transparently break down in the purchase process. There is nothing hidden.

= How are my biweekly payments collected? =
Payments can be made automatically charged to your debit or credit card, it is also possible to make a deposit in Oxxo or transfer via SPEI, whichever is more convenient for you.

== Screenshots ==
1. This is what the Checkout looks like in your store.
2. Once you install the Aplazo Plugin, you have to add the keys given by your aplazo account.
3. When user select Aplazo payment method, the checkout will load the aplazo checkout to finish the order.

== Changelog ==
# Aplazo Payment Gateway for Woocomerce Version History

= 1.0.18 =
* Bump version to 1.0.17
* Removed external dependencies from the plugin (external images)

= 1.0.17 =
* Bump version to 1.0.16
* Added option cancel_orders. Merchants can choose the time to cancel an order after created

= 1.0.16 =
* Bump version to 1.0.15
* Added refund and stock logic

= 1.0.15 =
* Bump version to 1.0.14
* Removed deprecated hook

= 1.0.14 =
* Bump version to 1.0.13
* Adapted to Wordpress Plugins
* Fixed bad initialization of hook

= 1.0.13 =
* Bump version to 1.0.12
* Aplazo banner in checkout fixed by the woocommerce update.

= 1.0.12 =
* Bump version to 1.0.10
* Skip last form and show aplazo checkout instead.

= 1.0.10 =
* Bump version to 1.0.9
* Install aplazo widgets in product detail and shopping cart screen.

= 1.0.9 =
* Bump version to 1.0.8
* Install web components.

= 1.0.8 =
* Bump version to 1.0.7
* Buyer Info for following the order.

= 1.0.7 =
* Bump version to 1.0.7
* CartURL

= 1.0.6 =
* Bump version to 1.0.6
* Corrections button labels and default texts.

= 1.0.5 =
* Bump version to 1.0.5
* Corrections from S-Pro for the flow of Orders.

= 1.0.4 =
* Bump version to 1.0.4
* Corrections from S-Pro for the flow of Orders.

= 1.0.3 =
* Bump version to 1.0.3.
* Fixed Headers.
* Fixed Currencies.

= 1.0.2 =
* Bump version to 1.0.2.
* Prod URL.

= 1.0.1 =
* Bump version to 1.0.1
* Corrected icons, replacing with one in the s3 bucket.
* Corrected currencies, adding MXN, removing rublos and others.

= 1.0.0 =
* Initial S-PRO version.


== Upgrade Notice ==
= 1.0.14 =
This version is adapted to the woocommerce 6.6.1 upgrade. It fixes that the Aplazo logo is not showing.
