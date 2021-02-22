<?php
/*
Template Name: Документы 
Template Post Type: post, page, product
*/

get_header();
?>
<div class="nmenu">
			<div class="nmenu-logo">
				<a href="<?php echo get_home_url(); ?>">
         <h1>VANDRAREN</h1>
		</a> 
			</div>
		</div> <!-- class="nmenu"-->
	<main id="primary" class="site-main site-main-fix">

		<?php
		while ( have_posts() ) :
			the_post();           			
			the_title('<h1 class="entry-title-fix">', '</h1>');
			the_content();		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
