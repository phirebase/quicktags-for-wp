<?php
/*
Plugin Name: WP Quicktags
Description: This simply plugin adds usefull buttons to native WordPress HTML editor. 
Version: 1.0.3
Author: phirebase
Author URI: http://phirebase.com/
License: GPL2
*/

// add more buttons to the html editor
function appthemes_add_quicktags() {
?>
    <script type="text/javascript">
    QTags.addButton( 'eg_strong', 'b', '<strong>', '</strong>', 'b', 'Strong', 1 );
    QTags.addButton( 'eg_h1', 'h1', '<h1>', '</h1>', '', 'Heading 1', 2 );
    QTags.addButton( 'eg_h2', 'h2', '<h2>', '</h2>', '', 'Heading 2', 3 );
    QTags.addButton( 'eg_h3', 'h3', '<h3>', '</h3>', '', 'Heading 3', 4 );
    QTags.addButton( 'eg_h4', 'h4', '<h4>', '</h4>', '', 'Heading 4', 5 );
    QTags.addButton( 'eg_h5', 'h5', '<h5>', '</h5>', '', 'Heading 5', 6 );
    QTags.addButton( 'eg_hr', 'hr', '<hr />', '', '', 'Horizontal rule line', 201 );
    QTags.addButton( 'eg_nbsp', 'nbsp', '&nbsp;', '', '', 'Non Breaking Space', 111 );
    </script>
<?php
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags', 100 );

// Removing buttons from the html editor
function wpa_init( $qtInit ) {
    $qtInit['buttons'] = 'h1,h2,h3,h4,h5,em,link,block,del,img,ul,ol,li,code,more,hr,nbsp,spell,close,fullscreen';
    return $qtInit;
}
add_filter('quicktags_settings', 'wpa_init');
