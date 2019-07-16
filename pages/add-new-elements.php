<?php

/**
 * Adding new elements page
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

global $wpdb;
?>
<div class="wrap">
    <h1 class="wp-heading-inline"><?php _e('Add new element', 'woo-visual-page-customiser'); ?></h1>
    <form class="blz_vpc_form">
        <input type="hidden" name="page" value="blz-vpc-add-new-element" />
        <table class="vpc-elements-table">
            <tbody>
                <tr class="vpc-select-template">
                    <td>
                        <span>Select Page/Email Template</span>
                    </td>
                    <td>
                        <select name="vpc-template">
                            <option value=""><?php _e('Select Page/Email Template', 'woo-visual-page-customiser'); ?></option>
                            <option value="page-single-product"><?php _e('Page: Single Product', 'woo-visual-page-customiser'); ?></option>
                            <option value="page-shop-category"><?php _e('Page: Shop/Category', 'woo-visual-page-customiser'); ?></option>
                            <option value="page-cart"><?php _e('Page: Cart', 'woo-visual-page-customiser'); ?></option>
                            <option value="page-checkout"><?php _e('Page: Checkout', 'woo-visual-page-customiser'); ?></option>
                            <option value="page-my-account"><?php _e('Page: My Account', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-customer-completed-order"><?php _e('Email: Customer Completed Order', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-customer-invoice"><?php _e('Email: Customer Invoice', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-customer-new-account"><?php _e('Email: Customer New Account', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-customer-note"><?php _e('Email: Customer Note', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-customer-on-hold-order"><?php _e('Email: Customer On Hold Order', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-customer-refunded-order"><?php _e('Email: Customer Refunded Order', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-customer-reset-password"><?php _e('Email: Customer Reset Password', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-cancelled-order"><?php _e('Email: Admin Cancelled Order', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-failed-order"><?php _e('Email: Admin Failed Order', 'woo-visual-page-customiser'); ?></option>
                            <option value="email-new-order"><?php _e('Email: Admin New Order', 'woo-visual-page-customiser'); ?></option>
                        </select>
                    </td>
                </tr>
                <tr class="vpc-psp-position" style="display: none;">
                    <td>
                        <span>Select position to add element to</span>
                    </td>
                    <td>
                        <select name="vpc-psp-position">
                            <option value="vpc-psp-wbsp"><?php _e('1: woocommerce_before_single_product', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wbsps"><?php _e('2: woocommerce_before_single_product_summary', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wpt"><?php _e('3: woocommerce_product_thumbnails (Doesn\'t always work)', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wsps"><?php _e('4: woocommerce_single_product_summary', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wbatcf"><?php _e('5: woocommerce_before_add_to_cart_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wbvf"><?php _e('6: woocommerce_before_variations_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wbatcb"><?php _e('7: woocommerce_before_add_to_cart_button', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wbsv"><?php _e('8: woocommerce_before_single_variation', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wsv"><?php _e('9: woocommerce_single_variation', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wasv"><?php _e('10: woocommerce_after_single_variation', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-waatcb"><?php _e('11: woocommerce_after_add_to_cart_button', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wavf"><?php _e('12: woocommerce_after_variations_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-waatcf"><?php _e('13: woocommerce_after_add_to_cart_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wpms"><?php _e('14: woocommerce_product_meta_start', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wpme"><?php _e('15: woocommerce_product_meta_end', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-ws"><?php _e('16: woocommerce_share', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wasps"><?php _e('17: woocommerce_after_single_product_summary', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psp-wasp"><?php _e('18: woocommerce_after_single_product', 'woo-visual-page-customiser'); ?></option>
                        </select>
                    </td>
                </tr>
                <tr class="vpc-psc-position" style="display: none;">
                    <td>
                        <span>Select position to add element to</span>
                    </td>
                    <td>
                        <select name="vpc-psc-position">
                            <option value="vpc-psc-wbmc"><?php _e('1: woocommerce_before_main_content', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wad"><?php _e('2: woocommerce_archive_description', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wbsl"><?php _e('3: woocommerce_before_shop_loop', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wbsli"><?php _e('4: woocommerce_before_shop_loop_item', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wbslit"><?php _e('5: woocommerce_before_shop_loop_item_title', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wslit"><?php _e('6: woocommerce_shop_loop_item_title', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-waslit"><?php _e('7: woocommerce_after_shop_loop_item_title', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wasli"><?php _e('8: woocommerce_after_shop_loop_item', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wasl"><?php _e('9: woocommerce_after_shop_loop', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-psc-wamc"><?php _e('10: woocommerce_after_main_content', 'woo-visual-page-customiser'); ?></option>
                        </select>
                    </td>
                </tr>
                <tr class="vpc-pcart-position" style="display: none;">
                    <td>
                        <span>Select position to add element to</span>
                    </td>
                    <td>
                        <select name="vpc-pcart-position">
                            <option value="vpc-pcart-wbc"><?php _e('1: woocommerce_before_cart', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wbctab"><?php _e('2: woocommerce_before_cart_table', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wbcc"><?php _e('3: woocommerce_before_cart_contents', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wccon"><?php _e('4: woocommerce_cart_contents', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wccou"><?php _e('5: woocommerce_cart_coupon', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wacc"><?php _e('6: woocommerce_after_cart_contents', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wactab"><?php _e('7: woocommerce_after_cart_table', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wccoll"><?php _e('8: woocommerce_cart_collaterals', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wbctot"><?php _e('9: woocommerce_before_cart_totals', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wctbs"><?php _e('10: woocommerce_cart_totals_before_shipping', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wbsc"><?php _e('11: woocommerce_before_shipping_calculator', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wasc"><?php _e('12: woocommerce_after_shipping_calculator', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wctas"><?php _e('13: woocommerce_cart_totals_after_shipping', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wctbot"><?php _e('14: woocommerce_cart_totals_before_order_total', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wctaot"><?php _e('15: woocommerce_cart_totals_after_order_total', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wptc"><?php _e('16: woocommerce_proceed_to_checkout', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wactot"><?php _e('17: woocommerce_after_cart_totals', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcart-wac"><?php _e('18: woocommerce_after_cart', 'woo-visual-page-customiser'); ?></option>
                        </select>
                    </td>
                </tr>
                <tr class="vpc-pcheck-position" style="display: none;">
                    <td>
                        <span>Select position to add element to</span>
                    </td>
                    <td>
                        <select name="vpc-pcheck-position">
                            <option value="vpc-pcheck-wbcf"><?php _e('1: woocommerce_before_checkout_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wcbcd"><?php _e('2: woocommerce_checkout_before_customer_details', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wbcbf"><?php _e('3: woocommerce_before_checkout_billing_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wacbf"><?php _e('4: woocommerce_after_checkout_billing_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wbcsf"><?php _e('5: woocommerce_before_checkout_shipping_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wacsf"><?php _e('6: woocommerce_after_checkout_shipping_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wbon"><?php _e('7: woocommerce_before_order_notes', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-waon"><?php _e('8: woocommerce_after_order_notes', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wcacd"><?php _e('9: woocommerce_checkout_after_customer_details', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wcbor"><?php _e('10: woocommerce_checkout_before_order_review', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wrobcc"><?php _e('11: woocommerce_review_order_before_cart_contents', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wroacc"><?php _e('12: woocommerce_review_order_after_cart_contents', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wrobship"><?php _e('13: woocommerce_review_order_before_shipping', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wroaship"><?php _e('14: woocommerce_review_order_after_shipping', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wrobot"><?php _e('15: woocommerce_review_order_before_order_total', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wroaot"><?php _e('16: woocommerce_review_order_after_order_total', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wrobp"><?php _e('17: woocommerce_review_order_before_payment', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wrobsub"><?php _e('18: woocommerce_review_order_before_submit', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wroasub"><?php _e('19: woocommerce_review_order_after_submit', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wroap"><?php _e('20: woocommerce_review_order_after_payment', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wcaor"><?php _e('21: woocommerce_checkout_after_order_review', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pcheck-wacf"><?php _e('22: woocommerce_after_checkout_form', 'woo-visual-page-customiser'); ?></option>
                        </select>
                    </td>
                </tr>
                <tr class="vpc-pma-position" style="display: none;">
                    <td>
                        <span>Select position to add element to</span>
                    </td>
                    <td>
                        <select name="vpc-pma-position">
                            <option value="vpc-pma-wbclf"><?php _e('1: woocommerce_before_customer_login_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pma-wlfs"><?php _e('2: woocommerce_login_form_start', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pma-wlf"><?php _e('3: woocommerce_login_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pma-wlfe"><?php _e('4: woocommerce_login_form_end', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pma-wrfs"><?php _e('5: woocommerce_register_form_start', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pma-wrf"><?php _e('6: woocommerce_register_form', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pma-wrfe"><?php _e('7: woocommerce_register_form_end', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-pma-waclf"><?php _e('8: woocommerce_after_customer_login_form', 'woo-visual-page-customiser'); ?></option>
                        </select>
                    </td>
                </tr>
                <tr class="vpc-email-position" style="display: none;">
                    <td>
                        <span>Select position to add element to</span>
                    </td>
                    <td>
                        <select name="vpc-email-position">
                            <option value="vpc-email-weh"><?php _e('1: woocommerce_email_header', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-weod"><?php _e('2: woocommerce_email_order_details', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-webot"><?php _e('3: woocommerce_email_before_order_table', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-woims"><?php _e('4: woocommerce_order_item_meta_start', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-woime"><?php _e('5: woocommerce_order_item_meta_end', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-weaot"><?php _e('6: woocommerce_email_after_order_table', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-weom"><?php _e('7: woocommerce_email_order_meta', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-wecd"><?php _e('8: woocommerce_email_customer_details', 'woo-visual-page-customiser'); ?></option>
                            <option value="vpc-email-wef"><?php _e('9: woocommerce_email_footer', 'woo-visual-page-customiser'); ?></option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <p style="float: right;"><?php _e('Thank you for using WooCommerce Visual Page Customiser - If you find the plugin useful be sure to leave us a <a href="TBW" target="_blank">review here</a>.', 'woo-visual-page-customiser'); ?></p>
</div>