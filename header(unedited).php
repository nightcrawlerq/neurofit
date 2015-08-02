<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="viewport" content="width=device-width">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css" type="text/css">
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?> >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=545959148817658";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	

    <div class="container"> 
		<div class="clearfix">
			<header>
				<div class="row topbar">
					<div class="col-md-12 text-right">
					<!--<a href="#" target="_black"><img src="<?php bloginfo('template_url')?>/img/shareFooter.gif" height="22" width="72" alt="shareFooter" ></a> 
					<a href="#" target="_black"><img src="<?php bloginfo('template_url')?>/img/youtube.gif" alt="youtube" height="22" width="22"></a> -->
					<a href="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'https://www.facebook.com/NeurofitnessRegina';
								}  
								else { 
								echo 'http://www.facebook.com/neurofitness'; 
								} ?>" target="_black"><img src="<?php bloginfo('template_url')?>/img/facebook.png" alt="facebook" height="22" width="22"></a> 
					<a href="http://www.twitter.com/neurofitness " target="_black"><img src="<?php bloginfo('template_url')?>/img/twitter.png" alt="twitter" height="22" width="22"></a> 
					<!--<a href="#" target="_black"><img src="<?php bloginfo('template_url')?>/img/carreau.gif" alt="carreau" height="22" width="22"></a> -->
					<a href="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'https://plus.google.com/116073507020902376517';
								}  
								else { 
								echo ''; 
								} ?>" rel="publisher"><img src="<?php bloginfo('template_url')?>/img/g+logo.png" alt="google plus" height="22" width="22" style="<?php if(strstr(site_url(),'/ca') != false) {
								echo 'display:inherit;';
								}  
								else { 
								echo 'display:none;'; 
								} ?>"></a>
					</div>
				</div>
				<div class="row">
					<div class="logo col-md-3 col-md-3">
						<a href="<?php echo site_url() ?>">
						<!--<img class="main visible-desktop" src="<?php bloginfo('template_url')?>/img/logo1.png" alt="<?php echo bloginfo( 'name' ) ?> logo"/>-->
						<?php $logosrc = (strstr(site_url(),'/ca') != false)?'logo-ca.png':'logo1.png'; ?>
						<img class="main visible-desktop" src="<?php echo site_url(). '/wp-content/themes/neurofit/img/'.$logosrc; ?>"  alt="<?php echo bloginfo( 'name' ) ?> logo"/>
						
						</a>
					</div>

					<div class="col-md-9  col-md-9 navigation-menu">
						<div class="row">
							<div>
						<ul class="btn-group navigation-1 nav nav-pills pull-right">
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Live Chat<span class="caret"></span></a>
								<ul class="dropdown-menu">
									
								</ul>
							</li>
							<li class="dropdown nav1-border"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Call Us<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li>
										<span class="contact-number">US #: 248-436-8045</span>
									</li>
									<li>
										<span class="contact-number">CA #: 306-501-5381</span>
									</li>
								</ul>
							</li>
							
							<li class="dropdown nav1-border">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php $flagsrc = 'canada-flag.png'; ?>
								<img src="<?php echo site_url(). '/wp-content/themes/neurofit/img/'.$flagsrc;  ?>" width="40" height="30" alt="" class="flag-display">
									
									
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
								<li>
										<a href="http://neurofitcenter.com/"  style="text-decoration: none; target="_self" >
										<img src="<?php bloginfo('template_url')?>/img/us-flag.png" width="40" height="30" alt=""> U S A</a>
								</li>
								</ul>
							</li>
							
							
							
							
							<li>
								<div class="input-group inpt-search">
								<input type="text" class="form-control srch_box" placeholder="search">
								<span class="input-group-addon srch_btn"><span class="glyphicon glyphicon-search"></span></span>
							</div>
							</li>
						</ul>
						</div>
						</div>
						<div class="row">

							<?php wp_nav_menu( 
								array(
									'theme_location'  => 'primary',
									'container'       => 'div', 
									'container_class' => 'main-nav pull-right ', 
									'items_wrap'      => '<div class="left-corner"><span>&nbsp;</span></div><ul id="%1$s" class="navigation-2 nav navbar-nav navbar-right   %2$s">%3$s</ul><div class="right-corner"><span>&nbsp;</span></div>'
								)
							 ); ?>

						</div>
					</div>
			</div>
			</header>
		
		</div><!--row-->
	</div>

	<?php get_template_part( 'slider' ); ?>
	

	<div class="container">

<div class="row page-content">
