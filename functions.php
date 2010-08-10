<?php

function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="http://okfn.org/images/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

?>