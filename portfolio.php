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





           <?php for ($i=1;$i<=10;$i++) { ?>
<?php 
$url_job_site = 'url_job_site_'.$i;
$img_upload = 'img_upload_'.$i;
$info_text_jobs = 'info_text_jobs_'.$i;
?>
 <?php if (
    (!empty(ot_get_option( $url_job_site  )))&&
    (!empty(ot_get_option( $img_upload )))&&
    (!empty(ot_get_option( $info_text_jobs ))) 
  ) { ?>
<a href="<?php echo ot_get_option( $url_job_site );?>" target="_blank">
        <div class="pcontent-blocks">
        	<img id="blocks-images" src="<?php echo ot_get_option( $img_upload );?>" alt="">
          
            <div class="pcontent-blocks-txt" >
            	<h3><?php echo ot_get_option( $info_text_jobs );?></h3>
            </div>

        </div>
<?php }?> 
<?php }?> 


        </div><!-- class="pcontent" -->

	 </div><!-- class="pmain" -->
	

<?php
//get_sidebar();
get_footer();
