<?php
/**
Plugin Name: Quicktags for WP
Version: 1.4.4
Description: This simple plugin adds useful buttons to the native WordPress HTML editor.
Author: phirebase
Author URI: https://phirebase.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-quicktags
Domain Path: /languages
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
	load_plugin_textdomain( 'wp-quicktags', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
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
				<p><strong><?php echo esc_html__( 'Quicktags for WP requires the Classic Editor plugin to be active.', 'wp-quicktags' ); ?></strong></p>
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
    // Ensure we are in the Classic Editor and Quicktags is available.
    if (wp_script_is('quicktags', 'registered')) {
        ?>
        <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof QTags !== 'undefined') {
                QTags.addButton('eg_h1', '<?php echo esc_js(__('h1', 'wp-quicktags')); ?>', '<h1>', '</h1>', '', '<?php echo esc_js(__('Heading 1', 'wp-quicktags')); ?>', 1);
                QTags.addButton('eg_h2', '<?php echo esc_js(__('h2', 'wp-quicktags')); ?>', '<h2>', '</h2>', '', '<?php echo esc_js(__('Heading 2', 'wp-quicktags')); ?>', 2);
                QTags.addButton('eg_h3', '<?php echo esc_js(__('h3', 'wp-quicktags')); ?>', '<h3>', '</h3>', '', '<?php echo esc_js(__('Heading 3', 'wp-quicktags')); ?>', 3);
                QTags.addButton('eg_h4', '<?php echo esc_js(__('h4', 'wp-quicktags')); ?>', '<h4>', '</h4>', '', '<?php echo esc_js(__('Heading 4', 'wp-quicktags')); ?>', 4);
                QTags.addButton('eg_h5', '<?php echo esc_js(__('h5', 'wp-quicktags')); ?>', '<h5>', '</h5>', '', '<?php echo esc_js(__('Heading 5', 'wp-quicktags')); ?>', 5);
                QTags.addButton('eg_span', '<?php echo esc_js(__('span', 'wp-quicktags')); ?>', '<span>', '</span>', '', '<?php echo esc_js(__('Span', 'wp-quicktags')); ?>', 200);
                QTags.addButton('eg_hr', '<?php echo esc_js(__('hr', 'wp-quicktags')); ?>', '<hr />', '', '', '<?php echo esc_js(__('Horizontal rule line', 'wp-quicktags')); ?>', 201);
                QTags.addButton('eg_nbsp', '<?php echo esc_js(__('nbsp', 'wp-quicktags')); ?>', '&nbsp;', '', '', '<?php echo esc_js(__('Non Breaking Space', 'wp-quicktags')); ?>', 202);
                QTags.addButton('eg_mox', '<?php echo esc_js(__('mox', 'wp-quicktags')); ?>', '<div class="mox">', '</div>', '', '<?php echo esc_js(__('Mox', 'wp-quicktags')); ?>', 203);
            }
        });
        </script>
        <?php
    }
}
add_action('admin_print_footer_scripts', 'wpqt_add_quicktags', 100);