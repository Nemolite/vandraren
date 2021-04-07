<?php

?>
<div class="main-job" id="main-job">
  <div class="main-job-head">
      <h1>Мои работы</h1>
  </div>
   <div class="main-job-txt">
      <p>В этом разделе собраны некоторые сайты и проекты, которые разработаны мною за последний год.</p>
  </div>
  <div class="main-job-content">
  <a href="<?php echo ot_get_option( 'url_job_site_1' ); ?>" target="_blank">
    <div class="job-block">
      <img src="<?php echo ot_get_option( 'img_upload_1' ); ?>" alt="">
    </div>
	</a>
  <a href="<?php echo ot_get_option( 'url_job_site_2' ); ?>" target="_blank">
    <div class="job-block">
      <img src="<?php echo ot_get_option( 'img_upload_2' ); ?>" alt="">
    </div>
	</a>
  <a href="<?php echo ot_get_option( 'url_job_site_10' ); ?>" target="_blank">
    <div class="job-block">
      <img src="<?php echo ot_get_option( 'img_upload_10' ); ?>" alt="">
    </div>
	</a>   
  </div>
  <div class="main-job-botton">
    <a href="/portfolio/">
      <div class="main-job-btn">
          <h3>Посмотреть еще работы</h3>
      </div>
    </a>  
  </div>
</div><!-- main-job -->