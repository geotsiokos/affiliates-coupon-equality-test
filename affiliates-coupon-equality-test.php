<?php
/**
 * Plugin Name: Affiliates Coupon Equality Test
 * Plugin URI: https://github.com/geotsiokos/affiliates-coupon-equality-test
 * Description: Fixes issue with GF Coupons addon using coupon codes in uppercase form
 * Version: 1.0.0
 * Author: gtsiokos
 * Author URI: https://www.netpad.gr
 *
 * @author gtsiokos
 * @package affiliates-coupon-equality-test
 * @since affiliates-coupon-equality-test 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'affiliates_coupons_equality_test', 'example_affiliates_coupons_equality_test', 10, 3 );
function example_affiliates_coupons_equality_test( $test, $coupon1, $coupon2 ) {
	if ( strtolower( $coupon1 ) === strtolower( $coupon2 ) ) {
		$test = true;
	}
	return $test;
}