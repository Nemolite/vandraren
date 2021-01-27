<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vandraren
 */

get_header();
?>
<!-- файл single.php отображение записей  -->
<div class="smain">
     <div class="smenu">
       <div class="smenu-logo">
	   <a href="<?php echo get_home_url(); ?>">
         <h1>VANDRAREN</h1>
		</a>  
       </div>
       <div class="smenu-go">
        <a href="/news/">
         <p><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Все статьи</p>
        </a> 
       </div>
       <div class="smenu-email">
         <p><i class="fa fa-envelope-o" aria-hidden="true"></i>  g16052015@mail.ru</p> 
       </div>
       <div class="smenu-phone">
         <p><i class="fa fa-phone" aria-hidden="true"></i>   8-962-598-58-91</p> 
       </div>
     </div> 
	
	 <div class="smain-content">
	 
	    <?php
		
		while ( have_posts() ) :
			the_post();
           // Подключения шаблона вывода записи , файл content.php
			get_template_part( 'template-parts/content-v', get_post_type() );
           // Навигация по записям
		   ?>

		   <div class="navig">
		   <?php
		    the_post_navigation(
				array(
					'prev_text' => '<div class="navig-left"><p><i class="fa fa-long-arrow-left" aria-hidden="true"></i>' . esc_html__( 'Предыдущая', 'vandraren' ) . '</p></div>',
					'next_text' => '<div class="navig-right"><p>' . esc_html__( 'Следующая', 'vandraren' ) . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></p></div>',
					'screen_reader_text' =>' ',
				)
			);
			?>
			</div>
			
		   <?php

          // Комментарии
			// If comments are open or we have at least one comment, load up the comment template.
			?>
			<div class="b_comments">
			<?php
			if ( comments_open() || get_comments_number() ) :
			
				comments_template();
				
			endif;
            ?>
			</div>
			<?php
		endwhile; // End of the loop.
		?>
	 
	 
	 </div> <!-- class="smain-content" -->
	 
   </div> <!-- class="smain" -->

<?php
/*get_sidebar();*/
get_footer();
