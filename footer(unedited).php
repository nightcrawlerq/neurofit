		</div><!--row-->
		
		
		</div> <!--container-->
			<div id="footer">
				<div class="container">
					<div class="row">	
						<?php wp_nav_menu( 
							array(
								'theme_location'  => 'footer',
								'container'       => 'div', 
								'container_class' => ' footer-menu col-md-4 ', 
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
							)
						); ?>	
				<div class="legal_and_social_wrapper col-md-4">
					<ul class="brand text-center">
						<li><a href="http://edgewebmedia.com/" target="_blank" ><img src="<?php bloginfo('template_url')?>/img/ewm-logo.png" alt="Edgewebmedia" style=""></a></li>
					</ul>
				</div>
				<div class="legal_and_social_wrapper col-md-4">
				<ul class="social">
					<?php if(!empty($theme_options['top_urls']['fb'])) { ?>
						<li><a href="<?php echo $theme_options['top_urls']['fb'] ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/glyphicons_facebook.png" /></li>
					<?php } ?>
					<?php if(!empty($theme_options['top_urls']['tw'])) { ?>
						<li><a href="<?php echo $theme_options['top_urls']['tw'] ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/glyphicons_twitter.png" /></li>
					<?php } ?>
					<?php if(!empty($theme_options['top_urls']['yt'])) { ?>
						<li><a href="<?php echo $theme_options['top_urls']['yt'] ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/glyphicons_youtube.png" /></li>
					<?php } ?>
					
					<li style="margin-left: 190px;">
					<a href="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'https://www.facebook.com/NeurofitnessRegina';
								}  
								else { 
								echo 'http://www.facebook.com/neurofitness'; 
								} ?>" target="_blank"><img src="<?php bloginfo('template_url')?>/img/face.png" alt="facebook" ></a> 
					<a href="http://www.twitter.com/neurofitness " target="_blank"><img src="<?php bloginfo('template_url')?>/img/tweet.png" alt="twitter" ></a> 
					<a href="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'https://plus.google.com/116073507020902376517';
								}  
								else { 
								echo ''; 
								} ?>" rel="publisher" ><img src="<?php bloginfo('template_url')?>/img/gt.png" alt="google plus" height="22" width="22" style="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'display:inherit;';
								}  
								else { 
								echo 'display:none;'; 
								} ?>" ></a>					
					</li>
				</ul>
				</div>

			</div><!--row-->
		</div> <!--container-->
		<script>
$(function() {
    $("#playlist li").on("click", function() {
        $("#videoarea").attr({
            "src": $(this).attr("movieurl"),
            "poster": "",
            "autoplay": "autoplay" 
        })
    })
    $("#videoarea").attr({
        "src": $("#playlist li").eq(0).attr("movieurl"),
        "poster": $("#playlist li").eq(0).attr("moviesposter")
    })    
})
</script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</div>
	
	<script type="text/javascript" src="http://ca.neurofitcenter.com/wp-content/themes/neurofit/js/jquery.ui.datepicker.min.js"></script>	
	<?php wp_footer() ?>
	
</body>
</html>
