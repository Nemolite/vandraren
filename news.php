
<?php
/*
Template Name: Страница новостей 
Template Post Type: post, page, product
*/
get_header();
?>
	<div class="nmain">
		<div class="nmenu">
			<div class="nmenu-logo">
				<a href="<?php echo get_home_url(); ?>">
         <h1>VANDRAREN</h1>
		</a> 
			</div>
		</div> <!-- class="nmenu"-->

		<div class="nmain-info">
			<div class="nmain-info-сontent">
			    <div class="сontent-head">
			    	<h1>Статьи</h1>		
		        </div>
	
                <div class="content-list">
			
				
				 <?php 
				 
	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
 			 
     $args = array(
	'posts_per_page' => 3, // вывод 5 записей
	'paged'=> $page

);
global $query_van;
$query_van = new WP_Query( $args ); 


if( $query_van->have_posts() ){
	while( $query_van->have_posts() ){
		$query_van->the_post();
	  ?>
                	<div class="content-list-block">
                        
                       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                       <p>
					   <?php
                    $more_link_text = 'Читать далее';	  
	                the_content($more_link_text);
	                    ?>
					   </p>
                      <div class="block-foot">
                      	<div class="block-foot-data">
                      		<p>Дата публикации:  <span><?php echo get_the_date(); ?></span></p>
                      	</div>
						<!--
                      	<div class="block-foot-comment">
                      		<p>Комментарии:  <span>47</span></p>
                      	</div>
                      	<div class="block-foot-view">
                      		<p>Просмотров:  <span>110</span></p>
                      	</div>
						-->
                      </div>
                		
                	</div>
                	  <?php
  
	                        }
						  } 
                    else
	                   echo 'Записей нет.';
                       ?>

                	<div class="content-list-pagi">
					 <?php if (function_exists("pagination")) {
    pagination($query_van->max_num_pages);
} ?>
  <?php
 
  wp_reset_postdata(); // сброс запроса
 ?>
                    </div> 
                		
          
                </div>	

		    </div>
			
		    <div class="nmain-info-sidebar">
			    <div class="sidebar-list">
			    	<div class="sidebar-list-share">
			    	   <form class="share-fix" action="" method="get">
  <input class="input-search" name="s" placeholder="Что искать..." type="search">
  <button type="submit">Искать</button>
</form>
			       </div>
                <div class="sidebar-list-rubriks">
                	<div class="rubriks-head">
                		<h1>Рубрики</h1>
                	</div>
                	<div class="rubriks-txt">
                		
                	</div>
                </div>

			    </div> <!-- class="sidebar-list" -->
		    </div> <!-- class="nmain-info-sidebar" -->
		</div>
	</div> <!-- class="nmain" -->
<?php
/*get_sidebar();*/
get_footer();