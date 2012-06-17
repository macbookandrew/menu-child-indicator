<?php
/*
Plugin Name: Menu Child Indicator
Plugin URI: http://github.com/macbookandrew/Menu-Child-Indicator
Description: Adds the css class .has-children to menu items that have a submenu to allow css styling
Version: 1.1.2
Author: Andrew Minion
Author URI: http://minionsformissions.com/
License: GPL2
*/

// load up jQuery
function armd_scripts_method() {
    wp_enqueue_script( 'jquery' );
}    
 
add_action('wp_enqueue_scripts', 'armd_scripts_method');


// add the indicator
function armd_add_indicator() {
	echo '<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(\'.menu li:has(".children")\').addClass(\'has-children\');
		});
	</script>
';
}

add_action('wp_head', 'armd_add_indicator');
?>
