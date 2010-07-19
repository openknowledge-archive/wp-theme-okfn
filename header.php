<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

?>
<!--  ifelse here -->

<?php wp_head(); ?>
<script type='text/javascript' src='<?php bloginfo('url');?>/wp-content/themes/okfn/js/jquery.curvycorners.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('url');?>/wp-content/themes/okfn/js/js_custom.js'></script>
<script type='text/javascript' src='<?php bloginfo('url');?>/wp-content/themes/okfn/js/loopslider.js'></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?><?php
if (is_tree(4)) { ?>/projects.css<?php } elseif (is_tree(6)){ ?>/wogr.css<?php } ?>" media="all" />
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<div id="homelink"><a href="<?php bloginfo('url'); ?>" alt="home"><img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/okf_logo.png" /></a></div>
				<div id="searchtop"><?php get_search_form(); ?></div>
				<div id="topnavi" role="navigation">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header','depth' => '1', 'theme_location' => 'primary' ) ); ?>
				</div><!-- #topnavi -->				
			</div><!-- #branding -->
			<br style="clear:both;">


		</div><!-- #masthead -->
	</div><!-- #header -->
		<div id="aligncenter">
	<div id="main">
