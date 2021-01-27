<?php
/*
Template Name: Портфолио
Template Post Type: post, page, product
*/

get_header();
?>
	 <div class="pmain">
	 	<div class="pmain-menu">
	 		<div class="pmain-menu-logo">
	 			<a href="<?php echo get_home_url(); ?>">
         <h1>VANDRAREN</h1>
		</a> 
	 		</div>
	 	</div><!-- class="pmain-menu"-->

        <div class="pcontent">
        	 <div class="pcontent-head">
        	  <h1>Портфолио по разработанным сайтам</h1>
           </div>
           <a href="http://sport.uxp.ru/" target="_blank">
        <div class="pcontent-blocks">
        	<img id="blocks-images" src="<?php echo bloginfo('template_url'); ?>/vendor/img/pimg1.jpeg" alt="">
          
            <div class="pcontent-blocks-txt" >
            	<h3>Сайт Шумерлинских лыжников</h3>
            </div>

        </div>
            </a>



          <a href="http://sosh6-gshum.uxp.ru/" target="_blank">
        <div class="pcontent-blocks">
        	<img id="blocks-images" src="<?php echo bloginfo('template_url'); ?>/vendor/img/pimg2.jpeg" alt="">
            <div class="pcontent-blocks-txt dsp" >
            	<h3>Сайт Школы </h3>
            </div>

        </div>
            </a>
           <a href="http://det-sad19.ru/" target="_blank">
        <div class="pcontent-blocks">
        	<img id="blocks-images" src="<?php echo bloginfo('template_url'); ?>/vendor/img/pimg3.jpeg" alt="">
            <div class="pcontent-blocks-txt dsp" >
            	<h3>Cайт Детского сада "Родничок" </h3>
            </div>

        </div>
            </a>
        <a href="https://dshi21.ru/" target="_blank">
        <div class="pcontent-blocks">
        	<img id="blocks-images" src="<?php echo bloginfo('template_url'); ?>/vendor/img/pimg4.jpeg" alt="">
            <div class="pcontent-blocks-txt dsp" >
            	<h3>Сайт Детской школа искусств </h3>
            </div>

        </div>
            </a>

        	

        <a href="http://gorka21.ru/" target="_blank">
        <div class="pcontent-blocks">
        	<img id="blocks-images" src="<?php echo bloginfo('template_url'); ?>/vendor/img/pimg5.jpeg" alt="">
            <div class="pcontent-blocks-txt dsp" >
            	<h3>Интернет-магазин Горка </h3>
            </div>

        </div>
            </a>

         <a href="#">
        <div class="pcontent-blocks">
            <img id="blocks-images" src="<?php echo bloginfo('template_url'); ?>/vendor/img/pimg6.jpeg" alt="">
            <div class="pcontent-blocks-txt dsp" >
                <h3>Разработака сайта Детского сада </h3>
            </div>

        </div>
            </a>

         <a href="#">
        <div class="pcontent-blocks">
            <img id="blocks-images" src="<?php echo bloginfo('template_url'); ?>/vendor/img/pimg7.jpeg" alt="">
            <div class="pcontent-blocks-txt dsp" >
                <h3>Место для вашего проекта </h3>
            </div>

        </div>
            </a>

        </div><!-- class="pcontent" -->

	 </div><!-- class="pmain" -->
	

<?php
//get_sidebar();
get_footer();
