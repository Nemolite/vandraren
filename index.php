<?php
/**
 * The main template file
 *
 * Тема сайта vandraren.ru
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vandraren
 */

get_header();
?>

  <div class="fon-header" id="fon-header_id">
  <div class="head__nav">
    <div class="nav_logo">
      <div class="logo-inner">
          <a href="#">
          <h1 class="logo-txt">VANDRAREN</h1>
            </a>
        </div>
    </div>
    <nav>
        <div class="btn-mobil">
            <div class="line-btn"></div>
            <div class="line-btn"></div>
            <div class="line-btn"></div>
        </div>
        <ul class="nav clearfix">
            <li><a href="#fon-header_id">Главная</a></li>
            <li><a href="#news-blog_id">Блог</a></li>
            <li><a href="#main-job">Портфолио</a></li>
            <li><a href="#prices_id">Цены</a></li>
            <li><a href="#adress_id">Контакты</a></li>
            <li id="li-fix"><a href="/wp-admin/">Логин/Регистрация</a></li>
        </ul>
        <div class="nav-mobil">
          <ul class="nav-mini clearfix">
            <li><a href="#fon-header_id">Главная</a></li>
            <li><a href="#news-blog_id">Блог</a></li>
            <li><a href="#main-job">Портфолио</a></li>
            <li><a href="#prices_id">Цены</a></li>
            <li><a href="#adress_id">Контакты</a></li>
            <li><a href="/wp-admin/">Логин/Регистрация</a></li>
        </ul>
        </div>
      </nav>
    </div>
     <div class="info">
        <h1>Разработка web-проектов</h1>
    </div> <!-- class="info" -->   
</div> <!-- class="fon-header" -->
<div class="info-wp" id="info-wp_id">
    <div class="info-wp-head">
      <h1>Разработка сайтов и проектов</h1>
    </div>
    <div class="info-wp-text">
      <p>В настоящее время развитие Интернета достигло 
	  высочайшего уровня. Блоги, корпоративные сайты, 
	  интернет-магазины прочно вошли в нашу жизнь. 
	  Сайты стали нашей визитной карточкой на 
	  просторах Интернета. Успех зачастую зависит от 
	  удачного дизайна, удобной функциональности, 
	  от продуманной логики.Выполняю качественно и в срок следующие работы: </p>
    </div>
    <div class="info-wp-icons">
      <div class="icons-item">
        <div class="icons-item-circle">
          <div class="circle">
           <img src="<?php echo bloginfo('template_url'); ?>/vendor/img/banner_design.png" alt="">
          </div>
        </div>
        <div class="icons-item-text">
           <p>Подбор и установка готовых решений.</p>
        </div>
      </div>
      <div class="icons-item">
         <div class="icons-item-circle">
          <div class="circle">
           <img src="<?php echo bloginfo('template_url'); ?>/vendor/img/briefcase.png" alt="">
          </div>
        </div>
        <div class="icons-item-text">
      <p>Адаптивная верстка сайта по макету PSD</p>
        </div>
      </div>
      <div class="icons-item">
         <div class="icons-item-circle">
          <div class="circle">
           <img src="<?php echo bloginfo('template_url'); ?>/vendor/img/graphic_design.png" alt="">
          </div>
        </div>
        <div class="icons-item-text">
      <p>Интеграция верстки на различные CMS</p>
        </div>
      </div>
      <div class="icons-item">
         <div class="icons-item-circle">
          <div class="circle">
           <img src="<?php echo bloginfo('template_url'); ?>/vendor/img/storage_4.png" alt="">
          </div>
        </div>
        <div class="icons-item-text">
      <p>Разработка программной логики</p>
        </div>
      </div>
    </div>
</div><!-- info-wp -->
<div class="news-blog" id="news-blog_id">
  <div class="news-blog-head">
    <h1>Мой блог</h1>
  </div>
  <div class="news-blog-txt">
    <p>В этом разделе можно найти много полезной информации из мира программирования и разработки. А также различные публикации на тему фриланса</p>
  </div>
<div class="news-blog-content">
 
  <?php 
      global $query_string; // параметры базового запроса
      query_posts( $query_string .'&posts_per_page=3' ); // базовый запрос + свои параметры 
      if( have_posts())
	  while( have_posts() ){ 
            the_post();
	  ?>
		<div class="article">  
	  <div class="article-img">
	  <a href="<?php the_permalink(); ?>">
	       <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      </a>		   
	  </div> <!-- class="article-img" --> 
	  
	  <div class="article-txt">
	  <div class="article-txt-head">
	        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	  </div>  <!-- class="article-txt-head" -->
          <div class="article-txt-info">	  
	           <?php
                    $more_link_text = 'Читать далее';	  
	                the_content($more_link_text);
	           ?>
	      </div>  <!-- class="article-txt-info" --> 
	  </div>  <!-- class="article-txt" --> 
       </div>  <!-- class="article" --> 
	  <?php
	  
	  }
	 wp_reset_query(); // сброс запроса
  ?>

</div>  <!-- class="news-blog-content" --> 
 
<?php //get_template_part( 'news' );?>
<div class="news-blog-botton">
 <a href="/news/"> <!-- news.php -->
  <div class="news-blog-btn">
    <h3>Почитать еще cтатьи</h3>
  </div>
  </a>
</div>
</div><!-- class="news-blog" -->

<!-- main-job block template-->
<?php get_template_part( 'template-parts/main','job' );?>

<div class="prices" id="prices_id">
    <div class="prices-head-txt">
      <h1>Стоимость и цены на работы</h1>
    </div>
    <div class="prices-block">
      <div class="prices-block-budjet">
        <div class="budjet-head">
          <h2>Бюджетный сайт</h2>
          <p>Сайт-визитка или рекламный листок. Адаптивная верстка сайта из готового макета PSD. Установка слайдеров и анимации. Публикация в Интернете, настройка на хостинге </p>
        </div>
        <div class="budjet-txt">
          <h3>Стоимость работ для бюджетного сайта  от 7000р.</h3>
        </div>
      </div>
      <div class="prices-block-standart">
         <div class="standart-head">
           <h2>Стандартный сайт</h2>
          <p>Информационный сайт небольшой компании, или блок. Адаптивная верстка из макета PSD или выбор готовой темы. Разработка фронд-элементов.Натяжка или установка темы на CMS. Установка на хостинг и публикация в Интернете</p>
         </div>
         <div class="standart-txt">
           <h3>Стоимость работ формируется из адаптивной верстки,фронд-энда и бэк-энд разработки. Общая стоимость от 15000р.</h3>
         </div>
      </div>
      <div class="prices-block-pro">
         <div class="pro-head">
           <h2>Корпоративный сайт</h2>
          <p>Каждая уважающая компания или бизнес должен иметь в Интернете сайт. Раньше это было престижно, модно, сейчас это необходимость</p>
         </div>
         <div class="pro-txt">
           <h3>Стоимость работ для корпоративного сайта определяется в зависимости от количество информации и страниц. В среднем цена начинается от 30000р</h3>
         </div>
      </div>
      <div class="prices-block-shop">
        <div class="shop-head">
            <h2>Интернет-магазин</h2>
          <p>Интернет-магазин позволит вам вести бизнес в Интернете, продавать товары и услуги.</p>
         </div>
         <div class="shop-txt">
           <h3>Стоимость работ для интернет-магазина будет зависеть от множества факторов, от разработки стандартного функционала до сложных модулей и платежных систем. Цена работы начинается от 50000р</h3>
         </div>
      </div>
      <div class="prices-block-hour">
          <h3>Стоимость 1 часа эффективного времени при выполнении работ по доработке и правке составляет 700 руб.</h3>
      </div>
    </div>
</div><!-- prices -->
</div><!-- class="foot" -->
<div class="adress" id="adress_id">
  <div class="adress-head">
     <h1>Мои контакты и коротко о себе</h1>
  </div>
  <div class="adress-txt">
   
    <p>У вас есть отличные идеи? Вы хотите, чтобы у вас был отличный сайт, или же хотите иметь интернет-магазин. Может быть вам есть что рассказать миру и вы хотите об этом написать в своем блоге. </p>
    <p>Я готов помочь вам  в этом. Напишите на мой почтовый ящик все свои пожелания или оформите через сайт свой заказ. Можете написать в любых мессенджерах.Либо же просто позвоните мне. Или закажите обратный звонок</p>
     <p>Я - разработчик-фрилансер.  Основные направления моей  деятельности  - сайты, проекты и веб-разработка.  Опыт работы в данном направлении  - 5 лет. Стек технологий, которые я использую – HTML, CSS , JavaScript, MySql, PHP. </p>
     <p>Мои контактные данные e-mail: <span>g16052015@mail.ru</span> phone: <span>8-962-598-58-91</span></p>

  </div>

</div><!-- class="adress" -->
 
	
<?php
/*get_sidebar();*/
get_footer();
