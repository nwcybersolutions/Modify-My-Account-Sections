<?php
/*
Plugin Name: Modify My Account Sections
Plugin URI: https://github.com/
Description: Change My Account Section Names and Remove Them
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Change My Account Sections
Domain Path: /languages
*/

function nwcs_woo_my_account_endpoints() {
 $myorder1 = array(
# 'my-custom-endpoint' => __( 'My Stuff', 'woocommerce' ),
 'dashboard' => __( 'Dashboard', 'woocommerce' ),
  'orders' => __( 'Orders', 'woocommerce' ),
 'edit-account' => __( 'Identity & Password', 'woocommerce' ),
# 'downloads' => __( 'Download MP4s', 'woocommerce' ),
 'edit-address' => __( 'Addresses', 'woocommerce' ),
# 'payment-methods' => __( 'Payment Methods', 'woocommerce' ),
 'customer-logout' => __( 'Logout', 'woocommerce' ),
 );
 return $myorder1;
}
add_filter ( 'woocommerce_account_menu_items', 'nwcs_woo_my_account_endpoints' );

#public function nwcs_woo-pre-order_my_account_endpoints() {
# $myorder2 = array(
#  'pre-orders' => __( 'Pre-Orders', 'wc-pre-orders' ),
#  );
# return $myorder2;
#}
#
#add_filter ( 'menu_items', 'nwcs_woo-pre-order_my_account_endpoints' );
