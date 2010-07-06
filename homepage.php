<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<h1 class="entry-title">From sonnets to statistics, genes to geodata</h1>
					<div class="entry-content">
						<img src="<?php bloginfo('url'); ?>/wp-content/uploads/front_animation_bg.png">
					</div>
					<h1 class="entry-title">What we are working on now?</h1>
					<div class="entry-content">
						<?php wp_list_pages( 'title_li=&child_of=4' ); ?>
						
						<?php 
						$projects =& get_children( 'post_type=page&post_parent=4', ARRAY_A ); 
						if ( empty($projects) ) {
							// no subpages
						} else {
							foreach ( $projects as $page_id) {
								print ('<div>');
								echo $page_id;
								print ('</div>');
							}
						}
						
						?>
						 
						<!-- 
						PLUGIN:
						1. get all children of projects
						1.1 get page id's
						1.2 save in array
						2. LOOP for array
						2.1 get all titles
						2.2 get all post_thumbnails
						2.3 get custom_field short description
						2.4 print them all in divs (odd/even)
						/LOOP
						
						<?php query_posts('page_id=17'); ?>
						    <?php while (have_posts()) : the_post(); ?>
						    <?php the_post_thumbnail(array('40', '40')); ?>
						    <?php endwhile; ?>
						-->
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div>    <!-- .entry-content -->



			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

