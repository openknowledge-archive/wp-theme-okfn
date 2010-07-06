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
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
<!--  ifelse here -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?><?php
if (is_tree(4)) { ?>/projects.css<?php } elseif (is_tree(6)){ ?>/wogr.css<?php } ?>" media="all" />
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">

	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<div id="homelink"><a href="<?php bloginfo('url'); ?>" alt="home"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/okf_logo.png" /></a></div>
				<div id="searchtop"><p id="search" class="widget-container widget_search"></p><?php get_search_form(); ?></div>
				<div id="searchprojects"><p id="searchprojects" class="widget-container widget_search"></p><input id="s" type="text" value="Go to Project (will be ajaxed)" name="p"/></div>
	
				<div id="topnavi" role="navigation">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</div><!-- #topnavi -->				
			</div><!-- #branding -->
			<br style="clear:both;">


		</div><!-- #masthead -->
	</div><!-- #header -->
		<div id="aligncenter">
	<div id="main">
