<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
Plugin Name: Quicktags for WP
Version: 1.4.1
Description: This simple plugin adds useful buttons to the native WordPress HTML editor.
Author: phirebase
Author URI: https://phirebase.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Add more buttons to the HTML editor
function wpqt_add_quicktags() {
    // Check if the 'quicktags' script is in use to avoid errors
    if ( wp_script_is( 'quicktags' ) ) {
        ?>
        <script type="text/javascript">
        QTags.addButton( 'eg_h1', 'h1', '<h1>', '</h1>', '', 'Heading 1', 1 );
        QTags.addButton( 'eg_h2', 'h2', '<h2>', '</h2>', '', 'Heading 2', 2 );
        QTags.addButton( 'eg_h3', 'h3', '<h3>', '</h3>', '', 'Heading 3', 3 );
        QTags.addButton( 'eg_h4', 'h4', '<h4>', '</h4>', '', 'Heading 4', 4 );
        QTags.addButton( 'eg_h5', 'h5', '<h5>', '</h5>', '', 'Heading 5', 5 );
        QTags.addButton( 'eg_span', 'span', '<span>', '</span>', '', 'Span', 200 );
        QTags.addButton( 'eg_hr', 'hr', '<hr />', '', '', 'Horizontal rule line', 201 );
        QTags.addButton( 'eg_nbsp', 'nbsp', '&nbsp;', '', '', 'Non Breaking Space', 202 );
        QTags.addButton( 'eg_mox', 'mox', '<div class="mox">', '</div>', '', 'Mox', 203 );
        </script>
        <?php
    }
}
add_action( 'admin_print_footer_scripts', 'wpqt_add_quicktags', 100 );

// Enqueue styles for admin
function wpqt_enqueue_admin_styles() {
    wp_enqueue_style( 'wpqt-admin-style', plugin_dir_url( __FILE__ ) . 'style.css', array(), '1.4.1' );
}
add_action( 'admin_enqueue_scripts', 'wpqt_enqueue_admin_styles' );

// Enqueue styles for the frontend
function wpqt_enqueue_frontend_styles() {
    wp_enqueue_style( 'wpqt-frontend-style', plugin_dir_url( __FILE__ ) . 'style.css', array(), '1.4.1' );
}
add_action( 'wp_enqueue_scripts', 'wpqt_enqueue_frontend_styles' );
