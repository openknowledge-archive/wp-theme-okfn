<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">
		<!-->		<h1 class="entry-title">From sonnets to statistics, genes to geodata</h1>  -->
					<div class="entry-content">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/front_animation_bg.png" />
					</div>
					<h1 class="entry-title">What we are working on now?</h1>
					<div class="entry-content">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/dummy_project_listing.png" alt="Dummy Project Listing" />
						
					<!-- 	<?php wp_list_pages( 'title_li=&child_of=4' ); ?>

						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>  -->
					</div>    <!-- .entry-content -->
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

