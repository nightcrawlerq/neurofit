<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<ul id="sidebar">
	<!--<li  class="0widget widget_text widget_title" style="display:none;"><h3 class="widget-title">Must Watch</h3>			<div class="textwidget"></div></li>-->
	<li  class="0widget widget_text widget_title"><h3 class="widget-title">Stories</h3>			<div class="textwidget"></div></li>
	<?php
		if($videos = get_post_meta(get_the_ID(),'video', false)){
			foreach($videos as $video){
	?>
		<li class="widget widget_text" <!--style="margin-top: 60px;-->">			 
			<div class="textwidget">
				<a href="http://youtu.be/<?php echo $video ?>" rel="wp-video-lightbox">
					<img src="http://i1.ytimg.com/vi/<?php echo $video ?>/mqdefault.jpg" alt="" width="256" height="130" style=" background: #000; ">
					<div class="play-button">
					<img src="http://clients.edgewebmedia.com/neurofit/wp-content/uploads/2013/11/play-button2.png" />
					</div>
				</a> 
			</div 
		</li>  
 
	<?php
			}
		}
	?> 
	
	<?php
		if($vimeos = get_post_meta(get_the_ID(),'vimeo', false)){
			foreach($vimeos as $vimeo){
	?>
		<li class="widget widget_text">			
			<div class="textwidget">
				<a href="http://vimeo.com/<?php echo $vimeo ?>  rel="wp-video-lightbox" title="">
				<img src="http://64.19.142.12/b.vimeocdn.com/ts/375/610/375610492_295.jpg" alt="" width="256" height="130" style=" background: #000; " />
				<div class="play-button">
				<img src="http://clients.edgewebmedia.com/neurofit/wp-content/uploads/2013/11/play-button2.png" />
				</div>
				</a>
			</div>
		</li>

	<?php
			}
		}
	?>	
	
	<?php
		if($vimeos2 = get_post_meta(get_the_ID(),'vimeo2', false)){
			foreach($vimeos2 as $vimeo2){
	?>
		<li class="widget widget_text">			
			<div class="textwidget">
				<a href="http://vimeo.com/<?php echo $vimeo2 ?>  rel="wp-video-lightbox" title="">
				<img src="http://64.19.142.12/b.vimeocdn.com/ts/258/064/258064861_295.jpg" alt="" width="256" height="130" style=" background: #000; " />
				<div class="play-button">
				 
				<img src="http://clients.edgewebmedia.com/neurofit/wp-content/uploads/2013/11/play-button2.png" /> 
				</div>
				</a>
			</div> 
		</li>

	<?php
			}
		}
	?>	
	<?php
		if($comings = get_post_meta(get_the_ID(),'coming', false)){
			foreach($comings as $coming){
	?>
		<li class="widget widget_text">			
			<div class="textwidget">
				<img src="http://clients.edgewebmedia.com/neurofit/wp-content/uploads/2013/11/coming-soon.png"> 
			</div> 
		</li>

	<?php
			}
		}
	?>
	<!--<li  class="0widget widget_text widget_title"><h3 class="widget-title">Stories</h3>			<div class="textwidget"></div></li>-->
		
		<?php
		
		if ( is_page( '272' ) ) {    
		echo '<img src="http://clients.edgewebmedia.com/neurofit/wp-content/uploads/2013/11/my-magazine.png" style=" margin-top: 20px; "/>';
		} 
		?>
		
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</ul>
<?php endif; ?>

