/**
 * WooCommerce Visual Page Customiser JS
 */

jQuery(document).ready(function () {
    jQuery('select[name="vpc-template"]').on('change', function () {
        if (this.value == 'page-single-product') {
            jQuery('.vpc-elements-table tr').each(function () {
                if (!jQuery(this).hasClass('vpc-select-template')) {
                    jQuery(this).hide();
                }
            });
            jQuery('.vpc-psp-position').show();
        } else if(this.value == 'page-shop-category') {
            jQuery('.vpc-elements-table tr').each(function () {
                if (!jQuery(this).hasClass('vpc-select-template')) {
                    jQuery(this).hide();
                }
            });
            jQuery('.vpc-psc-position').show();
        } else if(this.value == 'page-cart') {
            jQuery('.vpc-elements-table tr').each(function () {
                if (!jQuery(this).hasClass('vpc-select-template')) {
                    jQuery(this).hide();
                }
            });
            jQuery('.vpc-pcart-position').show();
        }
        // TO DO - Finish off JS ifs
    });
});