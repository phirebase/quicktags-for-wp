# Quicktags for WP

![WordPress Tested](https://img.shields.io/badge/WordPress-6.8-blue)
![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue)
![License](https://img.shields.io/badge/License-GPLv2-orange)
[![Issues](https://img.shields.io/github/issues/phirebase/quicktags-for-wp)](https://github.com/phirebase/quicktags-for-wp/issues)
[![Stars](https://img.shields.io/github/stars/phirebase/quicktags-for-wp?style=social)](https://github.com/phirebase/quicktags-for-wp)

Enhance the native WordPress **Classic Editor** with extra HTML Quicktag buttons.

![Plugin banner](./assets/banner-772x250.jpg)

---

## 🧩 Description

**Quicktags for WP** adds helpful HTML buttons to the native WordPress **Classic Editor** interface, specifically in the *Text* (HTML) editing mode.

The plugin is lightweight, direct, and adds the following tags as buttons:

- `<h1>`, `<h2>`, `<h3>`, `<h4>`, `<h5>`
- `<span>`, `<hr>`, `&nbsp;`, `mox`

The **mox** button inserts a responsive wrapper (`<div class="mox">`) you can use to highlight images or elements via CSS.

> ⚠️ This plugin works **only** with the Classic Editor. Gutenberg is not supported.

---

## ✨ Features

- Adds missing or hidden HTML buttons to the Classic Editor
- Focuses on clean, readable markup
- Works only in **Text (HTML)** mode – no bloat in Visual mode
- Includes responsive wrapper class button (`mox`)
- Ideal for fast editors, developers, and HTML lovers

---

## 🔧 Installation

1. Upload the plugin folder to `/wp-content/plugins/`  
2. Activate the plugin via **Plugins > Installed Plugins**  
3. Make sure the **Classic Editor** plugin is active  
4. Open any post or page in the Classic Editor, and switch to **Text** tab  
5. Start using the new buttons!

---

## ❓ FAQ

### Does this plugin work with Gutenberg (Block Editor)?

No. This plugin is built specifically for the **Classic Editor**.  
If you are using Gutenberg, these Quicktags will not appear.

### What does the "mox" button do?

The `mox` button inserts the following snippet:

```html
<div class="mox"></div>
```

You can target `.mox` in your theme’s CSS to highlight or style images, text blocks, or containers responsively.

---

## 🖼️ Screenshots

*Quicktags for WP in action (in Classic Editor HTML mode)

> *(Add screenshots to `/assets/` folder in your GitHub repo)*

---

## 📝 Changelog

### 1.4.5

- Moved plugin dependency declaration to main PHP file (Classic Editor)

### 1.4.4

- Added dependency check for Classic Editor with admin notice
- Included Text Domain for localization support

### 1.4.3

- Updated codebase to follow **WordPress Coding Standards** (PHPCS)

### 1.4.2

- Fixed header placement
- Added PayPal donate link

### 1.4.1

- Removed redundant `<b>` button (now native)
- Added `<span>` button before `<hr>`

### 1.4

- Complete rewrite to match modern standards
- Added function prefix `wpqt_` to avoid conflicts
- Improved security, structure, and naming

### 1.3 – 1.0

- Initial releases and minor fixes

---

## 📌 Notes

- Requires the [Classic Editor plugin](https://wordpress.org/plugins/classic-editor/)  
- Compatible with WordPress 5.0+ through 6.8  
- Fully client-side; does not affect front-end or content rendering

---

## 🙏 Credits

Developed by [David Klhufek](https://phirebase.com)  
Support the project: [paypal.me/DavidKlhufek](https://paypal.me/DavidKlhufek)

---

## 📄 License

Licensed under the GPLv2 or later. See `LICENSE` file.  
[https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)
