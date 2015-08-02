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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title><?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>
        <meta name="google-site-verification" content="hZ-KSJwNREIdYBtht6A7XDcflyYH6XR-gSspAOifc7c" />
		<!---<title><?php wp_title( '|', true, 'right' ); ?></title>--->
		
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Exo:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        
		<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63911415-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	
	<body <?php body_class(); ?> >
<div id="pagewrapper">
<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=545959148817658";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	</div>
 
<header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-toggle-custom">
                            <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                                
                
                <a class="navbar-brand" href="<?php echo site_url() ?>">		
                <?php $logosrc = (strstr(site_url(),'/ca') != false)?'logo-ca.png':'logo1.png'; ?>
                <img class="img-responsive" src="http://neurofitcenter.ca/wp-content/uploads/2015/03/logo_03.png" alt="NeuroFitness Centre" />
                </a>
                </div>
 <!--- add this as a id below--->
                            <div class="collapse navbar-collapse navbar-custom-collapse" id="navbar-toggle-custom">
							<?php wp_nav_menu( 
								array(
									'theme_location'  => 'primary',
									 
									'items_wrap'      => '<ul id="%1$s" class="cl-effect-21 nav navbar-nav navbar-right navbar-text %2$s ">%3$s</ul>'
								)
							 ); ?>

						</div>
            <!--<ul class="btn-group navigation-1 nav nav-pills pull-right">
                <ul class="nav navbar-nav pull-right hidden-xs hidden-sm hidden-md">
                    <li class="nav1-border"><a>Call Us: 306-501-5381</a></li>
                    <li class="nav1-border">
                        <a href="#">
                        <?php $flagsrc = 'canada-flag.png'; ?>
                        <img src="<?php echo site_url(). '/wp-content/themes/neurofit/img/'.$flagsrc;  ?>" width="40" height="30" alt="" class="flag-display">
                        </a>
                    </li>
                    <li>
                        <a href="http://neurofitcenter.com/"  style="text-decoration: none;" target="_self" >
                        <img src="<?php bloginfo('template_url')?>/img/us-flag.png" width="40" height="30" alt=""></a>
                    </li>
                    <li>
                        <div class="input-group inpt-search">
                            <input type="text" class="form-control srch_box" placeholder="search">
                            <span class="input-group-addon srch_btn"><span class="glyphicon glyphicon-search"></span></span>
                        </div>
                    </li>
                </ul>-->

    </nav>
</header>
                        
	
	
	
