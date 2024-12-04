=== Quicktags for WP ===
Contributors: brtak 
Donate link: https://phirebase.com/
Tags: quicktags, html editor, edit, classic editor
Requires at least: 3.3
Tested up to: 6.7
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This simple plugin adds useful buttons to the native WordPress HTML editor.

== Description ==

This simple plugin adds useful buttons to the native WordPress HTML editor (Classic Editor).

Currently adds:
h1, h2, h3, h4, h5, hr, nbsp, mox

The "mox" button adds a nice responsive CSS class which you can use to highlight pictures or other elements in your posts.

**Note:** This plugin works only with the Classic Editor. It does not support the new Gutenberg (Block Editor).

== Compatibility ==

- Requires the Classic Editor to be active.
- Tested with WordPress 6.7.
- Fully compatible with modern WordPress installations where the Classic Editor plugin is installed and activated.

== Installation ==

1. Unzip into your `/wp-content/plugins/` directory. If you're uploading it, make sure to upload the top-level folder. Don't just upload all the PHP files and put them in `/wp-content/plugins/`.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Ensure the Classic Editor is active if you want to use the enhanced Quicktags buttons.

== Frequently Asked Questions ==

**Does this plugin work with Gutenberg (Block Editor)?**

No, this plugin is designed specifically for the Classic Editor. If you are using Gutenberg, the plugin's functionality will not be available.

**What does the "mox" button do?**

The "mox" button adds a `<div>` with a responsive CSS class that can be styled to highlight images or other elements in your posts.

== Screenshots ==

1. screenshot-1.png

== Changelog ==

= 1.4 =
- Complete rewrite of the plugin according to new guidelines.
- Changed the plugin name to "Quicktags for WP".
- Prevented direct file access by adding security checks to all PHP files.
- Updated function names to use a unique prefix `wpqt_` to avoid conflicts with other plugins.
- Improved code readability and maintainability by standardizing naming conventions.
- Resolved potential conflicts with other plugins by ensuring all function names, classes, and options are unique.

= 1.3 =
- Updated readme.txt, fixed small typo errors

= 1.2 =
- Updated readme.txt, fixed small typo errors

= 1.1 =
- Updated screenshots, fixed Uncaught ReferenceError: QTags is not defined

= 1.0.9 =
- Added new button - mox, Quicktags buttons are now colored

= 1.0.8 =
- Stable version

= 1.0.7 =
- Added plugin icons

= 1.0.6 =
- Stable version

= 1.0.5 =
- Stable version

= 1.0.4 =
- Added screenshot revision

= 1.0.3 =
- Added screenshot

= 1.0.2 =
- Fixed plugin info

= 1.0.1 =
- Fixed release

= 1.0 =
- Public release

== Upgrade Notice ==

No need to update, it's a stable version.
