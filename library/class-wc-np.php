<?php
/**
 * WC_NP class.
 */
class WC_NP {

	/**
	 * Theme init.
	 */
	public static function init() {
		add_theme_support( 'wc-product-gallery-slider' );
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 400,
			'single_image_width'    => 800,
		) );
        add_action( 'wp_head', array( __CLASS__, 'add_style_to_header' ) );
	}

    /**
     * Add style to header
     */
    public static function add_style_to_header() {
        echo "<style>.single-product .related.products {clear: both;}</style>";
    }

	/**
	 * Open wrappers.
	 */
	public static function output_content_wrapper() {
		echo '<div id="primary" class="content-area twentysixteen"><main id="main" class="site-main" role="main">';
	}

	/**
	 * Close wrappers.
	 */
	public static function output_content_wrapper_end() {
		echo '</main></div>';
	}
}

WC_NP::init();

$productsON = false;

if ($productsON) {
    //Woocommerce actions and filters
    locate_template(array('woocommerce/hooks.php'), true);
    //Woocommerce theme functions
    locate_template(array('woocommerce/functions.php'), true);
}