<?php
/**
 * My function the theme vandraren.ru
 *
 * @param string $pages
 * @param integer $range
 * @return void
 */
?>
<?php
// Pagination 
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Страниц ".$paged." из ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

/**
 * Мои контакты и коротко о себе (OptionTree)
 */
function vandraren_about_me_html(){
?>  
<div class="adress" id="adress_id">
    <div class="adress-head">
        <h1><?php echo ot_get_option( 'vandraren_title' ); ?></h1>
    </div>
    <div class="adress-txt">
         <?php echo ot_get_option( 'vandraren_textarea' ); ?>
    </div>
</div><!-- class="adress" -->
<?php }


/**
 * Произвольные типы записей Мои работы
 */

function vandraren_my_jobs(){
	$labels = array(
		'name'               => 'Проекты', 
		'singular_name'      => 'Проект', 
		'add_new'            => 'Добавить проект',
		'add_new_item'       => 'Добавить новый проект',
		'edit_item'          => 'Редактировать проект',
		'new_item'           => 'Новый проект',
		'view_item'          => 'Посмотреть проект',
		'search_items'       => 'Найти проект',
		'not_found'          => 'Проектов не найдено',
		'not_found_in_trash' => 'В корзине проектов не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Мои проекты'
	  );
	 
	  $args = array(
		'labels' => $labels,
		'public' => true,  
		'show_ui' => true, 
		'has_archive' => true, 
		'menu_icon' => 'dashicons-format-gallery', 
		'menu_position' => 20, 
		'supports' => array( 'title', 'thumbnail','custom-fields')
	);	
	register_post_type('myjobs', $args  );
}

add_action('init', 'vandraren_my_jobs');

function vandraren_get_job_url(){
    return  get_post_meta( get_the_ID(), 'url', true );
    
}

?>