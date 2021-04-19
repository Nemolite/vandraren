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

                <?php
                $args = array(
                        'post_type' => 'myjobs',                               
                        'post_status' => 'publish', 
                        'posts_per_page' => -1,                           
                );

                $query = new WP_Query($args);
                if( $query->have_posts() ){
                        while( $query->have_posts() ){            
                        $query->the_post(); ?>         
                                <a href="<?php echo vandraren_get_job_url(); ?>" target="_blank">
                                        <div class="pcontent-blocks">
                                                <img id="blocks-images" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
        
                                                <div class="pcontent-blocks-txt" >
            	                                        <h3><?php the_title(); ?></h3>
                                                 </div>
                                        </div>
                                </a>      
        
                <?php         
                        }       
                }
                wp_reset_postdata();
                ?>               
        </div><!-- class="pcontent" -->
</div><!-- class="pmain" -->

<?php
//get_sidebar();
get_footer();
