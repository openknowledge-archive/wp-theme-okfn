<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">
		      <h1 class="entry-title">From sonnets to statistics, genes to geodata</h1>
					<div class="entry-content" id="frontimage">
						
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/front_animation_bg.png" alt="Frontpage Image Bubbles" />
						<div id="bubble_projects" class="bubble_links"><a href="/projects">Projects</a></div>
						<div id="bubble_community" class="bubble_links"><a href="http://wiki.okfn.org" target="_blank">Community</a></div>
						<div id="bubble_about" class="bubble_links"><a href="/about">About</a></div>
						<div id="bubble_events" class="bubble_links"><a href="/calendar">Events</a></div>
						<div id="bubble_news" class="bubble_links"><a href="http://blog.okfn.org" target="_blank">News</a></div>
					</div>

					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/dummy_project_listing.png" alt="Dummy Project Listing" />

					</div>    <!-- .entry-content -->
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

