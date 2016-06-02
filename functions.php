<?php
/**
 * understrap functions and definitions
 *
 * @package understrap
 */
//Enqueue scripts and stylesheet
function nwcpe_dep() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

	wp_enqueue_scripts('main-js', 'js/main.js', false);
}
add_action('nwcpe_dep');

//Adobe Typkit
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', 'https://use.typekit.net/lpg8qlu.js');
	}

	add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  	if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php }
}
add_action('theme_typekit_inline', 'enqueue_font_awesome' );

//Theme Support 
add_theme_support( 'custom-header' );

//Blog excerpt
add_filter( 'get_the_content_more_link', 'modify_read_more_link_text' );

function modify_read_more_link_text() {
    return '... <a class="btn-custom-white more-link" href="' . get_permalink() . '">[Read The Entire Article]</a>';
}

add_filter( 'wp_title', 'wc_custom_shop_archive_title' );

$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

//Woocommerce 
function redirect_to_checkout() {
    return WC()->cart->get_checkout_url();
}
/**
 * Change the Shop archive page title.
 * @param  string $title
 * @return string
 */
function wc_custom_shop_archive_title( $title ) {
    if ( is_shop() ) {
        return str_replace( __( 'Products', 'woocommerce' ), 'Workshops', $title );
    }

    return $title;
}
add_filter( 'wp_title', 'wc_custom_shop_archive_title' );

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Load custom WordPress nav walker.
*/
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
* Load WooCommerce functions.
*/
require get_template_directory() . '/inc/woocommerce.php';
