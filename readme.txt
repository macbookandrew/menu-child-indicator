=== Menu Child Indicator ===
Contributors: macbookandrew
Donate link: http://andrewrminion.com/
Tags: menu, child, indicator
Requires at least: 3.0
Tested up to: 3.4
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds the css class .has-children to menu items that have a submenu to allow css styling.

== Description ==

This plugin adds the css class `.has-children` to menu items that have a submenu to allow css styling.


== Installation ==

1. Upload `menu-child-indicator.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add styles with the CSS rule `.menu .children .has-children` (Hint: use the pseudo-element `::after` to add an arrow pointing to the right.)
4. That's it!

== Screenshots ==

Screenshot of the indicator:
![Screenshot](screenshot.png)

== Frequently Asked Questions ==
* What style to you use for your indicator?
* Glad you asked! See the css block below:

    
    .menu .children .has-children::after {
    	content: "\00a0\bb";
    	position: absolute;
    	top: .3em;
    	right: 10px;
    	font-size: 18px;
    	color: white;
    }



== Upgrade Notice ==

== Changelog ==

= 1.1 =
* Updated readme with sample css
* Use local or pre-loaded jQuery instead of Google-hosted jQuery to avoid loading two instances

= 1.0 =
* First version