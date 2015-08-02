<?php 

$options = get_option( 'my_theme_options' ); 
$slider_interval = $options['slider_interval'];
if(is_front_page()){
?>
<div class="clearfix slider-bg">
	<div class="container">
<div class="row slider-container">
	<div class="slide-cover"></div>
	<div class="slide-corner-lt"></div>
	<div class="slide-corner-rt"></div>	
	<div class="slider-wrap">
<div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<?php 
		$i = 0;
		$the_slider = new WP_Query(array('post_type' => 'slider' ));
		while ( $the_slider->have_posts() ) : $the_slider->the_post(); 
		?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0)?'active':''; ?>"></li>
		<?php
		$i++;
		 endwhile; ?>
	</ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
	<?php
		$i = 0;
		$the_slider = new WP_Query(array('post_type' => 'slider' ));
		while ( $the_slider->have_posts() ) : $the_slider->the_post(); 
				?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'slider' ); ?>
				<div class="item <?php echo ($i == 0)?'active':'';$i++ ?>"  >
				<?php if(strstr(site_url(),'/ca') != false) { ?>
					<a href="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'http://ca.neurofitcenter.com/schedule-an-appointment/';
								}  
								else { 
								echo 'http://www.schedulicity.com/Scheduling/Default.aspx?business=N5B3S6'; 
								} ?>">
					<img src="<?php echo $image[0] ?>" alt="<?php echo $slider->excerpt ?>"/></a>
					<?php } else { ?>
					<a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=48287">
					<img src="<?php echo $image[0] ?>" alt="<?php echo $slider->excerpt ?>"/></a>
					<?php } ?>
					
					<h3 class="slider-title"><?php echo $slider->post_title ?></h3>
				</div>
				<?php endwhile; ?>
  </div>

  </div>
  </div>
  </div>
</div>
</div>
<?php }else{ ?>
<?php while ( have_posts() ) : the_post();  ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'slider' );
if($image){
 ?> 
 <div class="clearfix page-bg"> 
<div class="container">
	<div class="row slider-container page-slider-container">
		<div class="page-cover"><div class="head-excerpt" style="
		<?php if( $post->post_excerpt ) : echo '';
		else: echo 'display:none;padding:0;';
		endif; ?>"><h1><?php if( $post->post_excerpt ) : the_excerpt();
		else:echo '';
		endif; ?>
		<a href="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'http://ca.neurofitcenter.com/schedule-an-appointment/';
								}  
								else { 
								echo 'http://www.schedulicity.com/Scheduling/Default.aspx?business=N5B3S6'; 
								} ?>" style="<?php if( $post->post_excerpt ) : echo '';
		else: echo 'display:none;padding:0;';
		endif; ?><?php
if(is_page(482)){echo 'display:none;';} 
?>"><img src="http://neurofitcenter.com/wp-content/themes/neurofit/img/schedule.png"/></a></h1></div></div>
			<img src="<?php echo $image[0] ?>" alt="<?php echo $slider->excerpt ?>" />  
	</div>
</div>
</div>
<?php } ?>
<?php endwhile; ?>
<?php } ?>
