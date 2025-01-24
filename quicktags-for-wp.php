<?php
/**
Plugin Name: Quicktags for WP
Version: 1.4.4
Description: This simple plugin adds useful buttons to the native WordPress HTML editor.
Author: phirebase
Author URI: https://phirebase.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: quicktags-for-wp
 *
 * @package QuicktagsforWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Load plugin translations.
 */
function wpqt_load_textdomain() {
	load_plugin_textdomain( 'quicktags-for-wp', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'wpqt_load_textdomain' );

/**
 * Check if Classic Editor is active.
 */
add_action(
	'admin_init',
	function () {
		if ( ! is_plugin_active( 'classic-editor/classic-editor.php' ) ) {
			// Show admin notice if Classic Editor is not active.
			add_action(
				'admin_notices',
				function () {
					?>
			<div class="notice notice-error">
				<p><strong><?php echo esc_html__( 'Quicktags for WP requires the Classic Editor plugin to be active.', 'quicktags-for-wp' ); ?></strong></p>
			</div>
					<?php
				}
			);

			// Optionally deactivate the plugin.
			// deactivate_plugins( plugin_basename( __FILE__ ) );.
		}
	}
);

// Include WordPress plugin functions if not already available.
if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

/**
 * Enqueue styles for admin.
 */
function wpqt_enqueue_admin_styles() {
	wp_enqueue_style( 'wpqt-admin-style', plugin_dir_url( __FILE__ ) . 'style.css', array(), '1.4.1' );
}
add_action( 'admin_enqueue_scripts', 'wpqt_enqueue_admin_styles' );

/**
 * Enqueue styles for the frontend.
 */
function wpqt_enqueue_frontend_styles() {
	wp_enqueue_style( 'wpqt-frontend-style', plugin_dir_url( __FILE__ ) . 'style.css', array(), '1.4.1' );
}
add_action( 'wp_enqueue_scripts', 'wpqt_enqueue_frontend_styles' );

/**
 * Add more buttons to the HTML editor.
 */
function wpqt_add_quicktags() {
	// Check if the 'quicktags' script is in use to avoid errors.
	if ( wp_script_is( 'quicktags' ) ) {
		?>
		<script type="text/javascript">
		QTags.addButton( 'eg_h1', '<?php echo esc_js( __( 'h1', 'quicktags-for-wp' ) ); ?>', '<h1>', '</h1>', '', '<?php echo esc_js( __( 'Heading 1', 'quicktags-for-wp' ) ); ?>', 1 );
		QTags.addButton( 'eg_h2', '<?php echo esc_js( __( 'h2', 'quicktags-for-wp' ) ); ?>', '<h2>', '</h2>', '', '<?php echo esc_js( __( 'Heading 2', 'quicktags-for-wp' ) ); ?>', 2 );
		QTags.addButton( 'eg_h3', '<?php echo esc_js( __( 'h3', 'quicktags-for-wp' ) ); ?>', '<h3>', '</h3>', '', '<?php echo esc_js( __( 'Heading 3', 'quicktags-for-wp' ) ); ?>', 3 );
		QTags.addButton( 'eg_h4', '<?php echo esc_js( __( 'h4', 'quicktags-for-wp' ) ); ?>', '<h4>', '</h4>', '', '<?php echo esc_js( __( 'Heading 4', 'quicktags-for-wp' ) ); ?>', 4 );
		QTags.addButton( 'eg_h5', '<?php echo esc_js( __( 'h5', 'quicktags-for-wp' ) ); ?>', '<h5>', '</h5>', '', '<?php echo esc_js( __( 'Heading 5', 'quicktags-for-wp' ) ); ?>', 5 );
		QTags.addButton( 'eg_span', '<?php echo esc_js( __( 'span', 'quicktags-for-wp' ) ); ?>', '<span>', '</span>', '', '<?php echo esc_js( __( 'Span tag', 'quicktags-for-wp' ) ); ?>', 6 );
		QTags.addButton( 'eg_hr', '<?php echo esc_js( __( 'hr', 'quicktags-for-wp' ) ); ?>', '<hr />', '', '', '<?php echo esc_js( __( 'Horizontal line', 'quicktags-for-wp' ) ); ?>', 7 );
		QTags.addButton( 'eg_nbsp', '<?php echo esc_js( __( 'nbsp', 'quicktags-for-wp' ) ); ?>', '&nbsp;', '', '', '<?php echo esc_js( __( 'Non-breaking space', 'quicktags-for-wp' ) ); ?>', 8 );
		QTags.addButton( 'eg_mox', '<?php echo esc_js( __( 'mox', 'quicktags-for-wp' ) ); ?>', '<div class="mox">', '</div>', '', '<?php echo esc_js( __( 'Mox div', 'quicktags-for-wp' ) ); ?>', 9 );
		</script>
		<?php
	}
}
add_action( 'admin_print_footer_scripts', 'wpqt_add_quicktags' );