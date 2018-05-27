<?php

/**
 * @REMOVE actions & filters
 * or
 * @ADD NEW actions & filters.
 **/

/**================= REMOVE ACTIONS & FILTERS =================**/

/**
 *
 * Func: shoptheme_remove_storefront_function()
 * Desc: Remove actions & filters
 *
 */
function shoptheme_remove_storefront_function() {
    // Remove actions & filters at here.
    remove_action( 'homepage', 'storefront_product_categories',    20 );
}
add_action( 'wp_loaded', 'shoptheme_remove_storefront_function' );


/**================= ADD NEW ACTIONS & FILTERS =================**/
// Add new actions & filters at here.