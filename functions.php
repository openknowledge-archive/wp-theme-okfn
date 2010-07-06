<?php
/** check if page is child of another page to use certian CSS **/
function is_tree($pid) {     
	global $post;         
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
               return true;   
	else
               return false;  
};

function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	return $args;
} // function

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );


function new_search_form($form) {
$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<div>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
	</div>
	</form>';
return $form;
}
add_filter('get_search_form', 'new_search_form');
?>
