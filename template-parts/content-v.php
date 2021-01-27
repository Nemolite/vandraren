<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vandraren
 */
?>
	<!-- заголовок публикации записи дата публикации -->
	      	<div class="smain-content-head">
   	 		   <?php 
			     the_title( '<h1>', '</h1>' );
			   ?>
			</div>
			<div class="smain-content-txt">
			<p>
       <?php
	      the_content();
	   ?>
	        </p>
	       </div> <!-- class="smain-content-txt" -->
	<footer class="entry-footer">
	<!-- for to costumaze go -> template-tags.php -->
		<?php /*vandraren_entry_footer();*/ ?>
	</footer><!-- .entry-footer -->