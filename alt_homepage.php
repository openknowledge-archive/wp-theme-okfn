<?php
/*
Template Name: Alternative Homepage
*/
?>
<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			<div id="slideshow">
				<h1 class="entry-title">From sonnets to statistics, genes to geodata</h1>
				<div id="slide_wrapper">
				<div id="loopedSlider">
					<div class="container">
					        <div class="slides">
					                <div><img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/ckan.png" alt="ckan" /></div>
					                <div><img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/open_shakespeare.png" alt="Open Shakespeare" /></div>
					                <div><img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/wdmmg-prototype-large.png" alt="Where does my mone go?" /></div>
					        </div>
					</div>
					<a href="#" class="previous"><</a>
					<a href="#" class="next">></a>
				</div>
			</div> <!-- slide_wrapper -->
		</div> <!-- slideshow -->	
				<script type="text/javascript" charset="utf-8">
				        $j(function(){
							$j('#loopedSlider').loopedSlider({
								autoStart: 5000,
								restart:6000,
								slidespeed: 600,
							});
				        });
				</script>
				
				<h1 class="entry-title">What we are working on now?</h1>
				<div class="entry-content">
				<img src="<?php bloginfo('url'); ?>/wp-content/themes/okfn/images/dummy_project_listing.png" alt="Dummy Ptoject Listing" />
					
					
			<!--		<?php wp_list_pages( 'title_li=&child_of=4' ); ?>

					<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>  -->
				</div>    <!-- .entry-content -->
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

