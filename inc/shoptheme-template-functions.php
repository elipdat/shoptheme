<?php

/**
 * @OVERRIDE functions (for Pluggable Functions)
 * or
 * @ADD NEW shoptheme's functions
 **/

/**================= OVERRIDE FUNCTIONS =================**/

/**
 * Display the page header without the featured image
 *
 * @since 1.0.0
 */
function storefront_homepage_header() {
    ?>
    <header class="entry-header">
        <?php
        the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
    </header><!-- .entry-header -->
    <?php
}

/**
 * Display Recent Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @since  1.0.0
 * @param array $args the product section args.
 * @return void
 */
function storefront_recent_products( $args ) {

    if ( storefront_is_woocommerce_activated() ) {

        $args = apply_filters( 'storefront_recent_products_args', array(
            'limit' 			=> 5,
            'columns' 			=> 5,
            'title'				=> __( 'New products', 'shoptheme' ),
        ) );

        $shortcode_content = storefront_do_shortcode( 'recent_products', apply_filters( 'storefront_recent_products_shortcode_args', array(
            'per_page' => intval( $args['limit'] ),
            'columns'  => intval( $args['columns'] ),
        ) ) );

        /**
         * Only display the section if the shortcode returns products
         */
        if ( false !== strpos( $shortcode_content, 'product' ) ) {

            echo '<section class="storefront-product-section storefront-recent-products" aria-label="' . esc_attr__( 'Recent Products', 'storefront' ) . '">';

            do_action( 'storefront_homepage_before_recent_products' );

            echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

            do_action( 'storefront_homepage_after_recent_products_title' );

            echo $shortcode_content;

            do_action( 'storefront_homepage_after_recent_products' );

            echo '</section>';

        }
    }
}

/**
 * Display Featured Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @since  1.0.0
 * @param array $args the product section args.
 * @return void
 */
function storefront_featured_products( $args ) {

    if ( storefront_is_woocommerce_activated() ) {

        $args = apply_filters( 'storefront_featured_products_args', array(
            'limit'   => 4,
            'columns' => 4,
            'orderby' => 'date',
            'order'   => 'desc',
            'title'   => __( 'Featured Products', 'shoptheme' ),
        ) );

        $shortcode_content = storefront_do_shortcode( 'featured_products', apply_filters( 'storefront_featured_products_shortcode_args', array(
            'per_page' => intval( $args['limit'] ),
            'columns'  => intval( $args['columns'] ),
            'orderby'  => esc_attr( $args['orderby'] ),
            'order'    => esc_attr( $args['order'] ),
        ) ) );

        /**
         * Only display the section if the shortcode returns products
         */
        if ( false !== strpos( $shortcode_content, 'product' ) ) {

            echo '<section class="storefront-product-section storefront-featured-products" aria-label="' . esc_attr__( 'Featured Products', 'storefront' ) . '">';

            do_action( 'storefront_homepage_before_featured_products' );

            echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

            do_action( 'storefront_homepage_after_featured_products_title' );

            echo $shortcode_content;

            do_action( 'storefront_homepage_after_featured_products' );

            echo '</section>';

        }
    }
}

/**
 * Display Popular Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @since  1.0.0
 * @param array $args the product section args.
 * @return void
 */
function storefront_popular_products( $args ) {

    if ( storefront_is_woocommerce_activated() ) {

        $args = apply_filters( 'storefront_popular_products_args', array(
            'limit'   => 5,
            'columns' => 5,
            'title'   => __( 'Popular Products', 'shoptheme' ),
        ) );

        $shortcode_content = storefront_do_shortcode( 'top_rated_products', apply_filters( 'storefront_popular_products_shortcode_args', array(
            'per_page' => intval( $args['limit'] ),
            'columns'  => intval( $args['columns'] ),
        ) ) );

        /**
         * Only display the section if the shortcode returns products
         */
        if ( false !== strpos( $shortcode_content, 'product' ) ) {

            echo '<section class="storefront-product-section storefront-popular-products" aria-label="' . esc_attr__( 'Popular Products', 'storefront' ) . '">';

            do_action( 'storefront_homepage_before_popular_products' );

            echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

            do_action( 'storefront_homepage_after_popular_products_title' );

            echo $shortcode_content;

            do_action( 'storefront_homepage_after_popular_products' );

            echo '</section>';

        }
    }
}

/**
 * Display On Sale Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @param array $args the product section args.
 * @since  1.0.0
 * @return void
 */
function storefront_on_sale_products( $args ) {

    if ( storefront_is_woocommerce_activated() ) {

        $args = apply_filters( 'storefront_on_sale_products_args', array(
            'limit'   => 5,
            'columns' => 5,
            'title'   => __( 'On Sale Products', 'shoptheme' ),
        ) );

        $shortcode_content = storefront_do_shortcode( 'sale_products', apply_filters( 'storefront_on_sale_products_shortcode_args', array(
            'per_page' => intval( $args['limit'] ),
            'columns'  => intval( $args['columns'] ),
        ) ) );

        /**
         * Only display the section if the shortcode returns products
         */
        if ( false !== strpos( $shortcode_content, 'product' ) ) {

            echo '<section class="storefront-product-section storefront-on-sale-products" aria-label="' . esc_attr__( 'On Sale Products', 'storefront' ) . '">';

            do_action( 'storefront_homepage_before_on_sale_products' );

            echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

            do_action( 'storefront_homepage_after_on_sale_products_title' );

            echo $shortcode_content;

            do_action( 'storefront_homepage_after_on_sale_products' );

            echo '</section>';

        }
    }
}

/**
 * Display Best Selling Products
 * Hooked into the `homepage` action in the homepage template
 *
 * @since 2.0.0
 * @param array $args the product section args.
 * @return void
 */
function storefront_best_selling_products( $args ) {
    if ( storefront_is_woocommerce_activated() ) {

        $args = apply_filters( 'storefront_best_selling_products_args', array(
            'limit'   => 5,
            'columns' => 5,
            'title'	  => esc_attr__( 'Best Selling Products', 'shoptheme' ),
        ) );

        $shortcode_content = storefront_do_shortcode( 'best_selling_products', apply_filters( 'storefront_best_selling_products_shortcode_args', array(
            'per_page' => intval( $args['limit'] ),
            'columns'  => intval( $args['columns'] ),
        ) ) );

        /**
         * Only display the section if the shortcode returns products
         */
        if ( false !== strpos( $shortcode_content, 'product' ) ) {

            echo '<section class="storefront-product-section storefront-best-selling-products" aria-label="' . esc_attr__( 'Best Selling Products', 'storefront' ) . '">';

            do_action( 'storefront_homepage_before_best_selling_products' );

            echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

            do_action( 'storefront_homepage_after_best_selling_products_title' );

            echo $shortcode_content;

            do_action( 'storefront_homepage_after_best_selling_products' );

            echo '</section>';

        }
    }
}



/**================= NEW SHOPTHEME'S FUNCTIONS =================**/