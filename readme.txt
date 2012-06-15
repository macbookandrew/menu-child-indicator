=== Menu Child Indicator ===
Contributors: macbookandrew
Donate link: http://andrewrminion.com/
Tags: menu, child, indicator
Requires at least: 3.0
Tested up to: 3.4
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds the css class .has-children to menu items that have a submenu to allow css styling.

== Description ==

This plugin adds the css class `.has-children` to menu items that have a submenu to allow css styling.


== Installation ==

1. Upload `menu-child-indicator.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the following block of css to your theme stylesheet, or create your own style:

```
    .menu .children .has-children::after {
    	content: "\00a0\bb";
    	position: absolute;
    	top: .3em;
    	right: 10px;
    	font-size: 18px;
    	color: white;
    }
```
4. That's it!

== Screenshots ==

Screenshot of the indicator:
![Screenshot](screenshot.png)

== Frequently Asked Questions ==

== Upgrade Notice ==

== Changelog ==

= 1.0 =
* First version